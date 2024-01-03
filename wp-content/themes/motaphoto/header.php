
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Motaphoto</title>
    <?php wp_head(); ?>
</head>
    
<body>
<header>

    <a class="logo__nav" href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-motaphoto.png" alt="Logo de Nathalie Mota">
    </a>
    <nav role="navigation" aria-label="<?php _e('Menu principal', 'text-domain'); ?>">
        <?php wp_nav_menu([ 
                'theme_location' => 'main',
                'container'      => false 
                ]);
         ?>
    </nav>
</header>