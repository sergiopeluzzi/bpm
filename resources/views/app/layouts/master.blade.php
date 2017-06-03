<!DOCTYPE html>
<html>

<head lang="pt-BR">
	@include('app.layouts.head')
</head>

<body class="with-side-menu">
	@include('app.layouts.header')
	<!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	@include('app.layouts.nav')
	<!--.side-menu-->

	<div class="page-content">
		<div class="container-fluid">
			 @yield('content')
		</div>
		<!--.container-fluid-->
	</div>
	<!--.page-content-->

	@include('app.layouts.scripts')
	
</body>

</html>
