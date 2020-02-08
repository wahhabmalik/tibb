@extends('frontend.layouts.app')

@section('styles')
<style type="text/css">
body{
    font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

#company_name_opt,#company_web_opt{
    display: none;
}

</style>
@endsection

@section('content')

<div class="hero" style="background-image: url('{{ asset('frontend_assets/img/bg-1.jpg') }}')">
    <div class="hero-after" >
        <div class="container">
            <div class="hero__content">
                
                <div class="row pt-5 pb-5 flex-column-reverse flex-md-row">
                    <div class="col-md-8 col-sm-12 col-12">
                        <div class="form-back">
                            <h2 class="auth-heading">Physician</h2>
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
                                        value="{{ old('email') }}"
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
                                        value="{{ old('phone') }}"
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
                                        value="{{ old('specialty') }}"
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
                                        value="{{ old('pmdc_id') }}"
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
                                        value="{{ old('dea') }}"
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
                                <br>
                                <br>
                                <div class="group">
                                    <button class="input button btn-danger" value="Sign In">Register</button>
                                </div>
                                {{-- <div class="hr"></div> --}}
                                </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="mt-5">
                            <a href="{{ route('/') }}">
                            <img src="{{ asset('frontend_assets/img/tibb-logo.png') }}" class="img img-fluid mt-5 align-middle">
                            </a>
                            <br>
                            <h3 class="text-white slogan-text mt-3">Health care powered by AI</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@endsection