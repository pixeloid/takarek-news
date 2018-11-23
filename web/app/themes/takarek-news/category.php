<?php get_template_part('templates/page', 'header'); ?>

<div class="grid-container grid-container--bg">
	 <div class="grid-x grid-margin-x grid-margin-y">
	 	
	 	<?php $i=0; ?>

	 	<?php while (have_posts()) : the_post(); ?>

		 	
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


  	        	
  	        <?php endwhile; ?>

</div>
</div>
