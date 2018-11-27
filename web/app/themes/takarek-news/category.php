<div class="page-header">
	<div class="grid-container fluid">
		<div class="grid-x grid-margin-x align-middle">
		<div class="cell shrink">
			<a href="/" class="button button--back button ">Nyitóoldal</a>
		</div>
		<div class="cell auto">
			<h1>
			<?php echo single_cat_title( '', false ); ?>
			</h1>
		</div>	
		</div>	
	</div>
</div>

<div class="grid-container ">
	 <div class="grid-x grid-margin-x grid-margin-y">
	 	
	 	<?php $i=0; ?>

	 	<?php while (have_posts()) : the_post(); ?>

		 	
		 	<?php $i++; ?>

		 	<?php include(locate_template( 'templates/card-listitem.php' )); ?>

		<?php endwhile; ?>

	</div>
</div>
