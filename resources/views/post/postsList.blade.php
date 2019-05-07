@extends('home')
@section('main')
    <div class="container" style="border: 1px solid silver">
        <div class="row">

            <div class="col-12" style="padding: 0px"    >
                <div class="card-header" >
                    <h1>DANH SÁCH BÀI VIẾT</h1>
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
                    <th scope="col"></th>
                    <th scope="col"></th>
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
                            <td><img src="{{asset("storage/$post->images")}}" alt="" width="100px" height="100px"></td>
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
                                <a class="btn btn-success" href="{{route('post.edit', $post->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">View</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{route('post.delete',$post->id)}}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
