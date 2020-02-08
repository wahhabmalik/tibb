{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

@extends('frontend.layouts.app')

@section('styles')
<style type="text/css">
body{
    font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}


</style>
@endsection

@section('content')

<div class="hero" style="background-image: url('{{ asset('frontend_assets/img/bg-1.jpg') }}'); height: 114vh;">
    <div class="hero-after" >
        <div class="container">
            <div class="hero__content">
                <div class="row  pt-5 pb-5 flex-column-reverse flex-md-row">
                    
                    <div class="col-md-2 col-sm-12 col-12"></div>
                    <div class="col-md-8 col-sm-12 col-12">
                        <div class="login-wrap">
                            <div class="login-html">
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab tab-top">Physician</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab tab-top">Pharmacist</label>
                                <div class="login-form">
                                    <div class="sign-in-htm">
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" value="physician">
                                        <div class="row">
                                            <div class="group col-sm-6">
                                                <label for="name" class="label">First Name</label>
                                                <input 
                                                type="text" 
                                                name="name" 
                                                id="name" 
                                                value="{{ old('name') }}" 
                                                class="input form-control @error('name') is-invalid @enderror" 
                                                required >

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="l_name" class="label">Last Name</label>
                                                <input 
                                                type="text" 
                                                name="l_name" 
                                                id="l_name" 
                                                value="{{ old('l_name') }}" 
                                                class="input form-control @error('l_name') is-invalid @enderror" 
                                                required >

                                                @error('l_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-12">
                                                <label for="address" class="label">Clinic Address</label>
                                                <input 
                                                type="text" 
                                                name="address" 
                                                id="address" 
                                                value="{{ old('address') }}"
                                                class="input form-control @error('address') is-invalid @enderror"
                                                required >

                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="email" class="label">Email</label>
                                                <input 
                                                type="email" 
                                                name="email" 
                                                id="email" 
                                                class="input form-control @error('email') is-invalid @enderror"
                                                required >

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="phone" class="label">Telephone #</label>
                                                <input 
                                                type="number" 
                                                name="phone" 
                                                id="phone" 
                                                class="input form-control @error('phone') is-invalid @enderror"
                                                required >

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-4">
                                                <label for="specialty" class="label">Specialty</label>
                                                <input 
                                                type="text" 
                                                name="specialty"
                                                id="specialty"
                                                class="input form-control @error('specialty') is-invalid @enderror" 
                                                required >

                                                @error('specialty')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="group col-sm-4">
                                                <label for="pmdc_id" class="label">PMC ID</label>
                                                <input 
                                                type="text" 
                                                name="pmdc_id"
                                                id="pmdc_id"
                                                class="input form-control @error('pmdc_id') is-invalid @enderror" 
                                                >

                                                @error('pmdc_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-4">
                                                <label for="dea" class="label">DEA #</label>
                                                <input 
                                                type="text" 
                                                name="dea"
                                                id="dea"
                                                class="input form-control @error('dea') is-invalid @enderror"
                                                >

                                                @error('dea')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="password" class="label">Password</label>
                                                <input 
                                                id="password" 
                                                type="password" 
                                                class="input form-control @error('password') is-invalid @enderror" 
                                                name="password" 
                                                autocomplete="new-password" 
                                                data-type="password"
                                                required >

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="password-confirm" class="label">Confirm Password</label>
                                                <input 
                                                id="password-confirm" 
                                                type="password" 
                                                class="input form-control" 
                                                name="password_confirmation" 
                                                required 
                                                autocomplete="new-password" 
                                                data-type="password">
                                            </div>
                                        </div>
                                        {{-- <div class="group">
                                            <div class="form-wrapper">
                                                <label for="pass" class="label">Date of Birth</label>
                                                <span class="lnr lnr-calendar-full"></span>
                                                <input type="text" class="input datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp1">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="group">
                                            <input id="check" type="checkbox" class="check" checked>
                                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                        </div> --}}
                                        <div class="group">
                                            <button class="button btn-danger" value="Sign In">Register</button>
                                        </div>
                                        {{-- <div class="hr"></div> --}}
                                        </form>
                                    </div>
                                    <div class="sign-up-htm">
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" value="pharmacist">
                                        <div class="row">
                                            <div class="group col-sm-6">
                                                <label for="user" class="label">First Name</label>
                                                <input 
                                                type="text" 
                                                name="name" 
                                                id="name" 
                                                value="{{ old('name') }}" 
                                                class="input form-control @error('name') is-invalid @enderror" 
                                                required >

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="user" class="label">Last Name</label>
                                                <input 
                                                type="text" 
                                                name="l_name" 
                                                id="l_name" 
                                                value="{{ old('l_name') }}" 
                                                class="input form-control @error('l_name') is-invalid @enderror" 
                                                required >

                                                @error('l_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="group col-sm-12">
                                                <label for="address" class="label">Clinic Address</label>
                                                <input 
                                                type="text" 
                                                name="address" 
                                                id="address" 
                                                value="{{ old('address') }}"
                                                class="input form-control @error('address') is-invalid @enderror"
                                                required >

                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="email" class="label">Email</label>
                                                <input 
                                                type="email" 
                                                name="email" 
                                                id="email" 
                                                class="input form-control @error('email') is-invalid @enderror"
                                                required >

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="phone" class="label">Telephone #</label>
                                                <input 
                                                type="number" 
                                                name="phone" 
                                                id="phone" 
                                                class="input form-control @error('phone') is-invalid @enderror"
                                                required >

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="password" class="label">Password</label>
                                                <input 
                                                id="password" 
                                                type="password" 
                                                class="input form-control @error('password') is-invalid @enderror" 
                                                name="password" 
                                                autocomplete="new-password" 
                                                data-type="password"
                                                required >

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="group col-sm-6">
                                                <label for="password-confirm" class="label">Confirm Password</label>
                                                <input 
                                                id="password-confirm" 
                                                type="password" 
                                                class="input form-control" 
                                                name="password_confirmation" 
                                                required 
                                                autocomplete="new-password" 
                                                data-type="password">
                                            </div>
                                        </div>

                                        <div class="group">
                                            <button class="button btn-danger">Register</button>
                                        </div>
                                        <br>
                                        {{-- <div class="hr"></div> --}}
                                        <div class="foot-lnk">
                                            {{-- <label for="tab-1">Already Member?</a> --}}
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 col-sm-12 col-12">
                        <div class="mt-5 pd-5">
                            <a href="{{ route('/') }}">
                            <img src="{{ asset('frontend_assets/img/tibb-logo.png') }}" class="img img-fluid mt-5 align-middle">
                            </a>
                            <br>
                            <h3 class="text-white slogan-text">Health care powered by AI</h3>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection