<?php
/**
 * The Template for displaying single products
 * Matches ProductDetail.tsx design from the React project
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;

get_header();

// Properly set up the product using WooCommerce's setup
while (have_posts()) :
    the_post();

    // Get the product object
    global $product;

    // Make sure we have a valid product object
    if (!is_a($product, 'WC_Product')) {
        $product = wc_get_product(get_the_ID());
    }

    if (!$product) {
        echo '<div class="dk-container"><p>Produit non trouvé</p></div>';
        continue;
    }

    // Get product data
    $product_id = $product->get_id();
    $product_title = $product->get_name();
    $product_description = $product->get_description();
    $product_short_description = $product->get_short_description();
    $product_price = $product->get_price();
    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    $gallery_ids = $product->get_gallery_image_ids();
    $product_rating = $product->get_average_rating();
    $product_reviews = $product->get_review_count();

    // Get categories
    $categories = get_the_terms($product_id, 'product_cat');
    $primary_category = $categories && !is_wp_error($categories) ? $categories[0] : null;

    // Get shop URL
    $shop_url = function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/boutique/');
?>

<main class="dk-main dk-single-product">
    <!-- Hero Section avec image et infos produit -->
    <section class="dk-product-hero-section">
        <div class="dk-container">
            <div class="dk-product-hero-grid">
                <!-- Image produit avec carrousel -->
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
                                $gallery_image = wp_get_attachment_image_src($gallery_id, 'large');
                                if ($gallery_image) :
                            ?>
                                <button class="dk-thumbnail" data-image="<?php echo esc_url($gallery_image[0]); ?>">
                                    <img src="<?php echo esc_url($gallery_image[0]); ?>" alt="">
                                </button>
                            <?php endif; endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="dk-product-secure-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="1.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <p>Paiement sécurisé • Téléchargement instantané</p>
                    </div>
                </div>

                <!-- Infos produit -->
                <div class="dk-product-info">
                    <?php if ($primary_category) : ?>
                        <div class="dk-product-category-badge">
                            <span><?php echo esc_html($primary_category->name); ?></span>
                        </div>
                    <?php endif; ?>

                    <h1 class="dk-product-title-large"><?php echo esc_html($product_title); ?></h1>

                    <?php if ($product_short_description) : ?>
                        <div class="dk-product-excerpt">
                            <?php echo wp_kses_post($product_short_description); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Prix et bouton -->
                    <div class="dk-product-purchase-box">
                        <div class="dk-product-price-section">
                            <p class="dk-price-label">Prix</p>
                            <p class="dk-price-value"><?php echo wc_price($product_price); ?></p>
                        </div>

                        <form action="<?php echo esc_url(wc_get_checkout_url()); ?>" method="get" class="dk-buy-form">
                            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product_id); ?>">
                            <button type="submit" class="dk-btn dk-btn-primary dk-btn-buy-large">
                                Acheter maintenant
                            </button>
                        </form>

                        <p class="dk-guarantee-text">
                            Accès instantané après paiement • Garantie satisfait ou remboursé 14 jours
                        </p>
                    </div>

                    <!-- Features icons -->
                    <div class="dk-product-features-icons">
                        <div class="dk-feature-icon-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                                <path d="M12 15V3"></path>
                                <path d="M17 10l-5 5-5-5"></path>
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            </svg>
                            <p>Téléchargement instantané</p>
                        </div>

                        <div class="dk-feature-icon-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <p>Paiement sécurisé</p>
                        </div>

                        <div class="dk-feature-icon-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <p>Garantie 14 jours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Description complète -->
    <section class="dk-product-description-section">
        <div class="dk-container dk-container-narrow">
            <h2 class="dk-section-title-left">Description complète</h2>
            <div class="dk-product-description-content">
                <?php echo wp_kses_post($product_description); ?>
            </div>
        </div>
    </section>

    <!-- Fonctionnalités principales -->
    <?php
    $features = get_post_meta($product_id, '_dk_features', true);
    if ($features) :
        $features_array = array_filter(array_map('trim', explode("\n", $features)));
        if (!empty($features_array)) :
    ?>
    <section class="dk-product-features-section dk-bg-gray">
        <div class="dk-container dk-container-narrow">
            <h2 class="dk-section-title-left">Fonctionnalités principales</h2>
            <div class="dk-features-grid">
                <?php foreach ($features_array as $feature) : ?>
                    <div class="dk-feature-item">
                        <svg viewBox="0 0 20 20" fill="none" stroke="#D2A30B" stroke-width="1.67">
                            <path d="M16.6667 5L7.50004 14.1667L3.33337 10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span><?php echo esc_html($feature); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; endif; ?>

    <!-- Ce qui est inclus -->
    <?php
    $includes = get_post_meta($product_id, '_dk_includes', true);
    if ($includes) :
        $includes_array = array_filter(array_map('trim', explode("\n", $includes)));
        if (!empty($includes_array)) :
    ?>
    <section class="dk-product-includes-section">
        <div class="dk-container dk-container-narrow">
            <h2 class="dk-section-title-left">Ce qui est inclus</h2>
            <div class="dk-includes-box">
                <?php foreach ($includes_array as $include) : ?>
                    <div class="dk-include-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span><?php echo esc_html($include); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; endif; ?>

    <!-- Prérequis -->
    <?php
    $prerequisites = get_post_meta($product_id, '_dk_prerequisites', true);
    if ($prerequisites) :
        $prerequisites_array = array_filter(array_map('trim', explode("\n", $prerequisites)));
        if (!empty($prerequisites_array)) :
    ?>
    <section class="dk-product-prerequisites-section dk-bg-gray">
        <div class="dk-container dk-container-narrow">
            <h2 class="dk-section-title-left">Prérequis</h2>
            <ul class="dk-prerequisites-list">
                <?php foreach ($prerequisites_array as $prereq) : ?>
                    <li>
                        <span class="dk-bullet">•</span>
                        <span><?php echo esc_html($prereq); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <?php endif; endif; ?>

    <!-- Questions fréquentes -->
    <section class="dk-product-faq-section">
        <div class="dk-container dk-container-small">
            <div class="dk-text-center dk-mb-8">
                <div class="dk-badge dk-badge-gold">
                    <span>Support</span>
                </div>
                <h2 class="dk-section-title">Questions fréquentes</h2>
                <p class="dk-text-muted">Retrouvez les réponses aux questions les plus courantes sur ce produit</p>
            </div>

            <div class="dk-faq-list">
                <div class="dk-faq-item active">
                    <button class="dk-faq-question" aria-expanded="true">
                        <span>Comment vais-je recevoir mon produit ?</span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Immédiatement après votre paiement, vous recevrez un email avec un lien de téléchargement sécurisé. Le lien restera valable à vie et vous pourrez télécharger le produit autant de fois que nécessaire.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span>Le paiement est-il sécurisé ?</span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p>Absolument. Tous nos paiements sont traités via des systèmes sécurisés conformes aux normes PCI-DSS. Nous n'avons jamais accès à vos données bancaires qui sont entièrement cryptées.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span>Puis-je obtenir un remboursement ?</span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p>Oui, nous offrons une garantie satisfait ou remboursé de 14 jours. Si le produit ne répond pas à vos attentes, contactez notre support pour obtenir un remboursement intégral.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span>Dans quel format vais-je recevoir ce produit ?</span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p>Le format dépend du type de produit. Pour les ebooks, vous recevez généralement les formats PDF, EPUB et MOBI. Pour les applications et templates, vous recevez les fichiers sources complets.</p>
                    </div>
                </div>
            </div>

            <div class="dk-text-center dk-mt-6">
                <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="dk-link-gold">
                    Voir toutes les questions →
                </a>
            </div>
        </div>
    </section>

    <!-- Achat sécurisé -->
    <section class="dk-secure-purchase-section">
        <div class="dk-container dk-container-medium">
            <h2 class="dk-section-title-white">
                Achat sécurisé et téléchargement immédiat de vos produits digitaux
            </h2>

            <div class="dk-secure-content">
                <p>Digital Kappa vous offre une expérience sécurisée lors de vos achats de produits digitaux. Que vous achetiez des applications mobiles, des ebooks ou des templates, vos transactions sont protégées par les meilleurs standards de sécurité du marché.</p>
                <p>Chaque fois que vous finalisez votre achat, vous êtes redirigé vers une page de paiement entièrement cryptée. Les informations bancaires ne transitent jamais par nos serveurs et votre confidentialité est garantie.</p>
                <p>Tous vos achats sont aussi sauvegardés dans votre espace personnel. Vous pourrez consulter à tout moment les détails de vos commandes, accéder aux fichiers téléchargeables et retrouver tous les documents juridiques concernant vos transactions.</p>
            </div>

            <div class="dk-text-center dk-mt-8">
                <form action="<?php echo esc_url(wc_get_checkout_url()); ?>" method="get" class="dk-buy-form-inline">
                    <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product_id); ?>">
                    <button type="submit" class="dk-btn dk-btn-primary dk-btn-large">
                        Acheter maintenant
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Produits similaires -->
    <?php
    $related_products = wc_get_related_products($product_id, 3);
    if ($related_products) :
    ?>
    <section class="dk-related-products-section dk-bg-gray">
        <div class="dk-container dk-container-narrow">
            <h2 class="dk-section-title-left">Produits similaires</h2>
            <div class="dk-products-grid dk-products-grid-3">
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
                    $related_short_desc = $related->get_short_description();

                    $related_categories = get_the_terms($related_id, 'product_cat');
                    $related_category = $related_categories && !is_wp_error($related_categories) ? $related_categories[0]->name : '';
                ?>
                    <article class="dk-product-card-new">
                        <a href="<?php echo esc_url($related_link); ?>" class="dk-product-card-link">
                            <div class="dk-product-card-image">
                                <?php if ($related_image) : ?>
                                    <img src="<?php echo esc_url($related_image[0]); ?>"
                                         alt="<?php echo esc_attr($related_title); ?>">
                                <?php else : ?>
                                    <div class="dk-product-placeholder"></div>
                                <?php endif; ?>
                            </div>

                            <div class="dk-product-card-content">
                                <?php if ($related_category) : ?>
                                    <div class="dk-product-card-badge">
                                        <span><?php echo esc_html($related_category); ?></span>
                                    </div>
                                <?php endif; ?>

                                <h3 class="dk-product-card-title"><?php echo esc_html($related_title); ?></h3>

                                <?php if ($related_short_desc) : ?>
                                    <p class="dk-product-card-desc"><?php echo wp_kses_post(wp_trim_words($related_short_desc, 15)); ?></p>
                                <?php endif; ?>

                                <?php if ($related_rating > 0) : ?>
                                    <div class="dk-product-card-rating">
                                        <svg viewBox="0 0 24 24" fill="#d2a30b" stroke="#d2a30b">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                        <span><?php echo esc_html($related_rating); ?></span>
                                        <span class="dk-rating-reviews">(<?php echo esc_html($related_reviews); ?> avis)</span>
                                    </div>
                                <?php endif; ?>

                                <div class="dk-product-card-footer">
                                    <div class="dk-product-card-price">
                                        <span class="dk-price-label">Prix</span>
                                        <span class="dk-price-amount"><?php echo wc_price($related_price); ?></span>
                                    </div>
                                    <span class="dk-btn dk-btn-primary dk-btn-small">Voir</span>
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

<?php
endwhile; // end of the loop
get_footer();
?>
