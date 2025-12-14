<?php
/**
 * The Template for displaying product archives (shop page)
 * Matches AllProducts.tsx design from the React project
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;

get_header();

// Get filter parameters
$selected_categories = isset($_GET['cat']) ? array_map('sanitize_text_field', (array)$_GET['cat']) : array();
$selected_price = isset($_GET['price_range']) ? sanitize_text_field($_GET['price_range']) : '';
$selected_rating = isset($_GET['min_rating']) ? intval($_GET['min_rating']) : 0;
$current_orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'menu_order';

// Get categories with counts
$categories = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => true,
    'parent' => 0
));

// Price ranges
$price_ranges = array(
    'under50' => 'Moins de 50 €',
    '50to100' => '50 € - 100 €',
    '100to200' => '100 € - 200 €',
    'over200' => 'Plus de 200 €'
);

// Sort options
$sort_options = array(
    'menu_order' => 'Plus récents',
    'price' => 'Prix croissant',
    'price-desc' => 'Prix décroissant',
    'rating' => 'Meilleures notes'
);

// Get shop page URL
$shop_url = function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/boutique/');
?>

<main class="dk-main dk-shop-page">
    <!-- Hero Section -->
    <section class="dk-shop-hero">
        <div class="dk-container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-back-link">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                Retour à l'accueil
            </a>
            <h1 class="dk-shop-title">Tous nos produits</h1>
            <p class="dk-shop-description">
                Explorez l'ensemble de notre catalogue : ebooks, applications et templates de qualité professionnelle
            </p>
        </div>
    </section>

    <!-- Main Content with Sidebar -->
    <section class="dk-shop-content">
        <div class="dk-container">
            <div class="dk-shop-layout">
                <!-- Mobile Filter Toggle -->
                <button class="dk-mobile-filter-toggle" id="dk-filter-toggle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    <span>Filtres</span>
                    <svg class="dk-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>

                <!-- Filters Sidebar -->
                <aside class="dk-filters-sidebar" id="dk-filters-sidebar">
                    <form method="get" action="<?php echo esc_url($shop_url); ?>" class="dk-filters-form" id="dk-filters-form">
                        <!-- Mobile Close Button -->
                        <div class="dk-filters-header-mobile">
                            <h3>Filtres</h3>
                            <button type="button" class="dk-close-filters" id="dk-close-filters">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>

                        <!-- Categories Filter -->
                        <div class="dk-filter-group">
                            <h4 class="dk-filter-title">Catégories</h4>
                            <div class="dk-filter-options">
                                <?php foreach ($categories as $category) : ?>
                                    <label class="dk-filter-checkbox">
                                        <input type="checkbox" name="cat[]" value="<?php echo esc_attr($category->slug); ?>"
                                            <?php checked(in_array($category->slug, $selected_categories)); ?>>
                                        <span class="dk-checkbox-label">
                                            <?php echo esc_html($category->name); ?>
                                            <span class="dk-filter-count">(<?php echo esc_html($category->count); ?>)</span>
                                        </span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="dk-filter-group">
                            <h4 class="dk-filter-title">Prix</h4>
                            <div class="dk-filter-options">
                                <?php foreach ($price_ranges as $value => $label) : ?>
                                    <label class="dk-filter-radio">
                                        <input type="radio" name="price_range" value="<?php echo esc_attr($value); ?>"
                                            <?php checked($selected_price, $value); ?>>
                                        <span class="dk-radio-label"><?php echo esc_html($label); ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="dk-filter-group">
                            <h4 class="dk-filter-title">Note minimale</h4>
                            <div class="dk-filter-options">
                                <?php foreach (array(5, 4, 3) as $rating) : ?>
                                    <label class="dk-filter-radio dk-filter-rating">
                                        <input type="radio" name="min_rating" value="<?php echo esc_attr($rating); ?>"
                                            <?php checked($selected_rating, $rating); ?>>
                                        <span class="dk-radio-label">
                                            <span class="dk-stars-inline">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <svg class="dk-star-small <?php echo $i <= $rating ? 'filled' : ''; ?>"
                                                         viewBox="0 0 24 24" fill="<?php echo $i <= $rating ? '#d2a30b' : 'none'; ?>" stroke="#d2a30b">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                <?php endfor; ?>
                                            </span>
                                            <span class="dk-rating-suffix">& plus</span>
                                        </span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Keep current orderby -->
                        <?php if ($current_orderby && $current_orderby !== 'menu_order') : ?>
                            <input type="hidden" name="orderby" value="<?php echo esc_attr($current_orderby); ?>">
                        <?php endif; ?>

                        <!-- Submit & Reset -->
                        <div class="dk-filter-actions">
                            <button type="submit" class="dk-btn dk-btn-primary dk-btn-filter">Appliquer</button>
                            <a href="<?php echo esc_url($shop_url); ?>" class="dk-btn dk-btn-reset">
                                Réinitialiser les filtres
                            </a>
                        </div>
                    </form>
                </aside>

                <!-- Products Area -->
                <div class="dk-products-area">
                    <!-- Products Header -->
                    <div class="dk-products-header">
                        <p class="dk-products-count">
                            <?php
                            global $wp_query;
                            $total = $wp_query->found_posts;
                            printf(
                                _n('%d produit trouvé', '%d produits trouvés', $total, 'digital-kappa'),
                                $total
                            );
                            ?>
                        </p>

                        <!-- Sort Dropdown -->
                        <div class="dk-sort-dropdown">
                            <button class="dk-sort-button" id="dk-sort-button">
                                <span><?php echo esc_html($sort_options[$current_orderby] ?? 'Plus récents'); ?></span>
                                <svg class="dk-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div class="dk-sort-options" id="dk-sort-options">
                                <?php foreach ($sort_options as $value => $label) :
                                    $sort_url = add_query_arg('orderby', $value);
                                ?>
                                    <a href="<?php echo esc_url($sort_url); ?>"
                                       class="dk-sort-option <?php echo $current_orderby === $value ? 'active' : ''; ?>">
                                        <?php echo esc_html($label); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <?php if (woocommerce_product_loop()) : ?>
                        <div class="dk-products-grid dk-products-grid-3">
                            <?php
                            while (have_posts()) :
                                the_post();
                                global $product;

                                if (!$product) continue;

                                // Get product data
                                $product_id = $product->get_id();
                                $product_title = $product->get_name();
                                $product_price = $product->get_price();
                                $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'dk-product-card');
                                $product_link = get_permalink();
                                $product_rating = $product->get_average_rating();
                                $product_reviews = $product->get_review_count();
                                $product_short_desc = $product->get_short_description();

                                // Get primary category
                                $product_categories = get_the_terms($product_id, 'product_cat');
                                $primary_category = $product_categories && !is_wp_error($product_categories) ? $product_categories[0]->name : '';
                            ?>
                                <article class="dk-product-card-new">
                                    <a href="<?php echo esc_url($product_link); ?>" class="dk-product-card-link">
                                        <div class="dk-product-card-image">
                                            <?php if ($product_image) : ?>
                                                <img src="<?php echo esc_url($product_image[0]); ?>"
                                                     alt="<?php echo esc_attr($product_title); ?>">
                                            <?php else : ?>
                                                <div class="dk-product-placeholder"></div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="dk-product-card-content">
                                            <?php if ($primary_category) : ?>
                                                <div class="dk-product-card-badge">
                                                    <span><?php echo esc_html($primary_category); ?></span>
                                                </div>
                                            <?php endif; ?>

                                            <h3 class="dk-product-card-title"><?php echo esc_html($product_title); ?></h3>

                                            <?php if ($product_short_desc) : ?>
                                                <p class="dk-product-card-desc"><?php echo wp_kses_post(wp_trim_words($product_short_desc, 15)); ?></p>
                                            <?php endif; ?>

                                            <?php if ($product_rating > 0) : ?>
                                                <div class="dk-product-card-rating">
                                                    <svg viewBox="0 0 24 24" fill="#d2a30b" stroke="#d2a30b">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                    <span><?php echo esc_html($product_rating); ?></span>
                                                    <span class="dk-rating-reviews">(<?php echo esc_html($product_reviews); ?> avis)</span>
                                                </div>
                                            <?php endif; ?>

                                            <div class="dk-product-card-footer">
                                                <div class="dk-product-card-price">
                                                    <span class="dk-price-label">Prix</span>
                                                    <span class="dk-price-amount"><?php echo wc_price($product_price); ?></span>
                                                </div>
                                                <span class="dk-btn dk-btn-primary dk-btn-small">Voir</span>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <!-- Pagination -->
                        <?php if ($wp_query->max_num_pages > 1) : ?>
                            <div class="dk-pagination">
                                <?php
                                echo paginate_links(array(
                                    'total' => $wp_query->max_num_pages,
                                    'current' => max(1, get_query_var('paged')),
                                    'prev_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                                    'next_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>',
                                    'type' => 'list',
                                    'end_size' => 1,
                                    'mid_size' => 2
                                ));
                                ?>
                            </div>
                        <?php endif; ?>

                    <?php else : ?>
                        <div class="dk-no-products">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#4a5565" stroke-width="1.5">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <p class="dk-no-products-text">Aucun produit ne correspond à vos critères</p>
                            <a href="<?php echo esc_url($shop_url); ?>" class="dk-link-gold">
                                Réinitialiser les filtres
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Filter toggle for mobile
document.addEventListener('DOMContentLoaded', function() {
    const filterToggle = document.getElementById('dk-filter-toggle');
    const filtersSidebar = document.getElementById('dk-filters-sidebar');
    const closeFilters = document.getElementById('dk-close-filters');
    const sortButton = document.getElementById('dk-sort-button');
    const sortOptions = document.getElementById('dk-sort-options');

    if (filterToggle && filtersSidebar) {
        filterToggle.addEventListener('click', function() {
            filtersSidebar.classList.toggle('active');
            document.body.classList.toggle('dk-filters-open');
        });

        if (closeFilters) {
            closeFilters.addEventListener('click', function() {
                filtersSidebar.classList.remove('active');
                document.body.classList.remove('dk-filters-open');
            });
        }
    }

    // Sort dropdown
    if (sortButton && sortOptions) {
        sortButton.addEventListener('click', function(e) {
            e.stopPropagation();
            sortOptions.classList.toggle('active');
            sortButton.classList.toggle('active');
        });

        document.addEventListener('click', function() {
            sortOptions.classList.remove('active');
            sortButton.classList.remove('active');
        });
    }
});
</script>

<?php get_footer(); ?>
