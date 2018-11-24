<div class="grid-container grid-container--bg">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <div class="post__image">
        <?php the_post_thumbnail(); ?>
      </div>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
  
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>

</div>
