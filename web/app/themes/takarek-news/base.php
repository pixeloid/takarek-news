<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->


    <div class="multilevel-offcanvas off-canvas position-right" id="offCanvasRight" data-off-canvas>
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu align-right vertical cat-menu']);
        endif;
        ?>
      </nav>
      <?php get_search_form(); ?>

    </div>

    <div class="site-header">
      <div class="grid-container fluid">
        <div class="grid-x grid-margin-x align-middle">
          <div class="cell small-6 large-6">
            <?php
              do_action('get_header');
              get_template_part('templates/header');
            ?>
          </div>
          <div class="cell auto  xlarge-6">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu horizontal align-right cat-menu ']);
            endif;
            ?>

          </div>
              <div class="cell shrink">

            <button class="offcanvas-trigger hide-for-xlarge" type="button" data-toggle="offCanvasRight">
              <i class="fi-list"></i>
            </button>
          </div>

        </div>
      </div>
    </div>
    <div class="off-canvas-content" data-off-canvas-content>

      <div  role="document">
          <main class="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
      </div><!-- /.wrap -->

    </div>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
