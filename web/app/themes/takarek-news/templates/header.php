<header class="banner">
  <div class="container">
    <?php 
    get_theme_mod( 'custom_logo' );
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    ?>
  </div>
</header>
