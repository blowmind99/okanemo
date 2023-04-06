@extends('layout.master.auth.index')
@push('title', 'Login')
@section('content')
<div class="nk-content ">
    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
        <div class="brand-logo pb-4 text-center">
            <a href="{{ url('/') }}" class="logo-link">
                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
                @include('layout.public-component.alert')
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Sign-In</h4>
                        <div class="nk-block-des">
                            <p>Access the admin panel using your email and passcode.</p>
                        </div>
                    </div>
                </div>
                <form action="{{ url('/') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="form-control-wrap">
                            <input type="text" name="email" class="form-control form-control-lg @error('email') error @enderror" value="{{ old('email') }}" placeholder="Please input your email">
                            @include('layout.public-component.error-input', ['name' => 'email'])
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label">Password</label>
                            <a class="link link-primary link-sm" href="#">Forgot code ?</a>
                        </div>
                        <div class="form-control-wrap">
                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') error @enderror" placeholder="Please input your password">
                            @include('layout.public-component.error-input', ['name' => 'password'])
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </div>
                </form>
                <div class="form-note-s2 text-center pt-4"> New on our platform?
                    <a href="">Create an account</a>
                </div>
                <div class="text-center pt-4 pb-3">
                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                </div>
                <ul class="nav justify-center gx-4">
                    <li class="nav-item"><a class="nav-link" href="">Google</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nk-footer nk-auth-footer-full">
        <div class="container wide-lg">
            <div class="row g-3">
                <div class="col-lg-6 order-lg-last">
                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms & Condition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="nk-block-content text-center text-lg-left">
                        <p class="text-soft">&copy; 2023 Test.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
