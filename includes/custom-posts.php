<?php

// register post types
function watercress_custom_post_types() {
    $args = array(
        'labels' => array(
            'name' => __( 'Testimonials', 'testimonials' ),
            'singular_name' => __( 'Testimonial', 'testimonial' ),
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial'
        ),
        'description' => 'Add testimonial and details.',
        'supports' => array(
            'title',
            'editor'
        ),
        'taxonomies' => array('testimonials'),
        'public' => true,
        'menu_position' => 50,
        'menu_icon' => 'dashicons-images-alt2',
        'has_archive' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'testimonials'),
        'show_in_rest' => true
    );
    register_post_type( 'testimonial', $args );
}

/*
 * Add a meta box
 */
function add_your_fields_meta_box() {
    add_meta_box(
        'your_fields_meta_box',
        'Testimonial Byline',
        'show_your_fields_meta_box',
        'testimonial'
    );
}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );


function show_your_fields_meta_box() {
    global $post;
        $meta = get_post_meta( $post->ID, 'your_fields', true ); ?>
        
    <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <!-- Byline/details input -->
    <p>
    	<label for="your_fields[text]">(Author, company, date, etc.)</label>
    	<br>
    	<input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text" value="<?php  if (is_array($meta) && isset($meta['text'])){ echo $meta['text']; } ?>">
    </p>

    <?php }

function save_your_fields_meta($post_id) {
    // verify nonce
    if(!wp_verify_nonce($_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
        return $post_id;
    }
    // check autosave
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
    if('page' === $_POST['post_type']) {
        if(!current_user_can( 'edit_page', $post_id )) {
            return $post_id;
        } else if(!current_user_can( 'edit_post', $post_id )) {
            return $post_id;
        }
    }

    $old = get_post_meta( $post_id, 'your_fields', true );
    $new = $_POST['your_fields'];

    if($new && $new !== $old) {
        update_post_meta( $post_id, 'your_fields', $new );
    } else if( '' === $new && $old) {
        delete_post_meta( $post_id, 'your_fields', $old );
    }
}
add_action( 'save_post', 'save_your_fields_meta' );

/**
 * Add the meta box stylesheet when appropriate
 */
function custom_meta_gallery_styles() {
    global $typenow;
    if($typenow == 'page') {
        wp_enqueue_style( 'custom_meta_gallery_styles', plugin_dir_url(__FILE__) . 'custom-meta-gallery.css' );
    }
}
add_action( 'admin_print_styles', 'custom_meta_gallery_styles' );