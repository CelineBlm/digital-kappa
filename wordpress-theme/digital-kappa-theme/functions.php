<?php
/**
 * Digital Kappa Theme Functions
 *
 * @package DigitalKappa
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme constants
define('DK_THEME_VERSION', '1.0.0');
define('DK_THEME_DIR', get_template_directory());
define('DK_THEME_URI', get_template_directory_uri());

/**
 * ==========================================================================
 * Auto-create Pages on Theme Activation
 * ==========================================================================
 */
function dk_create_pages_on_activation() {
    // Define pages to create
    $pages = array(
        array(
            'title'    => 'Accueil',
            'slug'     => 'accueil',
            'template' => 'templates/template-home.php',
            'content'  => '<!-- Page d\'accueil - Le contenu est généré par le template -->',
        ),
        array(
            'title'    => 'FAQ',
            'slug'     => 'faq',
            'template' => 'templates/template-faq.php',
            'content'  => '<!-- FAQ - Le contenu est généré par le template -->',
        ),
        array(
            'title'    => 'Comment ça marche',
            'slug'     => 'comment-ca-marche',
            'template' => 'templates/template-how-it-works.php',
            'content'  => '<!-- Comment ça marche - Le contenu est généré par le template -->',
        ),
        array(
            'title'    => 'À propos',
            'slug'     => 'a-propos',
            'template' => 'templates/template-about.php',
            'content'  => '<!-- À propos - Le contenu est généré par le template -->',
        ),
        array(
            'title'    => 'Conditions Générales de Vente',
            'slug'     => 'cgv',
            'template' => 'templates/template-cgv.php',
            'content'  => '<!-- CGV - Le contenu est généré par le template -->',
        ),
        array(
            'title'    => 'Mentions Légales',
            'slug'     => 'mentions-legales',
            'template' => 'templates/template-legal-notice.php',
            'content'  => '<!-- Mentions légales - Le contenu est généré par le template -->',
        ),
        array(
            'title'    => 'Politique de Confidentialité',
            'slug'     => 'politique-de-confidentialite',
            'template' => 'templates/template-privacy.php',
            'content'  => '<!-- Politique de confidentialité - Le contenu est généré par le template -->',
        ),
    );

    foreach ($pages as $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($page_data['slug']);

        if (!$existing_page) {
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title'     => $page_data['title'],
                'post_name'      => $page_data['slug'],
                'post_content'   => $page_data['content'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'post_author'    => 1,
                'comment_status' => 'closed',
            ));

            // Set the page template
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        } else {
            // Page exists, just update the template if not set
            $current_template = get_post_meta($existing_page->ID, '_wp_page_template', true);
            if (empty($current_template) || $current_template === 'default') {
                update_post_meta($existing_page->ID, '_wp_page_template', $page_data['template']);
            }
        }
    }

    // Set the homepage
    $home_page = get_page_by_path('accueil');
    if ($home_page) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_page->ID);
    }
}
add_action('after_switch_theme', 'dk_create_pages_on_activation');

// Also provide a manual way to create pages via admin
function dk_add_setup_menu() {
    add_theme_page(
        'Configuration Digital Kappa',
        'Config. DK',
        'manage_options',
        'dk-setup',
        'dk_setup_page'
    );
}
add_action('admin_menu', 'dk_add_setup_menu');

// Show admin notice if pages are not created
function dk_admin_notice_setup() {
    // Check if home page exists
    $home_page = get_page_by_path('accueil');

    // Don't show if pages already exist
    if ($home_page) {
        return;
    }

    // Don't show on the setup page itself
    if (isset($_GET['page']) && $_GET['page'] === 'dk-setup') {
        return;
    }

    // Handle auto-create from notice
    if (isset($_GET['dk_auto_create']) && $_GET['dk_auto_create'] === '1' && check_admin_referer('dk_auto_create_pages')) {
        dk_create_pages_on_activation();
        echo '<div class="notice notice-success is-dismissible"><p><strong>Digital Kappa :</strong> Les pages ont été créées avec succès ! <a href="' . admin_url('edit.php?post_type=page') . '">Voir les pages</a></p></div>';
        return;
    }

    $create_url = wp_nonce_url(admin_url('?dk_auto_create=1'), 'dk_auto_create_pages');
    ?>
    <div class="notice notice-warning">
        <p>
            <strong>Digital Kappa :</strong> Les pages du thème n'ont pas encore été créées.
            <a href="<?php echo esc_url($create_url); ?>" class="button button-primary" style="margin-left: 10px;">Créer les pages maintenant</a>
            <a href="<?php echo admin_url('themes.php?page=dk-setup'); ?>" class="button" style="margin-left: 5px;">Configuration avancée</a>
        </p>
    </div>
    <?php
}
add_action('admin_notices', 'dk_admin_notice_setup');

