<?php 
	// $text1 = get_post_meta( get_the_ID(), 'text1', true);
	// $text2 = get_post_meta( get_the_ID(), 'text2', true);
?>
<div class="col-md-5 col-sm-12 col-center-xs col-center-sm text-right a-c-c-img">
	<img class="images image-1" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'big-pictures'); ?>" alt="">	
</div>
<div class="col-md-7 about-company-content-info">
	<div class="container cont-p">
		<div class="row cont-row">
			<div class="col-lg-7 col-md-11 col-p">
				<? echo get_field('text1', '17');
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