<?php
/**
 * Template Name: Comment ça marche
 * Template Post Type: page
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main dk-how-it-works">
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
                <div class="dk-badge dk-badge-white">
                    <span class="dk-badge-dot"></span>
                    <span><?php esc_html_e('Simple et sécurisé', 'digital-kappa'); ?></span>
                </div>
                <h1><?php esc_html_e('Comment ça marche ?', 'digital-kappa'); ?></h1>
                <p class="dk-hero-description">
                    <?php esc_html_e("Achetez et téléchargez vos produits digitaux en quelques clics. Notre processus simplifié vous garantit un accès immédiat à vos achats.", 'digital-kappa'); ?>
                </p>
            </div>
            <div class="dk-hero-blur"></div>
        </div>
    </section>

    <!-- Process Steps -->
    <section class="dk-steps dk-section">
        <div class="dk-container">
            <div class="dk-steps-grid">
                <div class="dk-step">
                    <div class="dk-step-connector"></div>
                    <div class="dk-step-icon-wrapper">
                        <div class="dk-step-icon">
                            <svg viewBox="0 0 40 40" fill="none" stroke="#D2A30B" stroke-width="3.33">
                                <circle cx="17" cy="17" r="10"></circle>
                                <line x1="33.3" y1="33.3" x2="24.3" y2="24.3"></line>
                            </svg>
                        </div>
                    </div>
                    <div class="dk-step-number">1</div>
                    <h3><?php esc_html_e('Parcourez', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Explorez notre catalogue de produits digitaux : applications, ebooks et templates. Utilisez les filtres pour trouver exactement ce dont vous avez besoin.", 'digital-kappa'); ?></p>
                </div>

                <div class="dk-step">
                    <div class="dk-step-connector"></div>
                    <div class="dk-step-icon-wrapper">
                        <div class="dk-step-icon">
                            <svg viewBox="0 0 40 40" fill="none" stroke="#D2A30B" stroke-width="3.33">
                                <rect x="3.33" y="6.67" width="33.33" height="26.67" rx="3.33"></rect>
                                <line x1="3.33" y1="16.67" x2="36.67" y2="16.67"></line>
                            </svg>
                        </div>
                    </div>
                    <div class="dk-step-number">2</div>
                    <h3><?php esc_html_e('Achetez en un clic', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Pas de compte requis. Cliquez sur "Acheter maintenant", renseignez votre email et réglez en toute sécurité via notre système de paiement sécurisé.', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-step">
                    <div class="dk-step-icon-wrapper">
                        <div class="dk-step-icon">
                            <svg viewBox="0 0 40 40" fill="none" stroke="#D2A30B" stroke-width="3.33">
                                <path d="M20 25V5"></path>
                                <polyline points="10 15 20 25 30 15"></polyline>
                                <path d="M33.33 25v8.33a3.33 3.33 0 0 1-3.33 3.33H10a3.33 3.33 0 0 1-3.33-3.33V25"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="dk-step-number">3</div>
                    <h3><?php esc_html_e('Téléchargez', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Accédez immédiatement à votre produit après le paiement. Recevez un email de confirmation avec un lien de téléchargement valable à vie.", 'digital-kappa'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Simplified Process -->
    <section class="dk-simplified dk-section dk-bg-gray">
        <div class="dk-container">
            <div class="dk-simplified-grid">
                <div class="dk-simplified-content">
                    <h2>
                        <?php esc_html_e("Un processus d'achat", 'digital-kappa'); ?>
                        <span class="dk-text-gold"><?php esc_html_e('ultra-simplifié', 'digital-kappa'); ?></span>
                    </h2>
                    <p><?php esc_html_e("Nous avons conçu notre plateforme pour éliminer toute friction entre vous et vos produits digitaux. Pas de création de compte fastidieuse, pas de panier compliqué.", 'digital-kappa'); ?></p>

                    <div class="dk-simplified-features">
                        <div class="dk-simplified-feature">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                            <div>
                                <h4><?php esc_html_e('Sans création de compte', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Un simple email suffit pour finaliser votre achat", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-simplified-feature">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                            <div>
                                <h4><?php esc_html_e('Accès instantané', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Téléchargez votre produit immédiatement après le paiement", 'digital-kappa'); ?></p>
                            </div>
                        </div>

                        <div class="dk-simplified-feature">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <div>
                                <h4><?php esc_html_e('Paiement 100% sécurisé', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Vos données sont protégées par un cryptage de niveau bancaire", 'digital-kappa'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dk-simplified-image">
                    <img src="<?php echo esc_url(DK_THEME_URI . '/assets/images/process.jpg'); ?>" alt="<?php esc_attr_e("Processus d'achat simplifié", 'digital-kappa'); ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Security Section -->
    <section class="dk-security dk-section">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php esc_html_e('Vos achats en toute sécurité', 'digital-kappa'); ?></h2>
                <p class="dk-text-muted"><?php esc_html_e("Nous prenons la sécurité de vos données et de vos paiements très au sérieux. Voici nos garanties.", 'digital-kappa'); ?></p>
            </div>

            <div class="dk-security-grid">
                <div class="dk-security-card">
                    <div class="dk-security-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Cryptage SSL', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Toutes les transactions sont sécurisées", 'digital-kappa'); ?></p>
                </div>

                <div class="dk-security-card">
                    <div class="dk-security-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Paiement sécurisé', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Nous ne stockons aucune donnée bancaire", 'digital-kappa'); ?></p>
                </div>

                <div class="dk-security-card">
                    <div class="dk-security-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Accès à vie', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Téléchargez vos produits quand vous voulez", 'digital-kappa'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mini FAQ -->
    <section class="dk-mini-faq dk-section dk-bg-gray">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php esc_html_e('Questions fréquentes', 'digital-kappa'); ?></h2>
            </div>

            <div class="dk-faq-list dk-faq-compact">
                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span><?php esc_html_e("Dois-je créer un compte pour acheter ?", 'digital-kappa'); ?></span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p><?php esc_html_e("Non, aucun compte n'est nécessaire. Un simple email suffit pour recevoir votre produit.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span><?php esc_html_e("Quels moyens de paiement acceptez-vous ?", 'digital-kappa'); ?></span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p><?php esc_html_e("Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) et PayPal.", 'digital-kappa'); ?></p>
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

                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span><?php esc_html_e("Puis-je obtenir une facture ?", 'digital-kappa'); ?></span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p><?php esc_html_e("Oui, une facture est automatiquement générée et envoyée par email après chaque achat.", 'digital-kappa'); ?></p>
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
                        <p><?php esc_html_e("Vérifiez d'abord votre dossier spam. Si vous ne trouvez toujours rien, contactez notre support qui vous renverra votre lien.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-question" aria-expanded="false">
                        <span><?php esc_html_e("Les produits sont-ils remboursables ?", 'digital-kappa'); ?></span>
                        <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                            <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dk-faq-answer" hidden>
                        <p><?php esc_html_e("Oui, nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits.", 'digital-kappa'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Buy Section -->
    <section class="dk-buy-section dk-section">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-8">
                <div class="dk-badge dk-badge-white">
                    <span class="dk-badge-dot"></span>
                    <span><?php esc_html_e('Notre engagement', 'digital-kappa'); ?></span>
                </div>
                <h2><?php esc_html_e('Acheter des produits digitaux en toute simplicité', 'digital-kappa'); ?></h2>
                <p class="dk-text-muted"><?php esc_html_e("La qualité de vos achats sur la marketplace est assurée par nos soins. Nous avons confiance en nos vendeurs et nous sommes attentifs dans la sélection de nos produits digitaux.", 'digital-kappa'); ?></p>
            </div>

            <div class="dk-commitment-grid">
                <div class="dk-commitment-card">
                    <div class="dk-commitment-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Qualité garantie', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Nos produits digitaux sont soumis à des critères stricts de qualité. Ils sont testés, validés et régulièrement mis à jour pour garantir votre satisfaction.", 'digital-kappa'); ?></p>
                </div>

                <div class="dk-commitment-card">
                    <div class="dk-commitment-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Transactions sécurisées', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Lorsque vous effectuez un achat, les documents juridiques concernant votre transaction sont sauvegardés dans votre espace personnel pour une consultation à tout moment.", 'digital-kappa'); ?></p>
                </div>

                <div class="dk-commitment-card">
                    <div class="dk-commitment-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Support réactif', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Nos vendeurs ont mis en place des moyens de communication simples et efficaces pour répondre à toutes vos questions, avant ou après votre achat.", 'digital-kappa'); ?></p>
                </div>
            </div>

            <!-- Satisfaction Banner -->
            <div class="dk-satisfaction-banner">
                <div class="dk-satisfaction-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <div class="dk-satisfaction-content">
                    <h3><?php esc_html_e('Votre satisfaction est notre priorité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("En cas de problème avec un produit acheté, nous disposons d'une équipe support dédiée qui interviendra rapidement pour trouver une solution adaptée à votre situation.", 'digital-kappa'); ?></p>
                    <p><?php esc_html_e("Que vous soyez développeur, designer, entrepreneur ou créateur de contenu, notre marketplace vous offre un accès simple et sécurisé aux meilleurs produits digitaux du marché.", 'digital-kappa'); ?></p>
                </div>
                <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="dk-btn dk-btn-primary">
                    <?php esc_html_e('Commencer maintenant', 'digital-kappa'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php echo do_shortcode('[dk_cta]'); ?>

    <?php endif; // End else (non-Elementor content) ?>
</main>

<?php
get_footer();
