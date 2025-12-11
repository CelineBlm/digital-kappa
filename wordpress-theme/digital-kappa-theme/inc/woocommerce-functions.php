<?php
/**
 * WooCommerce Functions
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * ==========================================================================
 * Product Display Customizations
 * ==========================================================================
 */

/**
 * Add category badge to product card
 */
function dk_product_category_badge() {
    global $product;
    $categories = get_the_terms($product->get_id(), 'product_cat');

    if ($categories && !is_wp_error($categories)) {
        $category = $categories[0];
        echo '<div class="dk-product-category-badge">';
        echo '<span class="dk-badge dk-badge-gold">' . esc_html($category->name) . '</span>';
        echo '</div>';
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'dk_product_category_badge', 15);

/**
 * Add rating display
 */
function dk_product_rating_display() {
    global $product;
    $rating = $product->get_average_rating();
    $review_count = $product->get_review_count();

    if ($rating > 0) {
        echo '<div class="dk-product-rating">';
        echo '<svg class="dk-star-icon" viewBox="0 0 20 20" fill="#d2a30b"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>';
        echo '<span class="dk-rating-value">' . esc_html($rating) . '</span>';
        echo '<span class="dk-review-count">(' . esc_html($review_count) . ' ' . _n('avis', 'avis', $review_count, 'digital-kappa') . ')</span>';
        echo '</div>';
    }
}
add_action('woocommerce_after_shop_loop_item_title', 'dk_product_rating_display', 5);

/**
 * Customize product price display
 */
function dk_custom_price_html($price, $product) {
    return '<span class="dk-price">' . $price . '</span>';
}
add_filter('woocommerce_get_price_html', 'dk_custom_price_html', 10, 2);

/**
 * ==========================================================================
 * Single Product Customizations
 * ==========================================================================
 */

/**
 * Add product features section
 */
function dk_product_features() {
    global $product;

    $features = get_post_meta($product->get_id(), '_dk_product_features', true);

    if (!empty($features) && is_array($features)) {
        echo '<div class="dk-product-features">';
        echo '<h3>' . esc_html__('Fonctionnalités principales', 'digital-kappa') . '</h3>';
        echo '<ul class="dk-features-list">';
        foreach ($features as $feature) {
            echo '<li>';
            echo '<svg viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.67"><path d="M16.667 5L7.5 14.167 3.333 10" stroke-linecap="round" stroke-linejoin="round"/></svg>';
            echo '<span>' . esc_html($feature) . '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
add_action('woocommerce_single_product_summary', 'dk_product_features', 25);

/**
 * Add what's included section
 */
function dk_product_includes() {
    global $product;

    $includes = get_post_meta($product->get_id(), '_dk_product_includes', true);

    if (!empty($includes) && is_array($includes)) {
        echo '<div class="dk-product-includes">';
        echo '<h3>' . esc_html__('Ce qui est inclus', 'digital-kappa') . '</h3>';
        echo '<div class="dk-includes-list">';
        foreach ($includes as $item) {
            echo '<div class="dk-include-item">';
            echo '<svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';
            echo '<span>' . esc_html($item) . '</span>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}
add_action('woocommerce_single_product_summary', 'dk_product_includes', 30);

/**
 * Add prerequisites section
 */
function dk_product_prerequisites() {
    global $product;

    $prerequisites = get_post_meta($product->get_id(), '_dk_product_prerequisites', true);

    if (!empty($prerequisites) && is_array($prerequisites)) {
        echo '<div class="dk-product-prerequisites">';
        echo '<h3>' . esc_html__('Prérequis', 'digital-kappa') . '</h3>';
        echo '<ul>';
        foreach ($prerequisites as $prerequisite) {
            echo '<li><span class="dk-bullet">•</span>' . esc_html($prerequisite) . '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
add_action('woocommerce_single_product_summary', 'dk_product_prerequisites', 35);

/**
 * ==========================================================================
 * Custom Product Meta Fields
 * ==========================================================================
 */

/**
 * Add custom fields to product editor
 */
function dk_add_product_custom_fields() {
    global $woocommerce, $post;

    echo '<div class="options_group dk-product-options">';

    // Features field
    woocommerce_wp_textarea_input(array(
        'id'          => '_dk_product_features_text',
        'label'       => __('Fonctionnalités (une par ligne)', 'digital-kappa'),
        'description' => __('Entrez les fonctionnalités du produit, une par ligne', 'digital-kappa'),
        'desc_tip'    => true,
        'value'       => implode("\n", (array) get_post_meta($post->ID, '_dk_product_features', true)),
    ));

    // Includes field
    woocommerce_wp_textarea_input(array(
        'id'          => '_dk_product_includes_text',
        'label'       => __('Ce qui est inclus (un par ligne)', 'digital-kappa'),
        'description' => __('Entrez ce qui est inclus dans le produit, un élément par ligne', 'digital-kappa'),
        'desc_tip'    => true,
        'value'       => implode("\n", (array) get_post_meta($post->ID, '_dk_product_includes', true)),
    ));

    // Prerequisites field
    woocommerce_wp_textarea_input(array(
        'id'          => '_dk_product_prerequisites_text',
        'label'       => __('Prérequis (un par ligne)', 'digital-kappa'),
        'description' => __('Entrez les prérequis du produit, un par ligne', 'digital-kappa'),
        'desc_tip'    => true,
        'value'       => implode("\n", (array) get_post_meta($post->ID, '_dk_product_prerequisites', true)),
    ));

    echo '</div>';
}
add_action('woocommerce_product_options_general_product_data', 'dk_add_product_custom_fields');

/**
 * Save custom product fields
 */
function dk_save_product_custom_fields($post_id) {
    // Features
    if (isset($_POST['_dk_product_features_text'])) {
        $features = array_filter(array_map('sanitize_text_field', explode("\n", $_POST['_dk_product_features_text'])));
        update_post_meta($post_id, '_dk_product_features', $features);
    }

    // Includes
    if (isset($_POST['_dk_product_includes_text'])) {
        $includes = array_filter(array_map('sanitize_text_field', explode("\n", $_POST['_dk_product_includes_text'])));
        update_post_meta($post_id, '_dk_product_includes', $includes);
    }

    // Prerequisites
    if (isset($_POST['_dk_product_prerequisites_text'])) {
        $prerequisites = array_filter(array_map('sanitize_text_field', explode("\n", $_POST['_dk_product_prerequisites_text'])));
        update_post_meta($post_id, '_dk_product_prerequisites', $prerequisites);
    }
}
add_action('woocommerce_process_product_meta', 'dk_save_product_custom_fields');

/**
 * ==========================================================================
 * Checkout Customizations
 * ==========================================================================
 */

/**
 * Add security badges to checkout
 */
function dk_checkout_security_badges() {
    ?>
    <div class="dk-checkout-security">
        <div class="dk-security-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <span><?php esc_html_e('Paiement 100% sécurisé par Stripe', 'digital-kappa'); ?></span>
        </div>
    </div>
    <?php
}
add_action('woocommerce_review_order_after_submit', 'dk_checkout_security_badges');

/**
 * Add benefits to checkout
 */
function dk_checkout_benefits() {
    $benefits = array(
        __('Accès instantané au produit', 'digital-kappa'),
        __('Téléchargement immédiat', 'digital-kappa'),
        __('Garantie 14 jours satisfait ou remboursé', 'digital-kappa'),
        __('Support technique inclus', 'digital-kappa'),
    );

    echo '<div class="dk-checkout-benefits">';
    echo '<h4>' . esc_html__('Ce que vous obtenez :', 'digital-kappa') . '</h4>';
    echo '<ul>';
    foreach ($benefits as $benefit) {
        echo '<li>';
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>';
        echo '<span>' . esc_html($benefit) . '</span>';
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
}
add_action('woocommerce_checkout_before_order_review', 'dk_checkout_benefits');

/**
 * ==========================================================================
 * Order & Email Customizations
 * ==========================================================================
 */

/**
 * Customize thank you page
 */
function dk_thankyou_content($order_id) {
    $order = wc_get_order($order_id);

    if ($order) {
        echo '<div class="dk-thankyou-message">';
        echo '<div class="dk-thankyou-icon">';
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';
        echo '</div>';
        echo '<h2>' . esc_html__('Merci pour votre achat !', 'digital-kappa') . '</h2>';
        echo '<p>' . esc_html__('Votre commande a été traitée avec succès. Vous allez recevoir un email avec les liens de téléchargement de vos produits.', 'digital-kappa') . '</p>';
        echo '</div>';

        // Show downloadable products
        $downloads = $order->get_downloadable_items();
        if ($downloads) {
            echo '<div class="dk-downloads-section">';
            echo '<h3>' . esc_html__('Vos téléchargements', 'digital-kappa') . '</h3>';
            echo '<div class="dk-downloads-list">';
            foreach ($downloads as $download) {
                echo '<div class="dk-download-item">';
                echo '<span class="dk-download-name">' . esc_html($download['download_name']) . '</span>';
                echo '<a href="' . esc_url($download['download_url']) . '" class="dk-btn dk-btn-primary">';
                echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>';
                echo esc_html__('Télécharger', 'digital-kappa');
                echo '</a>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
    }
}
add_action('woocommerce_thankyou', 'dk_thankyou_content', 5);

/**
 * ==========================================================================
 * Archive/Shop Page Customizations
 * ==========================================================================
 */

/**
 * Add shop page description
 */
function dk_shop_description() {
    if (is_shop() && !is_search()) {
        echo '<div class="dk-shop-header">';
        echo '<div class="dk-badge dk-badge-gold">' . esc_html__('Tous les produits', 'digital-kappa') . '</div>';
        echo '<h1 class="dk-shop-title">' . esc_html__('Explorez notre catalogue', 'digital-kappa') . '</h1>';
        echo '<p class="dk-shop-description">' . esc_html__('Découvrez notre sélection de produits digitaux de qualité : applications, ebooks et templates pour booster vos projets.', 'digital-kappa') . '</p>';
        echo '</div>';
    }
}
add_action('woocommerce_archive_description', 'dk_shop_description', 5);

/**
 * Customize product archive wrapper
 */
function dk_before_shop_loop() {
    echo '<div class="dk-products-wrapper">';
}
function dk_after_shop_loop() {
    echo '</div>';
}
add_action('woocommerce_before_shop_loop', 'dk_before_shop_loop', 5);
add_action('woocommerce_after_shop_loop', 'dk_after_shop_loop', 99);
