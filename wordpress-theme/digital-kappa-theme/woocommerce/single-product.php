<?php
/**
 * The Template for displaying single products
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;

get_header();

global $product;

// Get product data
$product_id = $product->get_id();
$product_title = $product->get_name();
$product_description = $product->get_description();
$product_short_description = $product->get_short_description();
$product_price = $product->get_price();
$product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'dk-product-single');
$gallery_ids = $product->get_gallery_image_ids();
$product_rating = $product->get_average_rating();
$product_reviews = $product->get_review_count();

// Get categories
$categories = get_the_terms($product_id, 'product_cat');
$primary_category = $categories ? $categories[0] : null;

// Get custom fields
$features = get_post_meta($product_id, '_dk_features', true);
$includes = get_post_meta($product_id, '_dk_includes', true);
$prerequisites = get_post_meta($product_id, '_dk_prerequisites', true);
?>

<main class="dk-main dk-single-product">
    <!-- Breadcrumb -->
    <div class="dk-breadcrumb-section">
        <div class="dk-container">
            <nav class="dk-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
                <span class="dk-breadcrumb-separator">/</span>
                <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">Produits</a>
                <?php if ($primary_category) : ?>
                    <span class="dk-breadcrumb-separator">/</span>
                    <a href="<?php echo esc_url(get_term_link($primary_category)); ?>">
                        <?php echo esc_html($primary_category->name); ?>
                    </a>
                <?php endif; ?>
                <span class="dk-breadcrumb-separator">/</span>
                <span class="dk-breadcrumb-current"><?php echo esc_html($product_title); ?></span>
            </nav>
        </div>
    </div>

    <!-- Product Hero Section -->
    <section class="dk-product-hero">
        <div class="dk-container">
            <div class="dk-product-hero-grid">
                <!-- Product Images -->
                <div class="dk-product-gallery">
                    <div class="dk-product-main-image">
                        <?php if ($product_image) : ?>
                            <img src="<?php echo esc_url($product_image[0]); ?>"
                                 alt="<?php echo esc_attr($product_title); ?>"
                                 id="dk-main-product-image">
                        <?php else : ?>
                            <div class="dk-product-placeholder-large">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($gallery_ids)) : ?>
                        <div class="dk-product-thumbnails">
                            <?php if ($product_image) : ?>
                                <button class="dk-thumbnail active" data-image="<?php echo esc_url($product_image[0]); ?>">
                                    <img src="<?php echo esc_url($product_image[0]); ?>" alt="">
                                </button>
                            <?php endif; ?>
                            <?php foreach ($gallery_ids as $gallery_id) :
                                $gallery_image = wp_get_attachment_image_src($gallery_id, 'dk-product-single');
                                if ($gallery_image) :
                            ?>
                                <button class="dk-thumbnail" data-image="<?php echo esc_url($gallery_image[0]); ?>">
                                    <img src="<?php echo esc_url($gallery_image[0]); ?>" alt="">
                                </button>
                            <?php endif; endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Product Info -->
                <div class="dk-product-info">
                    <?php if ($primary_category) : ?>
                        <a href="<?php echo esc_url(get_term_link($primary_category)); ?>" class="dk-badge dk-badge-link">
                            <?php echo esc_html($primary_category->name); ?>
                        </a>
                    <?php endif; ?>

                    <h1 class="dk-product-title"><?php echo esc_html($product_title); ?></h1>

                    <?php if ($product_rating > 0) : ?>
                        <div class="dk-product-rating-large">
                            <div class="dk-stars">
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <svg class="dk-star <?php echo $i <= round($product_rating) ? 'filled' : ''; ?>"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            <span class="dk-rating-text">
                                <?php echo esc_html($product_rating); ?>/5
                                (<?php echo esc_html($product_reviews); ?> avis)
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if ($product_short_description) : ?>
                        <div class="dk-product-short-description">
                            <?php echo wp_kses_post($product_short_description); ?>
                        </div>
                    <?php endif; ?>

                    <div class="dk-product-price-box">
                        <span class="dk-price-label">Prix</span>
                        <span class="dk-price-value"><?php echo wc_price($product_price); ?></span>
                    </div>

                    <!-- Purchase Benefits -->
                    <div class="dk-purchase-benefits">
                        <div class="dk-benefit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            <span>Téléchargement immédiat</span>
                        </div>
                        <div class="dk-benefit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <span>Paiement sécurisé</span>
                        </div>
                        <div class="dk-benefit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span>Support 24h/24</span>
                        </div>
                        <div class="dk-benefit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="23 4 23 10 17 10"></polyline>
                                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                            </svg>
                            <span>Garantie 14 jours</span>
                        </div>
                    </div>

                    <!-- Buy Button - Goes directly to checkout -->
                    <form action="<?php echo esc_url(wc_get_checkout_url()); ?>" method="get" class="dk-buy-form">
                        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product_id); ?>">
                        <button type="submit" class="dk-btn dk-btn-primary dk-btn-large dk-btn-buy">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Acheter maintenant - <?php echo wc_price($product_price); ?>
                        </button>
                    </form>

                    <p class="dk-security-note">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        Paiement 100% sécurisé avec Stripe
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="dk-product-details">
        <div class="dk-container">
            <div class="dk-tabs">
                <div class="dk-tabs-nav">
                    <button class="dk-tab-btn active" data-tab="description">Description</button>
                    <?php if ($features) : ?>
                        <button class="dk-tab-btn" data-tab="features">Caractéristiques</button>
                    <?php endif; ?>
                    <?php if ($includes) : ?>
                        <button class="dk-tab-btn" data-tab="includes">Contenu inclus</button>
                    <?php endif; ?>
                    <?php if (comments_open()) : ?>
                        <button class="dk-tab-btn" data-tab="reviews">Avis (<?php echo esc_html($product_reviews); ?>)</button>
                    <?php endif; ?>
                </div>

                <div class="dk-tabs-content">
                    <!-- Description Tab -->
                    <div class="dk-tab-panel active" id="description">
                        <div class="dk-product-description">
                            <?php echo wp_kses_post($product_description); ?>
                        </div>
                    </div>

                    <!-- Features Tab -->
                    <?php if ($features) : ?>
                        <div class="dk-tab-panel" id="features">
                            <div class="dk-features-list">
                                <?php
                                $features_array = explode("\n", $features);
                                foreach ($features_array as $feature) :
                                    $feature = trim($feature);
                                    if ($feature) :
                                ?>
                                    <div class="dk-feature-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <span><?php echo esc_html($feature); ?></span>
                                    </div>
                                <?php endif; endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Includes Tab -->
                    <?php if ($includes) : ?>
                        <div class="dk-tab-panel" id="includes">
                            <div class="dk-includes-list">
                                <?php
                                $includes_array = explode("\n", $includes);
                                foreach ($includes_array as $include) :
                                    $include = trim($include);
                                    if ($include) :
                                ?>
                                    <div class="dk-include-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                        </svg>
                                        <span><?php echo esc_html($include); ?></span>
                                    </div>
                                <?php endif; endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Reviews Tab -->
                    <?php if (comments_open()) : ?>
                        <div class="dk-tab-panel" id="reviews">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <?php
    $related_products = wc_get_related_products($product_id, 4);
    if ($related_products) :
    ?>
        <section class="dk-related-products">
            <div class="dk-container">
                <h2 class="dk-section-title">Produits similaires</h2>
                <div class="dk-products-grid">
                    <?php
                    foreach ($related_products as $related_id) :
                        $related = wc_get_product($related_id);
                        if (!$related) continue;

                        $related_title = $related->get_name();
                        $related_price = $related->get_price();
                        $related_image = wp_get_attachment_image_src(get_post_thumbnail_id($related_id), 'dk-product-card');
                        $related_link = get_permalink($related_id);
                        $related_rating = $related->get_average_rating();
                        $related_reviews = $related->get_review_count();

                        $related_categories = get_the_terms($related_id, 'product_cat');
                        $related_category = $related_categories ? $related_categories[0]->name : '';
                    ?>
                        <article class="dk-product-card">
                            <a href="<?php echo esc_url($related_link); ?>" class="dk-product-link">
                                <div class="dk-product-image-wrapper">
                                    <?php if ($related_image) : ?>
                                        <img src="<?php echo esc_url($related_image[0]); ?>"
                                             alt="<?php echo esc_attr($related_title); ?>"
                                             class="dk-product-image">
                                    <?php else : ?>
                                        <div class="dk-product-placeholder">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($related_category) : ?>
                                        <span class="dk-product-category-badge"><?php echo esc_html($related_category); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="dk-product-content">
                                    <h3 class="dk-product-title"><?php echo esc_html($related_title); ?></h3>

                                    <?php if ($related_rating > 0) : ?>
                                        <div class="dk-product-rating">
                                            <div class="dk-stars">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <svg class="dk-star <?php echo $i <= round($related_rating) ? 'filled' : ''; ?>"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                <?php endfor; ?>
                                            </div>
                                            <span class="dk-rating-count">(<?php echo esc_html($related_reviews); ?>)</span>
                                        </div>
                                    <?php endif; ?>

                                    <div class="dk-product-footer">
                                        <span class="dk-product-price"><?php echo wc_price($related_price); ?></span>
                                        <span class="dk-product-cta">Voir le produit</span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
