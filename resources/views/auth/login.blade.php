@extends('home-page.header2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <h5 class="card-header info-color white-text text-center py-4"
                        style="background: #2176bd!important ; color: white">
                        <strong>{{ __('LOGIN') }}</strong>
                    </h5>
                    <div class="card-body px-lg-5 pt-0">
                        <form method="POST" action="{{ route('login') }}" class="text-left ">
                            @csrf

                            <div class="md-form" style="padding-top: 15px">
                                <label for="email">{{ __('EMAIL') }}</label>
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" placeholder="Enter Your Email" required autofocus>
                                <div class="col-md-6">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <label for="password">{{ __('PASSWORD') }}</label>
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" placeholder="Enter Your Password"
                                       required>
                                <div class="col-md-6">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex justify-content-around" style="padding-top: 15px">
                                <div>
                                    <!-- Remember me -->
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                </div>
                            </div>
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                    type="submit">LOGIN
                            </button>
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                    type="submit">LOGIN WITH FACEBOOK
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
