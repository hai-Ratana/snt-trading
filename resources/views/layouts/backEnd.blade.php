<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.backEnd.meta')
		<title>Dashboard - SNT Admin</title>
    @include('partials.backEnd.style')


	</head>

	<body class="no-skin">
		@include('partials.backEnd.navigation')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			@include('partials.backEnd.sidebar')

			<div class="main-content">
				<div class="main-content-inner">
					@include('partials.backEnd.breadcrumb')
          @yield('content')

				</div>
			</div><!-- /.main-content -->

			@include('partials.backEnd.footer')

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		@include('partials.backEnd.script')

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->

	</body>
</html>
