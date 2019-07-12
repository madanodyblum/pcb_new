@extends('layouts.auth')

@section('content')
<!-- start: page -->
            <div class="center-sign">
                <a href="/" class="logo pull-left">
                    <img src="assets/images/logo.png" height="54" alt="Porto Admin" />
                </a>

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> {{ __('Register') }} </h2>
                    </div>
                    <div class="panel-body">
                         <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-lg">
                                <input id="name" type="text" class="input-lg form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-lg">
                                <input id="email" type="email" class="input-lg  form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-none">
                                <div class="row">
                                    <div class="col-sm-6 mb-lg">
                                        <label>{{ __('Password') }}</label>
                                        <input id="password" type="password" class="input-lg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 mb-lg">
                                        <label>{{ __('Confirm Password') }}</label>
                                        
                                        <input id="password-confirm" type="password" class="input-lg form-control" name="password_confirmation" required>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox-custom checkbox-default">
                                        <input id="AgreeTerms" name="agreeterms" type="checkbox"/>
                                        <label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">{{ __('Register') }}</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">{{ __('Register') }}</button>
                                </div>
                            </div>

                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                            <div class="mb-xs text-center">
                                <a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
                                <a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
                            </div>

                            <p class="text-center">Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
            </div>
        <!-- end: page -->
@endsection
