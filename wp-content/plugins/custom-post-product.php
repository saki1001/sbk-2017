<?php
	/*
	Plugin Name: Product Custom Post
	Description: This plugin creates custom posts that feature products from to Shin Budo Kai Dojo.
	Version: 1.0
	Author: Saki Sato
	Author URI: http://sakisato.com
	License: GPL2
	*/

	// Register Custom Post Type
	function custom_post_product () {

		$labels = array(
			'name'                  => 'Products',
			'singular_name'         => 'Product',
			'menu_name'             => 'Products',
			'name_admin_bar'        => 'Product',
			'archives'              => 'Product Archives',
			'parent_item_colon'     => 'Parent Product:',
			'all_items'             => 'All Products',
			'add_new_item'          => 'Add New Product',
			'add_new'               => 'Add New',
			'new_item'              => 'New Product',
			'edit_item'             => 'Edit Product',
			'update_item'           => 'Update Product',
			'view_item'             => 'View Product',
			'search_items'          => 'Search Product',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in Trash',
			'featured_image'        => 'Featured Image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into product',
			'uploaded_to_this_item' => 'Uploaded to this product',
			'items_list'            => 'Products list',
			'items_list_navigation' => 'Products list navigation',
			'filter_items_list'     => 'Filter products list',
		);
		$rewrite = array(
			'slug'                  => 'product',
			'with_front'            => true,
			'pages'                 => false,
			'feeds'                 => false,
		);
		$args = array(
			'label'                 => 'Product',
			'description'           => 'A post that contains a title, image and description of a product',
			'labels'                => $labels,
			'supports'              => array( 'title', 'author', 'editor', 'excerpt', 'thumbnail' ),
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
	  register_post_type( 'product', $args ); 
	}
	add_action( 'init', 'custom_post_product', 0 );
