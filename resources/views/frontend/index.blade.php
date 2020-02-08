@extends('frontend.layouts.app')

@section('content')

<div class="hero" style="background-image: url('{{ asset('frontend_assets/img/bg-3.jpg') }}');height: 100vh;background-size: 150%;" >
	<div class="hero-after ">
		<div class="container">
			<div class="row hero__content pt-5">
				<div class="col-md-12 col-sm-12 col-12 text-center">
					<img src="{{ asset('frontend_assets/img/tibb-logo.png') }}" class="img img-fluid mt-5">
					<br>
					<br>
					<h1 class="text-white slogan-text-ind">Healthcare powered by AI</h1>
					<br>
					<br>
					@auth
						<p class="text-white" style="font-weight: 700; font-size: 20px;">Thank you for Registering, We will contact you through email for further login instructions...
					</p>
					@else
						<a class="btn" href="{{ route('register-physician') }}">Register as Physician</a>
						<a class="btn" href="{{ route('register-pharmacist') }}">Register as Pharmacist</a>
						{{-- <a class="btn" href="{{ route('register-patient') }}">Register as patient</a> --}}
					@endauth
				</div>
			</div>
		</div>
	</div>
</div>

@endsection