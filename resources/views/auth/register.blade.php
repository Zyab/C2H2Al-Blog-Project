@extends('home-page.header2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-7">
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4" style="background: #2176bd!important ; color: white">
                        <strong>REGISTER</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <form method="POST" action="{{ route('register') }}" class="text-left" >
                            @csrf

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control"
                                       name="name" value="{{ old('name') }}"placeholder="Enter Your Name">
                                <p class="help text-danger">{{ $errors->first('name') }}</p>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="text" class="form-control"
                                       name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                <p class="help text-danger">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('Birthday') }}</label>
                                <input type="date" class="form-control"
                                       name="dob"  placeholder="Enter Your Birthday">
                                <p class="help text-danger">{{ $errors->first('dob') }}</p>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control"
                                       name="password" value="{{ old('password') }}"placeholder="Enter Your Password" >
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <label for="materialLoginFormEmail">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"  placeholder="Enter Your Password">
                                <p class="help text-danger">{{ $errors->first('password') }}</p>
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
