<?php
function kindergarten_education_post_types(){
	register_post_type('lesson',array(
        'supports' => array('title', 'editor','excerpt','comments'),
        'rewrite'=> array('slug' => 'lessons' ),
        'has_archive' => true,
		'public' => true,
        'taxonomies'  => array( 'category' ),
        'labels' => array(
            'name' => "Lessons",
            'add_new_item' => 'Add New Lesson',
            'edit_item' => 'Edit Lesson',
            'all_items' => 'All Lessons',
            'singular_name' => "Lesson"
            ),
			'menu_icon' => 'dashicons-book'
            
	));
    register_post_type('tip',array(
        'supports' => array('title', 'editor','excerpt','comments'),
        'rewrite'=> array('slug' => 'tips' ),
        'has_archive' => true,
		'public' => true,
        'taxonomies'  => array( 'category' ),
        'labels' => array(
            'name' => "Tips",
            'add_new_item' => 'Add New Tip',
            'edit_item' => 'Edit Tip',
            'all_items' => 'All Tips',
            'singular_name' => "Tip"
            ),
			'menu_icon' => 'dashicons-sticky'
	));
    register_post_type('project',array(
        'supports' => array('title', 'editor','excerpt','comments'),
        'rewrite'=> array('slug' => 'projects' ),
        'has_archive' => true,
		'public' => true,
        'taxonomies'  => array( 'category' ),
        'labels' => array(
            'name' => "Projects",
            'add_new_item' => 'Add New Projects',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => "Project"
            ),
			'menu_icon' => 'dashicons-portfolio'

     
	));

    register_post_type('notebook',array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
		'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => "Notebook",
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Notebook',
            'all_items' => 'All Notes',
            'singular_name' => "Note"
            ),
			'menu_icon' => 'dashicons-welcome-write-blog'
     
	));
	}
	add_action('init', 'kindergarten_education_post_types');


?>