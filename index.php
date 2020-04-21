<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>"> 
        <?php wp_head(  ); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="scroll-top-btn"></div>

        <header class="main-header">
            <div class="container-lg">
                <div class="row">
                    <div class="col-sm-12 col-lg-2">
                        <a href="<?php esc_url(site_url( '/' )); ?>">
                                <?php 
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    if ( has_custom_logo() ) {
                                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="img-cover" style="max-width: 150px;">';
                                    } else {
                                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                    }
                                ?>
                        </a>
                    </div>
                    <div class="col-sm-12 col-lg-10 align-self-center">
                        <h1 class="title-tag">
                            <a href="<?php esc_url(site_url('/')); ?>"><?php bloginfo( 'name' ); ?></a>
                        </h1> 
                    </div>
                </div>
            </div>
        </header>

        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <nav class="slider-menu">
                        <!-- <ul>
                            <li><a href="index.html">Welcome</a></li>
                            <li><a href="music.html">Music</a></li>
                            <li><a href="offerings.html">Offerings</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="booking.html">Booking</a></li>
                        </ul> -->
                        <?php wp_nav_menu( array(
                            'theme_location' => 'primary'
                        )); ?>
                    </nav>
                    <div class="slider-menu__toggler"><span></span></div>
                </div>
            </div>
        </div>

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

            <?php if(!is_page('home')) : ?>
                <div class="col col-med-12">
                    <h2 class="sub-title">
                        <?php the_title( ); ?>
                    </h2>
                </div>
            <?php endif; ?>

        <main>
            <!-- Welcome/booking image -->
            <div class="container-stretch container-lg">
                <div class="row">
                    <div class="col-lg-12 pad-sm-0">
                        <div class="container--booking">
                            <!-- <img src="images/homepage-img.jpg" alt=""
                                class="img-100"> -->
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-100' ) ); ?>
                            <?php endif; ?>
                            <button class="btn--booking">
                                book now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-7">
                       <?php the_content( ); ?>
                    </div>
                    <div class="col-lg-5">
                        <?php if(is_active_sidebar( 'sidebar' )) : ?>
                            <?php dynamic_sidebar( 'sidebar' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>

            <?php endwhile; ?>
        <?php endif; ?>

        <footer class="main-footer">
            <div class="container-lg">
                <div class="row main-footer__content">
                    <div class="col-med-6">
                        <?php if(is_active_sidebar( 'footer-area1' )) : ?>
                            <?php dynamic_sidebar( 'footer-area1' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-med-6">
                        <?php if(is_active_sidebar( 'footer-area2' )) : ?>
                            <?php dynamic_sidebar( 'footer-area2' ); ?>
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