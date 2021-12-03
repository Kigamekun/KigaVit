<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
    <link rel="stylesheet" href="{{ url('css/preloader.css') }}">
</head>

<body>
    <style>
        body {
            background: #f1e2dd;
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
    <section class="relative">

        <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-xl lg:max-w-7xl">
            <h1 class="mb-3 text-4xl font-extrabold leading-none text-gray-800 lg:text-5xl"><a href="#">Category</a>
            </h1>
            <p class="text-gray-500 text-xl lg:text-2xl">Filter your category !</p>
            <nav class="bg-grey-light p-3 rounded font-sans w-full m-4">
                <ol class="list-reset flex text-grey-dark">
                    <li><a href="{{ route('dashboard') }}" class="text-blue font-bold">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="#" class="text-blue font-bold" style="color: blue;">Category</a></li>

                </ol>
            </nav>
            <!-- First Row -->
            <div style="flex-wrap:wrap;"
                class="w-full h-full flex flex-col items-center lg:flex-row gap-6 pb-10 mt-8 sm:mt-16">

                @foreach ($category as $ct)
                    <div class="relative max-w-sm overflow-hidden rounded-xl shadow-md lg:w-1/2 xl:w-1/3">
                        <div class="block w-full h-72 lg:h-80 {{ $back = $bg[array_rand($bg)] }}" style="height: 7rem"></div>
                        {{-- @php
                          $x = explode('-',$back);

                $num = intval($x[2])-100;
                $solve = $bg[0].'-'.$bg[1].'-'.$num;
                @endphp --}}
                        <div class="relative z-20 w-full h-auto py-8 text-white {{ $back }} border-t-0 px-7">
                            <a href="category_filter/{{ $ct->slug }}"
                                class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-3 py-2 uppercase text-blue-500 bg-white">Search
                                This !</a>
                            <h2 class="mb-3 text-3xl lg:text-4xl font-bold"><a href="#">{{ $ct->category }}</a></h2>
                            <p class="mb-1 text-lg font-normal text-white">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </section>
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
</body>

</html>
