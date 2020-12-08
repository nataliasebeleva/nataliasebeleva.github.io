<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
 	<div class="container">
 				<div class="row top">
 					<div class="col-sm-12 col-center-xs col-center-sm col-md-4 top-logo">
 						<h1>Мебель Елена</h1>
 						<p>Производство и продажа мебели по всей России</p>
 					</div>
 					<!-- <div class="col-md-6">
 						<div class="row text-right"> -->
 							<div class=" col-xs-12 col-center-xs col-sm-6 col-md-3 col-md-offset-2 text-right top-links">
 								<a href="#">+7 (495) 128-13-56</a>
 								<br>
 								<a href="#">mebel.elena@bk.ru</a>
 							</div>
 							<div class=" col-xs-12 col-center-xs col-sm-6 col-md-3 text-right-md top-button">
 								<button class="buttons btn-z-z" data-fancybox data-src="#modal-form" href="javascript:;">ЗАКАЗАТЬ ЗВОНОК</button>
 							</div>
 						</div>
 					<!-- </div> -->
 				</div>
 			</div>
 		<hr>
 			<div class="container">
 				<div class="row text-center">
 					<div class="col-12 col-center-xs">
 						<?php 
							wp_nav_menu( array (
								'theme_location' => 'menu-1',
								'menu_id' => 'menu-1',
								'container_class' => 'menu',
							));
						 ?>
 					</div>
 					
 				</div>
 			</div>
