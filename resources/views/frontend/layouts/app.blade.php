<!DOCTYPE html>
<html>

<head>
	@include('frontend.partials.header')
	@yield('styles')
</head>

<body>
    
	@yield('content')
    
    @include('frontend.partials.footer')
    @yield('scripts')
</body>
</html>
