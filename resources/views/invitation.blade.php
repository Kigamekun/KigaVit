<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invitation | You're Invited</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css"> --}}
    <link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/preloader.css') }}">
</head>

<body>

    <style>

.slide{
    height:200px;
}
        * {
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
            src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.eot");
            src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/untitled-font-1.eot#iefix") format("embedded-opentype"),
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

        .icon-up-open-big {
            display: inline-block;
        }

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
            -webkit-transform: translate3d(0, 0, 0);
        }

        #fp-nav.right {
            right: 17px;
        }

        #fp-nav.left {
            left: 17px;
        }

        .fp-slidesNav {
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
            position: relative;
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
        .fp-slidesNav ul li:hover a.active span {
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
        .fp-slidesNav ul li:hover a span {
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
        #fp-nav.fp-show-active a.active+.fp-tooltip {
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

        .anim-wrapper {
            width: 250px;
            height: 50px;
            background-color: white;
            box-shadow: 3px 3px 5px 3px rgba(50, 50, 50, 0.3);
            display: flex;
            justify-content: flex-end;
        }

        .bell-wrapper {
            position: relative;
            top: -26px;
            width: 100px;
            height: 100px;
            display: grid;
            justify-items: center;
            align-items: center;
        }

        .sparks-container {
            width: 100px;
            height: 100px;
            position: absolute;
            left: 0;
            top: 0;
        }

        #Layer_1 {
            width: 35px;
            height: 35px;
        }

        .spark-wrapper {
            width: 12px;
            height: 1px;
            position: absolute;
            top: 0px;
            left: 0px;
            transform-origin: 0 0;
            overflow-x: hidden;
        }

        .spark {
            animation-name: spark;
            animation-duration: 2400ms;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            width: 100%;
            height: 100%;
            background-color: #25bec8;
        }

        @keyframes spark {
            0% {
                transform: translate(-100%, 0px);
                opacity: 1;
            }

            10% {
                transform: translate(0%, 0px);
            }

            20% {
                transform: translate(100.5%, 0px);
            }

            20.01% {
                transform: translate(-100.5%, 0px);
            }

            30% {
                transform: translate(0%, 0px);
            }

            40% {
                transform: translate(100.5%, 0px);
                opacity: 1;
            }

            40.01% {
                transform: translate(-100.5%, 0px);
                opacity: 0;
            }

            100% {
                transform: translate(-100.5%, 0px);
                opacity: 0;
            }
        }

        #slideshow {

            position: relative;
            text-overflow: ellipsis;
            word-wrap: break-word;
            white-space: nowrap;
            overflow: hidden;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border: 1px solid cyan;

        }

        #slideshow>div {
            position: absolute;
            color: cyan;
            margin: 10px;


        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1001;
            /* Sit on top */
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
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            background-color: #fefefe;
            width: 100%;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: white;
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

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        form {
            padding: 20px;
            margin: 0 auto;
            max-width: 600px;
        }

        form h1 {
            padding-bottom: 10px;
            margin-bottom: 25px;
            font-family: "Open Sans";
            font-weight: 100;
            text-align: center;
            color: #0288D1;
            border-bottom: 1px solid #ccc;
        }

        form .row {
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        form input[type=text],
        form input[type=password],
        form textarea {
            width: 100%;
            height: 40px;
            padding: 10px 10px 10px 90px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            color: #333;
            border-radius: 3px;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        }

        form textarea {
            height: auto;
            min-height: 200px;
            padding: 50px 10px 10px 10px;
        }

        form input[type=text]+label,
        form input[type=password]+label,
        form textarea+label {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            height: 40px;
            line-height: 40px;
            font-size: 12px;
            font-weight: bold;
            width: 80px;
            text-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: white;
            background: #0288D1;
            border-radius: 3px 0 0 3px;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
            transform: translateZ(0) translateX(0);
        }

        form textarea+label {
            width: 100%;
            border-radius: 3px 3px 0 0;
        }

        form input[type=text]:focus,
        form input[type=password]:focus {
            padding-left: 10px;
        }

        form textarea:focus {
            padding-top: 10px;
        }

        form input[type=text]:focus+label,
        form input[type=password]:focus+label {
            transform: translateZ(0) translateX(-100%);
        }

        form textarea:focus+label {
            transform: translateZ(0) translateY(-100%);
        }

        form input[type=checkbox],
        form input[type=radio] {
            position: absolute;
            overflow: hidden;
            clip: rect(0 0 0 0);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0;
        }

        form input[type=radio]+label {
            position: relative;
            display: inline-block;
            overflow: hidden;
            text-indent: -9999px;
            background: #ccc;
            width: 30px;
            height: 30px;
            border-radius: 100%;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        }

        form input[type=radio]+label:before {
            content: "";
            position: absolute;
            display: block;
            height: 10px;
            width: 10px;
            top: 50%;
            left: 50%;
            background: white;
            border-radius: 100%;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9) 0.1s;
            transform: translateZ(0) translate(-50%, -50%) scale(0);
        }

        form input[type=radio]:checked+label {
            background: #0288D1;
        }

        form input[type=radio]:checked+label:before {
            transform: translateZ(0) translate(-50%, -50%) scale(1);
        }

        form input[type=checkbox]+label {
            position: relative;
            display: inline-block;
            overflow: hidden;
            text-indent: -9999px;
            background: #ccc;
            width: 60px;
            height: 30px;
            border-radius: 100px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
        }

        form input[type=checkbox]+label:before {
            content: "";
            position: absolute;
            display: block;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #0288D1;
            border-radius: 100px;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9) 0.1s;
            transform: translateZ(0) scale(0);
        }

        form input[type=checkbox]+label:after {
            content: "";
            position: absolute;
            top: 2px;
            left: 2px;
            display: block;
            height: 26px;
            width: 26px;
            background: white;
            border-radius: 100%;
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
            transform: translateZ(0) translateX(0);
        }

        form input[type=checkbox]:checked+label {
            background: #0288D1;
        }

        form input[type=checkbox]:checked+label:after {
            left: calc(100% - 28px);
            transform: translateZ(0);
        }

        form button {
            position: relative;
            overflow: hidden;
            height: 40px;
            line-height: 40px;
            padding: 0 20px;
            font-size: 12px;
            font-weight: bold;
            text-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: white;
            border: none;
            background: #0288D1;
            border-radius: 3px;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
            transform: translateZ(0) translateX(0);
            z-index: 2;
        }

        form button:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: #01579B;
            height: 100%;
            width: 100%;
            border-radius: 3px;
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
            transform: translateZ(0) scale(0);
            z-index: -1;
        }

        form button:hover:before,
        form button:focus:before {
            transform: scale(1);
            transition: all 0.3s cubic-bezier(1, 0.1, 0, 0.9);
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


    <div
        style="margin-left:5%;height: 50px;width: 80%;margin-bottom:10px;border-radius:10px;background-color:rgb(33, 41, 41); bottom:0;position:absolute;display: flex;justify-content: space-between;z-index: 1000;">
        <div>
            <div id="slideshow" style="height: 100%;width:400px;" class="commenctbox">

<div id="slide-container">

    @foreach (\App\Models\rsvp::where('respon', $id_rsvp)->where('type', 'public')->get()
    as $item)
                    <div class="slide">
                        {{ $item->message }}
                    </div>
                @endforeach
                
</div>

            </div>

        </div>
        <div>


            <div class="bell-wrapper">
                <button id="myBtn">
                    <div class="sparks-container">

                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(0deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(45deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(90deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(135deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(180deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(225deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(270deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>
                        <div class="spark-wrapper"
                            style="transform:translate(50px, 50px) rotateZ(315deg) translateX(22px);">
                            <div class="spark"></div>
                        </div>

                    </div>
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.12 120.2">
                        <title>bell</title>
                        <path
                            d="M112.33,88.4c-.65,16.1-30.57,17.07-30.24,17.4-3.26,5.52-8.78,11.38-19.84,11.38s-18.08-5.86-21.34-11.38c.33-.33-29.59-1.3-30.24-17.4C10.67,77.5,19.13,72.63,23,71s5.2-23.41,5.2-23.41S30.69,18.64,52.39,16c0,0-2.5-12.68,9.11-13,11.61.33,9.11,13,9.11,13,21.7,2.6,24.16,31.55,24.16,31.55S96.07,69.37,100,71,112.33,77.5,112.33,88.4Z"
                            style="fill:none;stroke-width:5;stroke:#25bec8;" />
                    </svg>
                </button>
            </div>
        </div>
    </div>










    <div id="fullpage">
        @foreach ($template as $item)
            {!! $item->section_code !!}
        @endforeach

    </div>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>

            </div>
            <div class="modal-body">
                <center>
                    <h1>Form RSVP</h1>
                </center>
                <form action="{{ route('add_rsvp') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" name="respon" value="{{ $id_rsvp }}">
                    <div class="row">
                        <input type="text" name="name" id="fancy-text" required/>
                        <label for="name">Name</label>
                    </div>
                    <div class="row">
                        <input type="text" name="count" id="fancy-text" required />
                        <label for="count">Count</label>
                    </div>
                    <div class="row">
                        <select name="type" id="type" required>

                            <option value="public">public</option>
                            <option value="private">private</option>
                        </select>
                    </div>
                    <div class="row">
                        <textarea name="desc" id="fancy-textarea" required></textarea>
                        <label for="desc">Description</label>

                    </div>
                    <div class="row">
                        <input type="checkbox" name="attend" id="fancy-checkbox" required/>
                        <label for="fancy-checkbox">Checkbox</label>
                        i will attend to this moment
                    </div>



                    <center>


                        <button type="submit">Send !</button>
                    </center>
                </form>
            </div>

        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js"></script>
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <script>
        $(document).ready(function() {


            setTimeout(function() {
                $('#preloaderbody').fadeOut(); // or fade, css //display however you'd like.
            }, 4000);



            setTimeout(function() {
                AOS.init();
            }, 3000);


            $('.aos-init').removeClass(
                'aos-animate'); // remove ALL classes which triggers animation in document

            $('section').addClass('vertical-scrolling');
            // document.getElementsByClassName('fp-tableCell').style.removeProperty('display');


            // variables
            var $header_top = $('.header-top');
            var $nav = $('nav');



            // toggle menu
            $header_top.find('a').on('click', function() {
                $(this).parent().toggleClass('open-menu');
            });


            // $('section [data-aos]').removeClass("aos-animate");
            // fullpage customization
            $('#fullpage').fullpage({


                //   sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F'],
                sectionSelector: '.vertical-scrolling',
                // slideSelector: '.horizontal-scrolling',
                navigation: true,
                slidesNavigation: true,
                controlArrows: false,
                // anchors: ['1','2','3','4','5','6','7'],
                menu: '#menu',


                onLeave: function() {
                    $('section [data-aos]').removeClass("aos-animate");
                },
                onSlideLeave: function() {
                    $('slide [data-aos]').removeClass("aos-animate");
                },
                afterSlideLoad: function() {
                    $('slide [data-aos]').addClass("aos-animate");
                },
                afterLoad: function() {

                    $('section [data-aos]').addClass("aos-animate");
                    //jQuery('.fp-table.active .aos-init').addClass('aos-animate');
                }

                // afterLoad: function(anchorLink, index) {
                //   $header_top.css('background', 'rgba(0, 47, 77, .3)');
                //   $nav.css('background', 'rgba(0, 47, 77, .25)');
                //   if (index == 5) {
                //       $('#fp-nav').hide();
                //     }
                // },

                // onLeave: function(index, nextIndex, direction) {
                //   if(index == 5) {
                //     $('#fp-nav').show();
                //   }
                // },

                // afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
                //   if(anchorLink == 'fifthSection' && slideIndex == 1) {
                //     $.fn.fullpage.setAllowScrolling(false, 'up');
                //     $header_top.css('background', 'transparent');
                //     $nav.css('background', 'transparent');
                //   //   $(this).css('background', '#374140');
                //   //   $(this).find('h2').css('color', 'white');
                //   //   $(this).find('h3').css('color', 'white');
                //   //   $(this).find('p').css(
                //       // {
                //       //   'color': '#DC3522',
                //       //   'opacity': 1,
                //       //   'transform': 'translateY(0)'
                //       // }
                //   //   );
                //   }
                // },

                // onSlideLeave: function( anchorLink, index, slideIndex, direction) {
                //   if(anchorLink == 'fifthSection' && slideIndex == 1) {
                //     $.fn.fullpage.setAllowScrolling(true, 'up');
                //     $header_top.css('background', 'rgba(0, 47, 77, .3)');
                //     $nav.css('background', 'rgba(0, 47, 77, .25)');
                //   }
                // }
            });
            $('.fp-tableCell').css("display", "");
        });
    </script>


    <script>
        var head = document.getElementsByTagName('HEAD')[0];
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
            link.href = css_url[x];

            document.body.appendChild(link);

        }


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
            script.src = host + "/resource/" + id + "/js/" + js[x];;

            document.body.appendChild(script);

        }






        var meta = document.createElement('meta');
        meta.name = "csrf-token";
        meta.content = "{{ csrf_token() }}";
        head.appendChild(meta);
    </script>

    <script>
       $(document).ready(function () {
    //you can set this, as long as it's not greater than the slides length
    var show = 4;
    //calculate each slides width depending on how many you want to show
    var w = $('#slider').width() / show;
    var l = $('.slide').length;
    
    //set each slide width
    $('.slide').width(w);
    //set the container width to fix the animation and make it look sliding
    $('#slide-container').width(w * l)
    
    function slider() {
        $('.slide:first-child').animate({
            marginLeft: -w //hide the first slide on the left
        }, 'slow', function () {
            //once completely hidden, move this slide next to the last slide
            $(this).appendTo($(this).parent()).css({marginLeft: 0});
        });
    }
    //use setInterval to do the timed execution and animation
    var timer = setInterval(slider, 2000);
    
    /* pausing the slider */   
    $('#slider').hover(function(){
        //mouse in, clearinterval to pause
        clearInterval(timer);
    },function(){
        //mouse out, setinterval to continue
        timer = setInterval(slider, 2000);
    });
});
    </script>

    <script>
        var modal = document.getElementById("myModal");


        var btn = document.getElementById("myBtn");


        var span = document.getElementsByClassName("close")[0];


        btn.onclick = function() {
            modal.style.display = "block";
        }


        span.onclick = function() {
            modal.style.display = "none";
        }


        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



</body>

</html>
