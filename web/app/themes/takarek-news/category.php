<?php get_template_part('templates/page', 'header'); ?>

<div class="grid-container grid-container--bg">
	 <div class="grid-x grid-margin-x grid-margin-y">
	 	
	 	<?php $i=0; ?>

	 	<?php while (have_posts()) : the_post(); ?>

		 	
		 	<?php $i++; ?>

		 	<?php include(locate_template( 'templates/card-listitem.php' )); ?>

		<?php endwhile; ?>

	</div>
</div>
