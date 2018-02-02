<?php
/**
 *
 * @package split
 * @since split 1.0.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Enqueue Styles
#-------------------------------------------------------------

function split_enqueue_styles() {             

	# Main stylesheet
  	wp_register_style( 'split-main-styles' , get_template_directory_uri(). "/style.css" , array(), split_theme_version, 'screen' );  	
  	wp_enqueue_style( 'split-main-styles' );           

}

add_action( 'wp_enqueue_scripts' , 'split_enqueue_styles' );