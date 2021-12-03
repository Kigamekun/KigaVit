{{-- backup draggable --}}

@extends('layouts.app2')



@section('content')
    <style>
        section {
            width: 100%;
            height: 100vh;
            overflow: hidden;
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

    </style>

    <div id="main" style="width: 100%;height: 100%;">

        {!! $sub->section_code !!}
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div style="" class="modal-dialog">
            <div class="modal-content">
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
                        <li>Double click for see properties of object</li>
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
            <input type="color" name="font_color" id="font_color_custom">
            <br>
            <select class="form-select" name="font_weight_custom" id="font_weight_custom"
                aria-label="Default select example">
                <option selected>select Weight font</option>
                <option value="bold">Bold</option>

            </select>
            <br>
            <br>
            <button id="button_change_font" class="btn btn-success">submit ! </button>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/CSSRulePlugin.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://draggabilly.desandro.com/draggabilly.pkgd.js'></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <script>
        var outerHTML_text = $('section').prop('outerHTML');
        console.log(outerHTML_text);
        var head = document.getElementsByTagName('HEAD')[0];
        var css = @json($css_data);
        var js = @json($js_data);
        var id = @json($sub->resource_id);
        var id_s = @json($sub->id);

        var css_url = @json($data_url_css);
        var js_url = @json($data_url_js);

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
            link.href = css_url[x];

            document.body.appendChild(link);

        }

        for (let x = 0; x < css.length; x++) {

            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = host + "/resource/" + id + "/css/" + css[x];
            head.appendChild(link);

        }

        for (let x = 0; x < js.length; x++) {

            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = host + "/resource/" + id + "/js/" + js[x];;

            document.body.appendChild(script);

        }




        var meta = document.createElement('meta');
        meta.name = "csrf-token";
        meta.content = "{{ csrf_token() }}";
        head.appendChild(meta);

        $('section').addClass("kontener");
        $('section').attr("drop");


        function post() {

            // console.log($('section').prop('outerHTML'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/update_design/",
                method: 'POST',
                data: {
                    id: id_s,
                    sc: $('section').prop('outerHTML'),
                },
                success: function(result) {
                    alert('All already Saved');
                }
            });

        }
    </script>

    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        $('section').on("dblclick", function(e) {

            if (e.target.tagName == "P" || e.target.tagName == "p" || e.target.tagName == "H1" || e.target
                .tagName ==
                "h1" || e.target.tagName == "H2" || e.target.tagName == "h2" || e.target.tagName == "H3" || e.target
                .tagName == "h3" || e.target.tagName == "H4" || e.target.tagName == "h4" || e.target.tagName ==
                "H5" ||
                e.target.tagName == "h5" || e.target.tagName == "H6" || e.target.tagName == "h6" || e.target
                .tagName ==
                "B" || e.target.tagName == "b") {
                modal.style.display = "block";



                document.getElementById("button_change_font").onclick = function() {
                    if (document.getElementById("inner_font_custom").value) {
                        e.target.innerHTML = document.getElementById("inner_font_custom").value;
                        document.getElementById("inner_font_custom").value = "";
                    }
                    if (document.getElementById("font_size_custom").value) {
                        // console.log('masuk');
                        e.target.style.fontSize = document.getElementById("font_size_custom").value + "px";
                        document.getElementById("font_size_custom").value = "";
                    }
                    if (document.getElementById("font_color_custom").value != "#000000") {
                        e.target.style.color = document.getElementById("font_color_custom").value;
                        document.getElementById("font_color_custom").value = "#000000";
                    }

                    if (document.getElementById("font_weight_custom").value) {
                        e.target.style.fontWeight = document.getElementById("font_weight_custom").value;
                        document.getElementById("font_weight_custom").value = "select Weight font";

                    }
                }

            }


        })



        window.onclick = e => {
            // console.log(e.target);  // to get the element
            console.log(e.target.tagName);
            // if (e.target.tagName == "P" || e.target.tagName == "p" || e.target.tagName == "H1" || e.target.tagName ==
            //     "h1" || e.target.tagName == "H2" || e.target.tagName == "h2" || e.target.tagName == "H3" || e.target
            //     .tagName == "h3" || e.target.tagName == "H4" || e.target.tagName == "h4" || e.target.tagName == "H5" ||
            //     e.target.tagName == "h5" || e.target.tagName == "H6" || e.target.tagName == "h6" || e.target.tagName ==
            //     "B" || e.target.tagName == "b") {
            //     document.getElementById("btn").style.display = "inline-block";
            //     document.getElementById("input").type = "text";
            //     document.getElementById("input").placeholder = "Masukkan Text baru anda!";
            //     document.getElementById("btn").onclick = function() {
            //         e.target.innerHTML = document.getElementById("input").value;
            //         document.getElementById("input").value = "";
            //         document.getElementById("btn").style.display = "none";
            //         document.getElementById("input").type = "hidden";
            //     }

            // }
            if (e.target.tagName == "IMG" || e.target.tagName == "img") {
                console.log(e.target.src);
                document.getElementById("btn").style.display = "inline-block";
                document.getElementById("input").type = "text";
                document.getElementById("input").placeholder = "Masukkan url gambar anda !";
                document.getElementById("btn").onclick = function() {
                    e.target.src = document.getElementById("input").value;
                    document.getElementById("input").value = "";
                    document.getElementById("btn").style.display = "none";
                    document.getElementById("input").type = "hidden";
                }

            }
        }
    </script>


    <script>
        // function add() {
        //     $('section').append('<div class="draggable ui-widget-content" id="resizable"></div>');

        // }

        setInterval(() => {
            $('section').attr("id", "drop");

            //  $('.draggable').draggabilly({
            //                 // contain to parent element
            //                 containment: true
            //             });
            var x = 0;

            $(".draggable").draggable({
                cursor: "crosshair",
                revert: "invalid"
            });
            $("#drop").droppable({

                accept: ".draggable",
                drop: function(event, ui) {
                    console.log("drop");

                    $(this).removeClass("border").removeClass("over");
                    var dropped = ui.draggable;
                    var droppedOn = $(this);
                    if (dropped.data('id') == 'text') {

                        $(dropped).detach().css({
                            display: "inline-block",

                        }).appendTo(droppedOn);
                        // $(dropped).appendTo($("#text_item_kig"));
                        // console.log('selesai');

                    } else {
                        $(dropped).detach().css({
                            width: "300px",
                            height: "150px"
                        }).appendTo(droppedOn);

                    }


                },
                over: function(event, elem) {
                    $(this).addClass("over");
                    console.log("over");
                },
                out: function(event, elem) {
                    $(this).removeClass("over");
                }
            });

            $("#origin").droppable({
                accept: ".draggable",
                drop: function(event, ui) {
                    console.log("drop");
                    $(this).removeClass("border").removeClass("over");
                    var dropped = ui.draggable;
                    var droppedOn = $(this);
                    $(dropped).detach().css({
                        top: 0,
                        left: 0
                    }).appendTo(droppedOn);


                }
            });


        }, 1000);
    </script>
    <script>


    </script>
@endsection
