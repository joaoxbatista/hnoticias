</main>
    <footer id="footer" role="contentinfo">
        <div class="container">
            
            <div class="col-md-8" id="menu_footer">
               <?php
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'items_wrap' => '<ul>%3$s</ul>',
                            'theme_location' => 'menu2'
                        )
                    );
                ?>
            </div>

            <div class="col-md-4">
                <p>&copy Hbioss 2016  - Todos os direitos reservados.</p>
            </div>
    </footer>
    <!-- Importação dos Scripts -->
    <script src="<?php bloginfo('template_url'); ?>/assets//libs/jquery/jquery-1.12.4.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets//libs/responsiveslide/responsiveslides.min.js"></script>
    <script>
        $(function(){
            $('#menu-btn').click(function(){
                $('#menu-content').toggle();
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>