<?php

/**
 *
 * ADDING CUSTOM WELCOME WIDGET
 *
 */

/**
 * Remove the default welcome dashboard message
 *
 */
remove_action('welcome_panel', 'wp_welcome_panel');

/**
 * Custom welcome panel function
 *
 * @access      public
 * @since       1.0 
 * @return      void
 */
function wpex_wp_welcome_panel()
{ ?>

<div id="CG-ADMIN-WELCOME" class="container-fluid">
  <section class="jumbotron row">
    <article class="col-md-6">
      <h1 class="mb-2"><?php _e(the_field('dashboard_welcome_title', option)); ?></h1>
      <p class="about-description mb-3">
        <?php _e(the_field('dashboard_welcome_description', option)); ?>

      </p>
    </article>
    <article class="col-md-6">
      <a href="<?php the_field('dashboard_welcome_image_url', option); ?>" target="_blank" class="about-description">
        <img class="img-fluid" src="<?php the_field('dashboard_welcome_image', option); ?>" alt="">
      </a>
    </article>
  </section>

  <div class="welcome-panel-column-container">

    <article class="welcome-panel-column">
      <div class="welcome-panel-content">
        <h4><?php _e(the_field('welcome_widget_1_title', option)); ?></h4>
        <a class="button button-primary button-hero load-customize hide-if-no-customize"
          href="<?php the_field('welcome_widget_1_button_url', option); ?>"
          target="_blank"><?php _e(the_field('welcome_widget_1_button_text', option)); ?></a>
        <p class="hide-if-no-customize">
          <?php printf(__('or, <a href="%s">edit your site settings</a>'), admin_url('options-general.php')); ?></p>
      </div>
    </article><!-- .welcome-panel-column -->
    <article class="welcome-panel-column">
      <div class="welcome-panel-content">
        <h4><?php _e(the_field('welcome_widget_2_title', option)); ?></h4>
        <a class="button button-primary button-hero load-customize hide-if-no-customize"
          href="<?php the_field('welcome_widget_2_button_url', option); ?>"
          target="_blank"><?php _e(the_field('welcome_widget_2_button_text', option)); ?></a>
        <p class="hide-if-no-customize">
          <?php printf(__('or, <a href="%s">edit your site settings</a>'), admin_url('options-general.php')); ?></p>
      </div>
    </article><!-- .welcome-panel-column -->
    <article class="welcome-panel-column">
      <div class="welcome-panel-content">
        <h4><?php _e(the_field('welcome_widget_3_title', option)); ?></h4>
        <a class="button button-primary button-hero load-customize hide-if-no-customize"
          href="<?php the_field('welcome_widget_3_button_url', option); ?>"
          target="_blank"><?php _e(the_field('welcome_widget_3_button_text', option)); ?></a>
        <p class="hide-if-no-customize">
          <?php printf(__('or, <a href="%s">edit your site settings</a>'), admin_url('options-general.php')); ?></p>
      </div>
    </article><!-- .welcome-panel-column -->

  </div><!-- .welcome-panel-column-container -->
</div>


<?php }
add_action('welcome_panel', 'wpex_wp_welcome_panel');