<?php
/**
 * Plugin Name: arash-post-slider
 * Description: slider post widget
 * Version:     1.0.0
 * Author:      Arash Narimani
 * Author URI:  https://github.com/arashdeveloper1380
 * Text Domain: elementor-addon
 */

function register_video_slider_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/arash-video-slider.php' );
	require_once( __DIR__ . '/widgets/arash-post-slider.php' );

	$widgets_manager->register( new \Elementor_Video_Slider_Widget() );
	$widgets_manager->register( new \Elementor_Post_Slider_Widget() );

}
add_action( 'elementor/widgets/register', 'register_video_slider_widget' );