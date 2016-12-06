<?php
get_header();
?>
<main id="main-content">

  <div class="container">
    <div class="col-md-8">
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
  <div class="single">
    <header>
      <h1><?php the_title(); ?></h1>
    </header>

    <div class="content">
      <?php the_content();?>
    </div>
  </div>

<?php

   endwhile;
endif;
?>
    </div>

  </div>
</div>
<?php
get_footer();
?>
