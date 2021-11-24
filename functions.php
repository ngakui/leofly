<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Leo_Fly
 * @since Leo Fly 1.0
 */

    function leofly_theme_support(){
        // Add dynamic title tag support
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'leofly_theme_support');

    function leofly_menus(){
        $locations = array(
            'primary' => "Desktop Primary Top Sidebar"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'leofly_menus');

    function leofly_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('leofly-style', get_template_directory_uri() . "/style.css", array('leofly-bootstrap-css'), $version, 'all');
        wp_enqueue_style('leofly-bootstrap-css', get_template_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css", array(), '5.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'leofly_register_styles');

    function leofly_register_scripts(){
        wp_enqueue_style('leofly-bootstrap-js', get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.min.js", array(), '5.0', true);
        wp_enqueue_style('leofly-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '5.0', true);
    }

    add_action('wp_enqueue_scripts', 'leofly_register_scripts');

    // $args = array(
    //     'default-color' => '0000ff',
    //     'default-image' => get_template_directory_uri() . '/assets/images/space1.jpg',
    // );
    // add_theme_support( 'custom-background', $args );

 ?>