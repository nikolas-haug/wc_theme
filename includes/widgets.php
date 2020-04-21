<?php

function watercress_widgets() {
    register_sidebar([
        'name' => __('sidebar'),
        'id' => 'sidebar',
        'description' => __('Sidebar for the Starter Theme'),
        'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => __('footer-area1'),
        'id' => 'footer-area1',
        'description' => __('footer-area1 for the Starter Theme'),
        'before_widget' => '<div id="%1$s" class="footer-area1-item %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => __('footer-area2'),
        'id' => 'footer-area2',
        'description' => __('footer-area2 for the Starter Theme'),
        'before_widget' => '<div id="%1$s" class="footer-area2-item %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => __('footer-area3'),
        'id' => 'footer-area3',
        'description' => __('footer-area3 for the Starter Theme'),
        'before_widget' => '<div id="%1$s" class="footer-area3-item %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}