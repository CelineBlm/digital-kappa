<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="dk-site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Aller au contenu', 'digital-kappa'); ?></a>

    <header id="masthead" class="dk-header">
        <div class="dk-header-main">
            <div class="dk-header-container">
                <!-- Logo -->
                <div class="dk-logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-logo-link" rel="home">
                            <div class="dk-logo-icon">
                                <svg viewBox="0 0 48 32" fill="none" class="dk-logo-svg">
                                    <path d="M0 0H19V32H0V0Z" fill="#D2A30B"/>
                                    <path d="M31 0H48V32H31V0Z" fill="#D2A30B"/>
                                </svg>
                            </div>
                            <span class="dk-logo-text"><?php bloginfo('name'); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Search Bar - Desktop -->
                <div class="dk-search dk-hide-mobile">
                    <form role="search" method="get" class="dk-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <svg class="dk-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <input type="search" class="dk-search-input" placeholder="<?php esc_attr_e('Rechercher un produit, ebook, template...', 'digital-kappa'); ?>" value="<?php echo get_search_query(); ?>" name="s">
                        <input type="hidden" name="post_type" value="product">
                    </form>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="dk-mobile-menu-toggle dk-hide-desktop" aria-label="<?php esc_attr_e('Menu', 'digital-kappa'); ?>" aria-expanded="false">
                    <svg class="dk-menu-icon-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg class="dk-menu-icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Search Bar - Mobile -->
            <div class="dk-search-mobile dk-hide-desktop">
                <form role="search" method="get" class="dk-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <svg class="dk-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="search" class="dk-search-input" placeholder="<?php esc_attr_e('Rechercher un produit...', 'digital-kappa'); ?>" value="<?php echo get_search_query(); ?>" name="s">
                    <input type="hidden" name="post_type" value="product">
                </form>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <nav class="dk-nav dk-hide-mobile" aria-label="<?php esc_attr_e('Navigation principale', 'digital-kappa'); ?>">
            <div class="dk-nav-container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'dk-nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'dk_default_menu',
                    'depth'          => 2,
                ));
                ?>
            </div>
        </nav>

        <!-- Mobile Navigation -->
        <nav class="dk-mobile-nav dk-hide-desktop" aria-label="<?php esc_attr_e('Navigation mobile', 'digital-kappa'); ?>" aria-hidden="true">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'dk-mobile-menu',
                'container'      => false,
                'fallback_cb'    => 'dk_default_menu',
                'depth'          => 2,
            ));
            ?>
        </nav>
    </header>

    <div id="content" class="dk-content">

<?php
/**
 * Default menu fallback
 */
function dk_default_menu() {
    $menu_items = array(
        array('title' => __('Accueil', 'digital-kappa'), 'url' => home_url('/'), 'class' => ''),
        array('title' => __('Tous nos produits', 'digital-kappa'), 'url' => get_permalink(wc_get_page_id('shop')), 'class' => ''),
        array('title' => __('Ebooks', 'digital-kappa'), 'url' => home_url('/categorie-produit/ebook/'), 'class' => ''),
        array('title' => __('Applications', 'digital-kappa'), 'url' => home_url('/categorie-produit/application/'), 'class' => ''),
        array('title' => __('Templates', 'digital-kappa'), 'url' => home_url('/categorie-produit/template/'), 'class' => ''),
        array('title' => __('FAQ', 'digital-kappa'), 'url' => home_url('/faq/'), 'class' => ''),
        array('title' => __('Comment ça marche', 'digital-kappa'), 'url' => home_url('/comment-ca-marche/'), 'class' => ''),
    );

    echo '<ul class="dk-nav-menu">';
    foreach ($menu_items as $item) {
        $active_class = is_page($item['title']) || (is_shop() && $item['title'] === __('Tous nos produits', 'digital-kappa')) ? 'current-menu-item' : '';
        echo '<li class="menu-item ' . esc_attr($active_class) . '">';
        echo '<a href="' . esc_url($item['url']) . '">' . esc_html($item['title']) . '</a>';
        echo '</li>';
    }
    echo '</ul>';
}
?>
