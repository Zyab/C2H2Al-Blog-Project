@extends('home')
@section('main')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Add new Album</h2>

    <form method="post" action="{{route('album.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="input-group control-group increment" >
            <input type="file" name="images[]" multiple class="form-control">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

    </form>
</div>
@endsection
