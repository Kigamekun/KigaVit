<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ url('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css"
        integrity="sha512-riTSV+/RKaiReucjeDW+Id3WlRLVZlTKAJJOHejihLiYHdGaHV7lxWaCfAvUR0ErLYvxTePZpuKZbrTbwpyG9w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('css/preloader.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>KigaVit (Kiga invitation)</title>
    <style>
        body {
            background: #f1e2dd;
        }

        section {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item {

            margin-right: 20px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            display: flex;
            width: 100%;
            height: 80vh;
            overflow: hidden;
            /* align-items: center; */
            /* justify-content: center; */
        }

    </style>
</head>

<body>
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

    <nav class="navbar navbar-expand-lg navbar-light " style="background: #f3d0ce">
        <div class="container-fluid">
            <a class="navbar-brand btn btn-primary" href="/">
                <i class="fas fa-arrow-left"></i>


            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-share-alt"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                                onclick="copyToClipboard('{{ $host . '/invitation' . '?x=' . $hash }}')">ShareLink
                                !</a>
                            <li><a class="dropdown-item"
                                    href="whatsapp://send?text={{ $host . '/invitation' . '?x=' . $hash }}">Share
                                    Whatsapp</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('send_email') }}">send bulk email</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('responden') }}"> <i class="fas fa-eye"></i></a>
                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn btn-warning" onclick="add_section()"> <i
                                class="far fa-plus-square"></i> Section</button>
                    </li>

                    <li class="nav-item">

                        <a class="btn btn-info" href="add_music/{{ $id }}"> <i class="fas fa-music"></i></a>

                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn btn-danger" onclick="delete_template()"><i
                                class="fas fa-trash-alt"></i> Delete
                            Template</button>

                    </li>
                </ul>

            </div>
        </div>
    </nav>
















    <br>
    <center>
        <h1 style="color: white;text-shadow: 2px 1px 2px #FF70A6"><b>Section </b></h1>
    </center>


    <div id="core" class="owl-carousel owl-theme">

        @foreach ($template as $item)


            <a style="color:inherit;text-decoration: none;" href="/edit_sub_template/{{ $item->id }}">
                <div id="item" class="item">
                    {!! $item->section_code !!}
                </div>
            </a>

        @endforeach

    </div>


    {{-- <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js></script> --}}
    <script src="{{ url('jquery/jquery.js') }}"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/CSSRulePlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#preloaderbody').fadeOut(); // or fade, css //display however you'd like.
            }, 2500);
        });
    </script>


    <script>
        $('.owl-carousel').owlCarousel({

            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1100: {
                    items: 4
                }
            }
        })
    </script>

    <script>
        var head = document.getElementsByTagName('HEAD')[0];
        var css = @json($data_css);
        var js = @json($data_js);
        var id = @json($id);
        // console.log(css[0]);
        var host = @json($host);

        for (let x = 0; x < css.length; x++) {
            console.log('segini');
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = host + "/resource/" + id + "/css/" + css[x];
            head.appendChild(link);

        }

        for (let x = 0; x < js.length; x++) {

            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = host + "/resource/" + id + "/js/" + js[x];

            document.body.appendChild(script);

        }




        var meta = document.createElement('meta');
        meta.name = "csrf-token";
        meta.content = "{{ csrf_token() }}";
        head.appendChild(meta);

        function add_section() {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/new_layer",
                method: 'POST',
                data: {
                    sc: "<section style='background:white;'></section>",
                },
                success: function(result) {
                    swal("Created", "yeyyy your moment has been created");
                    location.reload(true);
                }
            });




        }

        function delete_template() {


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
                            url: "/delete_template",
                            method: 'POST',

                            success: function(result) {

                                window.location.reload();
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


        function copyToClipboard(text) {
            var inputc = document.body.appendChild(document.createElement("input"));
            inputc.value = text;
            inputc.focus();
            inputc.select();
            document.execCommand('copy');
            inputc.parentNode.removeChild(inputc);
            alert("URL Copied.");
        }
    </script>


</body>

</html>
