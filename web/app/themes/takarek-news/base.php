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
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu align-right vertical']);
        endif;
        ?>
      </nav>
    </div>

    <div class="off-canvas-content" data-off-canvas-content>
      <div class="site-header">
        <div class="grid-container fluid">
          <div class="grid-x grid-margin-x align-middle">
            <div class="cell auto">
              <?php
                do_action('get_header');
                get_template_part('templates/header');
              ?>
            </div>
            <div class="cell shrink">
              <ul class="menu">
                <li>
                  <button class="offcanvas-trigger" type="button" data-open="offCanvasRight">
                    <span class="offcanvas-trigger-text hide-for-small-only">Menu</span>
                    <i class="fi-list"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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


    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
