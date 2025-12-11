<?php
/**
 * Template Name: Mentions légales
 * Template Post Type: page
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main dk-legal">
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
                    <span><?php esc_html_e('Légal', 'digital-kappa'); ?></span>
                </div>
                <h1><?php esc_html_e('Mentions légales', 'digital-kappa'); ?></h1>
                <p class="dk-text-muted"><?php esc_html_e('Informations légales obligatoires', 'digital-kappa'); ?></p>
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
                        <h2><?php esc_html_e('1. Éditeur du site', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le site digitalkappa.com est édité par :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e('Raison sociale :', 'digital-kappa'); ?></strong> Digital Kappa</li>
                            <li><strong><?php esc_html_e('Forme juridique :', 'digital-kappa'); ?></strong> <?php esc_html_e('Micro-entreprise', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Adresse :', 'digital-kappa'); ?></strong> <?php esc_html_e('France', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Email :', 'digital-kappa'); ?></strong> contact@digitalkappa.com</li>
                        </ul>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('2. Directeur de la publication', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le directeur de la publication est le représentant légal de Digital Kappa.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('3. Hébergement', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le site est hébergé par :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e('Hébergeur :', 'digital-kappa'); ?></strong> <?php esc_html_e('[Nom de l\'hébergeur]', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Adresse :', 'digital-kappa'); ?></strong> <?php esc_html_e('[Adresse de l\'hébergeur]', 'digital-kappa'); ?></li>
                            <li><strong><?php esc_html_e('Téléphone :', 'digital-kappa'); ?></strong> <?php esc_html_e('[Téléphone de l\'hébergeur]', 'digital-kappa'); ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('4. Propriété intellectuelle', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("L'ensemble du contenu du site digitalkappa.com (textes, images, vidéos, logos, graphismes, etc.) est protégé par les lois relatives à la propriété intellectuelle.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Toute reproduction, représentation, modification, publication, transmission, dénaturation, totale ou partielle du site ou de son contenu, par quelque procédé que ce soit, et sur quelque support que ce soit est interdite sans l'autorisation écrite préalable de Digital Kappa.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Toute exploitation non autorisée du site ou de son contenu sera considérée comme constitutive d'une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de la Propriété Intellectuelle.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 5 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('5. Données personnelles', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Les informations recueillies sur ce site font l'objet d'un traitement informatique destiné à la gestion des commandes et à la communication avec les clients.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Conformément au Règlement Général sur la Protection des Données (RGPD) et à la loi \"Informatique et Libertés\", vous disposez d'un droit d'accès, de rectification, de suppression et d'opposition aux données vous concernant.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Pour plus d'informations, consultez notre", 'digital-kappa'); ?> <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>"><?php esc_html_e('Politique de confidentialité', 'digital-kappa'); ?></a>.</p>
                    </div>
                </div>

                <!-- Section 6 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('6. Cookies', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le site digitalkappa.com utilise des cookies pour améliorer l'expérience utilisateur et analyser le trafic du site.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("Vous pouvez configurer votre navigateur pour refuser les cookies ou être alerté lorsqu'un cookie est déposé. Cependant, certaines fonctionnalités du site peuvent ne pas fonctionner correctement sans cookies.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 7 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('7. Liens hypertextes', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Le site peut contenir des liens hypertextes vers d'autres sites. Digital Kappa n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu ou aux éventuels dommages pouvant résulter de leur utilisation.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 8 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('8. Limitation de responsabilité', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Digital Kappa s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur ce site. Toutefois, Digital Kappa ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition.", 'digital-kappa'); ?></p>
                        <p><?php esc_html_e("En conséquence, Digital Kappa décline toute responsabilité pour tout dommage résultant d'une imprécision ou inexactitude des informations disponibles sur ce site.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 9 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('9. Droit applicable', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Les présentes mentions légales sont régies par le droit français. En cas de litige, et à défaut de résolution amiable, les tribunaux français seront seuls compétents.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <!-- Section 10 -->
                <div class="dk-legal-section">
                    <div class="dk-legal-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                        <h2><?php esc_html_e('10. Contact', 'digital-kappa'); ?></h2>
                    </div>
                    <div class="dk-legal-text">
                        <p><?php esc_html_e("Pour toute question concernant ces mentions légales, vous pouvez nous contacter :", 'digital-kappa'); ?></p>
                        <ul>
                            <li><strong><?php esc_html_e('Email :', 'digital-kappa'); ?></strong> contact@digitalkappa.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; // End else (non-Elementor content) ?>
</main>

<?php
get_footer();
