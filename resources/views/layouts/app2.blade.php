{{-- backup draggable --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'KigaVit') }}</title>
    <!-- Favicon-->
    {{-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --}}
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Navtem</div>
            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-action list-group-item-light p-3">
                    <center>Change background Color</center>
                    <center>

                        <input type="color" id="colorpicker" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$"
                            value="#bada55">
                        <input type="hidden" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55"
                            id="hexcolor">
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
                <div class="item-draggable">
                    <center>
                        <h4>Item Draggable</h4>

                    </center>
                    <center>
                        <h1>Image</h1>
                    </center>
                    <div style="display: flex;justify-content: center;">
                        <div style="width:50px;height:50px;margin:5px;color:black;border:2px dotted black;"
                            class="draggable">
                            <img src="" alt="" style="background-size: cover; width: 100%;
                                        height: 100%;">
                        </div>
                        <div style="width:50px;height:50px;border-radius:50%; margin:5px;color:black;border:2px dotted black;"
                            class="draggable">
                            <img src="" alt="" style="background-size: cover; width: 100%;
                                    height: 100%;border-radius:50%;">
                        </div>
                        <div style="width:50px;height:50px;border-radius:20px; margin:5px;color:black;border:2px dotted black;"
                            class="draggable">
                            <img src="" alt="" style="background-size: cover; width: 100%;
                                height: 100%;border-radius:20px;">
                        </div>

                    </div>

                    <center>
                        <h1>Text</h1>
                    </center>
                    <div id="text_item_kig" style="display: flex;justify-content: space-evenly;flex-wrap: wrap;">

                        <div data-id="text" class="draggable">
                            <h1>h1</h1>
                        </div>
                        <div data-id="text" class="draggable">
                            <h2>h2</h2>
                        </div>
                        <div data-id="text" class="draggable">
                            <H3>H3</H3>
                        </div>
                        <div data-id="text" class="draggable">
                            <h4>h4</h4>
                        </div>
                        <div data-id="text" class="draggable">
                            <h5>h5</h5>
                        </div>
                        <div data-id="text" class="draggable">
                            <h6>h6</h6>
                        </div>
                        <div data-id="text" class="draggable">
                            <p>P</p>
                        </div>
                    </div>

                    {{-- <button onclick="add()">dsd</button> --}}

                </div>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Full Preview</button>
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
                                <button type="button" class="btn btn-danger"> Delete Section</button>

                                <a href="/my_template" class="btn btn-primary"> Back</a>

                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"> Help</button>
                                <button onclick="post();" class="btn btn-info"> Save</button>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                @yield('content')


            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="{{ url('bootstrap-5.0.2-dist/bootstrap.bundle.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ url('js/scripts.js') }}"></script>
    <script>
        $('#colorpicker').on('input', function() {
            $('#hexcolor').val(this.value);
        });
        $('#hexcolor').on('input', function() {
            $('#colorpicker').val(this.value);
        });
    </script>

    <script>
        function changecolor() {
            var color = $('#colorpicker').val();

            var comp = document.getElementsByTagName('section')[0];
            $('section').removeAttr("style");
            comp.style.background = color;
        }

        function changeurl() {
            var urlim = $('#urlim').val();

            var comp = document.getElementsByTagName('section')[0];
            comp.removeAttribute("style");
            comp.style.background = "url(" + urlim + ")";
            comp.style.backgroundRepeat = "no-repeat";
            comp.style.backgroundPosition = "center";
            comp.style.backgroundSize = "cover";
            comp.style.width = "100%";
            comp.style.height = "100vh";

        }
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"
        integrity="sha256-PsB+5ZEsBlDx9Fi/GXc1bZmC7wEQzZK4bM/VwNm1L6c=" crossorigin="anonymous"></script>

</body>

</html>
