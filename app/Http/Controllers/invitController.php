<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Response;
use Carbon\Carbon;
use File;
use App\Mail\invitationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// import Models to Controller
use App\Models\sub_template;
use App\Models\User;
use App\Models\rsvp;
use App\Models\template;
use App\Models\css_data;
use App\Models\js_data;
use App\Models\client_template;
use App\Models\sub_template_client;
use App\Models\category;
use App\Models\bookmarks;
use App\Models\like_template;

class invitController extends Controller
{
    // this is the start page
    public function index()
    {
        $template = template::paginate(50);
        $filter = null;
        return view('dashboard', ['template'=>$template,'filter'=>$filter]);
    }

    // details of a template
    public function details(Request $request, $id)
    {
        // takes a specific template
        // takes all its resources such as css and js
        $base_template = template::where('id',$id)->first();
        $template = sub_template::where('template_id', $id)->get();

        $css = [];
        $js = [];
        $js_url  = [];
        $css_url  = [];
        if (!is_null($data_css = css_data::where('template_id', $id)->where('type', 'url')->first())) {
            $css_url = explode(',', $data_css->file);
        }
        if (!is_null($data_js = js_data::where('template_id', $id)->where('type', 'url')->first())) {
            $js_url = explode(',', $data_js->file);
        }

        if (!is_null($data_css = css_data::where('template_id', $id)->where('type', 'file')->first())) {
            $css = explode(',', $data_css->file);
        }

        if (!is_null($data_js = js_data::where('template_id', $id)->where('type', 'file')->first())) {
            $js = explode(',', $data_js->file);
        }


        return view('template_preview', ['base_template'=>$base_template,'template'=>$template,'data_css'=>$css,'data_js'=>$js,'data_url_js'=>$js_url,'data_url_css'=>$css_url,'id'=>$id,'host'=>$request->getSchemeAndHttpHost()]);
    }


    // each template consists of several sub templates (sections)
    // this page is used to retrieve one of the sub templates with resources from the main template
    public function edit_sub_template(Request $request, $id)
    {
        $css = [];
        $js = [];
        $js_url  = [];
        $css_url  = [];
        $sub = sub_template_client::where('id', $id)->first();

        if ($sub->user_id == Auth::id()) {

            if (!is_null($data_css = css_data::where('template_id', $sub->resource_id)->where('type', 'url')->first())) {
                $css_url = explode(',', $data_css->file);
            }
            if (!is_null($data_js = js_data::where('template_id', $sub->resource_id)->where('type', 'url')->first())) {
                $js_url = explode(',', $data_js->file);
            }

            if (!is_null($data_css = css_data::where('template_id', $sub->resource_id)->first())) {
                $css = explode(',', $data_css->file);
            }
            if (!is_null($data_js = js_data::where('template_id', $sub->resource_id)->first())) {
                $js = explode(',', $data_js->file);
            }

            return view("edit_sub_template", ['sub'=>$sub,'css_data'=>$css,'data_url_css'=>$css_url,'data_url_js'=>$js_url,'js_data'=>$js,'host'=>$request->getSchemeAndHttpHost()]);
        }
        else {
            return "edit not allowed";
        }

    }

    // this is the view given to the user's template
    public function my_template(Request $request)
    {
        //given view template not found if template has been deleted or null
        if (is_null(client_template::where('user_id', Auth::id())->first())) {
            return view('template_not_found');
        } else {
            $css = [];
            $js = [];
            $sub_temp = sub_template_client::where('user_id', Auth::id())->get();

            $sub = client_template::where('user_id', Auth::id())->first();

            if (!is_null($data_css = css_data::where('template_id', $sub->template_id)->first())) {
                $css = explode(',', $data_css->file);
            }
            if (!is_null($data_js = js_data::where('template_id', $sub->template_id)->first())) {
                $js = explode(',', $data_js->file);
            }
            $hashed = Hash::make(Auth::id(), [
                'rounds' => 12,
            ]);

            return view('edit_template', ['template'=>$sub_temp,'data_css'=>$css,'id'=>$sub->template_id,'data_js'=>$js,'hash'=>$hashed,'host'=>$request->getSchemeAndHttpHost()]);
        }
    }


