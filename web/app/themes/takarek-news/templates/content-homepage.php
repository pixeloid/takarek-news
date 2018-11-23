<?php 

$tax_terms = get_terms( 'category', 'orderby=name');

?>

<div class="site-hero ">
	<div class="grid-container">
		<div class="site-hero__inner grid-x grid-margin-x align-middle">
			<div class="site-hero-content cell medium-6">
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


<div class="submenu-bar">
	
	<div class="grid-container">
		<div class="grid-x grid-margin-x align-middle ">
			<div class="cell auto">
				<ul class="menu horizontal">
					<?php foreach($tax_terms as $term): ?>
						<li>
							<a href="<?php echo get_term_link($term) ?> " class=""><?php echo $term->name ?></a>
						</li>
					<?php endforeach; ?>
				</ul>

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
											<?php the_post_thumbnail('medium_square'); ?>

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
