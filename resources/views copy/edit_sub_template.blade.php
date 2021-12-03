<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Sub</title>
    <link rel="stylesheet" href="https:://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('css/preloader.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <style>
        html,
        body {
            height: 100%;
            padding: 0px;
            margin: 0px;
            overflow: hidden;
        }

        #stackhive-placement {
            position: fixed;
            top: 0px;
            width: 100%;
            background-color: white;
            height: 50px;
        }

        .navbar {
            height: 55px;
            background-color: rgba(254, 254, 254, 0.95);
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.13);
            border: none;
        }

        .navbar-brand {
            padding-top: 0px;
            padding-bottom: 0px;
            height: 35px;
            margin-top: 8px;
            position: relative;
            left: 10px;
        }

        .navbar-brand>img {
            height: 100%;
        }

        a.btn,
        a.btn:hover.a.btn:active;

            {
            outline: none;
        }

        .navbar .navbar-nav>li>a {
            /* border-left:solid 1px #d8d8d8; */
            color: #3d3d3d;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 18px;
        }

        .navbar .navbar-nav>li:last-child>a {
            /* border-right:solid 1px #d8d8d8; */
        }

        .navbar .navbar-nav>li>a.stackhive-btn {
            border: none;
            background-color: rgb(214, 3, 76);
            color: white;
            /* padding: 8px; */
            /* font-size: 15px; */
            /* margin-top: 8px; */
            padding-left: 20px;
            padding-right: 20px;
        }

        .navbar .navbar-nav>li>a.stackhive-btn i {
            transition: .3s all;
            font-size: 15px;
            margin-left: 2px;
        }

        .navbar .navbar-nav>li>a.stackhive-btn:hover i {
            transform: translateX(5px);
        }

        .navbar .navbar-nav>li>a.github-btn {
            border: none;
            background-color: rgb(18, 56, 79);
            color: white;
            /* padding: 8px; */
            /* font-size: 15px; */
            /* margin-top: 8px; */
            padding-left: 20px;
            padding-right: 20px;
        }

        .navbar .navbar-nav>li>a.github-btn i {
            transition: .3s all;
            font-size: 15px;
            margin-left: 2px;
        }

        .navbar .navbar-nav>li>a.github-btn:hover i {
            font-size: 20px;
        }

        .navbar .navbar-nav {
            display: inline-block;
            float: none;
        }

        .navbar .navbar-collapse {
            text-align: center;
        }

        #dragitemslist h3 {
            /* color: rgb(255, 255, 255); */
            /* text-shadow: 0px 1px 1px black; */
        }

        #dragitemslist+div {
            margin-top: 220px;
            border-top: 5px solid rgb(0, 187, 255);
        }

        #dragitemslistcontainer {
            list-style: none;
            padding: 0px;
        }

        #dragitemslistcontainer>li {
            display: inline-block;
            margin-right: 2px;
            padding: 10px 15px;
            cursor: move;
            color: white;
            border: 1px solid;
            width: 120px;
            color: rgb(255, 255, 255);
            background-color: rgb(18, 56, 79);
            text-shadow: 0px 1px 1px black;
        }

        #dragitemslistcontainer>li i {
            font-size: 40px;
            margin-bottom: 10px;
            /* color: rgb(0, 187, 255); */
        }

        #dragitemslistcontainer>li p {
            margin: 0px;
        }

        #clientframe {
            height: 100%;
            width: 100%;
        }

        #clientframe-container {
            height: -webkit-calc(100% - 220px);
            height: calc(100% - 220px);
            height: -moz-calc(100% - 220px);
            height: -ms-calc(100% - 220px);
            height: -o-calc(100% - 220px);
            width: 100%;
        }

        .modalnya {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;

            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            /* Sub Menu */
        }

        ul li a {
            display: block;
            background: #ebebeb;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            -webkit-transition: 0.2s linear;
            -moz-transition: 0.2s linear;
            -ms-transition: 0.2s linear;
            -o-transition: 0.2s linear;
            transition: 0.2s linear;
        }

        ul li a:hover {
            background: #f8f8f8;
            color: #515151;
        }

        ul li a .fa {
            width: 16px;
            text-align: center;
            margin-right: 5px;
            float: right;
        }

        ul ul {
            background-color: #ebebeb;
        }

        ul li ul li a {
            background: #f8f8f8;
            border-left: 4px solid transparent;
            padding: 10px 20px;
        }

        ul li ul li a:hover {
            background: #ebebeb;
            border-left: 4px solid #3498db;
        }

    </style>

    <div id="preloaderbody" class="preloader-body">
        <div class="preloader">
            <div class="load">
                <hr />
                <hr />
                <hr />
                <hr />
            </div>
        </div>
    </div>


    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">SideWork</div>
            <div class="list-group list-group-flush">
                <div class="list-group-item">

                    <center>
                        <input type="color" id="colorpicker" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$"
                            value="#bada55">
                        <input type="hidden" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55"
                            id="hexcolor">
                    </center>
                    </center>


                    <br>
                    <center>
                        <button onclick="changecolor()" class="btn btn-info">Change</button>
                        <h1>or</h1>
                    </center>
                    Change with image or gif
                    <input id="urlim" type="text" class="form-control" placeholder="masukkan url image">
                    <br>
                    <center>
                        <button onclick="changeurl()" class="btn btn-info">Change</button>
                    </center>

                </div>

                <div id="dragitemslist">
                    <center>


                        <h3>Element List</h3>
                        <div>
                            <li style="list-style: none;" class='sub-menu'><a
                                    style="cursor:pointer; text-decoration: none;color:black;">Click this<div
                                        class='fa fa-caret-down right'></div></a>
                                <ul id="dragitemslistcontainer">
                                    <li draggable="true" data-insert-html="<h1>Header goes here</h1>">
                                        <p>H1</p>
                                    </li>
                                    <li draggable="true" data-insert-html="<h2>Header goes here</h2>">
                                        <p>H2</p>
                                    </li>
                                    <li draggable="true" data-insert-html="<h3>Header goes here</h3>">
                                        <p>H3</p>
                                    </li>
                                    <li draggable="true" data-insert-html="<h4>Header goes here</h4>">
                                        <p>H4</p>
                                    </li>
                                    <li draggable="true" data-insert-html="<h5>Header goes here</h5>">
                                        <p>H5</p>
                                    </li>
                                    <li draggable="true" data-insert-html="<h6>Header goes here</h6>">
                                        <p>H6</p>
                                    </li>

                                    {{-- <li draggable="true" data-insert-html="<div class='container' style='background:white;height:200px;'>Div here</div>">
                                        <p>Div</p>
                                    </li> --}}

                                    <hr>

                                    <li draggable="true"
                                        data-insert-html="<img style='width:100%;height:100%;' src='https://i.pinimg.com/originals/12/5b/b4/125bb454e6321d6c13e238c8fb0b6efb.png'>">
                                        <p>Img</p>
                                    </li>
                                    <li>
                                        <center>Create Video Element</center>
                                        <input class="form-control m-1" type="text" id="add_vid" style="width: 100%"
                                            placeholder="add video url here (src from YT)">
                                        <input class="form-control m-1" type="text" id="width_vid" style="width: 100%"
                                            placeholder="add Height of video iframe">
                                        <input class="form-control m-1" type="text" id="height_vid" style="width: 100%"
                                            placeholder="add Width of video iframe">
                                        <button class="btn btn-outline-info m-1" type="button" onclick="setVideo()">Set
                                            Video</button>
                                    </li>
                                    <li id="vid" style="display:none;" draggable="true" data-insert-html=''>
                                        <p>Video</p>
                                    </li>

                                    {{-- <li draggable="true" data-insert-html="<img src='http://blogs-images.forbes.com/anthonykosner/files/2014/06/us-browser-share-adobe-index-2014.jpg'>"><i class="fa fa-bar-chart"></i><p>Chart Image</p></li>
                    <li draggable="true" data-insert-html='<div class="well login-box"> <form action=""> <legend>Login</legend> <div class="form-group"> <label for="username-email">E-mail or Username</label> <input value="" id="username-email" placeholder="E-mail or Username" type="text" class="form-control"/> </div><div class="form-group"> <label for="password">Password</label> <input id="password" value="" placeholder="Password" type="text" class="form-control"/> </div><div class="form-group text-center"> <button class="btn btn-danger btn-cancel-action">Cancel</button> <input type="submit" class="btn btn-success btn-login-submit" value="Login"/> </div></form> </div>'><i class="fa fa-sign-in"></i><p>Login Form</p></li> --}}
                                </ul>
                            </li>


                        </div>
                    </center>
                </div>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav style="z-index: 200;" class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle"><i class="fas fa-expand"></i></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item">

                                <input type="hidden" id="input">

                                <button style="display: none;margin:2px;" id="btn" class="btn btn-success">Change
                                    !</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" onclick="delete_section({{ $sub->id }})"
                                    class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete Section</button>

                                <a href="/my_template" class="btn btn-primary"> <i class="fas fa-arrow-left"></i>
                                </a>

                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"> <i class="fas fa-info"></i></button>
                                <button onclick="post();" class="btn btn-info"> <i class="far fa-save"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div id="main" style="width: 100%;height: 100%;">

                <div id="clientframe-container">
                    <iframe id="clientframe" scrolling="no" style="position: relative; height: 100vh; width: 100%;"
                        srcdoc='{{ "<!DOCTYPE html><html><head><title></title></head> <link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'><body>" . $sub->section_code . "<script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script><script>AOS.init();</script></body></html>" }}'
                        frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div style="" class="modal-dialog">
            <div style="width: 80%" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Guides</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Component template can change ? text , img , video , background , gif</li>
                        <li>Just drag the drag componen to your template</li>
                        <li>for real preview click button full preview</li>
                        <li>add new layer for add new layer</li>
                        <li>One click for see properties of object</li>

                        <li>Double click for see animation of object</li>
                        <li>(bug) if cant drag item and click properties just hard refresh (CTRL + SHIFT + R) </li>

                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>

                </div>
            </div>
        </div>
    </div>



    <button style="display: none;" id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modalnya">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <label for="inner_font_custom">Change Inner HTML</label>
            <input type="text" name="inner_font" id="inner_font_custom">
            <label for="font_size_custom">Change Size This Font</label>
            <input type="number" name="font_size" id="font_size_custom">
            <label for="font_color_custom">Change Custom Color</label>
            <center>
                <input style="margin:5px; " type="color" name="font_color" id="font_color_custom">
            </center>
            <br>
            <br>
            <select style="margin-bottom: 10px;" class="form-select" name="font_weight_custom" id="font_weight_custom"
                aria-label="Default select example">
                <option selected>select Weight font</option>
                <option value="bold">Bold</option>

            </select>
            <br>

            <button id="button_change_font" class="btn btn-success">submit ! </button>
        </div>

    </div>

    <div id="myModalElement" class="modalnya">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div
                style="width: 100%;margin:10px auto;display:flex;flex-wrap:wrap;flex-direction: column;justify-content: center;">
                <label for="src_element">Source</label>
                <input class="form-control" type="text" name="src_element" id="src_element">
                <label for="width_element">Width</label>
                <input class="form-control" type="text" name="width_element" id="width_element">
                <label for="height_element">Height</label>
                <input class="form-control" type="text" name="height_element" id="height_element">
                <label for="margin_element">Margin </label>
                <input class="form-control" type="text" name="margin_element" id="margin_element"
                    placeholder="fill with format : t r b l dont forget with px">
                <label for="border_radius_element">Border radius</label>
                <input class="form-control" type="text" name="border_radius_element" id="border_radius_element">
            </div>
            <br>
            <button id="button_change_el" class="btn btn-success">Submit !</button>

        </div>

    </div>

    <div id="myModalAnimation" class="modalnya" style="opacity: 0.8;">

        <!-- Modal content -->
        <div class="modal-content">
            <select style="margin-bottom: 10px;" class="form-select" name="animation_component" id="animation_component"
                aria-label="Default select example">
                <option selected>select Animation</option>
                <option value="fade-up">fade-up</option>
                <option value="fade-down">fade-down</option>
                <option value="fade-right">fade-right</option>
                <option value="fade-left">fade-left</option>
                <option value="fade-up-right">fade-up-right</option>
                <option value="fade-up-left">fade-up-left</option>
                <option value="fade-down-right">fade-down-right</option>
                <option value="fade-down-left">fade-down-left</option>
                <option value="flip-right">flip-right</option>
                <option value="flip-left">flip-left</option>
                <option value="flip-up">flip-up</option>
                <option value="flip-down">flip-down</option>

                <option value="zoom-in">zoom-in</option>
                <option value="zoom-in-up">zoom-in-up</option>

                <option value="zoom-in-left">zoom-in-left</option>
                <option value="zoom-in-down">zoom-in-down</option>
                <option value="zoom-in-right">zoom-in-right</option>



                <option value="zoom-out">zoom-out</option>
                <option value="zoom-out-up">zoom-out-up</option>

                <option value="zoom-out-left">zoom-out-left</option>
                <option value="zoom-out-down">zoom-out-down</option>
                <option value="zoom-out-right">zoom-out-right</option>


            </select>
            <br>
            <button id="button_change_animation" class="btn btn-outline-success">Submit !</button>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function() {
            $(this).parent(".sub-menu").children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
        });
    </script>
    <!-- Core theme JS-->
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/dnd.js') }}"></script>

    <script>
        $('#colorpicker').on('input', function() {
            $('#hexcolor').val(this.value);
        });
        $('#hexcolor').on('input', function() {
            $('#colorpicker').val(this.value);
        });

        function changecolor() {
            var color = $('#colorpicker').val();
            console.log(color);
            var comp = $("#clientframe").contents().find("section");
            comp.removeAttr("style");
            comp.css('background', color);
        }

        function setVideo() {
            // console.log('ini data'+);
            var url_yt = $('#add_vid').val().split('/');
            var last_url = url_yt[url_yt.length - 1];
            console.log('ini akhirnya' + last_url);
            $('#vid').attr('data-insert-html',
                '<iframe width="100%" height="100%" style="margin:auto;display:block;" src="https://www.youtube.com/embed/' +
                last_url +
                '" frameborder="0" gesture="media" allow="autoplay; encrypted-media" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            );
            document.getElementById('vid').style.display = 'inline-block';


        }

        function changeurl() {
            var urlim = $('#urlim').val();

            var comp = $("#clientframe").contents().find("section");
            comp.removeAttr("style");
            comp.css('background', "url(" + urlim + ")");
            comp.css('background-repeat', "no-repeat");
            comp.css('background-position', "center");
            comp.css('background-size', "cover");
            comp.css('width', "100%");
            comp.css('height', "100vh");

        }
    </script>



    <script>
        var id_s = @json($sub->id);

        var head_html = document.getElementsByTagName('HEAD')[0];
        var meta = document.createElement('meta');
        meta.name = "csrf-token";
        meta.content = "{{ csrf_token() }}";
        head_html.appendChild(meta);

        function post() {

            var aos = document.getElementById('clientframe').contentWindow.document.querySelectorAll('.aos-init');
            console.log(aos);
            [].forEach.call(aos, function(el) {
                el.classList.remove("aos-init");
                el.classList.remove("aos-animate");
            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/update_design",
                method: 'POST',
                data: {
                    id: id_s,
                    sc: $("#clientframe").contents().find("section").prop('outerHTML'),
                },
                success: function(result) {

                    swal({
                        title: "Saved!",
                        text: "Your moment has been saved",
                        icon: "success",
                        button: "Aww yiss!",
                    });
                    location.reload(true);

                }
            });

        }
    </script>

    <script>
        function delete_section(id_section) {

            swal({
                    title: "Are you sure?",
                    text: "Delete this section will erase your moment",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {












                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "/delete_section",
                            method: 'POST',
                            data: {
                                id: id_section,

                            },
                            success: function(result) {

                                window.location.href = "{{ URL::to('my_template') }}";

                            }
                        });


                        swal("Poof! Your moment deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your moment save");
                    }
                });

        }
    </script>


    <script type="text/javascript">
        function addLink() {
            var css_data = @json($css_data);
            var js_data = @json($js_data);
            var id = @json($sub->resource_id);
            var css_url = @json($data_url_css);
            var js_url = @json($data_url_js);

            var host = @json($host);





            let head = $("#clientframe").contents().find("head");

            let bodyframe = $("#clientframe").contents().find("body");




            for (let x = 0; x < css_data.length; x++) {

                var data = host + "/resource/" + id + "/css/" + css_data[x];
                $(head).append("<link rel='stylesheet' href='" + data + "' type='text/css' />");

            }
            for (let x = 0; x < css_url.length; x++) {
                var data = css_url[x];
                $(head).append("<link rel='stylesheet' href='" + data + "' type='text/css' />");

            }


            // for (let x = 0; x < js_url.length; x++) {
            //          $(bodyframe).append('<scr' + 'ipt type="text/javascript" src="xxx" ></scr'+'ipt>')

            // }


        }
        //<![CDATA[
    </script>
</body>

</html>
