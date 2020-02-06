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
                            <h2 class="auth-heading">Patient</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input type="hidden" name="user_type" value="patient">
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

                                    <div class="group col-sm-6">
                                        <div class="form-wrapper">
                                            <label for="dp1" class="label">Date of Birth</label>
                                            
                                            <input 
                                            type="date" 
                                            name="dob" 
                                            {{-- class="input form-control datepicker-here" --}}
                                            class="input form-control" 
                                            {{-- data-language='en'  --}}
                                            {{-- data-date-format="dd M yyyy"  --}}
                                            value="{{ old('dob') }}" 
                                            {{-- id="dp1" --}}
                                            >

                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="group col-sm-6">
                                        <label for="emp_status" class="label">Employee Status</label>
                                        
                                        <select 
                                        id="emp_status"
                                        name="emp_status" 
                                        class="input form-control @error('emp_status') is-invalid @enderror"
                                        required>
                                            <option value="">Select Employee Status</option>
                                            <option value="Employeed">Employeed</option>
                                            <option value="Unemployeed">Unemployeed</option>
                                        </select>

                                        @error('emp_status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6" id="company_name_opt">
                                        <label for="company_name" class="label">Organisation Name</label>
                                        
                                        <input 
                                        type="text" 
                                        name="company_name" 
                                        id="company_name" 
                                        class="input form-control @error('company_name') is-invalid @enderror"
                                        value="{{ old('company_name') }}" 
                                        >

                                        @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6" id="company_web_opt">
                                        <label for="company_web" class="label">Organisation Website</label>
                                        
                                        <input 
                                        type="text" 
                                        name="company_web" 
                                        id="company_web" 
                                        class="input form-control @error('company_web') is-invalid @enderror"
                                        value="{{ old('company_web') }}" 
                                        >

                                        @error('company_web')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <label for="marital_status" class="label">Marital Status</label>
                                        
                                        <select 
                                        id="marital_status"
                                        name="marital_status" 
                                        class="input form-control @error('marital_status') is-invalid @enderror">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Divorced</option>
                                            <option>Widow</option>
                                        </select>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <label for="family_size" class="label">Family Size</label>
                                        <input 
                                        type="number" 
                                        name="family_size" 
                                        id="family_size" 
                                        class="input form-control @error('family_size') is-invalid @enderror"
                                        value="{{ old('family_size') }}" 
                                        required >

                                        @error('family_size')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-12">
                                        <label for="address" class="label">Address</label>
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

                                    <div class="group col-sm-12">
                                        <label for="nic_no" class="label">NIC #</label>
                                        <input 
                                        type="number" 
                                        name="nic_no" 
                                        id="nic_no" 
                                        value="{{ old('nic_no') }}"
                                        class="input form-control @error('nic_no') is-invalid @enderror"
                                        required >

                                        @error('nic_no')
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

                                
                                <div class="group mt-4">
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
                            <h3 class="text-white slogan-text">Health care powered by AI</h3>
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
<script type="text/javascript">
    
$('#emp_status').change(function(){
    if($('#emp_status').val() == 'Employeed'){
        $('#company_name_opt').show('slow');
        $('#company_web_opt').show('slow');
    }
    else{
        $('#company_name_opt').hide('slow');
        $('#company_web_opt').hide('slow');
    }
});

</script>
@endsection