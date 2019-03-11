<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-head">

		<div class="top-head">
			<div class="container">
				<div class="row align-items-center">

					<div class="col-md-auto">
						<a href="/" class="logo"><img src="/wp-content/uploads/2019/02/logo.png" alt="логотип"></a>
					</div>

					<div class="col-md-auto">
						<span class="dec"><span>Центр обучения<br> росписи на ногтях</span></span>
					</div>

					<div class="col-md-auto">
						<a href="#popupp" class="popupp">Записаться на курс</a>
					</div>

					<div class="col-md-auto">
						<div class="soc">
							<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
						</div>
					</div>

					<div class="col-md-auto">
						<a href="#map" class="map">Как найти <i class="fa fa-map-o" aria-hidden="true"></i></a>
					</div>

					<div class="col-md-auto">
						<div class="phone">
							<a href="tel:89054386163">8 905 438 61 63</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="bot-head">
			<div class="container">
				<nav>
					<?php wp_nav_menu('menu=main'); ?>
				</nav>
			</div>
		</div>
	</header>