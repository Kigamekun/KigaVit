<x-app-layout>

    <style>
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

        body {
            background: #f1e2dd;
        }

        .btns {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
        }

        .btns:hover {
            background-color: RoyalBlue;
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
    {{-- <div style=" background:#e7008a;height:100px;width:100%;">
      <svg style="display: absolute;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e7008a" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,256C384,235,480,149,576,117.3C672,85,768,107,864,133.3C960,160,1056,192,1152,202.7C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    </div> --}}
    <div class="container">
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <center>
            <h1><b>
                    Create Template
                </b></h1>
            {{-- <h1 style="color: white;text-shadow: 2px 1px 2px cyan"><b>Create Design</b></h1> --}}

            <a href="{{ route('download_format') }}" class="btns" style="width:100%"><i class="fa fa-download"></i>
                IMPORTANT ! Download Format </a>
        </center>
        <br>
        <br>
        <form action="{{ route('create_template') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="title" aria-label="title" name="title"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="author" aria-label="author" name="author"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                </div>
                <select name="category" class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    @foreach (App\Models\category::all() as $category)
                        <option value="{{ $category->slug }}">{{ $category->category }}</option>
                    @endforeach

                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" name="premium" aria-label="Checkbox for following text input">
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Check if this template premium or not" readonly
                    aria-label="Text input with checkbox">
            </div>
            <div class="input-group">
                <span class="input-group-text">Desc</span>
                <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <br>


            <div id="inputFormRow">
                <div class="input-group mb-3">
                    <input type="text" name="section[]" class="form-control m-input"
                        placeholder="Enter Section just section without head or body like <section>bla bla bla</section>"
                        autocomplete="off">
                    <div class="input-group-append">

                    </div>
                </div>
            </div>

            <div id="newRow"></div>

            <center>

                <button id="addRow" type="button" class="btn btn-info">Add Row</button>

            </center>
            <br>




            <br>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="thumb" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Select Thumb</label>
                </div>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="attachment[]" multiple class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Upload CSS File</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">IMG / Video File</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="media[]" multiple class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Upload Image or Video File</label>
                </div>
            </div>




            {{-- <div class="input-group mb-3">
                    <input type="file" class="form-control" name="attachment[]" multiple id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload CSS File</label>
                </div> --}}
            <div class="input-group mb-3">

                <input type="text" class="form-control"
                    placeholder="add css meta / cdn , just link like https://blablabla" aria-label="css_url"
                    name="css_url" aria-describedby="basic-addon1">
            </div>





            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="jsfile[]" multiple class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Upload JS File</label>
                </div>
            </div>


            {{-- <div class="input-group mb-3">
                    <input type="file" class="form-control" name="jsfile[]" multiple id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload JS File</label>
                </div> --}}


            <div class="input-group mb-3">

                <input type="text" class="form-control"
                    placeholder="add js script online / cdn , just link like https://blablabla" aria-label="js_url"
                    name="js_url" aria-describedby="basic-addon1">
            </div>



            <center>
                <button type="submit" class="btn btn-success">Send !</button>
            </center>
            <br>
            <br>
        </form>

    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script src="{{ url('jquery/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init()

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
                '<input type="text" name="section[]" class="form-control m-input" placeholder="Enter Section code" autocomplete="off">';
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
