@extends('dashboard.layouts.login')

@section('content')
<div style="margin-top: 5rem">
    <img alt="image"  src="{{ asset('frontend_assets/img/tibb-maroon-logo.png') }}" style="-webkit-filter: drop-shadow(5px 5px 5px #5b5b5b); filter: drop-shadow(5px 5px 5px #5b5b5b)" class="img img-responsive" />
    {{-- <h1 class="logo-name">EHR</h1> --}}

</div>
<br>
<h3 >Welcome to Electronic Health Record</h3>

<p >Login in. To see it in action.</p>
<form method="POST" class="m-t" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
    </div>

    <div class="form-group row">
        
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
    </div>

    <div class="form-group row">
        
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        
    </div>

    <div class="form-group row">
        
            <button type="submit" class="btn btn-primary block full-width m-b">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}"><small>
                    {{ __('Forgot Your Password?') }}
                </small></a>
            @endif
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">{{ __('Register') }}</a>
        
    </div>
</form>
@endsection
