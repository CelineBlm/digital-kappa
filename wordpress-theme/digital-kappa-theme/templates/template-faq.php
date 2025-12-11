<?php
/**
 * Template Name: FAQ
 * Template Post Type: page
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main dk-faq-page">
    <?php
    // If built with Elementor, use the_content()
    if (dk_is_elementor_page()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    else :
    ?>
    <!-- Hero Section -->
    <section class="dk-page-hero dk-bg-gray">
        <div class="dk-container">
            <div class="dk-page-hero-content dk-text-center">
                <div class="dk-badge dk-badge-gold">
                    <span><?php esc_html_e('Support', 'digital-kappa'); ?></span>
                </div>
                <h1><?php esc_html_e('Foire aux questions', 'digital-kappa'); ?></h1>
                <p class="dk-hero-description">
                    <?php esc_html_e("Retrouvez les réponses à toutes vos questions sur Digital Kappa, nos produits et notre fonctionnement.", 'digital-kappa'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="dk-section">
        <div class="dk-container">
            <div class="dk-faq-grid">
                <!-- General Questions -->
                <div class="dk-faq-category">
                    <h2><?php esc_html_e('Questions générales', 'digital-kappa'); ?></h2>

                    <div class="dk-faq-list">
                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="true">
                                <span><?php esc_html_e("Qu'est-ce que Digital Kappa ?", 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer">
                                <p><?php esc_html_e("Digital Kappa est une marketplace de produits digitaux proposant des applications mobiles, des ebooks et des templates. Notre mission est de vous fournir des ressources numériques de qualité, simples et prêtes à l'emploi pour gagner du temps dans vos projets.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Qui peut acheter sur Digital Kappa ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Tout le monde peut acheter sur Digital Kappa ! Que vous soyez développeur, designer, entrepreneur, étudiant ou simplement passionné de technologie, nos produits sont conçus pour répondre à différents besoins et niveaux d'expertise.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Dois-je créer un compte pour acheter ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Non, aucun compte n'est nécessaire pour acheter. Un simple email suffit pour recevoir votre produit après le paiement. Vous pouvez cependant créer un compte pour retrouver facilement tous vos achats.", 'digital-kappa'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment & Download -->
                <div class="dk-faq-category">
                    <h2><?php esc_html_e('Paiement & Téléchargement', 'digital-kappa'); ?></h2>

                    <div class="dk-faq-list">
                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Comment fonctionne le téléchargement ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Une fois votre achat effectué, vous recevez immédiatement un email avec un lien de téléchargement sécurisé. Vous pouvez également retrouver tous vos produits dans votre compte utilisateur, accessible à tout moment. Les téléchargements sont illimités et sans date d'expiration.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Quels moyens de paiement acceptez-vous ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Nous acceptons les cartes bancaires (Visa, Mastercard, American Express), PayPal, et les virements bancaires. Tous les paiements sont sécurisés via notre plateforme de paiement certifiée Stripe.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Le paiement est-il sécurisé ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Absolument. Tous nos paiements sont traités via Stripe, un système sécurisé conforme aux normes PCI-DSS. Nous n'avons jamais accès à vos données bancaires qui sont entièrement cryptées.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e("Combien de temps le lien de téléchargement est-il valable ?", 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Votre lien de téléchargement est valable à vie. Vous pouvez télécharger votre produit autant de fois que nécessaire.", 'digital-kappa'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products & Support -->
                <div class="dk-faq-category">
                    <h2><?php esc_html_e('Produits & Support', 'digital-kappa'); ?></h2>

                    <div class="dk-faq-list">
                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Les produits sont-ils remboursables ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Oui, nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits. Si le produit ne répond pas à vos attentes, contactez notre support pour obtenir un remboursement intégral.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Puis-je obtenir une facture ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Oui, une facture est automatiquement générée et envoyée par email après chaque achat. Vous pouvez également la télécharger depuis votre espace client.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e("Que faire si je n'ai pas reçu mon email de confirmation ?", 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Vérifiez d'abord votre dossier spam ou courrier indésirable. Si vous ne trouvez toujours rien, contactez notre support à support@digitalkappa.com qui vous renverra votre lien de téléchargement.", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-faq-item">
                            <button class="dk-faq-question" aria-expanded="false">
                                <span><?php esc_html_e('Les mises à jour sont-elles incluses ?', 'digital-kappa'); ?></span>
                                <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                    <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="dk-faq-answer" hidden>
                                <p><?php esc_html_e("Oui, toutes les mises à jour sont incluses gratuitement à vie. Vous serez notifié par email lorsqu'une nouvelle version est disponible.", 'digital-kappa'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="dk-faq-contact dk-section dk-bg-gray">
        <div class="dk-container">
            <div class="dk-faq-contact-content dk-text-center">
                <h2><?php esc_html_e("Vous n'avez pas trouvé votre réponse ?", 'digital-kappa'); ?></h2>
                <p><?php esc_html_e('Notre équipe support est disponible pour répondre à toutes vos questions', 'digital-kappa'); ?></p>

                <div class="dk-faq-contact-cards">
                    <div class="dk-contact-card">
                        <div class="dk-contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h3><?php esc_html_e('Email', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e('Envoyez-nous un email, nous vous répondrons sous 24h', 'digital-kappa'); ?></p>
                        <a href="mailto:support@digitalkappa.com" class="dk-btn dk-btn-primary">
                            <?php esc_html_e('Contacter le support', 'digital-kappa'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php echo do_shortcode('[dk_cta title="Prêt à explorer nos produits ?" description="Découvrez notre sélection de produits digitaux de qualité" btn_text="Voir les produits"]'); ?>

    <?php endif; // End else (non-Elementor content) ?>
</main>

<?php
get_footer();
