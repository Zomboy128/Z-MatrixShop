@extends('layouts.app')

@section('content')
<div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <br>
                <div>
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{ asset('assets/backend/images/logo.png') }}" alt="logo" /></span>
                    </div>
                    <br>
                    <br>
                    <!-- Form -->
                    <form method="POST" class="form-horizontal m-t-20" action="{{ route('register') }}">
                        @csrf
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg {{ $errors->has('name') ? ' is-invalid' : '' }} " placeholder="name" aria-label="name" aria-describedby="basic-addon1" value="{{ old('name') }}" required autofocus name="name">
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="ti-user""></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg {{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" value="{{ old('username') }}" required>
                                    @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder=" Confirm Password" aria-label="Password" aria-describedby="basic-addon1" name="password_confirmation" required>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <br>
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>

@endsection
