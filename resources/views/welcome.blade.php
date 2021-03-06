<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<head>
	<title>PC-ritas</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
			<div class="logo-w3layouts-agileits">
				<h1><a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-clone" aria-hidden="true"></i> Conceit <span class="desc">For your Business</span></a></h1>
			</div>
			</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
                  
                  <ul class="nav navbar-nav">
                     <li class="active"><a href="{{ url('/')}}">Inicio</a></li>
                     <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                     <li><a href="{{ url('portafolio') }}">Portafolio</a></li>
                     <li><a href="{{ url('contactanos') }}">Contactanos</a></li>
                  </ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
  <!-- banner -->
  
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>




	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Diseño efectivo</h3>
						<p>Soluciones al instante</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Leer mas</a>
							</div>
							<div class="bnr-button">
								<a href="portfolio.html" class="two scroll ">Portafolio</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Pensamiento empresarial</h3>
						<p>Tus deseos son ordenes</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Leer mas</a>
							</div>
							<div class="bnr-button">
								<a href="portfolio.html" class="two scroll ">Portafolio</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Diseños efectivos</h3>
						<p>Soluciones mas faciles</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Leer mas</a>
							</div>
							<div class="bnr-button">
								<a href="portfolio.html" class="two scroll ">Portafolio</a>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Pensamientos empresarales</h3>
						<p>Para ti y tu empresa</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Leer mas</a>
							</div>
							<div class="bnr-button">
								<a href="#portfolio" class="two scroll ">Portafolio</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">Acerca de nosotros</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/ab.png" alt=" " class="img-responsive">
					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4>Trabajo en equipo</h4>
						<p>Unidos siempre estaremos en alto al nivel nacional e internacional</p>
						<p>Siempre unidos.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Read More </a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="news-main">
				<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-laptop" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4>Soluciones digitales</h4>
								<p>Al alcance de tus manos.</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-pencil-square-o" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4>Constructor de sitios web</h4>
								<p>Plantillas</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos">
						<div class="banner_bottom_pos_grid">
							<div class="col-xs-3 banner_bottom_grid_left">
								<div class="banner_bottom_grid_left_grid">
									<span class="fa fa-newspaper-o" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-xs-9 banner_bottom_grid_right">
								<h4>Estrategia creativa</h4>
								<p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//ab-->
	<!--/what-->
	<div class="works">
		<div class="container">
			<h3 class="tittle-w3ls cen">QUE ES LO QUE HACEMOS</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-shield" aria-hidden="true"></span>
						<h3>UNICO DISEÑO</h3>ofrecemos un unico servicio a bajo presio 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<h3>DIFERENTE DISEÑO</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-star" aria-hidden="true"></span>
						<h3>ESTILOS PORTAFOLIO</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<h3>User Experience</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//what-->
	<!--/banner_bottom-->
	<div class="banner_bottom">
		<div class="banner_bottom_in">
			<h3 class="tittle-w3ls we">We provide high quality and cost effective offshore web development services.</h3>

			<p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
				nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


			<img src="images/banner_mid.jpg" class="img-responsive" alt="">
		</div>
	</div>
	<!--//banner_bottom-->
	<!--/projects-->
	<div class="banner_bottom proj">
		<div class="wrap_view">
			<h3 class="tittle-w3ls">Nuestros proyectos</h3>
			<div class="inner_sec">
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">Todo</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Página 1</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Página 2</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Página 3</a>
					</li>
					<li class="cat-item-4">
						<a href="#" title="Category 4">Página 4</a>
					</li>
				</ul>


				<ul class="portfolio-area">

					<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
						<div>
							<span class="image-block img-hover">
							<a class="image-zoom" href="images/g1.jpg" rel="prettyPhoto[gallery]">
							
									<img src="images/g1.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>Agendas de papel</h5>
											<p>Agendas artesanales hechas a mano con papel reciclado.</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g2.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g2.jpg" class="img-responsive" alt="Conceit">
								<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g3.jpg" rel="prettyPhoto[gallery]">
							
									<img src="images/g3.jpg" class="img-responsive" alt="Conceit">
								<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g4.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g4.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g5.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g5.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g6.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g6.jpg" class="img-responsive" alt="Conceit">
									<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g7.jpg" rel="prettyPhoto[gallery]">
							
									<img src="images/g7.jpg" class="img-responsive" alt="Conceit">
								      <div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>


					<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block">
							<a class="image-zoom" href="images/g8.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g8.jpg" class="img-responsive" alt="Conceit">
										<div class="port-info">
											<h5>View Project</h5>
											<p>Add Some Description</p>
										</div>
							
							</a>
						</span>
						</div>
					</li>

					<div class="clearfix"></div>
				</ul>
				<!--end portfolio-area -->

			</div>

		</div>
	</div>

	<!--//projects-->
	<!--/blog-->
	<div class="blog_sec">
		<h3 class="tittle-w3ls">Latest Blogs</h3>
		<div class="col-md-6 banner-btm-left">
			<div class="banner-btm-top">
				<div class="banner-btm-inner a1">
					<div class="blog_date">

						<h4>Jan.05.2018</h4>

					</div>
					<h6><a href="single.html">Strategic Planning</a></h6>
					<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Know More</a>
				</div>
				<div class="banner-btm-inner a2">

				</div>
			</div>
			<div class="banner-btm-bottom">
				<div class="banner-btm-inner a3">

				</div>
				<div class="banner-btm-inner a4">
					<div class="blog_date">

						<h4>Jan.08.2018</h4>

					</div>
					<h6><a href="single.html">Strategic Planning</a></h6>
					<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Know More</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 banner-btm-left">
			<div class="banner-btm-top">
				<div class="banner-btm-inner a1">
					<div class="blog_date">

						<h4>Jan.25.2018</h4>

					</div>
					<h6><a href="single.html">Strategic Planning</a></h6>
					<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Know More</a>
				</div>
				<div class="banner-btm-inner a5">

				</div>
			</div>
			<div class="banner-btm-bottom">
				<div class="banner-btm-inner a6">

				</div>
				<div class="banner-btm-inner a4">
					<div class="blog_date">

						<h4>Jan.05.2018</h4>

					</div>
					<h6><a href="single.html">Strategic Planning</a></h6>
					<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
					<div class="clearfix"></div>
					<a href="single.html" class="blog-btn">Know More</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<!--//blog-->
	<!--/bottom-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">NUESTRAS VENTAJAS
			</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_left">
						<h4>GARANTÍA </h4>
						<p>Todos Nuestro Productos Cuentan con Garantía de Marca, Nuevos y Origínales, Respaldadas por Las Mejores Marcas del Mercado Tecnológico.</p>
							<h4>PRECIOS INSUPERABLES </h4>
						<p>En Grupo Infotec Siempre Encontraras Los Mejores Precios, Ofertas, Promociones y Regalos. Todos los peruanos Merecemos el Mejor Producto al menor Precio.</p>
							<h4>MEJOR ATENCIÓN </h4>
						<p>Contamos Con Los Mejores Colaboradores Capacitados Motivados para Ofrecerle La Mejor Atención que Ud. se Merece. "Cuida de tus Empleados que ellos cuidaran de tus Clientes"</p>
						
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Lee más </a>
						</div>


					</div>

					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/banner_mid.jpg" alt=" " class="img-responsive">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--//bottom-->
	<!--/testimonials-->
	<div class="tesimonials">
		<div class="container">
			<h3 class="tittle-w3ls cen">PROMOCIONES</h3>
			<div class="inner_sec">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/t1.jpg" class="img-responsive" alt="">

											</div>
											<div class="col-sm-9 test_img_info">
												<p >PC Dell WorkStation Precision 3420 SFF Intel Core i7 6700 3.4 GHz, RAM 8GB, HDD 1TB , Video 2GB AMD FirePro W2100 , DVD, Win 10 Pro </p>
												<h6>S/ 11,299.00</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/t2.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>PC Todo En Uno HP 20-C200LA, Intel Celeron J3060 1.6GHz, RAM 4GB, HDD 1TB, Wi-FI, DVD, LED 19.5" HD+ (1600x900), Free</p>
												<h6>S/ 1,099.00</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 3 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/t3.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>PC Dell OptiPlex 5050 Intel Core i5 6500 3.2 GHz(vPro), RAM 8GB, HDD 500GB, Video 2GB AMD R5-340, DVD, Win 10 Pro+Monitor DELL de 18.5"</p>
												<h6>S/ 15,299.00</h6>
											</div>
										</div>
									</blockquote>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//testimonials-->

	<!-- /newsletter-->
	<div class="newsletter_w3ls_agileits">
		<div class="col-sm-6 newsleft">
			<h3>Regístrese para boletín!</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> PC-ritas </a></h2>
				<p>Visitenos  a todas nuestras redes  sociales </p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/login?lang=es" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/accounts/login/?hl=es-la" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.es/login/" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Latest <span>Info</span> </h4>
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="about.html">Acerca de</a></li>
							<li><a href="404.html">Servicio</a></li>
							<li><a href="signin.html">Registrarse</a></li>
							<li><a href="contact.html">Contactanos</a></li>
						</ul>
					</div>
				
					<div class="col-md-5 sign-gd-two">
						<h4>Contact <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Número de teléfono</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Dirección de correo electrónico</h6>
									<p>Email :<a href="Pc-ritas:example@email.com"> mail@example.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Ubicación</h6>
									<p> Pasaje San lorenzo N°280 San Carlos
 
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">&Pc-ritas 2018 Pc-ritas. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>



      

    