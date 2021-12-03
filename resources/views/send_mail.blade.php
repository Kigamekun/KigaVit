<x-app-layout>
    <style>
        body {
            background: #f1e2dd;
        }

    </style>

    <center>
        <h1><b>Send Email !</b></h1>
    </center>

    <div class="container">

        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form action="{{ route('send_bulk_email') }}" method="post">
            @csrf
            <div id="inputFormRow">
                <div class="input-group mb-3">
                    <input type="email" name="mail[]" class="form-control m-input" placeholder="add Email address"
                        autocomplete="off">
                    <div class="input-group-append">

                    </div>
                </div>
            </div>

            <div id="newRow"></div>

            <center>

                <button id="addRow" type="button" class="btn btn-info">Add email address</button>

            </center>

            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>

    <script src="{{ url('jquery/jquery.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#preloaderbody').fadeOut(); // or fade, css //display however you'd like.
            }, 2500);
        });



        // add row
        $("#addRow").click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="email" name="mail[]" class="form-control m-input" placeholder="Enter Section code" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });


        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
</x-app-layout>
