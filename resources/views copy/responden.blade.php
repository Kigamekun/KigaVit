<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/animate-css/vivify.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/site.min.css') }}">
</head>

<body style="background-color: #f1e2dd;">


    <center>
        <h1 style="color: black;"><b>Responden</b></h1>
    </center>
    <br>
    <div class="container">
        <nav>
            <style>
                ol li {
                    display: inline;
                }

            </style>
            <ol>
                <li><a href="/"><b>Home</b></a></li>
                <li> / </li>
                <li> <a href="my_template"><b>My Temp</b></a> </li>
                <li> / </li>
                <li><b>Respon</b></li>
            </ol>
        </nav>
        <br>
        <div class="card">

            <div class="body">
                <div id="area-chart" class="ct-chart"></div>
            </div>

        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">count RSVP</th>
                    <th scope="col">messeage</th>
                    <th scope="col">attend ?</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($respon as $item)

                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->count }}</td>
                        <td>{{ $item->message }}</td>
                        <td>{{ $item->attend == 1 ? 'will attend' : 'not attend' }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>



    </div>


    <script src="{{ url('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ url('assets/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ url('assets/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ url('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script>
        $(function() {

            var dat = @json($data);
            console.log(dat);
            var options;
            var data = {
                labels: @json($date),
                series: [
                    @json($data),
                ]
            };
            // area chart
            options = {
                height: "300px",
                showArea: true,
                showLine: false,
                showPoint: true,

                axisX: {
                    showGrid: false
                },

                lineSmooth: false,
            };
            new Chartist.Line('#area-chart', data, options);



        });
    </script>
</body>

</html>
