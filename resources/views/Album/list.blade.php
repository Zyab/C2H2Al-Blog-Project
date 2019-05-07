{{--<table class="table table-striped">--}}
    {{--<thead>--}}
    {{--<tr>--}}
        {{--<th scope="col">ID</th>--}}
        {{--<th scope="col">Name</th>--}}
        {{--<th scope="col">Title</th>--}}
        {{--<th scope="col">Image</th>--}}

        {{--<th scope="col"></th>--}}
        {{--<th scope="col"></th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@if(count($album) == 0)--}}
        {{--<tr>--}}
            {{--<td colspan="4">Không có dữ liệu</td>--}}
        {{--</tr>--}}
    {{--@else--}}
        {{--@foreach($album->images as $key => $item)--}}
            {{--<tr>--}}
                {{--<th scope="row">{{ ++$key }}</th>--}}
                {{--<td><p>{{ $item->name }}</p></td>--}}
                {{--<td><p>{{ $item->title}}</p></td>--}}
                {{--<td>--}}
                    {{--@foreach($item->images as $key => $image )--}}
                    {{--<img src="{{asset("storage/images/$image->images")}}" alt="" width="100px" height="100px">--}}
                        {{--@endforeach--}}
                {{--</td>--}}
                {{--<td>--}}
                    {{--<a class="btn btn-success" href="{{route('post.edit', $post->id)}}">Edit</a>--}}
                {{--</td>--}}
                {{--<td>--}}
                    {{--<a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">View</a>--}}
                {{--</td>--}}
                {{--<td>--}}
                    {{--<a class="btn btn-danger" href="{{route('post.delete',$post->id)}}" class="text-danger"--}}
                       {{--onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>--}}
                {{--</td>--}}
                {{--<img src="{{asset("storage/images/$item")}}" alt="" width="100px" height="100px">--}}

            {{--</tr>--}}
        {{--@endforeach--}}
    {{--@endif--}}
    {{--</tbody>--}}
{{--</table>--}}

<div>
    @foreach($album as $key => $item)

            @foreach(json_decode($item->images) as $image)
                <img src="{{asset('images/'.$image)}}">

            @endforeach

        @endforeach
</div>
