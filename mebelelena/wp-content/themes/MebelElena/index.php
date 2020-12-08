<!--  Template Name: Главная  -->
<?php
get_header();
?>

<section>
		<div class="owl-carousel owl-theme owl-carousel-1">
		<?php

			if(have_posts()) : query_posts("cat=5");
			while(have_posts()) : the_post();

		?>
		<div class="item item1">
			<div class="container">
	
				<p>
					<?php echo get_field('текст_слайдера') ?>		
				</p>
				<button class="btn-sd-z">СДЕЛАТЬ ЗАКАЗ</button>
		
			</div>
			<img class="img-responsive" src="<?php echo get_field('фото_слайдера'); ?>" alt="">
	    </div> 
	    <?php

	    	endwhile;
	    	endif;
	    	wp_reset_query();

	    ?>
	</div>
	
	</section>
	<section class="about-company">
		<div class="container">
			<div class="row">
				<div class="col-12 col-center-xs text-center name-section">
					<h3>О КОМПАНИИ</h3>
				</div>
			</div>
		</div>	
		<div class="row about-company-content">	
			<div class="col-md-5 col-sm-12 col-center-xs col-center-sm text-right a-c-c-img">
				<img class="images image-1" src="<?php echo get_field('фото_о_компании', 70); ?>" alt="">	
			</div>
			<div class="col-md-7 about-company-content-info">
				<div class="container cont-p">
					<div class="row cont-row">
						<div class="col-lg-7 col-md-11 col-p">
							<?php echo get_field('текст_о_компании', 70);
									 // if(have_posts()): 
									 // 	while(have_posts()): the_post();
									 // 		the_content();
									 // 	endwhile;
									 // 	endif;
									 	
									?>
							
							<button class="buttons btn-podrobnee">ПОДРОБНЕЕ</button>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-center-xs text-center name-section">
					<h3>ПОЧЕМУ ЛУЧШЕ СОВЕРШАТЬ ПОКУПКИ В МАГАЗИНЕ "МЕБЕЛЬ ЕЛЕНА"</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-center-xs col-center-sm col-center-md head-section">
					<p><?php echo get_field('текст_почему_лучше', 70) ?></p>
				</div>
			</div>
		</div>	
			<div class="row">
				<div class="col-md-7 about-company-content-info">
					<div class="container container-01-02">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-12 col-center-xs col-center-sm numbers number1 text-right">
								<p>01</p>
							</div>
							<div class="col-lg-6 col-md-9 numbers-texts-text2">
								<?php echo get_field('контент_текст_1', 70) ?>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-md-3 col-sm-12 col-center-xs col-center-sm numbers number2 text-right">
								<p>02</p>
							</div>
							<div class="col-lg-6 col-md-9 numbers-texts-text2">
								<?php echo get_field('контент_текст_2', 70) ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-center-xs col-center-sm">
					<img class="images" src="<?php echo get_field('фото_почему_лучше', 70); ?>" alt="">
				</div>
			</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center name-section">
					<h3>НАШИ ПРЕИМУЩЕСТВА</h3>
				</div>
			</div>
			<div class="row row-icons text-center">
				<div class="col-md-10 col-md-offset-2">
					<div class="row">
						<div class="col-md-2 icons">				
							<span class="icon-icon1"></span>
							<p>Качество</p>
						</div>
						<div class="col-md-2 icons">
							<span class="icon-icon2"></span>
							<p>Скорость доставки</p>
						</div>
						<div class="col-md-2 icons">
							<span class="icon-icon3"></span>
							<p>Гарантия</p>
						</div>
						<div class="col-md-2 icons">
							<span class="icon-icon4"></span>
							<p>Индивидуальный<br> подход</p>
						</div>
						<div class="col-md-2 icons">
							<span class="icon-icon5"></span>
							<p>Лучшая цена</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="kak-economit">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center name-section">
					<h3>КАК КОМПАНИЯ "МЕБЕЛЬ ЕЛЕНА" ПОМОГАЕТ ЭКОНОМИТЬ</h3>
				</div>
			</div>
		</div>
		<div class="kak-economit-bg">
					<div class="container">
						<div class="col-md-8 col-md-offset-2 kak-economit-content">
							<div class="row">
								<!-- <div class="col-md-1">
									<span class="icon-icon6"></span>
								</div>
								<div class="col-md-11">
									<p>Ассортимент магазина подобран по принципу <span>"качество за разумную цену".</span> Мы помоггаем покупателям осуществлять их желания самым доступным образом. Наши цены демократичны и справедливы.</p>
								</div>
								<div class="col-md-1">
									<span class="icon-icon6"></span>
								</div>
								<div class="col-md-11">
									<p>Компания регулярно проводит акции на популярные товары, которые позволяют приобрести их дешевле. Ознакомиться с существующими предложениями можно в разделе <span>"Акции".</span></p>
								</div>
								<div class="col-md-1">
									<span class="icon-icon6"></span>
								</div>
								<div class="col-md-11">
									<p>Мы предлагаем <span>выгодные условия</span> приобретения мебели в оптовых масштабах и для корпоративных клиентов. На вкладке "Корпоративным клиентам/Опт" находится вся необходимая информация.</p>
								</div>
								<div class="col-md-1">
									<span class="icon-icon6"></span>
								</div>
								<div class="col-md-11">
									<p>При сумме заказа от 15 000 руб. в пределах МКАД <span>доставка бесплатна.</span></p>
								</div> -->
								
								<?php
									
									if(have_posts()) : query_posts("cat=6&order=ASC");

									while(have_posts()) : the_post();

								?>
									
									<div class="col-md-1">
										<span class="icon-icon6"></span>
									</div>
									<div class="col-md-11">
										<?php echo get_field('текст'); ?>
									</div>

								<?php

									endwhile;
									endif;
									wp_reset_query();

								?>
							</div>
							<a class="buttons" href="<?php echo get_permalink(60); ?>">ПЕРЕЙТИ В КАТАЛОГ</a>
						</div>
					</div>
				</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center name-section">
					<h3>УСЛОВИЯ</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3">
					
							<div class="uslovia row">
								<div class="col-md-10">
									<span class="icon-icon7"></span>
									<p class="icons-texts">Вы совершеннолетний</p>
								</div>					
								<div class="col-md-2">
									<span class="icon-icon11"></span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-10">
									<span class="icon-icon8"></span>
									<p class="icons-texts">Сначала дело-затем<br> оплата</p>
								</div>
														
														
								<div class="col-md-2">
									<span class="icon-icon11"></span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-10">
									<span class="icon-icon9"></span>
									<p class="icons-texts">Оплата безналичная</p>
								</div>
														
														
								<div class="col-md-2">
									<span class="icon-icon11"></span>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<span class="icon-icon10"></span>
							<p class="icons-texts">Заказ необходимо<br> сделать за 3 рабочих<br> дня до покупки</p>
						</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="container">
			<div class="row text-center">
				<div class="col-12 name-section-portfolio">
					<h3>ПОРТФОЛИО</h3>
				</div>
			</div>
			<div class="owl-carousel owl-theme owl-carousel-2">  
			    	<?php

			    		if(have_posts()) : query_posts("cat=4");
			    		while(have_posts()) : the_post();

			    	?>
			    		<div class="item item-2">
			    			
			    				<?php the_post_thumbnail(); ?> 
			    				<div class="item-2-text">
			    					<p class="item-2-text-p1"><?php echo get_field('название_заказа'); ?></p>
			    					<p class="item-2-text-p2">Заказ № <?php echo get_field('номер_заказа'); ?> от <?php echo get_field('дата_заказа_'); ?></p>
			    				</div>
			    			
			    		</div>

			    	<?php

			    		endwhile;
			    		endif;
			    		wp_reset_query();

			    	?>
			    	
			    
			   <!--  <div class="item item-2">
			    	<a href="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" data-fancybox="gallery" class="fancybox">
			    		<img src="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" alt="">
			    		<div class="item-2-text">
			    			<p class="item-2-text-p1">ГАРДЕРОБНАЯ ПО РАЗМЕРУ</p>
			    			<p class="item-2-text-p2">Заказ №1119-2 от 13.07.2018</p>
			    		</div>
			    	</a>
			    </div> -->
			    <!-- <div class="item item-2">
			    	<a href="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" data-fancybox="gallery" class="fancybox">
			    		<img src="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" alt="">
			    	</a>
			    </div>
			    <div class="item item-2">
			    	<a href="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" data-fancybox="gallery" class="fancybox">
			    		<img src="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" alt="">
			    	</a>
			    </div>
			    <div class="item item-2">
			    	<a href="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" data-fancybox="gallery" class="fancybox">
			    		<img src="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" alt="">
			    	</a>
			    </div><div class="item item-2">
			    	<a href="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" data-fancybox="gallery" class="fancybox">
			    		<img src="<?php echo get_template_directory_uri()?>/img/portfolio-3.png" alt="">
			    	</a>
			    </div> -->
			    <!-- <div class="owl-controls">
		            <div class="owl-nav">
		                <div class="owl-prev">prev</div>
		                <div class="owl-next">next</div>
		            </div>
		        </div>  -->
			</div>
		</div>
	</section>
	<form method="post" action="#" class="form" id="modal-form" style="display:none;">
	  <!-- <p class="form__label">Заказать звонок</p><br>
	  <hr>
	  <input type="text" name="name" plaсeholder="Ваше имя" class="form__field name"><br> -->
	  <!-- <label for="mail" class="form__label">E-mail:</label> -->
	  <!-- <input type="text" name="phone" plaсeholder="Телефон" class="form__field phone"><br> -->
	  <!-- <label for="message" class="form__label">Сообщение:</label>
	  <textarea name="message" class="form__area"></textarea> -->
	  <!-- <input type="submit" value="Отправить заявку" class="form__submit"/> -->
	  
		<?php echo do_shortcode( '[contact-form-7 id="144" title="Контактная форма 1"]' ); ?>

	</form>	

<?php
// get_sidebar();
get_footer();