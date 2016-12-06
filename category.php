<?php
get_header();
?>
<main id="main-content">
    <div class="container">
        <div class=" col-md-12 category-title">
        <h1><?php single_cat_title(); ?></h1>
    </div>
            <div class="col-md-8">
<?php

if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
        <div class="post">
                        <header>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </header>
                        
                        <div class="content">
                            <?php the_excerpt();?>
                            <p class="data"><?php the_date(); ?></p>
                        </div>
                    </div>
<?php

   endwhile;
endif;
?>
            </div>
          
    </div>
        <?php
get_footer();
?>