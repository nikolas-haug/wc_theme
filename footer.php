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
                    <div class="col copyright text-center">
                        <p>&copy; <?php echo date('Y'); ?></p>
                    </div>
                </div>              
            </div>
        </footer>

        <?php wp_footer(  ); ?>
    </body>
</html>