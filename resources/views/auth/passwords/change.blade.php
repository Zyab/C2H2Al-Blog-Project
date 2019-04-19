@extends('home-page.header2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-7">
                <div class="card">
                    @if(session('errorMsg'))
                        <div class="alert alert-danger" role="alert">
                            {{session('errorMsg')}}
                        </div>
                    @endif
                    <h5 class="card-header info-color white-text text-center py-4" style="background: #2176bd!important ; color: white">
                        <strong>Change Password</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <form method="POST" action="{{ route('password.update') }}" class="text-left" >
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">@lang('Old Password')</label>
                                <input id="old-password" type="password" class="form-control"
                                       name="oldpassword" placeholder="Enter Your Old Password">
                                <div class="col-md-6">
                                    @if ($errors->has('oldpassword'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control"
                                       name="password" value="{{ old('password') }}"placeholder="Enter Your Password">
                                <div class="col-md-6">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"  placeholder="Enter Your Password">
                            </div>


                            <button type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                                {{ __('Register') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
