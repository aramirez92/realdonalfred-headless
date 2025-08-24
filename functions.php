<?php
/**
 * Headless WordPress Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Headless_WordPress_Theme
 * @since Headless WordPress Theme 1.0.1
 */

// Desactivar feeds RSS
function disable_feeds() {
    wp_die('No hay feeds disponibles en este sitio headless.');
}
add_action('do_feed', 'disable_feeds', 1);
add_action('do_feed_rdf', 'disable_feeds', 1);
add_action('do_feed_rss', 'disable_feeds', 1);
add_action('do_feed_rss2', 'disable_feeds', 1);
add_action('do_feed_atom', 'disable_feeds', 1);

// Desactivar comentarios completamente
function disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}   
add_action('admin_menu', 'disable_comments_admin_menu');

// Desactivar comentarios en posts y páginas
function disable_comments_post_types_support() {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'disable_comments_post_types_support');

// Cerrar comentarios en el frontend
function disable_comments_status() {
    return false;
}
add_filter('comments_open', 'disable_comments_status', 20, 2);
add_filter('pings_open', 'disable_comments_status', 20, 2);

// Ocultar comentarios existentes
function disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'disable_comments_hide_existing_comments', 10, 2);

// Habilitar soporte para REST API (necesario para headless)
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Limpiar wp_head de scripts innecesarios para headless
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
