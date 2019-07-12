@extends('layouts.auth')

@section('content')
<div class="center-sign">
    <a href="/" class="logo pull-left">
        <img src="{{asset('assets/images/logo.png')}}" height="54" alt="Porto Admin" />
    </a>

    <div class="panel panel-sign">
        <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i>{{ __('Reset Password') }}</h2>
        </div>
        <div class="panel-body">
            <div class="alert alert-info">
                <p class="m-none text-semibold h6">Enter your {{ __('E-Mail Address') }} below and we will send you reset instructions!</p>
            </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group mb-none">
                            <div class="input-group">
                                 @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                 @endif
                                <input id="email" name="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control input-lg"  value="{{ old('email') }}" required/>
                               
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-lg" type="submit">Reset!</button>
                                </span>
                            </div>
                        </div>

                        <p class="text-center mt-lg">Remembered? <a href="{{ route('login') }}">Sign In!</a>
                    </form>
                </div>
            </div>

    <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2019. All rights reserved. Template by <a>Colorlib</a>.</p>
</div>
        <!-- end: page -->
@endsection
