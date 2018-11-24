<?php 

$tax_terms = get_terms( 'category', 'orderby=name');

?>


<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
		
		<div class="swiper-slide">
			<div class="site-hero ">
				<div class="grid-container">
					<div class="site-hero__inner grid-x grid-margin-x align-middle">
						<div class="site-hero-content cell medium-6" data-swiper-parallax="-500">
						  <h1>Az üzleti életben 
			nincsenek magányos 
			HŐSÖK, ez csak 
			egy legenda. 
			A siker csapatmunka.</h1>
						  <a href="#" class="button secondary">Tovább </a>
						</div>


					</div>
				</div>
			</div>

		</div>
		<div class="swiper-slide">
			<div class="site-hero ">
				<div class="grid-container">
					<div class="site-hero__inner grid-x grid-margin-x align-middle">
						<div class="site-hero-content cell medium-6" data-swiper-parallax="-500">
						  <h1>Az üzleti életben 
			nincsenek magányos 
			HŐSÖK, ez csak 
			egy legenda. 
			A siker csapatmunka.</h1>
						  <a href="#" class="button secondary">Tovább </a>
						</div>


					</div>
				</div>
			</div>

		</div>
		<div class="swiper-slide">
			<div class="site-hero ">
				<div class="grid-container">
					<div class="site-hero__inner grid-x grid-margin-x align-middle">
						<div class="site-hero-content cell medium-6" data-swiper-parallax="-500">
						  <h1>Az üzleti életben 
			nincsenek magányos 
			HŐSÖK, ez csak 
			egy legenda. 
			A siker csapatmunka.</h1>
						  <a href="#" class="button secondary">Tovább </a>
						</div>


					</div>
				</div>
			</div>

		</div>

	</div>
	<div class="site-hero__pagination">
		<div class="grid-container">
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>

<div class="submenu-bar">
	
	<div class="grid-container">
		<div class="grid-x grid-margin-x align-middle ">
			<div class="cell auto show-for-xlarge">
				<?php
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu horizontal align-right cat-menu']);
				endif;
				?>

			</div>
			<div class="cell shrink">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>

</div>

<div class="grid-container grid-container--bg">
	

	  	<?php foreach($tax_terms as $term): ?>
			
			<div class="list-group">
				<div class="list-group__title">
					<h2><?php echo $term->name ?> </h2>
					<a href="<?php echo get_term_link($term) ?> " class="button">Összes</a>
				</div>	


					<?php 
					$args = array(
						'posts_per_page' => 6,
						 'category' => $term->term_id,
						'post_type' => 'post',
					 );
					$tax_terms_posts = get_posts( $args );
					 ?>


					 <div class="grid-x grid-margin-x grid-margin-y">
					 	
					 	<?php $i=0; ?>

						 <?php foreach($tax_terms_posts as $post): ?>

							<?php   setup_postdata($post); ?>
						 	
						 	<?php $i++; ?>

								 	<?php if($i==1): ?>
										<div class="cell medium-6 large-8">
										<div class="card card--featured">
											<div class="card__image"><?php the_post_thumbnail('medium_square'); ?></div>

							 		<?php else: ?>
									 	<div class="cell medium-6 large-4">
									 	<div class="card">
									 		<?php the_post_thumbnail(); ?>

								 	<?php endif; ?>

				  	        		  <div class="card-section">
				  	        		    <h4><?php the_title()  ?></h4>
				  	        		    <?php if($i==1): ?>
				  	        		    	<div class="card__excerpt">
				  	        		    		<?php the_excerpt()  ?>
				  	        		    	</div>
										<?php endif; ?>	

				  	        		    <a href="<?php the_permalink(); ?>" class="button">Tovább</a>
				  	        		  </div>
				  	        		</div>
				  	        	</div>


				  	        	
				  	    <?php endforeach; ?>
				  	</div>
			</div>

		<?php endforeach; ?>

		<?php 
		wp_reset_postdata();
		 ?>
	  	





</div>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
