<?php get_header();?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>

            <main>
                <!-- Hero image -->
                <div class="container-med pad-xs-0">
                    <div class="row">
                        <div class="col-lg-12 pad-xs-0">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="img-100">
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <!-- Main content -->
                <div class="container-med">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="sub-title"><?php the_title( ); ?></h2>
                            <?php the_content( ); ?>
                        </div>
                    </div>
                </div>
            </main>

        <?php endwhile;?>
    <?php endif;?>

<?php get_footer();?>