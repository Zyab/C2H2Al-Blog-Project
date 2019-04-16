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
                    <h5 class="card-header info-color white-text text-center py-4" style="background: #009688!important ; color: white">
                        <strong>Change Password</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <form method="POST" action="{{ route('password.update') }}" class="text-center" >
                            @csrf

                            <div class="md-form" style="padding-top: 15px">
                                <h5 for="materialLoginFormEmail">@lang('Old Password')</h5>
                                <label for="old-password"></label>
                                <input id="old-password" type="password" class="form-control{{ $errors->has('oldpassword') ? ' is-invalid' : '' }}"
                                       name="oldpassword" placeholder="Enter Your Old Password" required autofocus>
                                <div class="col-md-6">
                                    @if ($errors->has('oldpassword'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5 for="materialLoginFormEmail">{{ __('Password') }}</h5>
                                <label for="password"></label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" value="{{ old('password') }}"placeholder="Enter Your Password" required autofocus>
                                <div class="col-md-6">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5 for="materialLoginFormEmail">{{ __('Confirm Password') }}</h5>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"  placeholder="Enter Your Password"required>
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
