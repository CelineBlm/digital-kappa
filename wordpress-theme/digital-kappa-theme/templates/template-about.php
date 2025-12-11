<?php
/**
 * Template Name: À propos
 * Template Post Type: page
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main dk-about">
    <!-- Hero Section -->
    <section class="dk-about-hero dk-section">
        <div class="dk-container">
            <div class="dk-about-hero-content dk-text-center">
                <div class="dk-badge dk-badge-gold">
                    <span><?php esc_html_e('À propos de nous', 'digital-kappa'); ?></span>
                </div>
                <h1><?php esc_html_e('Digital Kappa, votre partenaire digital', 'digital-kappa'); ?></h1>
                <p class="dk-hero-description">
                    <?php esc_html_e("Nous proposons des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.", 'digital-kappa'); ?>
                </p>
            </div>

            <!-- Stats -->
            <div class="dk-about-stats">
                <div class="dk-stat">
                    <span class="dk-stat-value">2026</span>
                    <span class="dk-stat-label"><?php esc_html_e('Année de lancement', 'digital-kappa'); ?></span>
                </div>
                <div class="dk-stat">
                    <span class="dk-stat-value">100%</span>
                    <span class="dk-stat-label"><?php esc_html_e('Engagement qualité', 'digital-kappa'); ?></span>
                </div>
                <div class="dk-stat">
                    <span class="dk-stat-value">14 jours</span>
                    <span class="dk-stat-label"><?php esc_html_e('Garantie satisfait ou remboursé', 'digital-kappa'); ?></span>
                </div>
                <div class="dk-stat">
                    <span class="dk-stat-value">24h</span>
                    <span class="dk-stat-label"><?php esc_html_e('Support réactif', 'digital-kappa'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="dk-story dk-section dk-bg-gray">
        <div class="dk-container">
            <div class="dk-story-grid">
                <div class="dk-story-content">
                    <h2><?php esc_html_e('Notre histoire', 'digital-kappa'); ?></h2>
                    <p><?php esc_html_e("Digital Kappa naît de l'envie de proposer des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.", 'digital-kappa'); ?></p>
                    <p><?php esc_html_e("Le projet vise à rendre l'accès aux outils digitaux plus rapide, plus clair et plus fiable. Contrairement aux marketplaces géantes où il est difficile de s'y retrouver, nous proposons une sélection organisée qui évite la confusion.", 'digital-kappa'); ?></p>
                    <p><?php esc_html_e("Notre mission est de vous faire gagner du temps en vous proposant des produits prêts à l'emploi, pensés pour être directement utilisables dans vos projets personnels ou professionnels.", 'digital-kappa'); ?></p>
                </div>
                <div class="dk-story-image">
                    <div class="dk-story-image-placeholder">
                        <svg viewBox="0 0 64 64" fill="none" stroke="rgba(255,255,255,0.8)" stroke-width="2">
                            <path d="M17 21c0-2 1.8-4 4-4h22c2.2 0 4 1.8 4 4v22c0 2.2-1.8 4-4 4H21c-2.2 0-4-1.8-4-4V21z"></path>
                            <circle cx="26" cy="29" r="4"></circle>
                            <circle cx="38" cy="29" r="4"></circle>
                            <path d="M26 42c0-3.3 2.7-6 6-6s6 2.7 6 6"></path>
                        </svg>
                        <p><?php esc_html_e('Notre équipe à votre service', 'digital-kappa'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="dk-values-section dk-section">
        <div class="dk-container">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2><?php esc_html_e('Nos valeurs', 'digital-kappa'); ?></h2>
                <p class="dk-text-muted"><?php esc_html_e('Ce qui nous guide au quotidien', 'digital-kappa'); ?></p>
            </div>

            <div class="dk-values-grid-about">
                <div class="dk-value-card">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Simplicité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Des produits faciles à comprendre et à utiliser, sans complexité inutile.', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-card">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Accessibilité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Des ressources accessibles à tous, quel que soit votre niveau.', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-card">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Qualité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e("Une sélection rigoureuse garantissant l'excellence de chaque produit.", 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-card">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Modernité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Des outils et designs à la pointe des tendances actuelles.', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-card">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Fiabilité', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Des produits testés et approuvés par notre communauté.', 'digital-kappa'); ?></p>
                </div>

                <div class="dk-value-card">
                    <div class="dk-value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3><?php esc_html_e('Satisfaction client', 'digital-kappa'); ?></h3>
                    <p><?php esc_html_e('Votre réussite est notre priorité absolue.', 'digital-kappa'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Us Different -->
    <section class="dk-different dk-section dk-bg-dark">
        <div class="dk-container">
            <h2 class="dk-text-center"><?php esc_html_e('Ce qui nous différencie', 'digital-kappa'); ?></h2>

            <div class="dk-different-list">
                <div class="dk-different-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <div>
                        <h3><?php esc_html_e('Téléchargement instantané', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e("Accédez immédiatement à vos produits dès l'achat, sans attente.", 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-different-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <div>
                        <h3><?php esc_html_e('Organisation claire et intuitive', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e('Trouvez facilement ce que vous cherchez grâce à notre système de catégorisation simple.', 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-different-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <div>
                        <h3><?php esc_html_e('Qualité constante', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e('Chaque produit est vérifié et validé selon nos standards élevés.', 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-different-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <div>
                        <h3><?php esc_html_e('Support dédié', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e('Une équipe disponible pour vous accompagner dans vos projets.', 'digital-kappa'); ?></p>
                    </div>
                </div>

                <div class="dk-different-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <div>
                        <h3><?php esc_html_e('Mises à jour gratuites', 'digital-kappa'); ?></h3>
                        <p><?php esc_html_e('Bénéficiez des améliorations et nouvelles fonctionnalités sans coût additionnel.', 'digital-kappa'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Statement -->
    <section class="dk-mission dk-section dk-bg-gray">
        <div class="dk-container">
            <div class="dk-mission-content">
                <h2><?php esc_html_e('À propos de Digital Kappa : Notre mission et nos valeurs', 'digital-kappa'); ?></h2>

                <div class="dk-mission-text">
                    <p><?php esc_html_e("Digital Kappa est bien plus qu'une simple marketplace de produits numériques. Nous aspirons à devenir le partenaire de confiance de tous les créateurs, développeurs et entrepreneurs qui souhaitent gagner du temps et se concentrer sur l'essentiel : la création de valeur.", 'digital-kappa'); ?></p>

                    <p><?php esc_html_e("Nous croyons fermement que l'accès aux ressources digitales de qualité ne devrait pas être un parcours du combattant. C'est pourquoi nous sélectionnons chaque produit avec soin, en veillant à ce qu'il réponde aux standards les plus élevés en termes de fonctionnalité, de design et d'utilisabilité.", 'digital-kappa'); ?></p>

                    <p><?php esc_html_e("L'innovation est au cœur de notre ADN. Nous restons constamment à l'affût des nouvelles tendances et technologies pour enrichir notre catalogue et vous proposer les outils les plus modernes et performants du marché.", 'digital-kappa'); ?></p>

                    <p><?php esc_html_e("Vous n'êtes pas qu'un simple client pour nous : vous faites partie de la communauté Digital Kappa. Votre réussite est notre réussite, et nous mettons tout en œuvre pour vous accompagner dans vos projets, avec un support technique réactif et une garantie satisfait ou remboursé de 14 jours.", 'digital-kappa'); ?></p>

                    <p><?php esc_html_e("Notre engagement est simple : vous fournir des produits digitaux de qualité, accessibles, modernes et fiables, pour que vous puissiez vous concentrer sur ce qui compte vraiment - la réalisation de vos ambitions.", 'digital-kappa'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php echo do_shortcode('[dk_cta title="Prêt à découvrir nos produits ?" description="Rejoignez la communauté Digital Kappa et accélérez vos projets" btn_text="Explorer le catalogue"]'); ?>

</main>

<?php
get_footer();
