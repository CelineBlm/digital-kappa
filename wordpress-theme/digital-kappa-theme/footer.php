    </div><!-- #content -->

    <footer id="colophon" class="dk-footer">
        <div class="dk-footer-main">
            <div class="dk-container">
                <div class="dk-footer-grid">
                    <!-- Column 1 - Brand -->
                    <div class="dk-footer-brand">
                        <div class="dk-footer-logo">
                            <?php if (has_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-logo-link" rel="home">
                                    <div class="dk-logo-icon dk-logo-icon-footer">
                                        <div class="dk-logo-badge">DK</div>
                                    </div>
                                    <span class="dk-logo-text"><?php bloginfo('name'); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <p class="dk-footer-description">
                            <?php esc_html_e('Votre marketplace de produits digitaux premium', 'digital-kappa'); ?>
                        </p>
                    </div>

                    <!-- Column 2 - Pages -->
                    <div class="dk-footer-column">
                        <h4 class="dk-footer-title"><?php esc_html_e('Pages', 'digital-kappa'); ?></h4>
                        <ul class="dk-footer-links">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Accueil', 'digital-kappa'); ?></a></li>
                            <li><a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"><?php esc_html_e('Produits', 'digital-kappa'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/a-propos/')); ?>"><?php esc_html_e('À propos', 'digital-kappa'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/faq/')); ?>"><?php esc_html_e('FAQ', 'digital-kappa'); ?></a></li>
                        </ul>
                    </div>

                    <!-- Column 3 - Categories -->
                    <div class="dk-footer-column">
                        <h4 class="dk-footer-title"><?php esc_html_e('Catégories', 'digital-kappa'); ?></h4>
                        <ul class="dk-footer-links">
                            <?php
                            $product_categories = get_terms(array(
                                'taxonomy'   => 'product_cat',
                                'hide_empty' => false,
                                'number'     => 4,
                                'exclude'    => array(get_option('default_product_cat')),
                            ));

                            if (!is_wp_error($product_categories) && !empty($product_categories)) :
                                foreach ($product_categories as $category) :
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_term_link($category)); ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    </li>
                                    <?php
                                endforeach;
                            else :
                                ?>
                                <li><a href="<?php echo esc_url(home_url('/categorie-produit/ebook/')); ?>"><?php esc_html_e('Ebooks', 'digital-kappa'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/categorie-produit/application/')); ?>"><?php esc_html_e('Applications', 'digital-kappa'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/categorie-produit/template/')); ?>"><?php esc_html_e('Templates', 'digital-kappa'); ?></a></li>
                                <?php
                            endif;
                            ?>
                        </ul>
                    </div>

                    <!-- Column 4 - Legal -->
                    <div class="dk-footer-column">
                        <h4 class="dk-footer-title"><?php esc_html_e('Légal', 'digital-kappa'); ?></h4>
                        <ul class="dk-footer-links">
                            <li><a href="<?php echo esc_url(home_url('/cgv/')); ?>"><?php esc_html_e('Conditions générales', 'digital-kappa'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>"><?php esc_html_e('Politique de confidentialité', 'digital-kappa'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/mentions-legales/')); ?>"><?php esc_html_e('Mentions légales', 'digital-kappa'); ?></a></li>
                        </ul>
                    </div>

                    <!-- Column 5 - Contact (optional) -->
                    <?php
                    $contact_email = dk_get_option('dk_contact_email', 'contact@digitalkappa.com');
                    if ($contact_email) :
                        ?>
                        <div class="dk-footer-column dk-footer-contact">
                            <h4 class="dk-footer-title"><?php esc_html_e('Contact', 'digital-kappa'); ?></h4>
                            <ul class="dk-footer-links">
                                <li class="dk-footer-contact-item">
                                    <svg class="dk-footer-icon" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <div>
                                        <span class="dk-footer-contact-label"><?php esc_html_e('Email', 'digital-kappa'); ?></span>
                                        <a href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <div class="dk-footer-bottom">
            <div class="dk-container">
                <div class="dk-footer-bottom-content">
                    <p class="dk-copyright">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('Tous droits réservés.', 'digital-kappa'); ?>
                    </p>

                    <?php
                    // Footer bottom links
                    wp_nav_menu(array(
                        'theme_location' => 'footer-legal',
                        'menu_class'     => 'dk-footer-bottom-links',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ));
                    ?>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
