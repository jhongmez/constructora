<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Juventud Constructora | Bienvenido</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<head>
  <!--core first + styles last-->
</head>
<body>
	@include('navbar')
	{{-- Sliders --}}
	<div class="owl-carousel owl-theme">
	    <div class="item backgroundFirst">
	    	<div class="container-fluid">
	    		<div class="row">
	    			<div class="col-sm-5 col-md-5">
	    				<p class="titlefirstSlider">
	    					Trabajamos <br>
	    					para que tus sueños se <br>
	    					<span>CUMPLAN</span>
	    				</p>
	    				<div class="col-md-8">
		    				<a href="" class="btn btn-danger btn-block btn-lg btn-call">
		    					<i class="fas fa-mobile-alt"></i> 317 5760480 
		    				</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <div class="item backgroundSecond"></div>
	    <div class="item backgroundThird"></div>
	</div>
	{{-- Informacion --}}
	<article id="about">
		<div class="container">
			<div class="row">
				<div class="containAbout">
					<h2 class="titleAbout">Quienes somos</h2>
					<div class="col-md-10 col-md-offset-1">
						<p class="textAbout">
							En <strong>Juventud Constructora</strong> trabajamos para brindarle a nuestros clientes confortables espacios para el disfrute de la vida en familia. Así mismo, la elegancia y bienestar en el diseño de cada proyecto. Nuestros valores incluyen la calidad, el compromiso y el ahorro, ya que hacemos nuestro trabajo con pasión buscando siempre los mejores resultados, lugares únicos
						</p>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 moveThumb">
							<div class="col-xs-12 col-sm-4 col-md-4">
							    <div class="thumbnail borderAbout">
							      <img src="{{ asset('images/piggybank.svg') }}" alt="..." class="imgThumb">
							      <div class="caption">
							        <h3 class="titleThumb">AHORRAS MÁS</h3>
							        <p>
							        	Sabemos que invertir bien el dinero es una gran satisfacción, por eso le damos valor a la creación de cada espacio
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
							    <div class="thumbnail borderAbout">
							      <img src="{{ asset('images/handshake.svg') }}" alt="..." class="imgThumb">
							      <div class="caption">
							        <h3 class="titleThumb">COMPROMISO</h3>
							        <p>
							        	Creamos vínculos con nuestros clientes conociendo sus deseos y características, nuestro objetivo... su satisfacción
							        </p>
							      </div>
							    </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
							    <div class="thumbnail borderAbout">
							      <img src="{{ asset('images/engineer.svg') }}" alt="..." class="imgThumb">
							      <div class="caption">
							        <h3 class="titleThumb">CALIDAD</h3>
							        <p>
							        	Tenemos una amplia trayectoria  el mundo de la construcción y sus facetas, lo que nos convierte  en tu mejor opción
							    	</p>
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<article id="projects">
		<div class="container-fluid backgroundProjects">
			<div class="row">
				<div class="containProjects">
					<h2 class="titleProjects">Nuestros proyectos</h2>
					<div class="col-md-10 col-md-offset-1">
						<p class="textProjects">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nobis reiciendis at iusto, quasi numquam nulla, laboriosam illo quo incidunt eaque, consequatur soluta! Sint magni doloribus sapiente, veritatis, blanditiis quod porro molestiae deleniti, nostrum expedita animi laboriosam. Alias deleniti consequuntur vitae facere sint architecto culpa ipsum provident molestias enim, officiis?
						</p>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-xs-6 col-md-4">
							    <a href="#" class="thumbnail">
							      	<img src="{{ asset('images/prueba.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-xs-6 col-md-4">
							    <a href="#" class="thumbnail">
							      	<img src="{{ asset('images/prueba.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-xs-6 col-md-4">
							    <a href="#" class="thumbnail">
							      	<img src="{{ asset('images/prueba.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-xs-6 col-md-4">
							    <a href="#" class="thumbnail">
							      	<img src="{{ asset('images/prueba.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-xs-6 col-md-4">
							    <a href="#" class="thumbnail">
							      	<img src="{{ asset('images/prueba.jpg') }}" alt="...">
							    </a>
							</div>
							<div class="col-xs-6 col-md-4">
							    <a href="#" class="thumbnail">
							      	<img src="{{ asset('images/prueba.jpg') }}" alt="...">
							    </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	@include('contact')
	@include('footerDev')
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>