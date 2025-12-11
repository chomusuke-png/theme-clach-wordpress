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
 * * Se ha refactorizado la carga de CSS para ser modular.
 * WordPress maneja las dependencias (array) asegurando el orden de carga.
 */
function clach_scripts() {
    $theme_version = _S_VERSION;
    $uri = get_template_directory_uri();

    // 1. Base (Variables y Globales)
    wp_enqueue_style( 'clach-vars', $uri . '/assets/css/base/variables.css', array(), $theme_version );
    wp_enqueue_style( 'clach-global', $uri . '/assets/css/base/global.css', array('clach-vars'), $theme_version );

    // 2. Layout (Header y Footer dependen de Global)
    wp_enqueue_style( 'clach-header', $uri . '/assets/css/layout/header.css', array('clach-global'), $theme_version );
    wp_enqueue_style( 'clach-footer', $uri . '/assets/css/layout/footer.css', array('clach-global'), $theme_version );

    // 3. Módulos (Componentes específicos)
    wp_enqueue_style( 'clach-hero', $uri . '/assets/css/modules/hero.css', array('clach-global'), $theme_version );
    wp_enqueue_style( 'clach-cards', $uri . '/assets/css/modules/cards.css', array('clach-global'), $theme_version );

    // 4. Hoja de estilo principal de WP (style.css en la raíz)
    // Se carga al final para permitir sobreescrituras rápidas si fuera necesario
    wp_enqueue_style( 'clach-style', get_stylesheet_uri(), array('clach-global'), $theme_version );

    // Scripts JS
    wp_enqueue_script( 'clach-search-js', $uri . '/assets/js/search.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'clach_scripts' );