function dk_setup_page() {
    // Handle form submission
    if (isset($_POST['dk_create_pages']) && check_admin_referer('dk_create_pages_nonce')) {
        dk_create_pages_on_activation();
        echo '<div class="notice notice-success"><p>Les pages ont été créées avec succès !</p></div>';
    }
    ?>
    <div class="wrap">
        <h1>Configuration Digital Kappa</h1>
        <div class="card" style="max-width: 600px; padding: 20px;">
            <h2>Créer les pages du thème</h2>
            <p>Cliquez sur le bouton ci-dessous pour créer automatiquement toutes les pages nécessaires au thème :</p>
            <ul style="list-style: disc; margin-left: 20px;">
                <li>Accueil (page d'accueil)</li>
                <li>FAQ</li>
                <li>Comment ça marche</li>
                <li>À propos</li>
                <li>CGV (Conditions Générales de Vente)</li>
                <li>Mentions Légales</li>
                <li>Politique de Confidentialité</li>
            </ul>
            <form method="post">
                <?php wp_nonce_field('dk_create_pages_nonce'); ?>
                <p>
                    <input type="submit" name="dk_create_pages" class="button button-primary" value="Créer les pages">
                </p>
            </form>
        </div>

        <div class="card" style="max-width: 600px; padding: 20px; margin-top: 20px;">
            <h2>Prochaines étapes</h2>
            <ol>
                <li><strong>Installer WooCommerce</strong> si ce n'est pas déjà fait</li>
                <li><strong>Configurer Stripe</strong> : Voir le fichier STRIPE-SETUP.md dans le thème</li>
                <li><strong>Créer des produits</strong> téléchargeables dans WooCommerce</li>
                <li><strong>Configurer les menus</strong> dans Apparence > Menus</li>
            </ol>
        </div>
    </div>
    <?php
}


/**
 * ==========================================================================
 * Theme Setup
 * ==========================================================================
 */

function dk_theme_setup() {
    // Load text domain for translations
    load_theme_textdomain('digital-kappa', DK_THEME_DIR . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Custom image sizes
    add_image_size('dk-product-card', 400, 300, true);
    add_image_size('dk-product-hero', 800, 600, true);
    add_image_size('dk-hero-banner', 1200, 600, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Menu Principal', 'digital-kappa'),
        'secondary' => __('Menu Secondaire', 'digital-kappa'),
        'footer'    => __('Menu Footer', 'digital-kappa'),
        'footer-legal' => __('Menu Footer Légal', 'digital-kappa'),
        'footer-categories' => __('Menu Footer Catégories', 'digital-kappa'),
    ));

    // Switch default core markup to HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 64,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for Block Editor styles
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Add support for wide alignment
    add_theme_support('align-wide');

    // WooCommerce support
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 400,
        'single_image_width'    => 800,
        'product_grid'          => array(
            'default_rows'    => 4,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 3,
            'min_columns'     => 2,
            'max_columns'     => 4,
        ),
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'dk_theme_setup');

/**
 * ==========================================================================
 * Enqueue Scripts and Styles
 * ==========================================================================
 */

function dk_enqueue_scripts() {
    // Google Fonts - Merriweather & Montserrat
    wp_enqueue_style(
        'dk-google-fonts',
        'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'dk-main-style',
        get_stylesheet_uri(),
        array('dk-google-fonts'),
        DK_THEME_VERSION
    );

    // Custom CSS
    wp_enqueue_style(
        'dk-custom-style',
        DK_THEME_URI . '/assets/css/custom.css',
        array('dk-main-style'),
        DK_THEME_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'dk-main-script',
        DK_THEME_URI . '/assets/js/main.js',
        array('jquery'),
        DK_THEME_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script('dk-main-script', 'dkAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('dk_ajax_nonce'),
    ));

    // Conditional scripts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'dk_enqueue_scripts');

/**
 * ==========================================================================
 * Widget Areas
 * ==========================================================================
 */

function dk_register_widgets() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'digital-kappa'),
        'id'            => 'sidebar-main',
        'description'   => __('Sidebar principale du site', 'digital-kappa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Colonne 1', 'digital-kappa'),
        'id'            => 'footer-1',
        'description'   => __('Première colonne du footer', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Colonne 2', 'digital-kappa'),
        'id'            => 'footer-2',
        'description'   => __('Deuxième colonne du footer', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Colonne 3', 'digital-kappa'),
        'id'            => 'footer-3',
        'description'   => __('Troisième colonne du footer', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Colonne 4', 'digital-kappa'),
        'id'            => 'footer-4',
        'description'   => __('Quatrième colonne du footer', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Sidebar Shop', 'digital-kappa'),
        'id'            => 'sidebar-shop',
        'description'   => __('Sidebar pour les pages boutique', 'digital-kappa'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'dk_register_widgets');

/**
 * ==========================================================================
 * Elementor Support
 * ==========================================================================
 */

function dk_elementor_support() {
    // Register Elementor locations for theme builder
    if (did_action('elementor/loaded')) {
        add_action('elementor/theme/register_locations', 'dk_register_elementor_locations');
    }
}
add_action('after_setup_theme', 'dk_elementor_support');

function dk_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_all_core_location();
}

// Add Elementor CSS classes to body
function dk_body_classes($classes) {
    if (class_exists('\Elementor\Plugin')) {
        $classes[] = 'elementor-default';
        $classes[] = 'elementor-kit-digital-kappa';
    }
    return $classes;
}
add_filter('body_class', 'dk_body_classes');

/**
 * ==========================================================================
 * WooCommerce Configuration
 * ==========================================================================
 */

// Only load WooCommerce customizations if WooCommerce is active
if (class_exists('WooCommerce')) {

// Remove default WooCommerce styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Custom WooCommerce wrapper
function dk_woocommerce_wrapper_start() {
    echo '<main class="dk-shop-main"><div class="dk-container">';
}
function dk_woocommerce_wrapper_end() {
    echo '</div></main>';
}
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'dk_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'dk_woocommerce_wrapper_end', 10);

// Remove sidebar from shop pages (we'll add our own)
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Custom products per page
function dk_products_per_page() {
    return 12;
}
add_filter('loop_shop_per_page', 'dk_products_per_page', 20);

// Custom product columns
function dk_loop_columns() {
    return 3;
}
add_filter('loop_shop_columns', 'dk_loop_columns', 999);

// Customize add to cart button text for digital products
function dk_add_to_cart_text($text, $product) {
    if ($product->is_virtual() || $product->is_downloadable()) {
        return __('Acheter maintenant', 'digital-kappa');
    }
    return $text;
}
add_filter('woocommerce_product_single_add_to_cart_text', 'dk_add_to_cart_text', 10, 2);
add_filter('woocommerce_product_add_to_cart_text', 'dk_add_to_cart_text', 10, 2);

// Skip cart for digital products - go directly to checkout
function dk_add_to_cart_redirect() {
    return wc_get_checkout_url();
}
add_filter('woocommerce_add_to_cart_redirect', 'dk_add_to_cart_redirect');

// Empty cart before adding new product (single product checkout)
function dk_empty_cart_before_add($cart_item_data, $product_id) {
    WC()->cart->empty_cart();
    return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', 'dk_empty_cart_before_add', 10, 2);

/**
 * ==========================================================================
 * Digital Products - Stripe Payment & Email Delivery
 * ==========================================================================
 */

// Ensure WooCommerce recognizes all products as virtual by default
function dk_default_virtual_product($value, $product_id, $meta) {
    return 'yes';
}
add_filter('default_post_metadata', function($value, $object_id, $meta_key) {
    if ($meta_key === '_virtual' || $meta_key === '_downloadable') {
        return 'yes';
    }
    return $value;
}, 10, 3);

// Custom checkout fields for digital products
function dk_checkout_fields($fields) {
    // Remove unnecessary shipping fields
    unset($fields['shipping']);

    // Remove unnecessary billing fields
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);

    // Keep only essential fields
    $fields['billing']['billing_email']['priority'] = 10;
    $fields['billing']['billing_first_name']['priority'] = 20;
    $fields['billing']['billing_last_name']['priority'] = 30;
    $fields['billing']['billing_country']['priority'] = 40;

    // Make country optional
    $fields['billing']['billing_country']['required'] = false;

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'dk_checkout_fields');

// Custom email content for digital product delivery
function dk_email_order_details($order, $sent_to_admin, $plain_text, $email) {
    if ($email->id === 'customer_completed_order') {
        echo '<div style="margin-bottom: 20px; padding: 20px; background-color: #fffbf0; border-radius: 10px; border: 1px solid rgba(210, 163, 11, 0.2);">';
        echo '<h3 style="color: #d2a30b; margin-top: 0;">Vos fichiers sont prêts !</h3>';
        echo '<p>Merci pour votre achat sur Digital Kappa. Vous trouverez ci-dessous les liens de téléchargement de vos produits.</p>';
        echo '</div>';
    }
}
add_action('woocommerce_email_order_details', 'dk_email_order_details', 5, 4);

// Auto-complete orders for digital products
function dk_auto_complete_virtual_orders($order_id) {
    if (!$order_id) {
        return;
    }

    $order = wc_get_order($order_id);

    if ($order->get_status() === 'processing') {
        $virtual_order = true;

        foreach ($order->get_items() as $item) {
            $product = $item->get_product();
            if ($product && (!$product->is_virtual() || !$product->is_downloadable())) {
                $virtual_order = false;
                break;
            }
        }

        if ($virtual_order) {
            $order->update_status('completed', __('Commande auto-complétée - Produit digital', 'digital-kappa'));
        }
    }
}
add_action('woocommerce_thankyou', 'dk_auto_complete_virtual_orders');
add_action('woocommerce_payment_complete', 'dk_auto_complete_virtual_orders');

} // End if (class_exists('WooCommerce'))

/**
 * ==========================================================================
 * Custom Shortcodes
 * ==========================================================================
 */

// Hero Section shortcode
function dk_hero_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title'       => 'Marketplace de produits digitaux',
        'subtitle'    => '',
        'description' => '',
        'btn_text'    => 'Explorer les produits',
        'btn_link'    => '/boutique',
        'btn2_text'   => '',
        'btn2_link'   => '',
        'badge'       => '',
    ), $atts);

    ob_start();
    ?>
    <section class="dk-hero">
        <div class="dk-container">
            <div class="dk-hero-content">
                <?php if ($atts['badge']) : ?>
                <div class="dk-badge dk-badge-white">
                    <span class="dk-badge-dot"></span>
                    <?php echo esc_html($atts['badge']); ?>
                </div>
                <?php endif; ?>

                <h1 class="dk-hero-title">
                    <?php echo wp_kses_post($atts['title']); ?>
                    <?php if ($atts['subtitle']) : ?>
                    <span class="dk-text-gold"><?php echo esc_html($atts['subtitle']); ?></span>
                    <?php endif; ?>
                </h1>

                <?php if ($atts['description']) : ?>
                <p class="dk-hero-description"><?php echo esc_html($atts['description']); ?></p>
                <?php endif; ?>

                <div class="dk-hero-buttons">
                    <a href="<?php echo esc_url($atts['btn_link']); ?>" class="dk-btn dk-btn-primary">
                        <?php echo esc_html($atts['btn_text']); ?>
                    </a>
                    <?php if ($atts['btn2_text']) : ?>
                    <a href="<?php echo esc_url($atts['btn2_link']); ?>" class="dk-btn dk-btn-secondary">
                        <?php echo esc_html($atts['btn2_text']); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('dk_hero', 'dk_hero_shortcode');

// Value Propositions shortcode
function dk_values_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Pourquoi choisir Digital Kappa',
        'description' => '',
    ), $atts);

    $values = array(
        array(
            'icon'  => 'simplicity',
            'title' => 'Simplicité',
            'desc'  => 'Interface intuitive pour trouver rapidement ce dont vous avez besoin',
        ),
        array(
            'icon'  => 'reliability',
            'title' => 'Fiabilité',
            'desc'  => 'Produits vérifiés et transactions sécurisées',
        ),
        array(
            'icon'  => 'speed',
            'title' => 'Rapidité',
            'desc'  => 'Achat en un clic, téléchargement instantané',
        ),
        array(
            'icon'  => 'support',
            'title' => 'Support',
            'desc'  => 'Assistance disponible pour tous vos achats',
        ),
    );

    ob_start();
    ?>
    <section class="dk-values dk-section">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php echo esc_html($atts['title']); ?></h2>
                <?php if ($atts['description']) : ?>
                <p class="dk-text-muted"><?php echo esc_html($atts['description']); ?></p>
                <?php endif; ?>
            </div>

            <div class="dk-grid dk-grid-4">
                <?php foreach ($values as $value) : ?>
                <div class="dk-value-item dk-text-center">
                    <div class="dk-value-icon">
                        <svg class="dk-icon" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <!-- Icon placeholder -->
                        </svg>
                    </div>
                    <h3 class="dk-value-title"><?php echo esc_html($value['title']); ?></h3>
                    <p class="dk-value-desc"><?php echo esc_html($value['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('dk_values', 'dk_values_shortcode');

// FAQ Shortcode
function dk_faq_shortcode($atts) {
    $atts = shortcode_atts(array(
        'category' => '',
        'limit'    => 10,
    ), $atts);

    // Default FAQs
    $faqs = array(
        array(
            'question' => "Qu'est-ce que Digital Kappa ?",
            'answer'   => "Digital Kappa est une marketplace de produits digitaux proposant des applications mobiles, des ebooks et des templates. Notre mission est de vous fournir des ressources numériques de qualité, simples et prêtes à l'emploi pour gagner du temps dans vos projets.",
        ),
        array(
            'question' => "Comment fonctionne le téléchargement ?",
            'answer'   => "Une fois votre achat effectué, vous recevez immédiatement un email avec un lien de téléchargement sécurisé. Vous pouvez également retrouver tous vos produits dans votre compte utilisateur, accessible à tout moment. Les téléchargements sont illimités et sans date d'expiration.",
        ),
        array(
            'question' => "Quels moyens de paiement acceptez-vous ?",
            'answer'   => "Nous acceptons les cartes bancaires (Visa, Mastercard, American Express), PayPal, et les virements bancaires. Tous les paiements sont sécurisés via notre plateforme de paiement certifiée.",
        ),
        array(
            'question' => "Quelle est votre politique de remboursement ?",
            'answer'   => "Nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits. Si vous n'êtes pas satisfait, contactez-nous et nous vous rembourserons intégralement, sans poser de questions.",
        ),
    );

    ob_start();
    ?>
    <div class="dk-faq-list">
        <?php foreach ($faqs as $index => $faq) : ?>
        <div class="dk-faq-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <button class="dk-faq-question" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                <span><?php echo esc_html($faq['question']); ?></span>
                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                    <path d="M4.166 10h11.667" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="dk-faq-icon-plus" d="M10 4.166v11.667" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="dk-faq-answer" <?php echo $index !== 0 ? 'hidden' : ''; ?>>
                <p><?php echo esc_html($faq['answer']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('dk_faq', 'dk_faq_shortcode');

// CTA Section shortcode
function dk_cta_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title'       => 'Prêt à découvrir nos produits digitaux ?',
        'description' => 'Rejoignez des centaines de développeurs et créateurs qui utilisent nos produits pour accélérer leurs projets',
        'btn_text'    => 'Explorer le catalogue',
        'btn_link'    => '/boutique',
    ), $atts);

    ob_start();
    ?>
    <section class="dk-cta dk-section dk-bg-dark">
        <div class="dk-container">
            <div class="dk-cta-content dk-text-center">
                <h2 class="dk-cta-title"><?php echo esc_html($atts['title']); ?></h2>
                <p class="dk-cta-description"><?php echo esc_html($atts['description']); ?></p>
                <div class="dk-cta-buttons">
                    <a href="<?php echo esc_url($atts['btn_link']); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                        <?php echo esc_html($atts['btn_text']); ?>
                    </a>
                </div>
                <div class="dk-cta-badges">
                    <div class="dk-cta-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Paiement sécurisé</span>
                    </div>
                    <div class="dk-cta-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                        <span>Téléchargement instantané</span>
                    </div>
                    <div class="dk-cta-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
                            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
                        </svg>
                        <span>Support 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('dk_cta', 'dk_cta_shortcode');

/**
 * ==========================================================================
 * Custom Theme Options (Customizer)
 * ==========================================================================
 */

function dk_customize_register($wp_customize) {
    // Theme Options Panel
    $wp_customize->add_panel('dk_theme_options', array(
        'title'    => __('Options Digital Kappa', 'digital-kappa'),
        'priority' => 30,
    ));

    // Contact Section
    $wp_customize->add_section('dk_contact', array(
        'title'    => __('Informations de contact', 'digital-kappa'),
        'panel'    => 'dk_theme_options',
        'priority' => 10,
    ));

    $wp_customize->add_setting('dk_contact_email', array(
        'default'           => 'contact@digitalkappa.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('dk_contact_email', array(
        'label'   => __('Email de contact', 'digital-kappa'),
        'section' => 'dk_contact',
        'type'    => 'email',
    ));

    $wp_customize->add_setting('dk_support_email', array(
        'default'           => 'support@digitalkappa.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('dk_support_email', array(
        'label'   => __('Email de support', 'digital-kappa'),
        'section' => 'dk_contact',
        'type'    => 'email',
    ));

    // Social Links Section
    $wp_customize->add_section('dk_social', array(
        'title'    => __('Réseaux sociaux', 'digital-kappa'),
        'panel'    => 'dk_theme_options',
        'priority' => 20,
    ));

    $social_networks = array('twitter', 'facebook', 'instagram', 'linkedin', 'discord');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting('dk_social_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('dk_social_' . $network, array(
            'label'   => ucfirst($network),
            'section' => 'dk_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'dk_customize_register');

/**
 * ==========================================================================
 * AJAX Handlers
 * ==========================================================================
 */

// Quick view product AJAX
function dk_quick_view_product() {
    check_ajax_referer('dk_ajax_nonce', 'nonce');

    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

    if ($product_id) {
        $product = wc_get_product($product_id);

        if ($product) {
            ob_start();
            wc_get_template_part('content', 'quick-view');
            $html = ob_get_clean();

            wp_send_json_success(array('html' => $html));
        }
    }

    wp_send_json_error();
}
add_action('wp_ajax_dk_quick_view', 'dk_quick_view_product');
add_action('wp_ajax_nopriv_dk_quick_view', 'dk_quick_view_product');

/**
 * ==========================================================================
 * Helper Functions
 * ==========================================================================
 */

// Get theme option
function dk_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

// Get SVG icon
function dk_get_icon($icon_name, $class = '') {
    $icons_path = DK_THEME_DIR . '/assets/icons/';
    $icon_file = $icons_path . $icon_name . '.svg';

    if (file_exists($icon_file)) {
        $svg = file_get_contents($icon_file);
        if ($class) {
            $svg = str_replace('<svg', '<svg class="' . esc_attr($class) . '"', $svg);
        }
        return $svg;
    }

    return '';
}

// Print SVG icon
function dk_icon($icon_name, $class = '') {
    echo dk_get_icon($icon_name, $class);
}

/**
 * ==========================================================================
 * Security & Performance
 * ==========================================================================
 */

// Remove WordPress version
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Add security headers
function dk_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
}
add_action('send_headers', 'dk_security_headers');

// Defer non-critical CSS
function dk_defer_css($html, $handle) {
    if (is_admin()) {
        return $html;
    }

    $defer_handles = array('dk-google-fonts');

    if (in_array($handle, $defer_handles)) {
        return str_replace("rel='stylesheet'", "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $html);
    }

    return $html;
}
add_filter('style_loader_tag', 'dk_defer_css', 10, 2);

/**
 * ==========================================================================
 * Include Additional Files
 * ==========================================================================
 */

// Custom Walker for navigation menus
require_once DK_THEME_DIR . '/inc/class-dk-walker-nav-menu.php';

// WooCommerce specific functions
if (class_exists('WooCommerce')) {
    require_once DK_THEME_DIR . '/inc/woocommerce-functions.php';
}

// Elementor widgets
if (did_action('elementor/loaded')) {
    require_once DK_THEME_DIR . '/inc/elementor-widgets.php';
}
