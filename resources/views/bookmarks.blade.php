<x-app-layout>

    <style>
        body {
            background: #f1e2dd;
            /* background: linear-gradient(180deg,#FF70A6,#FF0A68,#FF3381); */
        }

        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;1,400&display=swap");

        .preloader {
            position: absolute;
            left: 49.5%;
            top: 46%;
        }

        .load {
            border: 1px solid #ECF0F1;
            padding: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: center center;
            transform: translate(-50%, -50%) rotate(135deg);
            /*change these sizes to fit into your project*/
            width: 50px;
            height: 50px;

        }

        .load hr {
            border: 0;
            margin: 0;
            width: 40%;
            height: 40%;
            position: absolute;
            border-radius: 50%;
            animation: spin 2s ease infinite;
        }

        .load :first-child {
            background: #19A68C;
            animation-delay: -1.5s
        }

        .load :nth-child(2) {
            background: #F63D3A;
            animation-delay: -1s
        }

        .load :nth-child(3) {
            background: #FDA543;
            animation-delay: -0.5s
        }

        .load :last-child {
            background: #193B48
        }

        @keyframes spin {

            0%,
            100% {
                transform: translateX(200%)
            }

            25% {
                transform: translateY(200%)
            }

            50% {
                transform: translateX(0)
            }

            75% {
                transform: translateY(0)
            }
        }

        .preloader-body {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: white;
            top: 0;
        }


        .is-animated {
            animation: .6s rotate-right;
        }

        @keyframes rotate-right {
            0% {
                transform: translate(-100%) rotate(-100deg);
            }

            100% {
                transform: none;
            }
        }

        .card {
            border-radius: 25px;
            width: 300px;
            margin: 10px;
            background-color: white;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
        }

        .card:hover .card__caption {
            top: 50%;
            transform: translateY(-50%);
        }

        .card:hover .card__image {
            transform: translateY(-10px);
        }

        .card:hover .card__thumb::after {
            top: 0;
        }

        .card:hover .card__snippet {
            margin: 20px 0;
        }

        .card__thumb {
            border-radius: 25px;
            position: relative;
            max-height: 400px;
            overflow: hidden;
        }

        @media (min-width: 1024px) {
            .card__thumb {
                max-height: 500px;
            }
        }

        .card__thumb::after {
            position: absolute;
            top: 0;
            display: block;
            content: "";
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 40%, rgba(255, 255, 255, 0) 100%);
            transition: 0.3s;
        }

        @media (min-width: 1024px) {
            .card__thumb::after {
                top: calc(100% - 140px);
            }
        }

        .card__image {
            transition: 0.5s ease-in-out;
        }

        .card__caption {
            position: absolute;
            top: 50%;
            z-index: 1;
            padding: 0 20px;
            color: white;
            transform: translateY(-50%);
            text-align: center;
            transition: 0.3s;
        }

        @media (min-width: 1024px) {
            .card__caption {
                top: calc(100% - 110px);
                transform: unset;
            }
        }

        .card__title {
            display: -webkit-box;
            max-height: 85px;
            overflow: hidden;
            font-family: "Playfair Display", serif;
            font-size: 23px;
            line-height: 28px;
            text-shadow: 0px 1px 5px black;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .card__snippet {
            display: -webkit-box;
            max-height: 150px;
            margin: 20px 0;
            overflow: hidden;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            line-height: 20px;
            text-overflow: ellipsis;
            transition: 0.5s ease-in-out;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
        }

        @media (min-width: 1024px) {
            .card__snippet {
                margin: 60px 0;
            }
        }

        .card__button {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            border: 1px solid white;
            font-family: "Roboto", sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            text-decoration: none;
            transition: 0.3s;
        }

        .card__button:hover {
            color: black;
            background-color: white;
        }

        .disclaimer {
            position: fixed;
            bottom: 0;
            left: 50%;
            z-index: 2;
            box-sizing: border-box;
            width: 100%;
            padding: 20px 10px;
            background-color: white;
            transform: translateX(-50%);
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            text-align: center;
        }

        .disclaimer__link {
            color: #755D87;
            text-decoration: none;
        }


        button {
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

        button.cancel {
            background: #ff1744;
            border: 1px solid #fd0031;
            box-shadow: 3px 3px 0px 2px rgba(255, 23, 68, 0.2);
        }

        button.cancel:hover {
            background: #ff6482;
        }

        button:hover {
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

        /* // For decoration only */

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
    @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <center>
        <h1 style="color: white;text-shadow: 2px 1px 2px #FF70A6"><b>Bookmarks</b></h1>
    </center>
    {{-- <div style="background:#e7008a;height:100px;width:100%;">
       
        <svg style="display: absolute;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e7008a" fill-opacity="1" d="M0,192L80,213.3C160,235,320,277,480,261.3C640,245,800,171,960,160C1120,149,1280,203,1360,229.3L1440,256L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
          </svg>
        </div> --}}

    <div style=" display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        margin: 20px 0 80px;">
        @foreach ($template as $item)
            <div class="card" style="border: none;">
                <figure style="margin: 0;" class="card__thumb">

                    @if (is_null(
        \App\Models\template::where(['id' => $item->template_id])->pluck('thumb')->first(),
    )) <img class="card__image"
                            src="https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-hand-held-illustration-wedding-wedding-invitation-background-template-image_132223.jpg"
                            alt="Card image cap">
                    @else
                        <img class="card__image"
                            src="{{ url(
    '/thumb/' .
        \App\Models\template::where(['id' => $item->template_id])->pluck('thumb')->first(),
) }}"
                            alt="Card image cap">
                    @endif

                    <figcaption style="padding-left: 0px;padding-right: 0px;right: 0px;left: 0px;"
                        class="card__caption">
                        <center>
                            <h2 class="card__title">
                                {{ \App\Models\template::where(['id' => $item->template_id])->pluck('title')->first() }}
                            </h2>
                            <p class="card__snippet">
                                {{ \App\Models\template::where(['id' => $item->template_id])->pluck('description')->first() }}
                            </p>
                            <button class="accept"><a style="color: white;"
                                    href="/template_details/{{ $item->template_id }}"><i class="fas fa-brush"></i>
                                    Customize</a></button>
                            <br>
                            <br>
                            <button class="cancel"><a style="color: white;"
                                    href="/delete_bookmarks/{{ $item->id }}"><i class="fas fa-trash"></i>
                                    Bookmarks</a></button>


                        </center>

                    </figcaption>

                </figure>
            </div>


        @endforeach



    </div>



    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}
    <script src="{{ url('jquery/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#preloaderbody').fadeOut(); // or fade, css //display however you'd like.
            }, 2500);
        });
    </script>
    <script>
        (function($) {

            'use strict';

            var $filters = $('.filter [data-filter]'),
                $boxes = $('.boxes [data-category]');

            $filters.on('click', function(e) {
                e.preventDefault();
                var $this = $(this);

                $filters.removeClass('active');
                $this.addClass('active');

                var $filterColor = $this.attr('data-filter');

                if ($filterColor == 'all') {
                    $boxes.removeClass('is-animated')
                        .fadeOut().promise().done(function() {
                            $boxes.addClass('is-animated').fadeIn();
                        });
                } else {
                    $boxes.removeClass('is-animated')
                        .fadeOut().promise().done(function() {
                            $boxes.filter('[data-category = "' + $filterColor + '"]')
                                .addClass('is-animated').fadeIn();
                        });
                }
            });

        })(jQuery);
    </script>
</x-app-layout>
