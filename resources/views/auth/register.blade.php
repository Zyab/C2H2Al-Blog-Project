@extends('home-page.header2')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-7">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4" style="background: #009688!important ; color: white">
                    <strong>REGISTER</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form method="POST" action="{{ route('register') }}" class="text-center" >
                        @csrf

                        <div class="md-form" style="padding-top: 15px">
                            <h5 for="materialLoginFormEmail">{{ __('Name') }}</h5>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ old('name') }}"placeholder="Enter Your Name" required autofocus>
                            <div class="col-md-6">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form" style="padding-top: 15px">
                            <h5 for="materialLoginFormEmail">{{ __('E-Mail Address') }}</h5>
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" placeholder="Enter Your Email"required autofocus>
                            <div class="col-md-6">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form" style="padding-top: 15px">
                            <h5 for="materialLoginFormEmail">{{ __('Password') }}</h5>
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
