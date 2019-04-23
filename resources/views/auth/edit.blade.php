@extends ('home-page.header2')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4"
                        style="background: #2176bd!important ; color: white">
                        <strong>EDIT PROFILE</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">
                        <form method="POST" action="{{ route('user.update', Auth::user()->id) }}" class="text-center"
                              enctype="multipart/form-data">
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
                            <div class="form-group row " style="padding-top: 15px">
                                <!-- Material input -->
                                <label for="inputPassword3MD" class="col-sm-4 text-center">NAME</label>
                                <div class="col-sm-8">
                                    <div class="md-form mt-0">
                                        <input id="name" type="text"
                                               class="form-control"
                                               name="name" value="{{ Auth::user()->name }}"
                                               placeholder="Enter Your Name">
                                        <div class="col-md-6">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row " style="padding-top: 15px">
                                <label for="inputPassword3MD" class="col-sm-4 col-form-label">EMAIL ADDRESS</label>
                                <div class="col-sm-8">
                                    <div class="md-form mt-0">
                                        <input id="email" type="text"
                                               class="form-control"
                                               name="email" value="{{ Auth::user()->email }}"
                                               placeholder="Enter Your New Email">
                                        <div class="col-md-6">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group row" style="padding-top: 15px">
                                    <label for="inputPassword3MD" class="col-sm-4 col-form-label">IMAGE</label>
                                    <div class="col-sm-8">
                                        <div class="md-form mt-0">
                                            <input id="image" type="file"
                                                   class="form-control"
                                                   name="image" value="{{ Auth::user()->image }}"
                                                   placeholder="Enter Your Avatar">
                                            <div class="col-md-6">
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <img src="{{asset('storage/'.Auth::user()->image)}}"
                                                 style="height: 150px; width: 150px; margin-top: 20px">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-lg-start" style="padding-top: 15px">
                                    <label for="inputPassword3MD" class="col-sm-4 col-form-label">ADDRESS</label>
                                    <div class="col-sm-8">
                                        <div class="md-form mt-0">
                                            <input id="address" type="text"
                                                   class="form-control"
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
                                    </div>
                                </div>

                                <div class="form-group row justify-content-lg-start" style="padding-top: 15px">
                                    <label for="inputPassword3MD" class="col-sm-4 col-form-label">PHONE</label>
                                    <div class="col-sm-8">
                                        <div class="md-form mt-0">
                                        <input id="phone" type="text"
                                               class="form-control"
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
                                    </div>
                                </div>
                                <div class="form-group row justify-content-lg-start" style="padding-top: 15px">
                                    <label for="inputPassword3MD" class="col-sm-4 col-form-label">Birthday</label>
                                    <div class="col-sm-8">
                                        <div class="md-form mt-0">
                                            <input  type="date"
                                                   class="form-control"
                                                   name="dob" value="{{ Auth::user()->dob }}"
                                                   placeholder="Enter Your birthday">
                                            <div class="col-md-6">
                                                @if ($errors->has('dob'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit"
                                            class="btn btn-outline-info tn-rounded btn-block my-4 waves-effect z-debpth-0">
                                        {{ 'EDIT' }}
                                    </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
