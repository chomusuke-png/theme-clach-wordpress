<?php
/**
 * CLACH Theme Functions and Definitions
 * Diseño modular y estricto.
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function clach_setup() {
	// Soporte para etiquetas de título automáticas (SEO básico)
	add_theme_support( 'title-tag' );

	// Soporte para Logo Personalizado
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 250,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Registrar Menú Principal
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Menú Principal (Cabecera)', 'clach' ),
		)
	);
}
add_action( 'after_setup_theme', 'clach_setup' );

/**
 * Enqueue scripts and styles.
 */
function clach_scripts() {
	// Cargar hoja de estilo principal (la que tiene los comentarios del tema)
	wp_enqueue_style( 'clach-style', get_stylesheet_uri(), array(), _S_VERSION );

	// Cargar el CSS personalizado de la carpeta assets
	wp_enqueue_style( 'clach-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );

	// Cargar JS (Buscador de aditivos)
	wp_enqueue_script( 'clach-search-js', get_template_directory_uri() . '/assets/js/search.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'clach_scripts' );

/**
 * Carga Modular de Funcionalidades (Includes)
 * Descomenta las líneas a medida que crees los archivos en la carpeta 'includes/'
 */
// require get_template_directory() . '/includes/post-types.php';  // Para CPT de Aditivos
// require get_template_directory() . '/includes/taxonomies.php';  // Para Clasificación Halal/Haram