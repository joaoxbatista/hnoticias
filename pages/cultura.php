<?php 
    $categoria =  get_category_by_slug('cultura');
    $id = $categoria->term_id;
    $link = get_category_link($id);
?>

<div id="cultura">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
                <h1 class="title"><a href="<?php echo esc_url($link); ?>">Cultura</a></h1>
           </div>
        </div>

        <div class="row">
<?php
    $args = array( 'posts_per_page' => 2, 'category' => $id );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); 

?>
	<div class="col-md-6">
        <article>
            <?php the_post_thumbnail(); ?>
            <header>
                <hgroup>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <small>Postado em <strong><?php the_date();?></strong> por <strong><?php the_author(); ?></strong></small>
                </hgroup>
            </header>

            <div class="content">
               <p><?php the_excerpt(); ?></p>
            </div>
                
        </article>
    </div>

<?php endforeach; 
wp_reset_postdata(); 
?>


        </div><!-- fim da row -->
    </div><!-- fim do container -->
</div><!-- fim dos esportes -->