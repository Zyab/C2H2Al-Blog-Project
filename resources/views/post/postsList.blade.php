@extends('home')
@section('main')
    <div class="row">
        <div class="col-12"><h1>DANH SÁCH BÀI VIẾT</h1></div>
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
                {{--                <th scope="col">Content</th>--}}
                <th scope="col">Image</th>
                <th scope="col">Action</th>
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
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        {{--                        <td>{!! $post->content  !!}</td>--}}
                        <td><img src="{{asset("storage/$post->image")}}" alt="" width="300px" height="300px"></td>
                        <td>
                            <a class="btn btn-success" href="#">Edit</a>
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
@endsection
