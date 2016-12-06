<?php
get_header();
?>
<main id="main-content">

  <div class="container">
   <div class=" col-md-12 category-title">
        <h1>Resultados</h1>
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
      <?php the_content();?>
      <p class="data"><?php the_date(); ?></p>
    </div>
  </div>

<?php
   endwhile;
else: ?>
<h3>Não encontramos nada em nossos arquivos. Tente novamente com outro conteúdo.</h3>
<?php
endif;
?>
    </div>

  </div>
</div>
<?php
get_footer();
?>
