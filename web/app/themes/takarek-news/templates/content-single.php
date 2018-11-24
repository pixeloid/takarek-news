<div class="grid-container grid-container--bg">
  <?php while (have_posts()) : the_post(); ?>

    <?php 
    $categories = get_the_category();
    $cat_link = '';
    if ( ! empty( $categories ) ) {
        $cat_link =  '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="button button--back"> Még több ' . esc_html( $categories[0]->name ) . ' témájú cikk</a>';
      }     
    ?>
    <article <?php post_class(); ?>>
      <?php if(has_post_thumbnail()): ?>
        <div class="post__image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
  
        <?php the_content(); ?>

        <hr>

        <?php echo $cat_link ?>

      </div>
    </article>
    
  <?php endwhile; ?>

</div>
