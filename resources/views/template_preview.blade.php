

<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Preview</title>

  <link rel="stylesheet" href="{{ url('css/preloader.css') }}">
  <script
        src="https://www.paypal.com/sdk/js?client-id=AZLvhWJ0xCC8u5DDs-xL9DhPBd2FPqiDt7jFfu7F3FsaIf0WkTeL2M3NJ-H-8brhhv7L1RJ1V6L9Hq0w">

    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<style>
  *{
    padding: 0;
    margin: 0;
  }
	html {
    height: -webkit-fill-available;

  }

  #fp-nav ul li a span,
.fp-slidesNav ul li a span {
	background: white;
	width: 8px;
	height: 8px;
	margin: -4px 0 0 -4px;
}

#fp-nav ul li a.active span,
.fp-slidesNav ul li a.active span,
#fp-nav ul li:hover a.active span,
.fp-slidesNav ul li:hover a.active span {
	width: 16px;
	height: 16px;
	margin: -8px 0 0 -8px;
	background: transparent;
	box-sizing: border-box;
	border: 1px solid #24221F;
}

@font-face {
  font-family: "untitled-font-1";
  src:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.eot");
  src:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.eot#iefix") format("embedded-opentype"),
    url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.woff") format("woff"),
    url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.ttf") format("truetype"),
    url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.svg#untitled-font-1") format("svg");
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"]:after,
[class*=" icon-"]:after {
  font-family: "untitled-font-1";
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  speak: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-up-open-big { display: inline-block; }

.icon-up-open-big:after {
  content: "a";
  font-size: 2.5em;
  display: block;
  -webkit-transform: rotateX(180deg);
          transform: rotateX(180deg);
  color: black;
  -webkit-transition: color .3s;
          transition: color .3s;
}

.icon-up-open-big:hover:after {
	color: white;
}

.scroll-icon {
	position: absolute;
 	left: 50%;
  bottom: 30px;
  padding: 0 10px;
  	-webkit-transform: translateX(-50%);
  	    -ms-transform: translateX(-50%);
  	        transform: translateX(-50%);
}



/* HELPER CLASSES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}

.clearfix:after {
  clear: both;
}

.l-left {
	float: left;
}

.l-right {
	float: right;
}

.end {
	margin-top: 30px;
	font-size: 3em;
	font-weight: bold;
	opacity: 0;
	-webkit-transform: translateY(300px);
	    -ms-transform: translateY(300px);
	        transform: translateY(300px);
	-webkit-transition: opacity, -webkit-transform 1s;
	        transition: opacity, transform 1s;
	-webkit-transition-delay: 1s;
	        transition-delay: 1s;
}
#fp-nav {
    position: fixed;
    z-index: 100;
    margin-top: -32px;
    top: 50%;
    opacity: 1;
    -webkit-transform: translate3d(0,0,0);
}
#fp-nav.right {
    right: 17px;
}
#fp-nav.left {
    left: 17px;
}
.fp-slidesNav{
    position: absolute;
    z-index: 4;
    left: 50%;
    opacity: 1;
}
.fp-slidesNav.bottom {
    bottom: 17px;
}
.fp-slidesNav.top {
    top: 17px;
}
#fp-nav ul,
.fp-slidesNav ul {
  margin: 0;
  padding: 0;
}
#fp-nav ul li,
.fp-slidesNav ul li {
    display: block;
    width: 14px;
    height: 13px;
    margin: 7px;
    position:relative;
}
.fp-slidesNav ul li {
    display: inline-block;
}
#fp-nav ul li a,
.fp-slidesNav ul li a {
    display: block;
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
}
#fp-nav ul li a.active span,
.fp-slidesNav ul li a.active span,
#fp-nav ul li:hover a.active span,
.fp-slidesNav ul li:hover a.active span{
    height: 12px;
    width: 12px;
    margin: -6px 0 0 -6px;
    border-radius: 100%;
 }
#fp-nav ul li a span,
.fp-slidesNav ul li a span {
    border-radius: 50%;
    position: absolute;
    z-index: 1;
    height: 4px;
    width: 4px;
    border: 0;
    background: #333;
    left: 50%;
    top: 50%;
    margin: -2px 0 0 -2px;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}
#fp-nav ul li:hover a span,
.fp-slidesNav ul li:hover a span{
    width: 10px;
    height: 10px;
    margin: -5px 0px 0px -5px;
}
#fp-nav ul li .fp-tooltip {
    position: absolute;
    top: -2px;
    color: #fff;
    font-size: 14px;
    font-family: arial, helvetica, sans-serif;
    white-space: nowrap;
    max-width: 220px;
    overflow: hidden;
    display: block;
    opacity: 0;
    width: 0;
}
#fp-nav ul li:hover .fp-tooltip,
#fp-nav.fp-show-active a.active + .fp-tooltip {
    -webkit-transition: opacity 0.2s ease-in;
    transition: opacity 0.2s ease-in;
    width: auto;
    opacity: 1;
}
#fp-nav ul li .fp-tooltip.right {
    right: 20px;
}
#fp-nav ul li .fp-tooltip.left {
    left: 20px;
}

  section {
    overflow: hidden;
    min-height: 100vh !important;
  }

button ,a{
  border-radius: 20px;
  border: none;
  padding: 1rem 2rem;
  color: #fff;
  font-size: 1.45em;
  font-weight: bold;
  margin: 0 15px;
  transition: background 0.5s;
}
button.accept {
  background: #1de9b6;
  border: 1px solid #15d8a7;
  box-shadow: 3px 3px 0px 2px rgba(29, 233, 182, 0.2);
}
button.accept:hover {
  background: #63f0cd;
}
a.cancel {
  background: #ff1744;
  border: 1px solid #fd0031;
  box-shadow: 3px 3px 0px 2px rgba(255, 23, 68, 0.2);
}
a.cancel:hover {
  background: #ff6482;
}
button:hover , a:hover{
  cursor: pointer;
}

.popup {
  position: fixed;
  padding: 50px 100px;
  background: #fff;
  border: 2px solid #ccc;
  border-radius: 20px;
  box-shadow: 5px 5px 0px 2px rgba(0, 0, 0, 0.1);
  font-size: 2rem;
}
.popup.visible {
  transition-property: right;
  transition-duration: 1s;
  right: 1vw;
}
.popup.hidden {
  transition-property: right;
  transition-duration: 1s;
  right: -100vw;
}

.position-br {
  right: -200vw;
  bottom: 1vh;
}
.position-tr {
  right: -200vw;
  top: 1vh;
}
</style>

<div id="preloaderbody" class="preloader-body">
  <div class="preloader">
      <div class="load">
          <hr/><hr/><hr/><hr/>
        </div>
  </div>
</div>


@if (is_null(\App\Models\client_template::where(['user_id' => Auth::user()->id])->first()))
	{{-- <form action="/select_template/{{$id}}" style="margin: 0;padding:0;" method="POST">
		@csrf --}}
<button class="accept" type="submit" style="border-radius: 20px;position: absolute;display: fixed;z-index: 99;margin:20px;padding:10px;" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Select this template !</button>
{{-- </form> --}}
@else
<a class="cancel" href="{{ route('my_template') }}" style="border-radius: 20px;position: absolute;display: fixed;z-index: 99;margin:20px;padding:10px;text-decoration:none;" id="btn" >You're Template !</a>
@endif


<div id="fullpage">
	@foreach ($template as $item)
	{!! $item->section_code !!}
@endforeach

  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pay This Template</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="paypal-button-container"></div>
        </div>

      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
	$(document).ready(function() {
		$('section').addClass('vertical-scrolling');

var $header_top = $('.header-top');
var $nav = $('nav');



// toggle menu
$header_top.find('a').on('click', function() {
  $(this).parent().toggleClass('open-menu');
});

$('#fullpage').fullpage({

  sectionSelector: '.vertical-scrolling',

  navigation: true,
  slidesNavigation: true,
  controlArrows: true,

  menu: '#menu',

 });
$('.fp-tableCell').css("display", "");
});

</script>
<script>
  $( document ).ready(function() {
      setTimeout(function () {
$('#preloaderbody').fadeOut();
}, 4000  );
});
</script>



<script>
	var head = document.getElementsByTagName('HEAD')[0];
  var x = document.getElementsByTagName('section');
  for (let i = 0; i < x.length; i++) {
    const element = x[i];


  }



	var css = @json($data_css);
	var js = @json($data_js);
	var js_url = @json($data_url_js);
	var css_url = @json($data_url_css);
	var id = @json($id);

	console.log(css[0]);
	var host = @json($host);

	for (let x = 0; x < js_url.length; x++) {

		var script = document.createElement('script');
		script.type = 'text/javascript';
	   script.src = js_url[x];

		   document.body.appendChild(script);

 }

 for (let x = 0; x < css_url.length; x++) {

	var link = document.createElement('link');
   link.rel = 'stylesheet';
   link.type = 'text/css';
   link.href =css_url[x];

	   document.body.appendChild(link);

}


	for (let x = 0; x < css.length; x++) {

		var link = document.createElement('link');
   link.rel = 'stylesheet';
   link.type = 'text/css';
   link.href = host+"/resource/"+id+"/css/"+css[x];
   head.appendChild(link);

	}

    for (let x = 0; x < js.length; x++) {

        var script = document.createElement('script');
        script.type = 'text/javascript';
       script.src = host+"/resource/"+id+"/js/"+js[x];;

           document.body.appendChild(script);

    }


   var meta = document.createElement('meta');
   meta.name = "csrf-token";
   meta.content = "{{ csrf_token() }}";
   head.appendChild(meta);
</script>






<script>
 paypal.Buttons({

createOrder: function(data, actions) {


    return actions.order.create({
        "item":[
            {
                "name":"xdf",
            }
        ],
        "purchase_units": [
            {
            "reference_id":id,
            "amount": {
           
            "currency_code": "USD",
            "value": @json($base_template->price),

            }

        }
    
    ],
       

    });

},

onApprove: function(data, actions) {
    return actions.order.capture().then(function(details) {

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
        url: '/select_template/'+id,
        type: 'POST',
        dataType: "JSON",
        data: {},
        processData: false,
        contentType: false,
        success: function (data, status)
        {
            window.location.href = "/my_template";


        },
        error: function (xhr, desc, err)
        {
            window.location.href = "/my_template";

        }



    });



        
    });
    window.location.href = "/my_template";

}

}).render('#paypal-button-container');

</script>

</body>
</html>





