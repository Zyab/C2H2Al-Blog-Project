@extends('home')
@section('main')
    <div class="row">
        <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
        <div class="car-body">
            <div class="col-md-12">
                <br>
                <h2>Add new post</h2>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" >
                        <p class="help text-danger">{{ $errors->first('title') }}</p>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Description</label>
                        <input type="text" name="description" class="form-control" >
                        <p class="help text-danger">{{ $errors->first('description') }}</p>
                    </div>

                    <div class="form-group">
                        <label>Content</label>

                        <textarea name="editor1"></textarea>
                        <p class="help text-danger">{{ $errors->first('editor1') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image" class="form-control-file">
                        <p class="help text-danger">{{ $errors->first('image') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Video_URL</label>
                        <input type="text" name="video" class="form-control-file">
                        <p class="help text-danger">{{ $errors->first('video') }}</p>
                    </div>

                    <div class="form-group">
                        <label>Tag</label><br>
                        <input type="text" id="tags" class="form-control" value="" data-role="tagsinput" name="tags">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
                <br>
            </div>
        </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#tags').tagsInput();
    </script>
@endsection


