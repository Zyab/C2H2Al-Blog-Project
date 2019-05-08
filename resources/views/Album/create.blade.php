@extends('home')
@section('main')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
                <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                    <div class="card-body">
                        <h2>Create New Album</h2>

                        <form method="post" action="{{route('album.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                                <p class="help text-danger">{{ $errors->first('name') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Title</label>
                                <input type="text" name="title" class="form-control">
                                <p class="help text-danger">{{ $errors->first('title') }}</p>
                            </div>
                            <div class="form-group">

                                <label for="exampleFormControlFile1">Upload Images</label>
                                <input type="file" name="images[]" multiple class="form-control">
                                <p class="help text-danger">{{ $errors->first('images') }}</p>

                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                            <button class="btn btn-secondary" style="margin-top:10px"
                                    onclick="window.history.go(-1); return false;">Cancel
                            </button>

                        </form>
                    </div>
                </div>


@endsection