    // when the user clicks select template, the system will look for which template he chose then make it a client_template
    // but all resources are still the same as the main template, only the sub templates can be changed
    public function select_template(Request $request, $id)
    {
        $base = sub_template::where('template_id', $id)->get();
        if (is_null(client_template::where('user_id', Auth::id())->first())) {
            client_template::create([
                'user_id'=>Auth::id(),
                'template_id'=>$id,
            ]);
        }

        if (is_null(sub_template_client::where('user_id', Auth::id())->first())) {
            foreach ($base as $key => $item) {
                sub_template_client::create([
                    'resource_id'=>$id,
                    'user_id'=>Auth::id(),
                    'section_code'=>$item->section_code
                ]);
            }
        }

        return redirect('my_template')->with('success', 'template has been selected');
    }


    // when the user presses the save button, he will update the existing client sub template
    public function update_design(Request $request)
    {
        sub_template_client::where('id', $request->id)->update(['section_code'=> $request->sc]);
        return response()->json(['success'=>'Saved']);
    }


    // now this part is a little bit worrying either because my decoding method which loops then matches the number to make this as (rehasing)
    // or maybe if there is another method that is safer for rehashing this part, just replace it
    public function invitation(Request $request)
    {
        $x = 0;
        $w = true;
        while ($w) {
            if (Hash::check($x, $request->x)) {
                $id = $x;
                $w = false;
                break;
            }

            $x += 1;
        }

        if (is_null(client_template::where('user_id', $id)->first())) {
            return view('template_not_exists');
        } else {
            $css = [];
            $js = [];
            $data = client_template::where('user_id', $id)->first();

            $componen = sub_template_client::where('user_id', $id)->get();

            $js_url  = [];
            $css_url  = [];
            if (!is_null($data_css = css_data::where('template_id', $data->template_id)->where('type', 'url')->first())) {
                $css_url = explode(',', $data_css->file);
            }
            if (!is_null($data_js = js_data::where('template_id', $data->template_id)->where('type', 'url')->first())) {
                $js_url = explode(',', $data_js->file);
            }

            if (!is_null($data_css =css_data::where('template_id', $data->template_id)->first())) {
                $css = explode(',', $data_css->file);
            }
            if (!is_null($data_js = js_data::where('template_id', $data->template_id)->first())) {
                $js = explode(',', $data_js->file);
            }
            return view('invitation', ["template"=>$componen,'id_rsvp'=>$data->id,'data_css'=>$css,'data_js'=>$js,'data_url_css'=>$css_url,'data_url_js'=>$js_url,'id'=>$data->template_id,'host'=>$request->getSchemeAndHttpHost()]);
        }
    }

    // this section to create a new sub_template
    public function new_layer(Request $request)
    {
        $resource = client_template::where('user_id', Auth::id())->first();
        sub_template_client::create([
            'user_id'=>Auth::id(),
            'resource_id'=>$resource->template_id,
            'section_code'=>$request->sc

        ]);
        return response()->json(['success'=>'New layer has been created']);
    }


    public function user_list()
    {
        $user = User::all();
        return view('user_list', ['user'=>$user]);
    }

