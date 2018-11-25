<article <?php post_class(); ?>>
	<div class="grid-x grid-margin-x align-middle ">
		<div class="cell shrink">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="cell auto">
			<header class="">
				<h2 class="h5 entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
			</header>
			<div class="entry-summary ">
				<?php the_excerpt(); ?>
			</div>
			<a href="<?php the_permalink() ?>" class="button">Tovább</a>

		</div>
	</div>
</article>