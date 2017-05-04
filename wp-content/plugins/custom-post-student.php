<?php
	/*
	Plugin Name: Student Profile Custom Post
	Description: This plugin creates custom posts that feature students from to Shin Budo Kai Dojo.
	Version: 1.0
	Author: Saki Sato
	Author URI: http://sakisato.com
	License: GPL2
	*/

	// Register Custom Post Type
	function custom_post_student () {

		$labels = array(
			'name'                  => 'Students',
			'singular_name'         => 'Student',
			'menu_name'             => 'Students',
			'name_admin_bar'        => 'Student',
			'archives'              => 'Student Archives',
			'parent_item_colon'     => 'Parent Student:',
			'all_items'             => 'All Students',
			'add_new_item'          => 'Add New Student',
			'add_new'               => 'Add New',
			'new_item'              => 'New Student',
			'edit_item'             => 'Edit Student',
			'update_item'           => 'Update Student',
			'view_item'             => 'View Student',
			'search_items'          => 'Search Student',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in Trash',
			'featured_image'        => 'Featured Image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into student',
			'uploaded_to_this_item' => 'Uploaded to this student',
			'items_list'            => 'Students list',
			'items_list_navigation' => 'Students list navigation',
			'filter_items_list'     => 'Filter students list',
		);
		$rewrite = array(
			'slug'                  => 'student',
			'with_front'            => true,
			'pages'                 => false,
			'feeds'                 => false,
		);
		$args = array(
			'label'                 => 'Student',
			'description'           => 'A post that contains a title, image and description of a student',
			'labels'                => $labels,
			'supports'              => array( 'title', 'author', 'excerpt', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite
		);
	  register_post_type( 'student', $args ); 
	}
	add_action( 'init', 'custom_post_student', 0 );
