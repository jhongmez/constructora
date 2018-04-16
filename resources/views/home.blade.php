<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Juventud Constructora | Bienvenido</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<head>
  <!--core first + styles last-->
</head>
<body>
	<section id="background">
		@include('navbar')
		<div class="container">
			<div class="containBackground">
				<p class="titleBackground">Trabajamos para que</p>
				<p class="subtitleBackground">tus sueños se</p>
				<p class="thirdtitleBackground">cumplan</p>
				<div class="separator"></div>
				<a href="tel://" class="btn btn-call btn-lg">
					<i class="fas fa-phone-volume"></i>&nbsp;¡Comunicate con nosotros! 317-576-0480
				</a>
			</div>
		</div>
	</section>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>