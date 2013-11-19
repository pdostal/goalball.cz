<?php
    add_theme_support( 'custom-header', array( 'width' => 1000, 'height' => 200, 'uploads' => true ) );

    function new_excerpt_more($more) { return '...'; }
    add_filter( 'excerpt_more', 'new_excerpt_more' );
    function custom_excerpt_length($length) { return 32; }
    add_filter('excerpt_length', 'custom_excerpt_length', 32 );

    register_sidebar(array(
        'name' => 'Panel', 'id' => 'sidebar',
        'before_widget' => '<section class="widget" id="%2$s">', 'after_widget' => '</section>',
        'before_title' => '<h1>', 'after_title' => '</h1>'
    ));

    function register_my_menus() {
        register_nav_menus(array('headermenu' => __('Menu')));
    }
	add_action('init', 'register_my_menus');

    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
    function special_nav_class($classes, $item) {
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active ';
        }
        return $classes;
    }
?>
