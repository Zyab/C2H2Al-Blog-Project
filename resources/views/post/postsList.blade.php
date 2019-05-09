@extends('home')
@section('main')
    <div class="container">
        <div class="row">
            <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                <div class="car-body">
                    <div class="col-12" style="padding: 0px">
                        <div class="card-header text-center">
                            <h2>DANH SÁCH BÀI VIẾT</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        @if (Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                            </p>
                        @endif
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            {{--                    <th scope="col">Content</th>--}}
                            <th scope="col">Image</th>
                            <th scope="col">Video</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(count($posts) == 0)
                            <tr>
                                <td colspan="4">Không có dữ liệu</td>
                            </tr>
                        @else
                            @foreach($posts as $key => $post)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td><p>{{ $post->title }}</p></td>
                                    <td><p>{{ $post->description }}</p></td>
                                    {{--                            <td>{!! $post->content !!}  </td>--}}
                                    <td><img src="{{asset("storage/$post->image")}}" alt=""
                                             style="width: 100px; height: 100px">
                                    </td>
                                    @if(isset($post->video))
                                        <td>
                                            <div class="embed-responsive embed-responsive-16by9"
                                                 style="width:150px;height: 100px; margin:0px 50px 30px 0px;">
                                                {!! Embed::make($post->video)->parseUrl()->getIframe() !!}
                                            </div>
                                        </td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-success" href="{{route('post.edit', $post->id)}}"><i
                                                    class="fas fa-edit"></i></a>
                                        <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}"><i
                                                    class="fas fa-eye"></i></a>
                                        <a class="btn btn-danger" href="{{route('post.delete',$post->id)}}"
                                           class="text-danger"
                                           onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i
                                                    class="fas fa-trash"></i></a>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
