<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <!-- Logo du site -->
            <div class="site-logo">
                <a href="<?php echo esc_url( home_url( '/home' ) ); ?>">
                    <img src="http://planty.local/wp-content/uploads/2024/08/Logo.png" alt="Planty">
                </a>
            </div>

            <!-- Navigation principale -->
            <nav class="main-navigation">
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/nous-rencontrer' ) ); ?>">Nous rencontrer</a></li>
                    <?php if ( is_user_logged_in() ) : ?>
                        <li><a href="<?php echo esc_url( admin_url() ); ?>">Admin</a></li>
                    <?php endif; ?>
                    <li><a class="menu-commander" href="<?php echo esc_url( home_url( '/precommande' ) ); ?>">Commander</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Rest of your template... -->
