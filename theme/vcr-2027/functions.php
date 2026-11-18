<?php
/**
 * VCR 2027 — fonctions du thème.
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'vcr-2027', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );
} );

add_action( 'after_setup_theme', function () {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
} );

add_action( 'init', function () {
	register_block_style( 'core/paragraph', [ 'name' => 'kicker', 'label' => 'Sur-titre' ] );
	register_block_pattern_category( 'vcr', [ 'label' => 'VCR' ] );
} );

/**
 * Coureurs : type de contenu, spécialités, champs (nationalité, numéro, âge…).
 */
add_action( 'init', function () {
	register_post_type( 'coureur', [
		'label'         => 'Coureurs',
		'labels'        => [ 'singular_name' => 'Coureur', 'add_new_item' => 'Ajouter un coureur', 'edit_item' => 'Modifier le coureur', 'all_items' => 'Tous les coureurs' ],
		'public'        => true,
		'show_in_rest'  => true,
		'menu_icon'     => 'dashicons-groups',
		'menu_position' => 5,
		'has_archive'   => 'equipe-pro/coureurs',
		'rewrite'       => [ 'slug' => 'equipe-pro/coureurs', 'with_front' => false ],
		'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ],
	] );
	register_taxonomy( 'specialite', 'coureur', [
		'label' => 'Spécialités', 'public' => true, 'show_in_rest' => true, 'hierarchical' => true,
		'rewrite' => [ 'slug' => 'equipe-pro/specialite' ],
	] );
	foreach ( [ 'nationalite' => 'Nationalité', 'pays_code' => 'Code pays', 'numero' => 'Numéro', 'naissance' => 'Date de naissance', 'ville' => 'Ville', 'instagram' => 'Instagram', 'saison' => 'Saison' ] as $key => $label ) {
		register_post_meta( 'coureur', $key, [ 'type' => 'string', 'single' => true, 'show_in_rest' => true, 'label' => $label ] );
	}
} );

// Effectif trié par numéro (menu_order).
add_action( 'pre_get_posts', function ( $q ) {
	if ( ! is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'coureur' ) ) {
		$q->set( 'orderby', 'menu_order title' );
		$q->set( 'order', 'ASC' );
		$q->set( 'posts_per_page', 40 );
	}
} );
add_filter( 'query_loop_block_query_vars', function ( $vars ) {
	if ( ( $vars['post_type'] ?? '' ) === 'coureur' ) { $vars['orderby'] = 'menu_order title'; $vars['order'] = 'ASC'; }
	return $vars;
} );
