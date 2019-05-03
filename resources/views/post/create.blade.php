@extends('home')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <h2>Add new post</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Content</label>

                    <textarea name="editor1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Video_URL</label>
                    <input type="text" name="video" class="form-control-file">
                </div>

                <div class="form-group">
                    <label>Tag</label><br>
                    <input type="text" class="form-control" value="" data-role="tagsinput" name="tags">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
@endsection


