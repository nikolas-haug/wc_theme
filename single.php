<?php get_header(); ?>

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

                <main>
                    <!-- Post image -->
                    <div class="container-stretch container-lg">
                        <div class="row">
                            <div class="col-lg-12 pad-sm-0">
                                <div class="container--booking">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail( 'full', array( 'class' => 'img-100' ) ); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main content -->
                    <div class="container-lg">
                        <div class="row">
                            <div class="col-lg-12">
                            <h2><?php the_title( ); ?></h2>
                            <?php the_content( ); ?>
                            </div>
                        </div>
                    </div>
                </main>

            <?php endwhile; ?>
        <?php endif; ?>

<?php get_footer(); ?>