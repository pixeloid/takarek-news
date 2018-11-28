<?php if($i==1): ?>
<div class="cell large-8">
	<div class="card card--featured grid-y medium-grid-x">
		<div class="card__imageholder cell medium-auto">
			<div class="card__image" style="background-image: url( <?php the_post_thumbnail_url('medium_square'); ?>); background-position: cover;">
			</div>
		</div>	
		<div class="card-section cell medium-auto">
			<div class="card-section__content">
					<h4><?php the_title()  ?></h4>
					<?php if (get_field('author')): ?>
						<span><i>
							<?php echo get_field('author') ?>
						</i></span>
					<?php endif ?>
					<div class="card__excerpt">
						<?php the_excerpt()  ?>
					</div>
				    <a href="<?php the_permalink(); ?>" class="button">Tovább</a>

			</div>
		</div>
	</div>
</div>

<?php else: ?>
	<div class="cell medium-6 large-4">
 	<div class="card">
	 	<?php if(has_post_thumbnail()): ?>
	 		<div class="card__imageholder cell medium-auto">
	 			<div class="card__image" style="background-image: url( <?php the_post_thumbnail_url('card_landscape'); ?>); background-position: cover;">
	 			</div>
	 		</div>	
	 	    <div class="card-section">
	 	    	<div class="card-section__content">
		 	    <h4><?php the_title()  ?></h4>
		 	    <?php if (get_field('author')): ?>
		 	    	<span><i>
		 	    		<?php echo get_field('author') ?>
		 	    	</i></span>
		 	    <?php endif ?>

	 	<?php else: ?>
	 		<div class="card-section">
	 			<div class="card-section__content">
		 		<h4><?php the_title()  ?></h4>
		 		<?php if (get_field('author')): ?>
		 			<span><i>
		 				<?php echo get_field('author') ?>
		 			</i></span>
		 		<?php endif ?>
		 		<div class="card__excerpt">
		 			<?php the_excerpt()  ?>
		 		</div>
	 	<?php endif; ?>
			 <a href="<?php the_permalink(); ?>" class="button">Tovább</a>
	 		</div>
	 		</div>
	 	
	</div>
</div>
<?php endif; ?>