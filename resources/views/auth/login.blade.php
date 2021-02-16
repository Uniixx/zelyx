@extends('layout.authentication')
@section('title', 'Login')


@section('content')
<div class="card">
    <div class="text-center mb-2">
        <a class="header-brand" href="{{route('hrms.index')}}"><i class="fe fe-command brand-logo"></i></a>
    </div>
    <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div class="card-title">Login to your account</div>
        <div class="form-group">
            <input id="email" name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" />
            <span class="custom-control-label">Remember me</span>
            </label>
        </div>
        <div class="form-footer">
        <button type="submit" class="btn btn-primary btn-block">
        Sign in
        </button>
        </div>
    </div>
    </form>
    <div class="text-center text-muted">
        Don't have account yet? <a href="{{route('authentication.register')}}">Sign up</a>
    </div>
</div>
@stop
