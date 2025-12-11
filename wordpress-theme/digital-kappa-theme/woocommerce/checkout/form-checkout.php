<?php
/**
 * Checkout Form
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}
?>

<div class="dk-checkout-wrapper">
    <div class="dk-checkout-header">
        <h1 class="dk-checkout-title">Finaliser votre commande</h1>
        <p class="dk-checkout-subtitle">Plus qu'une étape pour accéder à votre produit</p>
    </div>

    <form name="checkout" method="post" class="checkout woocommerce-checkout dk-checkout-form" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

        <div class="dk-checkout-grid">
            <!-- Left Column: Customer Details -->
            <div class="dk-checkout-main">
                <?php if ($checkout->get_checkout_fields()) : ?>

                    <!-- Billing Fields -->
                    <div class="dk-checkout-section">
                        <h2 class="dk-section-heading">
                            <span class="dk-heading-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                            Vos informations
                        </h2>

                        <div class="dk-form-fields">
                            <?php do_action('woocommerce_checkout_billing'); ?>
                        </div>
                    </div>

                    <?php do_action('woocommerce_checkout_shipping'); ?>

                <?php endif; ?>

                <!-- Payment Section -->
                <div class="dk-checkout-section dk-payment-section">
                    <h2 class="dk-section-heading">
                        <span class="dk-heading-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>
                        </span>
                        Paiement sécurisé
                    </h2>

                    <?php if (WC()->cart->needs_payment()) : ?>
                        <div id="payment" class="woocommerce-checkout-payment dk-payment-methods">
                            <?php if (WC()->cart->needs_payment()) : ?>
                                <ul class="wc_payment_methods payment_methods methods">
                                    <?php
                                    if (!empty($available_gateways)) {
                                        foreach ($available_gateways as $gateway) {
                                            wc_get_template('checkout/payment-method.php', array('gateway' => $gateway));
                                        }
                                    } else {
                                        echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce') : esc_html__('Please fill in your details above to see available payment methods.', 'woocommerce')) . '</li>';
                                    }
                                    ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Security Badges -->
                    <div class="dk-security-badges">
                        <div class="dk-security-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span>SSL Sécurisé</span>
                        </div>
                        <div class="dk-security-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <span>Paiement protégé</span>
                        </div>
                        <div class="dk-security-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Stripe certifié</span>
                        </div>
                    </div>
                </div>

                <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>
                <?php do_action('woocommerce_checkout_before_order_review'); ?>
            </div>

            <!-- Right Column: Order Summary -->
            <div class="dk-checkout-sidebar">
                <div class="dk-order-summary">
                    <h2 class="dk-summary-title">Récapitulatif</h2>

                    <div class="dk-order-items">
                        <?php
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
                                $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image('dk-product-thumbnail'), $cart_item, $cart_item_key);
                                $product_price = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                                $product_subtotal = apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
                                ?>
                                <div class="dk-order-item">
                                    <div class="dk-item-image">
                                        <?php echo $thumbnail; ?>
                                    </div>
                                    <div class="dk-item-details">
                                        <h4 class="dk-item-name"><?php echo wp_kses_post($product_name); ?></h4>
                                        <span class="dk-item-quantity">Quantité: <?php echo esc_html($cart_item['quantity']); ?></span>
                                    </div>
                                    <div class="dk-item-price">
                                        <?php echo $product_subtotal; ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="dk-order-totals">
                        <div class="dk-total-row dk-subtotal">
                            <span>Sous-total</span>
                            <span><?php wc_cart_totals_subtotal_html(); ?></span>
                        </div>

                        <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
                            <div class="dk-total-row dk-coupon">
                                <span>Coupon: <?php echo esc_html($code); ?></span>
                                <span>-<?php wc_cart_totals_coupon_html($coupon); ?></span>
                            </div>
                        <?php endforeach; ?>

                        <?php foreach (WC()->cart->get_fees() as $fee) : ?>
                            <div class="dk-total-row dk-fee">
                                <span><?php echo esc_html($fee->name); ?></span>
                                <span><?php wc_cart_totals_fee_html($fee); ?></span>
                            </div>
                        <?php endforeach; ?>

                        <?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) : ?>
                            <?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
                                <?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : ?>
                                    <div class="dk-total-row dk-tax">
                                        <span><?php echo esc_html($tax->label); ?></span>
                                        <span><?php echo wp_kses_post($tax->formatted_amount); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="dk-total-row dk-tax">
                                    <span><?php echo esc_html(WC()->countries->tax_or_vat()); ?></span>
                                    <span><?php wc_cart_totals_taxes_total_html(); ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="dk-total-row dk-total">
                            <span>Total</span>
                            <span class="dk-total-amount"><?php wc_cart_totals_order_total_html(); ?></span>
                        </div>
                    </div>

                    <!-- Coupon Code -->
                    <?php if (wc_coupons_enabled()) : ?>
                        <div class="dk-coupon-form">
                            <label for="coupon_code">Code promo</label>
                            <div class="dk-coupon-input">
                                <input type="text" name="coupon_code" id="coupon_code" placeholder="Entrer le code" value="">
                                <button type="submit" class="dk-apply-coupon" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>">Appliquer</button>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Terms and Place Order -->
                    <div class="dk-checkout-actions">
                        <?php wc_get_template('checkout/terms.php'); ?>

                        <?php do_action('woocommerce_review_order_before_submit'); ?>

                        <button type="submit" class="dk-btn dk-btn-primary dk-btn-large dk-place-order" name="woocommerce_checkout_place_order" id="place_order" value="<?php esc_attr_e('Place order', 'woocommerce'); ?>" data-value="<?php esc_attr_e('Place order', 'woocommerce'); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            Payer <?php wc_cart_totals_order_total_html(); ?>
                        </button>

                        <?php do_action('woocommerce_review_order_after_submit'); ?>
                    </div>

                    <!-- Guarantees -->
                    <div class="dk-checkout-guarantees">
                        <div class="dk-guarantee">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            <span>Téléchargement immédiat après paiement</span>
                        </div>
                        <div class="dk-guarantee">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="23 4 23 10 17 10"></polyline>
                                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                            </svg>
                            <span>Garantie satisfait ou remboursé 14 jours</span>
                        </div>
                        <div class="dk-guarantee">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Produit envoyé par email</span>
                        </div>
                    </div>

                    <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
                </div>
            </div>
        </div>

        <?php do_action('woocommerce_checkout_after_order_review'); ?>

    </form>

    <?php do_action('woocommerce_after_checkout_form', $checkout); ?>
</div>
