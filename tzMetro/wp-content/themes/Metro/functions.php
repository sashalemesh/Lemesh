<?php
function metro_scripts()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('font', get_template_directory_uri() . '/css/font/font.css');
    wp_enqueue_style( 'calendar', get_template_directory_uri() . '/css/calendar-brown.css');
}
add_action( 'wp_enqueue_scripts', 'metro_scripts' );

function my_scripts_method() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('cufon_yui',get_template_directory_uri() . '/js/cufon-yui.js');
    wp_enqueue_script('Robust_ICG_400',get_template_directory_uri() . '/js/Robust_ICG_400.font.js');
    wp_enqueue_script('cufon',get_template_directory_uri() . '/js/cufon.js');
    wp_enqueue_script('form',get_template_directory_uri() . '/js/form.js');
    wp_enqueue_script('custom',get_template_directory_uri() . '/js/custom-form-elements.js');
    wp_enqueue_script('slides',get_template_directory_uri() . '/js/slides.min.jquery.js');
    wp_enqueue_script('infieldlabel',get_template_directory_uri() . '/js/jquery.infieldlabel.min.js');
    wp_enqueue_script('functions',get_template_directory_uri() . '/js/functions.js');
    wp_enqueue_script('calendar_stripped',get_template_directory_uri() . '/js/calendar_stripped.js');
    wp_enqueue_script('calendar_en',get_template_directory_uri() . '/js/calendar-en.js');
    wp_enqueue_script('setup_stripped',get_template_directory_uri() . '/js/calendar-setup_stripped.js');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');