    //this function is used to publish a new template (admin)
    // where the code section is passed as sub_template and other sections like author , title and everything about the template (metadata) are sent to template
    // other sections like css , js have their own db
    public function add_template(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'section'=>'required',
            'category'=>'required',
            'price'=>'required',
            'thumb'=>'file|mimes:jpg,jpeg,png',

            ]);

        if (!is_null($request->thumb)) {
            $thumb = $request->file('thumb');
            $thumbname = time()."_".$thumb->getClientOriginalName();


            $thumb->move(public_path().'/thumb'.'/', $thumbname);
            $res = template::create([
                'title'=>$request->title,
                'price'=>$request->price,
                'author'=>$request->author,
                'description'=>$request->description,
                'category'=>$request->category,
                'premium'=>$request->premium ? 1 : 0,
                'thumb'=>$thumbname,

               ]);
        } else {
            $res = template::create([
                    'title'=>$request->title,
                    'price'=>$request->price,
                    'author'=>$request->author,
                    'description'=>$request->description,
                    'category'=>$request->category,
                    'premium'=>$request->premium ? 1 : 0,

                   ]);
        }


        $name_original_media = [];
        $name_media = [];
        if ($request->hasfile('media')) {
            foreach ($request->file('media') as $file) {
                $path = 'media';
                $name_original_media[] = $file->getClientOriginalName();
                $name = time()."_".$file->getClientOriginalName();
                $name_media[] = $name;
                $file->move($path, $name);
            }
        }



        foreach ($request->section as $key => $value) {
            foreach ($name_original_media as $num => $media) {
                $value = str_replace($media, $request->getSchemeAndHttpHost().'/'.'media/'.$name_media[$num], $value);
            }

            sub_template::create([
                'template_id'=>$res->id,
                'sort_section'=>$key+1,
                'section_code'=>$value
            ]);
        }

        File::makeDirectory(public_path().'/resource'.'/'.$res->id.'/css', 0777, true);
        File::makeDirectory(public_path().'/resource'.'/'.$res->id.'/js', 0777, true);


        if ($request->hasfile('attachment')) {
            $path = 'resource'.'/'.$res->id.'/css';
            foreach ($request->file('attachment') as $file) {
                $name = $file->getClientOriginalName();


                $file->move($path, $name);

                $data[] = $name;
            }
            css_data::create([
                'template_id'=>$res->id,
                'type'=>'file',
                'file'=>join(",", $data)
                ]);
        }

        if ($request->hasfile('jsfile')) {
            $path2 = 'resource'.'/'.$res->id.'/js';
            foreach ($request->file('jsfile') as $file) {
                $name = $file->getClientOriginalName();


                $file->move($path2, $name);

                $data2[] = $name;
            }
            js_data::create([
                    'template_id'=>$res->id,
                    'type'=>'file',
                    'file'=>join(",", $data2)
                ]);
        }

        if (!is_null($request->css_url)) {
            css_data::create([
                    'template_id'=>$res->id,
                    'type'=>'url',
                    'file'=>$request->css_url
                ]);
        }


        if (!is_null($request->js_url)) {
            js_data::create([
                    'template_id'=>$res->id,
                    'type'=>'url',
                    'file'=>$request->js_url
                ]);
        }
        return redirect()->back()->with('success', 'template has been created');
    }

    // This is the part where someone responds to the template that has been created
    public function add_rsvp(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'count'=>'required',
            'respon'=>'required',
            'attend'=>'required'
        ]);

        rsvp::create([
            'name'=>$request->name,
            'count'=>$request->count,
            'message'=>$request->desc,
            'type'=>$request->type,
            'respon'=>$request->respon,
            'attend'=>$request->attend ? 1 : 0,
            'date'=>Carbon::now()->format('Y-m-d')
        ]);

        return redirect()->back()->with('success', 'rsvp has been added');
    }

    public function delete_template(Request $request)
    {
        client_template::where('user_id', Auth::id())->delete();
        sub_template_client::where('user_id', Auth::id())->delete();

        return redirect('/')->with('template_has been deleted');
    }

    // this page where you can see who has commented and ordered rsvp
    public function responden(Request $request)
    {
        $solve = [];
        $dat = [];
        $z = client_template::where('user_id', Auth::id())->first();
        $data = rsvp::where('respon', $z->id)->get();
        foreach ($data as $key => $v) {
            if ($v->attend == 1) {
                $solve[] = $v->count;
            } else {
                $solve[] =0 -  $v->count;
            }
            $dat[] = $v->date;
        }
        return view('responden', ['respon'=>$data,'data'=>$solve,'date'=>$dat]);
    }

    // add music to your template ?
    public function add_music($id)
    {
        return view('add_music', ['id'=>$id]);
    }
    public function delete_section(Request $request)
    {
        sub_template_client::where('id', $request->id)->delete();
        return response()->json(['success'=>'section has been deleted']);
    }

    // This template is where all categories are collected and ready to be clicked
    public function category(Request $request)
    {
        $category = category::all();

        $bg = ['bg-blue-400','bg-yellow-500','bg-purple-500','bg-indigo-400','bg-blue-400','bg-green-500','bg-red-500'];

        return view('category', ['category'=>$category,'bg'=>$bg]);
    }
    public function category_filter(Request $request, $id)
    {
        $category = template::where('category', $id)->get();
        return view('dashboard', ['template'=>$category,'filter'=>$id]);
    }


    // from this -
    // insert music
    public function in_music(Request $request)
    {
        $temp = client_template::where('user_id', Auth::id())->first();
        $temp->music = $request->music;
        $temp->save();
        return response()->json(['success'=>'add music successfully']);
    }
