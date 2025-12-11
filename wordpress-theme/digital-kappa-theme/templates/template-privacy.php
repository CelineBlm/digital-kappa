<?php
/**
 * Template Name: Politique de confidentialité
 * Template Post Type: page
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main dk-legal">
    <!-- Hero Section -->
    <section class="dk-page-hero dk-bg-gray">
        <div class="dk-container">
            <div class="dk-page-hero-content dk-text-center">
                <div class="dk-badge dk-badge-gold">
                    <span><?php esc_html_e('Vie privée', 'digital-kappa'); ?></span>
                </div>
                <h1><?php esc_html_e('Politique de confidentialité', 'digital-kappa'); ?></h1>
                <p class="dk-text-muted"><?php esc_html_e('Dernière mise à jour : 1er décembre 2024', 'digital-kappa'); ?></p>
            </div>
        </div>
    </section>

    <!-- Highlights -->
    <section class="dk-legal-highlights dk-section">
        <div class="dk-container">
            <div class="dk-highlights-grid">
                <div class="dk-highlight-card">
                    <div class="dk-highlight-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Protection RGPD', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Conformité totale au règlement européen', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-highlight-card">
                    <div class="dk-highlight-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Données sécurisées', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Cryptage SSL et serveurs sécurisés', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-highlight-card">
                    <div class="dk-highlight-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Transparence', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Utilisation claire de vos informations', 'digital-kappa'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="dk-legal-content dk-section">
        <div class="dk-container">
            <div class="dk-legal-wrapper">
                <!-- Section 1 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('1. Introduction', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Digital Kappa, exploitant de la plateforme digitalkappa.com, accorde une importance particulière à la protection de vos données personnelles et au respect de votre vie privée.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("La présente Politique de confidentialité a pour objectif de vous informer de manière transparente sur les données personnelles que nous collectons, les raisons de cette collecte, la manière dont nous les utilisons, les protégeons et vos droits en la matière.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Cette politique s'applique à tous les utilisateurs de notre site web et clients ayant effectué un achat sur Digital Kappa. En utilisant notre site, vous acceptez les termes de cette politique.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('2. Responsable du traitement', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le responsable du traitement des données personnelles collectées sur digitalkappa.com est Digital Kappa, joignable à l'adresse email : privacy@digitalkappa.com.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Pour toute question relative à cette politique de confidentialité ou pour exercer vos droits, vous pouvez nous contacter à l'adresse indiquée ci-dessus.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('3. Données collectées', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <h3><?php esc_html_e('3.1. Données fournies directement par vous', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e("Lors de votre achat sur Digital Kappa, nous collectons les informations suivantes :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Nom et prénom", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Adresse email", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Adresse de facturation (optionnelle selon le pays)", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Informations de paiement (traitées par notre prestataire tiers sécurisé)", 'digital-kappa'); ?></li>
                        </ul>

                        <h3><?php esc_html_e('3.2. Données collectées automatiquement', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e("Lors de votre navigation sur notre site, nous collectons automatiquement :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Adresse IP", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Type et version de navigateur", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Système d'exploitation", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Pages visitées et durée de visite", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Données de navigation (via cookies analytiques)", 'digital-kappa'); ?></li>
                        </ul>

                        <h3><?php esc_html_e('3.3. Données non collectées', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e("Nous ne collectons JAMAIS les données suivantes : numéros de carte bancaire complets (traités uniquement par notre prestataire de paiement sécurisé), données sensibles (religion, opinions politiques, santé), données biométriques, ou tout autre donnée non nécessaire à notre activité.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('4. Finalités du traitement', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Vos données personnelles sont collectées et utilisées pour les finalités suivantes :", 'digital-kappa'); ?></p>

                        <div class="dk-legal-purposes">
                            <div class="dk-purpose">
                                <h4><?php esc_html_e('Traitement des commandes', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Validation de votre achat, envoi du produit digital, génération de facture", 'digital-kappa'); ?></p>
                            </div>
                            <div class="dk-purpose">
                                <h4><?php esc_html_e('Communication client', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Envoi des liens de téléchargement, support technique, réponses à vos questions", 'digital-kappa'); ?></p>
                            </div>
                            <div class="dk-purpose">
                                <h4><?php esc_html_e('Amélioration du service', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Analyse statistique de navigation, optimisation de l'expérience utilisateur", 'digital-kappa'); ?></p>
                            </div>
                            <div class="dk-purpose">
                                <h4><?php esc_html_e('Obligations légales', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Conservation des factures, respect des obligations comptables et fiscales", 'digital-kappa'); ?></p>
                            </div>
                            <div class="dk-purpose">
                                <h4><?php esc_html_e('Newsletter (avec consentement)', 'digital-kappa'); ?></h4>
                                <p><?php esc_html_e("Envoi d'informations sur les nouveaux produits et offres spéciales (opt-in uniquement)", 'digital-kappa'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('5. Base légale du traitement', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le traitement de vos données personnelles repose sur plusieurs bases légales :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e('Exécution du contrat :', 'digital-kappa'); ?></strong> <?php esc_html_e('traitement des commandes et livraison des produits', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Obligation légale :', 'digital-kappa'); ?></strong> <?php esc_html_e('conservation des factures et données fiscales', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Intérêt légitime :', 'digital-kappa'); ?></strong> <?php esc_html_e('amélioration de nos services et prévention de la fraude', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Consentement :', 'digital-kappa'); ?></strong> <?php esc_html_e('newsletter et communications marketing (opt-in)', 'digital-kappa'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 6 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('6. Durée de conservation', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Vos données personnelles sont conservées pour les durées suivantes :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e('Données de commande :', 'digital-kappa'); ?></strong> <?php esc_html_e('10 ans (obligation légale comptable)', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Données de navigation :', 'digital-kappa'); ?></strong> <?php esc_html_e('13 mois maximum', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Newsletter :', 'digital-kappa'); ?></strong> <?php esc_html_e("jusqu'à votre désinscription", 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Support client :', 'digital-kappa'); ?></strong> <?php esc_html_e('3 ans après la dernière interaction', 'digital-kappa'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 7-12 abbreviated for brevity but following same structure -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('7. Partage des données', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Nous ne vendons ni ne louons jamais vos données personnelles. Vos données peuvent être partagées uniquement avec :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e('Prestataire de paiement :', 'digital-kappa'); ?></strong> <?php esc_html_e('pour traiter les transactions (Stripe, PayPal)', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Hébergeur web :', 'digital-kappa'); ?></strong> <?php esc_html_e('pour le stockage sécurisé des données', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e("Service d'emailing :", 'digital-kappa'); ?></strong> <?php esc_html_e("pour l'envoi des liens de téléchargement et newsletters", 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Autorités légales :', 'digital-kappa'); ?></strong> <?php esc_html_e("en cas d'obligation légale uniquement", 'digital-kappa'); ?></li>
                        </ul>
                        <p><?php esc_html_e("Tous nos prestataires sont soumis à des obligations strictes de sécurité et de confidentialité conformément au RGPD.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('8. Vos droits', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Conformément au RGPD, vous disposez des droits suivants concernant vos données personnelles :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e("Droit d'accès :", 'digital-kappa'); ?></strong> <?php esc_html_e('obtenir une copie de vos données personnelles', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Droit de rectification :', 'digital-kappa'); ?></strong> <?php esc_html_e('corriger vos données inexactes ou incomplètes', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e("Droit à l'effacement :", 'digital-kappa'); ?></strong> <?php esc_html_e('supprimer vos données dans certaines conditions', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Droit à la limitation :', 'digital-kappa'); ?></strong> <?php esc_html_e('restreindre le traitement de vos données', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Droit à la portabilité :', 'digital-kappa'); ?></strong> <?php esc_html_e('recevoir vos données dans un format structuré', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e("Droit d'opposition :", 'digital-kappa'); ?></strong> <?php esc_html_e('vous opposer au traitement de vos données', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Droit de retrait du consentement :', 'digital-kappa'); ?></strong> <?php esc_html_e('retirer votre consentement à tout moment', 'digital-kappa'); ?></li>
                        </ul>
                        <p><?php esc_html_e("Pour exercer ces droits, contactez-nous à privacy@digitalkappa.com. Nous répondrons dans un délai maximum de 30 jours.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('9. Contact', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Pour toute question concernant cette politique de confidentialité :", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Email : privacy@digitalkappa.com", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Adresse : Digital Kappa - France", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Vous pouvez également contacter la CNIL (Commission Nationale de l'Informatique et des Libertés) si vous estimez que vos droits ne sont pas respectés.", 'digital-kappa'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
