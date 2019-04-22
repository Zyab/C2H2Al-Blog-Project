@extends ('home-page.header2')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4"
                        style="background: #009688!important ; color: white">
                        <strong>EDIT PROFILE</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <form method="POST" action="{{ route('user.update', Auth::user()->id) }}" class="text-center" enctype="multipart/form-data">
                            @csrf

                            <div class="md-form" style="padding-top: 15px">
                                <h5>{{ 'Name' }}</h5>
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="name" value="{{ Auth::user()->name }}" placeholder="Enter Your Name"
                                       required autofocus>
                                <div class="col-md-6">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5>{{ 'E-Mail Address' }}</h5>
                                <input id="email" type="text"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ Auth::user()->email }}" placeholder="Enter Your New Email"
                                       required autofocus>
                                <div class="col-md-6">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5>{{ 'IMAGE' }}</h5>
                                <input id="image" type="file"
                                       class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                       name="image" value="{{ Auth::user()->image }}" placeholder="Enter Your Avatar">
                                <div class="col-md-6">
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5>{{'AGE' }}</h5>
                                <input id="age" type="text"
                                       class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"
                                       name="age" value="{{ Auth::user()->age }}" placeholder="Enter Your Age">
                                <div class="col-md-6">
                                    @if ($errors->has('age'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5>{{ 'ADDRESS'}}</h5>
                                <input id="address" type="text"
                                       class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                       name="address" value="{{ Auth::user()->address }}"
                                       placeholder="Enter Your Address">
                                <div class="col-md-6">
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="md-form" style="padding-top: 15px">
                                <h5>{{ 'PHONE'}}</h5>
                                <input id="phone" type="text"
                                       class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                       name="phone" value="{{ Auth::user()->phone }}"
                                       placeholder="Enter Your Number Phone">
                                <div class="col-md-6">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <button type="submit"
                                    class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                                {{ 'EDIT' }}
                            </button>

                        </form>
                    </div>
                </div>

@endsection