// add a bookmarks template for user
    public function bookmarks(Request $request)
    {
        $template = bookmarks::where('user_id', Auth::id())->get();
        return view('bookmarks', ['template'=>$template]);
    }
// add category (admin)
    public function store_category(Request $request)
    {
        $request->validate([
            'category'=>'required',
            'description'=>'required',

        ]);
        if (is_null($request->thumb)) {
            category::create([
                'category'=>$request->category,
                'slug'=>Str::slug($request->category, '_'),
                'description'=>$request->description,
                ]);
        } else {
            $thumb = $request->file('thumb');
            $thumbname = time()."_".$thumb->getClientOriginalName();


            $thumb->move(public_path().'/thumb_category'.'/', $thumbname);

            category::create([
                'category'=>$request->category,
                'description'=>$request->description,
                'slug'=>Str::slug($request->category, '_'),
                'thumb'=>$thumbname

                ]);
        }
        return redirect()->back()->with('success', 'category has been created');
    }
//post add bookmarks
    public function add_bookmarks(Request $request, $id)
    {
        bookmarks::create([
                'user_id'=>Auth::id(),
                'template_id'=>$id
            ]);
        return redirect()->back()->with('success', 'added to your bookmarks !');
    }

    // like template
    public function like_template(Request $request, $id)
    {
        if ($like_temp = like_template::where('user_id', Auth::id())->where('template_id', $id)->exists()) {
            like_template::where('user_id', Auth::id())->where('template_id', $id)->delete();
            $tp = template::where('id', $id)->first();
            $tp->rate -= 1;
            $tp->save();
            return redirect()->back()->with('success', 'delete love :(');
        } else {
            like_template::create([
                'user_id'=>Auth::id(),
                'template_id'=>$id
            ]);
            $tp = template::where('id', $id)->first();
            $tp->rate += 1;
            $tp->save();
            return redirect()->back()->with('success', 'loved !');
        }
    }

    public function delete_bookmarks(Request $request, $id)
    {
        bookmarks::where('id', $id)->delete();
        return redirect()->back()->with('success', 'bookmarks deleted !');
    }

    public function send_email(Request $request)
    {
        return view('send_mail');
    }

    public function send_bulk_email(Request $request)
    {

        // dd($request->mail);
        foreach ($request->mail as $key => $value) {
            Mail::to($value)->send(new invitationMail());
        }

        return redirect()->route('send_email')->with(['success'=> 'email has been send !']);
    }

    public function download_format(Request $request)
    {
    $file= public_path(). "/format.html";
    $headers = array('Content-Type: text/html',);

    return Response::download($file, 'format.html', $headers);

    }

    // to this you already know, no need to explain
}
