@extends('layouts.base')


@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <center>
            <h1>Add RSVP</h1>
        </center>
        <form action="/add_rsvp/" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="name" aria-label="name" name="name"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="count" aria-label="count" name="count"
                    aria-describedby="basic-addon1">
            </div>


            <div class="input-group">
                <span class="input-group-text">Desc</span>
                <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <br>






            <center>


                <button type="submit" class="btn btn-success">Send !</button>
            </center>
        </form>

    </div>

@endsection

@section('script')




@endsection
