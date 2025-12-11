<?php
/**
 * Thankyou page
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;
?>

<div class="dk-thankyou-wrapper">
    <?php if ($order) :
        do_action('woocommerce_before_thankyou', $order->get_id());
        ?>

        <?php if ($order->has_status('failed')) : ?>

            <div class="dk-thankyou-failed">
                <div class="dk-status-icon dk-status-failed">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                </div>
                <h1 class="dk-thankyou-title">Paiement échoué</h1>
                <p class="dk-thankyou-message">
                    Malheureusement, votre commande n'a pas pu être traitée. Veuillez réessayer ou contacter notre support.
                </p>
                <a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>" class="dk-btn dk-btn-primary">
                    Réessayer le paiement
                </a>
            </div>

        <?php else : ?>

            <div class="dk-thankyou-success">
                <div class="dk-status-icon dk-status-success">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>

                <h1 class="dk-thankyou-title">Merci pour votre commande !</h1>
                <p class="dk-thankyou-message">
                    Votre paiement a été confirmé. Vous allez recevoir vos produits par email à l'adresse
                    <strong><?php echo esc_html($order->get_billing_email()); ?></strong>
                </p>

                <!-- Order Details -->
                <div class="dk-order-details-box">
                    <h2 class="dk-details-title">Détails de la commande</h2>

                    <div class="dk-order-meta">
                        <div class="dk-meta-item">
                            <span class="dk-meta-label">Numéro de commande</span>
                            <span class="dk-meta-value">#<?php echo esc_html($order->get_order_number()); ?></span>
                        </div>
                        <div class="dk-meta-item">
                            <span class="dk-meta-label">Date</span>
                            <span class="dk-meta-value"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></span>
                        </div>
                        <div class="dk-meta-item">
                            <span class="dk-meta-label">Email</span>
                            <span class="dk-meta-value"><?php echo esc_html($order->get_billing_email()); ?></span>
                        </div>
                        <div class="dk-meta-item">
                            <span class="dk-meta-label">Total</span>
                            <span class="dk-meta-value dk-total"><?php echo wp_kses_post($order->get_formatted_order_total()); ?></span>
                        </div>
                        <div class="dk-meta-item">
                            <span class="dk-meta-label">Méthode de paiement</span>
                            <span class="dk-meta-value"><?php echo wp_kses_post($order->get_payment_method_title()); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Products Ordered -->
                <div class="dk-ordered-products">
                    <h2 class="dk-details-title">Vos produits</h2>

                    <div class="dk-products-list">
                        <?php
                        foreach ($order->get_items() as $item_id => $item) :
                            $product = $item->get_product();
                            if (!$product) continue;

                            $is_visible = $product && $product->is_visible();
                            $product_permalink = apply_filters('woocommerce_order_item_permalink', $is_visible ? $product->get_permalink($item) : '', $item, $order);
                        ?>
                            <div class="dk-product-ordered">
                                <div class="dk-product-image">
                                    <?php echo $product->get_image('dk-product-thumbnail'); ?>
                                </div>
                                <div class="dk-product-info">
                                    <h3 class="dk-product-name">
                                        <?php
                                        if ($product_permalink) {
                                            echo '<a href="' . esc_url($product_permalink) . '">' . wp_kses_post($item->get_name()) . '</a>';
                                        } else {
                                            echo wp_kses_post($item->get_name());
                                        }
                                        ?>
                                    </h3>
                                    <span class="dk-product-qty">Quantité: <?php echo esc_html($item->get_quantity()); ?></span>
                                </div>
                                <div class="dk-product-price">
                                    <?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Downloads Section -->
                <?php
                $downloads = $order->get_downloadable_items();
                if ($downloads) :
                ?>
                    <div class="dk-downloads-section">
                        <h2 class="dk-details-title">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            Téléchargez vos produits
                        </h2>

                        <div class="dk-downloads-list">
                            <?php foreach ($downloads as $download) : ?>
                                <div class="dk-download-item">
                                    <div class="dk-download-info">
                                        <span class="dk-download-name"><?php echo esc_html($download['download_name']); ?></span>
                                        <span class="dk-download-product"><?php echo esc_html($download['product_name']); ?></span>
                                    </div>
                                    <a href="<?php echo esc_url($download['download_url']); ?>" class="dk-btn dk-btn-primary dk-btn-download">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>
                                        Télécharger
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <p class="dk-download-note">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                            Les liens de téléchargement ont également été envoyés à votre adresse email.
                        </p>
                    </div>
                <?php endif; ?>

                <!-- Next Steps -->
                <div class="dk-next-steps">
                    <h2 class="dk-details-title">Et maintenant ?</h2>
                    <div class="dk-steps-grid">
                        <div class="dk-step-card">
                            <div class="dk-step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <h3>Vérifiez vos emails</h3>
                            <p>Un email de confirmation avec vos liens de téléchargement a été envoyé.</p>
                        </div>
                        <div class="dk-step-card">
                            <div class="dk-step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </div>
                            <h3>Téléchargez vos produits</h3>
                            <p>Utilisez les liens ci-dessus ou ceux dans votre email pour télécharger.</p>
                        </div>
                        <div class="dk-step-card">
                            <div class="dk-step-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                </svg>
                            </div>
                            <h3>Profitez !</h3>
                            <p>Vous avez un problème ? Notre support est là pour vous aider.</p>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="dk-thankyou-actions">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-btn dk-btn-outline">
                        Retour à l'accueil
                    </a>
                    <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="dk-btn dk-btn-primary">
                        Continuer mes achats
                    </a>
                </div>
            </div>

        <?php endif; ?>

        <?php do_action('woocommerce_thankyou', $order->get_id()); ?>

    <?php else : ?>

        <div class="dk-thankyou-empty">
            <div class="dk-status-icon dk-status-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
            </div>
            <h1 class="dk-thankyou-title">Aucune commande trouvée</h1>
            <p class="dk-thankyou-message">
                <?php esc_html_e('Thank you. Your order has been received.', 'woocommerce'); ?>
            </p>
            <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="dk-btn dk-btn-primary">
                Découvrir nos produits
            </a>
        </div>

    <?php endif; ?>
</div>
