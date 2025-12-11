<?php
/**
 * Customer completed order email
 *
 * Sent to customers when their orders are marked completed and contains download links.
 *
 * @package Digital_Kappa
 */

defined('ABSPATH') || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email);
?>

<p style="margin: 0 0 20px;">
    Bonjour <?php echo esc_html($order->get_billing_first_name()); ?>,
</p>

<p style="margin: 0 0 20px;">
    <strong style="color: #d2a30b;">Excellente nouvelle !</strong> Votre commande est confirmée et vos produits sont prêts à être téléchargés.
</p>

<!-- Order Info Box -->
<div style="background: #f9fafb; border-radius: 8px; padding: 20px; margin: 25px 0;">
    <p style="margin: 5px 0;"><strong>Numéro de commande:</strong> #<?php echo esc_html($order->get_order_number()); ?></p>
    <p style="margin: 5px 0;"><strong>Date:</strong> <?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></p>
    <p style="margin: 5px 0;"><strong>Total:</strong> <span style="color: #d2a30b; font-weight: 700;"><?php echo wp_kses_post($order->get_formatted_order_total()); ?></span></p>
</div>

<?php
// Get downloadable items
$downloads = $order->get_downloadable_items();

if ($downloads) :
?>
<!-- Download Section -->
<div style="background: linear-gradient(135deg, rgba(210, 163, 11, 0.1) 0%, rgba(210, 163, 11, 0.05) 100%); border: 2px solid #d2a30b; border-radius: 12px; padding: 25px; margin: 30px 0; text-align: center;">
    <h3 style="color: #1a1a1a; font-family: 'Merriweather', Georgia, serif; font-size: 18px; margin: 0 0 15px;">
        📦 Téléchargez vos produits
    </h3>
    <p style="color: #6b7280; margin: 0 0 20px;">
        Cliquez sur les boutons ci-dessous pour télécharger vos produits.
    </p>

    <?php foreach ($downloads as $download) : ?>
        <a href="<?php echo esc_url($download['download_url']); ?>"
           style="display: inline-block; background: #d2a30b; color: #ffffff; font-size: 14px; font-weight: 600; padding: 12px 24px; border-radius: 8px; text-decoration: none; margin: 5px;">
            <?php echo esc_html($download['download_name']); ?>
        </a>
    <?php endforeach; ?>

    <p style="color: #9ca3af; font-size: 12px; margin: 20px 0 0;">
        Les liens de téléchargement sont valables pendant 7 jours.
    </p>
</div>
<?php endif; ?>

<h2 style="color: #1a1a1a; font-family: 'Merriweather', Georgia, serif; font-size: 18px; margin: 30px 0 15px;">
    Détails de votre commande
</h2>

<?php
/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);
?>

<!-- Support Section -->
<div style="background: #f9fafb; border-radius: 8px; padding: 20px; margin: 30px 0; text-align: center;">
    <h3 style="color: #1a1a1a; font-size: 16px; margin: 0 0 10px;">
        Besoin d'aide ?
    </h3>
    <p style="color: #6b7280; font-size: 14px; margin: 0 0 15px;">
        Notre équipe de support est là pour vous aider 24h/24.
    </p>
    <p style="margin: 0;">
        <a href="mailto:support@digitalkappa.com" style="color: #d2a30b; font-weight: 600; text-decoration: none;">
            Contacter le support
        </a>
    </p>
</div>

<p style="margin: 30px 0 0; text-align: center; color: #6b7280; font-size: 14px;">
    Merci pour votre confiance !<br>
    <strong style="color: #d2a30b;">L'équipe Digital Kappa</strong>
</p>

<?php
/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ($additional_content) {
    echo wp_kses_post(wpautop(wptexturize($additional_content)));
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
