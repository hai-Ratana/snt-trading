<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.frontEnd.meta')
    <title>SNT || Trading </title>

    @include('partials.frontEnd.style')
  </head>
  <body>
	@include('partials.frontEnd.header')
	@include('partials.frontEnd.navigation')
	<!-- Header-Section-End  -->
	@include('partials.frontEnd.slider')
	@yield('content')
	<!-- Compare-Ection-End  -->
	@include('partials.frontEnd.footer')
	@include('partials.frontEnd.script')
  </body>
</html>
