<?php
function theme_enqueue_styles() {
    // Charger les styles du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Charger les styles du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}

// Supprimer les styles spécifiques du thème parent
function remove_parent_styles() {
    wp_dequeue_style('hello-elementor');
}

// Ajoutez l'action pour supprimer les styles du parent
add_action('wp_enqueue_scripts', 'remove_parent_styles', 20);

// Ajoutez l'action pour charger les styles
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>