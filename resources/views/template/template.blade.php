<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<!-- jquery -->
    <script type="text/javascript" src="<?php echo asset('assets/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('assets/js/jquery.mask.min.js')?>"></script>

    <!-- javascript principal -->
    <script type="text/javascript" src="<?php echo asset('assets/js/javascript.js')?>"></script>

    <!-- mascara para campos -->
    @yield('mascara')

	<!-- css -->
	<link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" type="text/css">
</head>
<body>
	<header>
		<div class="logo">
			<img class="imagem-logo"src="<?php echo asset('assets/images/logo.png')?>">
		</div>
		<div class="search">
			@yield('form-search')
		</div>
	</header>
	@yield('content')
</body>
</html>