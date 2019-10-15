<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" -->
<!-- integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<article class="CG-ADMIN-WIDGET">

  <h1 class="title-widget"><?php the_field('cg_admin_widget_title', option); ?></h1>

  <a href="<?php the_field('cg_admin_widget_btn_url', option); ?>" target="_blank">

    <img class="image-widget" src="<?php the_field('cg_admin_widget_image', option); ?>">

  </a>

  <p class="text-widget">

    <?php the_field('cg_admin_widget_text', option); ?>

  </p>

  <a class="btn btn-warning btn-block" target="_blank" href="<?php the_field('cg_admin_widget_btn_url', option); ?>">

    <?php the_field('cg_admin_widget_btn_text', option); ?>

  </a>

</article>