@extends('home')
@section('main')

    @if (Session::has('success'))
        <h4 class="text-success">
            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
        </h4>
    @endif
    <div class="row">
        @if(count($album)=== 0)
            <p class="text-danger">Chưa có Album nào</p>
        @else
            @foreach($album as $key => $item)

                <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('album.detail',$item->id)}} " style="color: black">
                                    <h4 class="card-title" style="padding-top: 20px">Album number: {!! $item->id !!}</h4>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="dropdown" style="text-align: right">
                                    <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <h1 style="color:black">...</h1>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                         style="text-align: left">
                                        <a class="dropdown-item btn-outline-light" href="#">Edit Album</a>
                                        <a class="dropdown-item btn-outline-light"
                                           href="{{route('album.delete',$item->id)}}"
                                           class="text-danger"
                                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Album</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->name }}</h4>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>

                    <div class="card-body">
                        <hr>
                        <p class="card-text">Created {{ $item->created_at }} by {{Auth::user()->name}}</p>
                    </div>
                </div>

            @endforeach
        @endif

    </div>

@endsection

