<?php
/**
 * Template Name: Conditions Générales de Vente
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
                    <span><?php esc_html_e('Légal', 'digital-kappa'); ?></span>
                </div>
                <h1><?php esc_html_e('Conditions générales de vente', 'digital-kappa'); ?></h1>
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
                    <h3><?php esc_html_e('Garantie 14 jours', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Satisfait ou remboursé sans justification', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-highlight-card">
                    <div class="dk-highlight-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Accès immédiat', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Téléchargement instantané après paiement', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-highlight-card">
                    <div class="dk-highlight-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Licence claire', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Usage personnel ou commercial selon le produit', 'digital-kappa'); ?></p>
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
                        <h2><?php esc_html_e('1. Objet', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Les présentes Conditions Générales de Vente (CGV) régissent les ventes de produits digitaux effectuées sur le site digitalkappa.com (ci-après \"le Site\") exploité par Digital Kappa.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Ces conditions s'appliquent à toute commande passée par un utilisateur du Site (ci-après \"le Client\"). En passant commande, le Client reconnaît avoir pris connaissance des présentes CGV et les accepter sans réserve.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Digital Kappa se réserve le droit de modifier à tout moment les présentes CGV. Les conditions applicables sont celles en vigueur à la date de la commande.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('2. Produits', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Digital Kappa propose à la vente des produits digitaux, incluant mais non limité à : applications mobiles, ebooks, templates, et autres ressources numériques téléchargeables.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Chaque produit est décrit de manière détaillée sur sa page dédiée. Le Client est invité à lire attentivement la description, les fonctionnalités, les prérequis techniques et les conditions de licence avant tout achat.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Les images présentées sur le Site sont non contractuelles et peuvent différer légèrement du produit final.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('3. Prix', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Les prix sont affichés en Euros (€) et incluent la TVA applicable. Le prix définitif est celui affiché au moment de la validation de la commande.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Digital Kappa se réserve le droit de modifier ses prix à tout moment. Toutefois, les produits seront facturés au prix en vigueur au moment de la validation de la commande.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('4. Commande', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Pour passer commande, le Client doit :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Sélectionner le ou les produits souhaités", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Renseigner son adresse email (pour la réception du produit)", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Valider le paiement via notre système sécurisé", 'digital-kappa'); ?></li>
                        </ul>
                        <p><?php esc_html_e("La commande est définitivement validée après confirmation du paiement. Un email de confirmation est envoyé au Client avec les liens de téléchargement.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 5 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('5. Paiement', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le paiement s'effectue en ligne via notre prestataire de paiement sécurisé Stripe. Les moyens de paiement acceptés sont :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Cartes bancaires : Visa, Mastercard, American Express", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("PayPal", 'digital-kappa'); ?></li>
                        </ul>
                        <p><?php esc_html_e("Le paiement est sécurisé par cryptage SSL. Digital Kappa n'a jamais accès aux données bancaires du Client.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 6 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('6. Livraison', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("S'agissant de produits digitaux, la livraison s'effectue immédiatement après la validation du paiement par :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("L'envoi d'un email contenant le ou les liens de téléchargement", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("L'accès direct au produit depuis l'espace client (si compte créé)", 'digital-kappa'); ?></li>
                        </ul>
                        <p><?php esc_html_e("Les liens de téléchargement sont valables sans limite de durée et permettent un nombre illimité de téléchargements.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 7 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('7. Droit de rétractation et remboursement', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Conformément aux articles L221-18 et suivants du Code de la consommation, et bien que la loi n'impose pas de droit de rétractation pour les contenus numériques fournis immédiatement, Digital Kappa accorde à ses clients une garantie satisfait ou remboursé de 14 jours.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Pour exercer ce droit, le Client doit contacter notre service client à l'adresse support@digitalkappa.com en précisant sa demande et le numéro de commande concerné.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Le remboursement sera effectué dans un délai de 14 jours à compter de la réception de la demande, via le même moyen de paiement que celui utilisé pour la commande.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 8 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('8. Licence d\'utilisation', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("L'achat d'un produit digital confère au Client une licence d'utilisation selon les termes suivants :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Licence personnelle : utilisation par le Client uniquement", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Non-transferable : le produit ne peut être revendu, cédé ou partagé", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Modifications : le Client peut modifier le produit pour son usage personnel", 'digital-kappa'); ?></li>
                        </ul>
                        <p><?php esc_html_e("Certains produits peuvent bénéficier d'une licence étendue (usage commercial). Les conditions spécifiques sont précisées sur la fiche produit.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 9 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('9. Propriété intellectuelle', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Tous les produits vendus sur le Site sont protégés par le droit d'auteur et la propriété intellectuelle. L'achat d'un produit ne transfère pas les droits de propriété intellectuelle au Client.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Toute reproduction, distribution ou utilisation non autorisée des produits est strictement interdite et constitue une contrefaçon sanctionnée par la loi.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 10 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('10. Responsabilité', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Digital Kappa s'engage à fournir des produits conformes à leur description. Toutefois, Digital Kappa ne saurait être tenu responsable :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Des dommages directs ou indirects résultant de l'utilisation des produits", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("De l'incompatibilité des produits avec l'environnement technique du Client", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Des pertes de données ou de revenus liées à l'utilisation des produits", 'digital-kappa'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 11 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('11. Service client', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Pour toute question ou réclamation, le Client peut contacter Digital Kappa :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><?php esc_html_e("Par email : support@digitalkappa.com", 'digital-kappa'); ?></li>
                            <li><?php esc_html_e("Délai de réponse : 24 à 48 heures ouvrées", 'digital-kappa'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 12 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('12. Droit applicable et litiges', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Les présentes CGV sont soumises au droit français. En cas de litige, une solution amiable sera recherchée avant toute action judiciaire.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("À défaut d'accord amiable, les tribunaux français seront seuls compétents pour connaître du litige.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Conformément aux dispositions du Code de la consommation concernant le règlement amiable des litiges, le Client peut recourir au service de médiation proposé par Digital Kappa.", 'digital-kappa'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
