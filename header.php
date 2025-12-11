<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <span class="org-name">Comité Latinoamericano de Certificación Halal - C.L.A.C.H.</span>
                <nav class="top-links">
                </nav>
            </div>
        </div>
    </div>

    <div class="main-header">
        <div class="container flex-header">
            
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="gov-logo">';
                        } else {
                            echo '<h1 class="site-title">' . get_bloginfo( 'name' ) . '</h1>';
                        }
                    ?>
                </a>
                <div class="branding-text">
                    <span class="standard-version">N.H.L.A. 2021 - 3.0</span>
                    <span class="standard-desc">Norma Halal Latinoamericana</span>
                </div>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'nav-menu gov-style', // Clase para estilar sin sombras, solo texto
                ) );
                ?>
            </nav>
        </div>
    </div>
</header>