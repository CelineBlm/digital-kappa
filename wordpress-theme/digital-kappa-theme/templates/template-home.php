<?php
/**
 * Template Name: Accueil
 * Template Post Type: page
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main dk-home">
    <?php
    // If built with Elementor, use the_content()
    if (dk_is_elementor_page()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    else :
        // Default content for non-Elementor pages

        // Get shop URL safely
        $shop_url = home_url('/boutique/');
        if (function_exists('wc_get_page_id')) {
            $shop_page_id = wc_get_page_id('shop');
            if ($shop_page_id > 0) {
                $shop_url = get_permalink($shop_page_id);
            }
        }
    ?>

    <!-- Hero Section -->
    <section class="dk-hero dk-bg-gray">
        <div class="dk-hero-container">
            <div class="dk-hero-grid">
                <!-- Left Content -->
                <div class="dk-hero-content">
                    <div class="dk-badge dk-badge-white dk-hero-badge">
                        <span class="dk-badge-dot"></span>
                        <span><?php esc_html_e('Lancement officiel - Nouveaux produits disponibles', 'digital-kappa'); ?></span>
                    </div>

                    <h1 class="dk-hero-title">
                        <span class="dk-hero-title-line"><?php esc_html_e('Marketplace de', 'digital-kappa'); ?></span>
                        <span class="dk-hero-title-line dk-text-gold"><?php esc_html_e('produits digitaux', 'digital-kappa'); ?></span>
                    </h1>

                    <p class="dk-hero-description">
                        <?php esc_html_e("Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.", 'digital-kappa'); ?>
                    </p>

                    <div class="dk-hero-buttons">
                        <a href="<?php echo esc_url($shop_url); ?>" class="dk-btn dk-btn-primary">
                            <?php esc_html_e('Explorer les produits', 'digital-kappa'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/comment-ca-marche/')); ?>" class="dk-btn dk-btn-secondary">
                            <?php esc_html_e('Comment ça marche', 'digital-kappa'); ?>
                        </a>
                    </div>
                </div>

                <!-- Right Content - Featured Products Cards -->
                <div class="dk-hero-cards">
                    <div class="dk-hero-blur"></div>

                    <!-- Large Card -->
                    <div class="dk-hero-card dk-hero-card-large">
                        <div class="dk-hero-card-image">
                            <div class="dk-hero-card-placeholder"></div>
                            <div class="dk-hero-card-overlay"></div>
                            <div class="dk-badge dk-badge-gold dk-hero-card-badge"><?php esc_html_e('Populaire', 'digital-kappa'); ?></div>
                            <div class="dk-hero-card-info">
                                <h3><?php esc_html_e('Applications mobiles', 'digital-kappa'); ?></h3>
                                <p><?php esc_html_e("Applications prêtes à l'emploi", 'digital-kappa'); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Small Cards -->
                    <div class="dk-hero-cards-row">
                        <div class="dk-hero-card dk-hero-card-small">
                            <div class="dk-hero-card-image">
                                <div class="dk-hero-card-placeholder dk-hero-card-ebooks"></div>
                                <div class="dk-hero-card-overlay"></div>
                                <div class="dk-hero-card-info">
                                    <h4><?php esc_html_e('Ebooks', 'digital-kappa'); ?></h4>
                                    <p><?php esc_html_e('Guides & formations', 'digital-kappa'); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="dk-hero-card dk-hero-card-small">
                            <div class="dk-hero-card-image">
                                <div class="dk-hero-card-placeholder dk-hero-card-templates"></div>
                                <div class="dk-hero-card-overlay"></div>
                                <div class="dk-hero-card-info">
                                    <h4><?php esc_html_e('Templates', 'digital-kappa'); ?></h4>
                                    <p><?php esc_html_e('Design & code', 'digital-kappa'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Propositions -->
    <section class="dk-values dk-section">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php esc_html_e('Pourquoi choisir Digital Kappa', 'digital-kappa'); ?></h2>
                <p class="dk-text-muted"><?php esc_html_e("Une plateforme conçue pour vous offrir la meilleure expérience d'achat de produits digitaux", 'digital-kappa'); ?></p>
            </div>

            <div class="dk-values-grid">
                <div class="dk-value-item dk-text-center">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                            <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                            <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                            <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Simplicité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Interface intuitive pour trouver rapidement ce dont vous avez besoin', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-item dk-text-center">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Fiabilité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Produits vérifiés et transactions sécurisées', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-item dk-text-center">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Rapidité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Achat en un clic, téléchargement instantané', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-item dk-text-center">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Support', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Assistance disponible pour tous vos achats', 'digital-kappa'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="dk-products-section dk-section dk-bg-gradient">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php esc_html_e('Découvrez nos produits', 'digital-kappa'); ?></h2>
                <p class="dk-text-muted"><?php esc_html_e('Une sélection de produits digitaux de haute qualité pour développeurs et créateurs', 'digital-kappa'); ?></p>
            </div>

            <div class="dk-products-grid">
                <?php
                if (function_exists('wc_get_products')) {
                    $featured_products = wc_get_products(array(
                        'limit'    => 3,
                        'featured' => true,
                        'status'   => 'publish',
                        'orderby'  => 'date',
                        'order'    => 'DESC',
                    ));

                    if (empty($featured_products)) {
                        $featured_products = wc_get_products(array(
                            'limit'   => 3,
                            'status'  => 'publish',
                            'orderby' => 'date',
                            'order'   => 'DESC',
                        ));
                    }

                    foreach ($featured_products as $product) :
                        ?>
                        <div class="dk-product-card dk-hover-lift">
                            <div class="dk-product-image">
                                <?php echo $product->get_image('dk-product-card'); ?>
                            </div>
                            <div class="dk-product-content">
                                <h3 class="dk-product-title"><?php echo esc_html($product->get_name()); ?></h3>
                                <p class="dk-product-price"><?php echo $product->get_price_html(); ?></p>
                                <a href="<?php echo esc_url($product->get_permalink()); ?>" class="dk-product-link">
                                    <?php esc_html_e('Voir le produit', 'digital-kappa'); ?>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dk-icon-arrow">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach;
                } else {
                    // WooCommerce not installed - show placeholder
                    for ($i = 0; $i < 3; $i++) :
                    ?>
                        <div class="dk-product-card dk-hover-lift">
                            <div class="dk-product-image">
                                <div class="dk-product-placeholder"></div>
                            </div>
                            <div class="dk-product-content">
                                <h3 class="dk-product-title"><?php esc_html_e('Produit exemple', 'digital-kappa'); ?></h3>
                                <p class="dk-product-price">€29.99</p>
                                <span class="dk-product-link">
                                    <?php esc_html_e('Installer WooCommerce', 'digital-kappa'); ?>
                                </span>
                            </div>
                        </div>
                    <?php endfor;
                }
                ?>
            </div>

            <div class="dk-text-center dk-mt-8">
                <a href="<?php echo esc_url($shop_url); ?>" class="dk-btn dk-btn-primary">
                    <?php esc_html_e('Voir tous les produits', 'digital-kappa'); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dk-icon-arrow">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="dk-categories dk-section">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php esc_html_e('Catégories de produits', 'digital-kappa'); ?></h2>
                <p class="dk-text-muted"><?php esc_html_e('Explorez notre sélection organisée de produits digitaux dans trois catégories principales', 'digital-kappa'); ?></p>
            </div>

            <div class="dk-categories-grid">
                <div class="dk-category-card">
                    <div class="dk-category-icon dk-category-icon-blue">
                        <svg viewBox="0 0 28 28" fill="none" stroke="#155DFC" stroke-width="2.33">
                            <rect x="4.67" y="2.33" width="18.67" height="23.33" rx="2.33"></rect>
                            <line x1="14" y1="21" x2="14.01" y2="21"></line>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Applications mobiles', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Apps prêtes à l'emploi pour iOS et Android", 'digital-kappa'); ?></p>
                    <a href="<?php echo esc_url(home_url('/categorie-produit/application/')); ?>" class="dk-category-link">
                        <?php esc_html_e('Explorer', 'digital-kappa'); ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                </div>

                <div class="dk-category-card">
                    <div class="dk-category-icon dk-category-icon-green">
                        <svg viewBox="0 0 28 28" fill="none" stroke="#00A63E" stroke-width="2.33">
                            <line x1="14" y1="8.17" x2="14" y2="24.5"></line>
                            <path d="M21 15.17L14 8.17 7 15.17"></path>
                            <path d="M3.5 8.17C3.5 5.5 5.5 3.5 8.17 3.5H19.83C22.5 3.5 24.5 5.5 24.5 8.17"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Ebooks', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Guides et formations pour développer vos compétences', 'digital-kappa'); ?></p>
                    <a href="<?php echo esc_url(home_url('/categorie-produit/ebook/')); ?>" class="dk-category-link">
                        <?php esc_html_e('Explorer', 'digital-kappa'); ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                </div>

                <div class="dk-category-card">
                    <div class="dk-category-icon dk-category-icon-purple">
                        <svg viewBox="0 0 28 28" fill="none" stroke="#9810FA" stroke-width="2.33">
                            <rect x="3.5" y="3.5" width="21" height="21" rx="2.33"></rect>
                            <line x1="3.5" y1="10.5" x2="24.5" y2="10.5"></line>
                            <line x1="10.5" y1="24.5" x2="10.5" y2="10.5"></line>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Templates', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Designs professionnels pour vos projets web', 'digital-kappa'); ?></p>
                    <a href="<?php echo esc_url(home_url('/categorie-produit/template/')); ?>" class="dk-category-link">
                        <?php esc_html_e('Explorer', 'digital-kappa'); ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Partner Section -->
    <section class="dk-partner dk-section dk-bg-gray">
        <div class="dk-container">
            <div class="dk-partner-grid">
                <div class="dk-partner-content">
                    <h2><?php esc_html_e('Digital Kappa, votre partenaire digital', 'digital-kappa'); ?></h2>
                    <p><?php esc_html_e('Chez Digital Kappa, nous créons et sélectionnons avec soin chaque produit digital pour répondre aux besoins des entrepreneurs, développeurs et créateurs modernes.', 'digital-kappa'); ?></p>
                    <p><?php esc_html_e("Notre mission est de vous faire gagner du temps en vous proposant des solutions prêtes à l'emploi, testées et documentées.", 'digital-kappa'); ?></p>

                    <ul class="dk-partner-list">
                        <li>
                            <svg viewBox="0 0 20 20" fill="none" stroke="#D2A30B" stroke-width="1.67">
                                <circle cx="10" cy="10" r="9"></circle>
                                <polyline points="6 10 9 13 14 7"></polyline>
                            </svg>
                            <span><?php esc_html_e('Produits testés et validés', 'digital-kappa'); ?></span>
                        </li>
                        <li>
                            <svg viewBox="0 0 20 20" fill="none" stroke="#D2A30B" stroke-width="1.67">
                                <circle cx="10" cy="10" r="9"></circle>
                                <polyline points="6 10 9 13 14 7"></polyline>
                            </svg>
                            <span><?php esc_html_e('Documentation complète incluse', 'digital-kappa'); ?></span>
                        </li>
                        <li>
                            <svg viewBox="0 0 20 20" fill="none" stroke="#D2A30B" stroke-width="1.67">
                                <circle cx="10" cy="10" r="9"></circle>
                                <polyline points="6 10 9 13 14 7"></polyline>
                            </svg>
                            <span><?php esc_html_e('Mises à jour régulières', 'digital-kappa'); ?></span>
                        </li>
                        <li>
                            <svg viewBox="0 0 20 20" fill="none" stroke="#D2A30B" stroke-width="1.67">
                                <circle cx="10" cy="10" r="9"></circle>
                                <polyline points="6 10 9 13 14 7"></polyline>
                            </svg>
                            <span><?php esc_html_e('Support communautaire actif', 'digital-kappa'); ?></span>
                        </li>
                    </ul>
                </div>

                <div class="dk-partner-image">
                    <img src="<?php echo esc_url(DK_THEME_URI . '/assets/images/team.jpg'); ?>" alt="<?php esc_attr_e('Équipe Digital Kappa', 'digital-kappa'); ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="dk-faq dk-section">
        <div class="dk-container">
            <div class="dk-faq-wrapper">
                <div class="dk-section-header dk-text-center dk-mb-12">
                    <h2><?php esc_html_e('Questions fréquentes', 'digital-kappa'); ?></h2>
                    <p class="dk-text-muted"><?php esc_html_e('Tout ce que vous devez savoir sur Digital Kappa', 'digital-kappa'); ?></p>
                </div>

                <?php echo do_shortcode('[dk_faq limit="3"]'); ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php echo do_shortcode('[dk_cta]'); ?>

    <?php endif; // End else (non-Elementor content) ?>
</main>

<?php
get_footer();
