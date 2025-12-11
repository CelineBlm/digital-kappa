<?php
/**
 * The Template for displaying product archives (shop page)
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="dk-main">
    <!-- Hero Section -->
    <section class="dk-page-hero">
        <div class="dk-container">
            <div class="dk-page-hero-content">
                <span class="dk-badge">Catalogue</span>
                <h1 class="dk-page-title">Tous nos produits</h1>
                <p class="dk-page-description">
                    Découvrez notre sélection de produits numériques de qualité.
                    Applications, ebooks, templates et bien plus encore.
                </p>
            </div>
        </div>
    </section>

    <!-- Filters Section -->
    <section class="dk-filters-section">
        <div class="dk-container">
            <div class="dk-filters-wrapper">
                <div class="dk-filter-categories">
                    <span class="dk-filter-label">Catégories:</span>
                    <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
                       class="dk-filter-btn <?php echo !is_product_category() ? 'active' : ''; ?>">
                        Tous
                    </a>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => true,
                        'parent' => 0
                    ));

                    foreach ($categories as $category) :
                        $is_active = is_product_category($category->slug);
                    ?>
                        <a href="<?php echo esc_url(get_term_link($category)); ?>"
                           class="dk-filter-btn <?php echo $is_active ? 'active' : ''; ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <div class="dk-filter-sort">
                    <label for="dk-orderby" class="dk-filter-label">Trier par:</label>
                    <select name="orderby" id="dk-orderby" class="dk-select" onchange="window.location.href = this.value;">
                        <?php
                        $orderby_options = array(
                            'menu_order' => 'Tri par défaut',
                            'popularity' => 'Popularité',
                            'rating' => 'Note moyenne',
                            'date' => 'Nouveautés',
                            'price' => 'Prix croissant',
                            'price-desc' => 'Prix décroissant'
                        );

                        $current_orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'menu_order';

                        foreach ($orderby_options as $value => $label) :
                            $url = add_query_arg('orderby', $value);
                        ?>
                            <option value="<?php echo esc_url($url); ?>" <?php selected($current_orderby, $value); ?>>
                                <?php echo esc_html($label); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="dk-products-section">
        <div class="dk-container">
            <?php if (woocommerce_product_loop()) : ?>

                <div class="dk-products-grid">
                    <?php
                    while (have_posts()) :
                        the_post();
                        global $product;

                        // Get product data
                        $product_id = $product->get_id();
                        $product_title = $product->get_name();
                        $product_price = $product->get_price();
                        $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'dk-product-card');
                        $product_link = get_permalink();
                        $product_rating = $product->get_average_rating();
                        $product_reviews = $product->get_review_count();

                        // Get primary category
                        $categories = get_the_terms($product_id, 'product_cat');
                        $primary_category = $categories ? $categories[0]->name : '';
                    ?>
                        <article class="dk-product-card">
                            <a href="<?php echo esc_url($product_link); ?>" class="dk-product-link">
                                <div class="dk-product-image-wrapper">
                                    <?php if ($product_image) : ?>
                                        <img src="<?php echo esc_url($product_image[0]); ?>"
                                             alt="<?php echo esc_attr($product_title); ?>"
                                             class="dk-product-image">
                                    <?php else : ?>
                                        <div class="dk-product-placeholder">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                            </svg>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($primary_category) : ?>
                                        <span class="dk-product-category-badge"><?php echo esc_html($primary_category); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="dk-product-content">
                                    <h3 class="dk-product-title"><?php echo esc_html($product_title); ?></h3>

                                    <?php if ($product_rating > 0) : ?>
                                        <div class="dk-product-rating">
                                            <div class="dk-stars">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <svg class="dk-star <?php echo $i <= round($product_rating) ? 'filled' : ''; ?>"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                <?php endfor; ?>
                                            </div>
                                            <span class="dk-rating-count">(<?php echo esc_html($product_reviews); ?>)</span>
                                        </div>
                                    <?php endif; ?>

                                    <div class="dk-product-footer">
                                        <span class="dk-product-price"><?php echo wc_price($product_price); ?></span>
                                        <span class="dk-product-cta">Voir le produit</span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="dk-pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $wp_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>',
                        'type' => 'list',
                        'end_size' => 1,
                        'mid_size' => 2
                    ));
                    ?>
                </div>

            <?php else : ?>

                <div class="dk-no-products">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <h2>Aucun produit trouvé</h2>
                    <p>Désolé, aucun produit ne correspond à votre recherche. Essayez avec d'autres critères.</p>
                    <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="dk-btn dk-btn-primary">
                        Voir tous les produits
                    </a>
                </div>

            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="dk-cta-section">
        <div class="dk-container">
            <div class="dk-cta-box">
                <h2>Vous ne trouvez pas ce que vous cherchez ?</h2>
                <p>Contactez-nous et nous vous aiderons à trouver le produit parfait pour vos besoins.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="dk-btn dk-btn-primary">
                    Nous contacter
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
