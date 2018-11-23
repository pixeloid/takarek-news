<div class="cell medium-6 large-4">
	 	<div class="card">
	 		<article <?php post_class(); ?>>
	 		<?php the_post_thumbnail(); ?>
		 	<div class="card-section">
    		    <h4><?php the_title()  ?></h4>
    		    <a href="<?php the_permalink(); ?>" class="button">Tovább</a>
		 	</div>
		 </article>
		</div>
	</div>


