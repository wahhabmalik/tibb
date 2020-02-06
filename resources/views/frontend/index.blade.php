@extends('frontend.layouts.app')

@section('content')

<div class="" style="background-image: url('{{ asset('frontend_assets/img/bg-1.jpg') }}');height: 100vh;background-size: 150%;" >
	<div class="hero-after-home">
		<div class="container">
			<div class="row hero__content pt-5">
				<div class="col-md-7 col-sm-12 col-12">
					<img src="{{ asset('frontend_assets/img/tibb-maroon-logo.png') }}" class="img img-fluid mt-5">
					<br>
					<br>
					<h1 class="text-white slogan-text-ind">Health care powered by AI</h1>
					<br>
					<a class="btn" href="{{ route('register') }}">Register Now</a>
					<a class="btn" href="{{ route('register-patient') }}">Register as patient</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection