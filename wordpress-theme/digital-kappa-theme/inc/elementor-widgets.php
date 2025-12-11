<?php
/**
 * Elementor Widgets
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register custom Elementor category
 */
function dk_add_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'digital-kappa',
        [
            'title' => __('Digital Kappa', 'digital-kappa'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'dk_add_elementor_widget_categories');

/**
 * Register Elementor widgets
 */
function dk_register_elementor_widgets($widgets_manager) {
    // Hero Section Widget
    require_once DK_THEME_DIR . '/inc/elementor/class-dk-hero-widget.php';
    $widgets_manager->register(new \DK_Hero_Widget());

    // Product Grid Widget
    require_once DK_THEME_DIR . '/inc/elementor/class-dk-product-grid-widget.php';
    $widgets_manager->register(new \DK_Product_Grid_Widget());

    // FAQ Widget
    require_once DK_THEME_DIR . '/inc/elementor/class-dk-faq-widget.php';
    $widgets_manager->register(new \DK_FAQ_Widget());

    // CTA Section Widget
    require_once DK_THEME_DIR . '/inc/elementor/class-dk-cta-widget.php';
    $widgets_manager->register(new \DK_CTA_Widget());

    // Values/Features Widget
    require_once DK_THEME_DIR . '/inc/elementor/class-dk-values-widget.php';
    $widgets_manager->register(new \DK_Values_Widget());
}
add_action('elementor/widgets/register', 'dk_register_elementor_widgets');

/**
 * Enqueue Elementor editor styles
 */
function dk_elementor_editor_styles() {
    wp_enqueue_style(
        'dk-elementor-editor',
        DK_THEME_URI . '/assets/css/elementor-editor.css',
        [],
        DK_THEME_VERSION
    );
}
add_action('elementor/editor/before_enqueue_styles', 'dk_elementor_editor_styles');

/**
 * Register custom dynamic tags
 */
function dk_register_elementor_dynamic_tags($dynamic_tags_manager) {
    // Register site info tags
}
add_action('elementor/dynamic_tags/register', 'dk_register_elementor_dynamic_tags');
