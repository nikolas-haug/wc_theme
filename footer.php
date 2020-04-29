<footer class="main-footer">
            <div class="container-lg">
                <div class="row main-footer__content">
                    <div class="col-12 col-med-4">
                        <?php if(is_active_sidebar( 'footer-area1' )) : ?>
                            <?php dynamic_sidebar( 'footer-area1' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-med-4">
                        <?php if(is_active_sidebar( 'footer-area2' )) : ?>
                            <?php dynamic_sidebar( 'footer-area2' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-med-4">
                        <?php if(is_active_sidebar( 'footer-area3' )) : ?>
                            <?php dynamic_sidebar( 'footer-area3' ); ?>
                        <?php endif; ?>
                    </div>
                </div>  
                <div class="row">
                    <div class="col text-center">
                        <?php if(get_theme_mod( 'icon1_icon', '' )) : ?>
                            <a href="<?php echo get_theme_mod( 'icon1_url', '' ); ?>" target="_blank" rel="noopener"><span class="social-icon <?php echo get_theme_mod( 'icon1_icon', '' ); ?>"></span></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod( 'icon2_icon', '' )) : ?>
                            <a href="<?php echo get_theme_mod( 'icon2_url', '' ); ?>" target="_blank" rel="noopener"><span class="social-icon <?php echo get_theme_mod( 'icon2_icon', '' ); ?>"></span></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod( 'icon3_icon', '' )) : ?>
                            <a href="<?php echo get_theme_mod( 'icon3_url', '' ); ?>" target="_blank" rel="noopener"><span class="social-icon <?php echo get_theme_mod( 'icon3_icon', '' ); ?>"></span></a>
                        <?php endif; ?>
                        <p><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
                    </div>
                </div>              
            </div>
        </footer>

        <?php wp_footer(  ); ?>
    </body>
</html>