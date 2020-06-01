<?php

function load_stylesheets()
{


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');


    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), false, 'all');

    wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');