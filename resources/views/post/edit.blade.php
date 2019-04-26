@extends('home')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4"
                        style="background: #2176bd!important ; color: white">
                        <strong>EDIT POSTS</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <form method="post" action="{{ route('post.update', $post->id) }}" class="text-center"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row " style="padding-top: 15px">
                                <!-- Material input -->
                                <label for="inputPassword3MD" class="col-sm-4 text-center">TITLE</label>
                                <div class="col-sm-8">
                                    <div class="md-form mt-0">
                                        <input type="text"
                                               class="form-control"
                                               name="title" value="{{ $post->title }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row " style="padding-top: 15px">
                                <label for="inputPassword3MD" class="col-sm-4 col-form-label"> DESCRIPTION</label>
                                <div class="col-sm-8">
                                    <div class="md-form mt-0">
                                        <input type="text"
                                               class="form-control"
                                               name="description" value="{{ $post->description }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="padding-top: 15px">
                                <label for="inputPassword3MD" class="col-sm-4 col-form-label">CONTENT</label>

                                <div class="col-sm-8">
                                    <textarea name="editor1">{{ $post->content }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row justify-content-lg-start" style="padding-top: 15px">
                                <label for="inputPassword3MD" class="col-sm-4 col-form-label">Image</label>
                                <div class="col-sm-8">
                                    <div class="md-form mt-0">
                                        <input type="file"
                                               class="form-control"
                                               name="image">
                                        <img src="{{asset('storage/'.$post->image)}}"
                                             style="height: 150px; width: 150px; margin-top: 20px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row " style="padding-top: 15px">
                                <label for="inputPassword3MD" class="col-sm-4 col-form-label"> VIdeo</label>
                                <div class="col-sm-8">
                                    <div class="md-form mt-0">
                                        <input type="text"
                                               class="form-control"
                                               name="video" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 offset-4">
                                <button type="submit"
                                        class="btn btn-outline-info tn-rounded btn-block my-6 waves-effect z-debpth-0">
                                    {{ 'EDIT' }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
