<?php if($i==1): ?>
<div class="cell large-8">
	<div class="card card--featured">
		<div class="card__image"><?php the_post_thumbnail('medium_square'); ?>
		</div>
		<div class="card-section">
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

<?php else: ?>
	<div class="cell medium-6 large-4">
 	<div class="card">
	 	<?php if(has_post_thumbnail()): ?>
	 	    <?php the_post_thumbnail('card_landscape'); ?>
	 	    <div class="card-section">
		 	    <h4><?php the_title()  ?></h4>
		 	    <?php if (get_field('author')): ?>
		 	    	<span><i>
		 	    		<?php echo get_field('author') ?>
		 	    	</i></span>
		 	    <?php endif ?>

	 	<?php else: ?>
	 		<div class="card-section">
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
<?php endif; ?>