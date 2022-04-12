<?php
/**
 * Plugin Name: Front Page Custom Post Type
 * Plugin URI: http://celloexpressions.com/plugins/front-page-custom-post-type/
 * Description: Select a custom post type to be displayed in place of latest posts on the front page.
 * Version: 1.0
 * Author: Nick Halsey
 * Author URI: http://nick.halsey.co/
 * Tags: custom post type, home, front page
 * Text Domain: front-page-custom-post-type
 * License: GPL

=====================================================================================
Copyright (C) 2016 Nick Halsey

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WordPress; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
=====================================================================================
*/

// If a custom front page post type is selected, and a valid post type, 
add_filter( 'pre_get_posts', 'front_page_custom_post_type_pre_get_posts' );
function front_page_custom_post_type_pre_get_posts( $query ) {
	if ( is_home() && is_front_page() && $query->is_main_query() ) {
		$post_type = get_option( 'front_page_post_type', '' );
		$post_types = get_post_types( array(
			'has_archive' => true,
			'public' => true,
		));

		if ( in_array( $post_type, $post_types ) ) {
			$query->set( 'post_type', $post_type );
		}
	}
}

// Register option in the customizer.
add_action( 'customize_register', 'front_page_custom_post_type_customize' );
function front_page_custom_post_type_customize( $wp_customize ) {
	$post_types = get_post_types( array(
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'public' => true,
		'_builtin' => false,
	));

	$post_types['post'] = __( 'post' );

	$wp_customize->add_setting( 'front_page_post_type', array(
		'type' => 'option',
		'capability' => 'manage_options',
		'default' => 'post',
	) );

	$wp_customize->add_control( 'front_page_post_type', array(
		'label'           => __( 'Front Page Post Type', 'front-page-custom-post-type' ),
		'type'            => 'radio',
		'choices'         => $post_types,
		'section'         => 'static_front_page',
		'priority'        => 20,
		'active_callback' => 'front_page_custom_post_type_active_callback',
	) );
}

// Only show the options when the front page is in the preview, and also the posts page.
function front_page_custom_post_type_active_callback() {
	return ( is_home() && is_front_page() );
}