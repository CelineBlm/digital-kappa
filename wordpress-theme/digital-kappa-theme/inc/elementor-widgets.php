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
 *
 * Note: Custom widgets are optional. The theme works without them.
 * To add custom widgets, create the files in /inc/elementor/
 */
function dk_register_elementor_widgets($widgets_manager) {
    $widgets_dir = DK_THEME_DIR . '/inc/elementor/';

    // Only load widgets if they exist
    $widgets = array(
        'class-dk-hero-widget.php' => 'DK_Hero_Widget',
        'class-dk-product-grid-widget.php' => 'DK_Product_Grid_Widget',
        'class-dk-faq-widget.php' => 'DK_FAQ_Widget',
        'class-dk-cta-widget.php' => 'DK_CTA_Widget',
        'class-dk-values-widget.php' => 'DK_Values_Widget',
    );

    foreach ($widgets as $file => $class) {
        $file_path = $widgets_dir . $file;
        if (file_exists($file_path)) {
            require_once $file_path;
            if (class_exists($class)) {
                $widgets_manager->register(new $class());
            }
        }
    }
}
add_action('elementor/widgets/register', 'dk_register_elementor_widgets');

/**
 * Enqueue Elementor editor styles
 */
function dk_elementor_editor_styles() {
    $editor_css = DK_THEME_DIR . '/assets/css/elementor-editor.css';
    if (file_exists($editor_css)) {
        wp_enqueue_style(
            'dk-elementor-editor',
            DK_THEME_URI . '/assets/css/elementor-editor.css',
            [],
            DK_THEME_VERSION
        );
    }
}
add_action('elementor/editor/before_enqueue_styles', 'dk_elementor_editor_styles');

/**
 * Register custom dynamic tags
 */
function dk_register_elementor_dynamic_tags($dynamic_tags_manager) {
    // Register site info tags - can be extended later
}
add_action('elementor/dynamic_tags/register', 'dk_register_elementor_dynamic_tags');
