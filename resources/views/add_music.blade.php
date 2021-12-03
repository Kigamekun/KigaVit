<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Music</title>
    <link rel="stylesheet" href="{{ url('css/preloader.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;1,400&display=swap");

        .pause {
            border-radius: 20px;
            border: none;
            padding: 1rem 2rem;
            color: #fff;
            font-size: 1.45em;
            font-weight: bold;
            margin: 0 15px;
            transition: background 0.5s;
        }

        .pause.accept {
            background: #1de9b6;
            border: 1px solid #15d8a7;
            box-shadow: 3px 3px 0px 2px rgba(29, 233, 182, 0.2);
        }

        .pause.accept:hover {
            background: #63f0cd;
        }

        .button {
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 14px;
            font-weight: 100;
            font-family: "Segoe UI";
            letter-spacing: 1px;
        }

        .button:before {
            border-radius: 100px;
            border: 2px solid #468cdc;
            box-shadow: 0 0 15px rgba(0, 255, 204, 0.15), 0 0 15px rgba(0, 255, 204, 0.15) inset;
            content: "";
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            height: 110px;
            width: 110px;
            margin-left: -57px;
            margin-top: -57px;
            opacity: 1;
            transform: scale(1);
            transition: all 300ms;
        }

        .button:hover:before {
            transform: scale(1.05);
        }

        .button.circle {
            background: #23466e;
            border: none;
            border-radius: 900px;
            color: #e4ecfa;
            cursor: pointer;
            display: block;
            width: 100px;
            height: 100px;
            line-height: 100px;
            position: relative;

            transition: 0.5s;
        }

        .button.circle:hover {
            background: #3e70aa;
            padding: -2px;
        }

        .play-btn {
            width: 100px;
            height: 100px;
            background: radial-gradient(rgba(255, 0, 128, 0.8) 60%, rgba(255, 255, 255, 1) 62%);
            border-radius: 50%;
            position: relative;
            display: block;

            box-shadow: 0px 0px 25px 3px rgba(255, 0, 128, 0.8);
        }

        /* triangle */
        .play-btn::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-40%) translateY(-50%);
            transform: translateX(-40%) translateY(-50%);
            transform-origin: center center;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 25px solid #fff;
            z-index: 100;
            -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
            transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        /* pulse wave */
        .play-btn:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 150%;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation: pulsate1 2s;
            animation: pulsate1 2s;
            -webkit-animation-direction: forwards;
            animation-direction: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: steps;
            animation-timing-function: steps;
            opacity: 1;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, .75);
            top: -30%;
            left: -30%;
            background: rgba(198, 16, 0, 0);
        }

        @-webkit-keyframes pulsate1 {
            0% {
                -webkit-transform: scale(0.6);
                transform: scale(0.6);
                opacity: 1;
                box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0;
                box-shadow: none;

            }
        }

        @keyframes pulsate1 {
            0% {
                -webkit-transform: scale(0.6);
                transform: scale(0.6);
                opacity: 1;
                box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
            }

            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1);
                opacity: 0;
                box-shadow: none;

            }
        }

        .list {
            list-style: none;
        }

        .container {
            margin: auto;
            width: 80%;
        }

        .track {
            display: flex;
            justify-content: space-evenly;
            margin: 5px;
            width: 100%;
            height: 100px;
            background: linear-gradient(90deg, blue, lightskyblue, cyan);
            border-radius: 25px;
        }

        .add {
            width: 50px;
            background: rgb(6, 69, 187);
            color: rgb(187, 255, 0);

            border-radius: 50%;
            margin: 20px
        }

        * {
            border: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            font-size: calc(16px + (24 - 16)*(100vw - 320px)/(1920 - 320));
        }

        body,
        button,
        input {
            font: 1em Hind, sans-serif;
            line-height: 1.5em;
        }

        body,
        input {
            color: #171717;
        }

        .search-bar {
            display: flex;
        }

        body {
            background: #f1f1f1;
            height: 100vh;
        }

        .search-bar input,
        .search-btn,
        .search-btn:before,
        .search-btn:after {
            transition: all 0.25s ease-out;
        }

        .search-bar input,
        .search-btn {
            width: 3em;
            height: 3em;
        }

        .search-bar input:invalid:not(:focus),
        .search-btn {
            cursor: pointer;
        }

        .search-bar,
        .search-bar input:focus,
        .search-bar input:valid {
            width: 100%;
        }

        .search-bar input:focus,
        .search-bar input:not(:focus)+.search-btn:focus {
            outline: transparent;
        }

        .search-bar {
            margin: auto;
            padding: 1.5em;
            justify-content: center;
            max-width: 30em;
        }

        .search-bar input {
            background: transparent;
            border-radius: 1.5em;
            box-shadow: 0 0 0 0.4em #171717 inset;
            padding: 0.75em;
            transform: translate(0.5em, 0.5em) scale(0.5);
            transform-origin: 100% 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .search-bar input::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        .search-bar input:focus,
        .search-bar input:valid {
            background: #fff;
            border-radius: 0.375em 0 0 0.375em;
            box-shadow: 0 0 0 0.1em #d9d9d9 inset;
            transform: scale(1);
        }

        .search-btn {
            background: #171717;
            border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
            padding: 0.75em;
            position: relative;
            transform: translate(0.25em, 0.25em) rotate(45deg) scale(0.25, 0.125);
            transform-origin: 0 50%;
        }

        .search-btn:before,
        .search-btn:after {
            content: "";
            display: block;
            opacity: 0;
            position: absolute;
        }

        .search-btn:before {
            border-radius: 50%;
            box-shadow: 0 0 0 0.2em #f1f1f1 inset;
            top: 0.75em;
            left: 0.75em;
            width: 1.2em;
            height: 1.2em;
        }

        .search-btn:after {
            background: #f1f1f1;
            border-radius: 0 0.25em 0.25em 0;
            top: 51%;
            left: 51%;
            width: 0.75em;
            height: 0.25em;
            transform: translate(0.2em, 0) rotate(45deg);
            transform-origin: 0 50%;
        }

        .search-btn span {
            display: inline-block;
            overflow: hidden;
            width: 1px;
            height: 1px;
        }

        /* Active state */
        .search-bar input:focus+.search-btn,
        .search-bar input:valid+.search-btn {
            background: #008cff;
            border-radius: 0 0.375em 0.375em 0;
            transform: scale(1);
        }

        .search-bar input:focus+.search-btn:before,
        .search-bar input:focus+.search-btn:after,
        .search-bar input:valid+.search-btn:before,
        .search-bar input:valid+.search-btn:after {
            opacity: 1;
        }

        .search-bar input:focus+.search-btn:hover,
        .search-bar input:valid+.search-btn:hover,
        .search-bar input:valid:not(:focus)+.search-btn:focus {
            background: #0c48db;
        }

        .search-bar input:focus+.search-btn:active,
        .search-bar input:valid+.search-btn:active {
            transform: translateY(1px);
        }

        @media screen and (prefers-color-scheme: dark) {

            body,
            input {
                color: #f1f1f1;
            }

            body {
                background: linear-gradient(90deg, #e56ab3, #ef87be, #f9a3cb);
            }

            .search-bar input {
                box-shadow: 0 0 0 0.4em #f1f1f1 inset;
            }

            .search-bar input:focus,
            .search-bar input:valid {
                background: #3d3d3d;
                box-shadow: 0 0 0 0.1em #3d3d3d inset;
            }

            .search-btn {
                background: #f1f1f1;
            }
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

    <center>
        <br>
        <h1>Add Music</h1>
        <br>
        <button onclick="pause()" class="pause accept">Pause </button>
    </center>



    <audio src="" id="myAudio">

    </audio>


    <div class="container">

        <form action="javascript:" class="search-bar">
            <input type="text" name="search" id="in" required>
            <button class="search-btn" id="search" type="submit">
                <span>Search</span>
            </button>
        </form>
        <br>
        <ul class="list">


        </ul>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}

    <script src="{{ url('jquery/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch-jsonp/1.1.1/fetch-jsonp.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#preloaderbody').fadeOut(); // or fade, css //display however you'd like.
            }, 2500);
        });
    </script>

    <script>
        document.getElementById('search').onclick = function() {
            $('.list').empty();
            var query = document.getElementById('in').value;
            fetchJsonp('https://api.deezer.com/search?q=' + query + '&output=jsonp').then(function(response) {
                    return response.json();
                })
                .then(function(json) {

                    //   var data = JSON.parse(json);
                    if (json.data.length === 0) {
                        $('.list').append('<li><center><h1><b>Not Found:(</b></h1></center></li>');
                    }
                    json.data.forEach(element => {
                        console.log(element);
                        $('.list').append('<li><div class="track"><div style="flex: 1;"><img src="' +
                            element.album.cover_medium +
                            '" style="width:100%;height:100%;border-bottom-left-radius:25px;border-top-left-radius:25px;" alt=""></div><div style="flex:9;display: flex;justify-content: space-between;align-items:center;"><h3 style="margin:5px;">' +
                            element.title +
                            '</h3> <button  class="button circle" data-action="add" data-src="' +
                            element.preview +
                            '">Add!</button><button type="button" data-action="play" data-src="' +
                            element.preview + '" class="play-btn" >+</button></div></div></li>');
                    });

                })
                .catch(function(error) {
                    console.log(error);
                });
        };

        $(".list").delegate("button", "click", function(e) {
            if ($(this).data("action") == "play") {

                var audio = document.getElementById("myAudio");
                audio.pause();
                audio.currentTime = 0;
                audio.src = $(this).data("src");
                audio.play();
            } else {
                console.log($(this).data("src"));
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "/in_music",
                    method: 'POST',
                    data: {
                        music: $(this).data("src"),
                    },
                    success: function(result) {
                        swal("Created", "yeyyy you has been added a music to your template");
                        location.reload(true);
                    }
                });
            }
        });
    </script>

    <script>
        function pause() {
            var audio = document.getElementById("myAudio");
            audio.pause();
            audio.currentTime = 0;
        }
    </script>


</body>

</html>
