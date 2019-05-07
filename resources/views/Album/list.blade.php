
@extends('home')
@section('main')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('success') }}</div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('error'))
        <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('error') }}</div>
    @endif
    <div class="row">
        @if(count($album)=== 0)
                        <p class="text-danger">Chưa có Album nào</p>
        @else
            @foreach($album as $key => $item)

                    <div class="card bg-light mb-4 col-md-12" style="padding: 0px">
                        <div class="row">

                        </div>
                        <div class="card-header">
                            <a href="{{ route('album.detail',$item->id)}} " style="color: black">
                            <h4 class="card-title">Album number: {!! $item->id !!}</h4>
                            </a>
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

