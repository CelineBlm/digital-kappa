<?php
/**
 * Page Content for Elementor
 *
 * Contains the default HTML content for each page.
 * This content is inserted into WordPress when pages are created,
 * making it editable with Elementor.
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get default content for a page
 */
function dk_get_page_content($page_slug) {
    $contents = array(
        'accueil' => dk_get_home_content(),
        'faq' => dk_get_faq_content(),
        'comment-ca-marche' => dk_get_how_it_works_content(),
        'a-propos' => dk_get_about_content(),
        'cgv' => dk_get_cgv_content(),
        'mentions-legales' => dk_get_legal_content(),
        'politique-de-confidentialite' => dk_get_privacy_content(),
    );

    return isset($contents[$page_slug]) ? $contents[$page_slug] : '';
}

/**
 * Home page content
 */
function dk_get_home_content() {
    return '
<!-- Hero Section -->
<section class="dk-hero dk-bg-gray">
    <div class="dk-hero-container">
        <div class="dk-hero-grid">
            <div class="dk-hero-content">
                <div class="dk-badge dk-badge-white dk-hero-badge">
                    <span class="dk-badge-dot"></span>
                    <span>Lancement officiel - Nouveaux produits disponibles</span>
                </div>

                <h1 class="dk-hero-title">
                    <span class="dk-hero-title-line">Marketplace de</span>
                    <span class="dk-hero-title-line dk-text-gold">produits digitaux</span>
                </h1>

                <p class="dk-hero-description">
                    Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.
                </p>

                <div class="dk-hero-buttons">
                    <a href="/boutique/" class="dk-btn dk-btn-primary">Explorer les produits</a>
                    <a href="/comment-ca-marche/" class="dk-btn dk-btn-secondary">Comment ça marche</a>
                </div>
            </div>

            <div class="dk-hero-cards">
                <div class="dk-hero-blur"></div>
                <div class="dk-hero-card dk-hero-card-large">
                    <div class="dk-hero-card-image">
                        <div class="dk-hero-card-placeholder"></div>
                        <div class="dk-hero-card-overlay"></div>
                        <div class="dk-badge dk-badge-gold dk-hero-card-badge">Populaire</div>
                        <div class="dk-hero-card-info">
                            <h3>Applications mobiles</h3>
                            <p>Applications prêtes à l\'emploi</p>
                        </div>
                    </div>
                </div>
                <div class="dk-hero-cards-row">
                    <div class="dk-hero-card dk-hero-card-small">
                        <div class="dk-hero-card-image">
                            <div class="dk-hero-card-placeholder dk-hero-card-ebooks"></div>
                            <div class="dk-hero-card-overlay"></div>
                            <div class="dk-hero-card-info">
                                <h4>Ebooks</h4>
                                <p>Guides & formations</p>
                            </div>
                        </div>
                    </div>
                    <div class="dk-hero-card dk-hero-card-small">
                        <div class="dk-hero-card-image">
                            <div class="dk-hero-card-placeholder dk-hero-card-templates"></div>
                            <div class="dk-hero-card-overlay"></div>
                            <div class="dk-hero-card-info">
                                <h4>Templates</h4>
                                <p>Design & code</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Value Propositions -->
<section class="dk-values dk-section">
    <div class="dk-container">
        <div class="dk-section-header dk-text-center dk-mb-12">
            <h2>Pourquoi choisir Digital Kappa</h2>
            <p class="dk-text-muted">Une plateforme conçue pour vous offrir la meilleure expérience d\'achat de produits digitaux</p>
        </div>

        <div class="dk-values-grid">
            <div class="dk-value-item dk-text-center">
                <div class="dk-value-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                        <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                        <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                        <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                    </svg>
                </div>
                <h3>Simplicité</h3>
                <p>Interface intuitive pour trouver rapidement ce dont vous avez besoin</p>
            </div>

            <div class="dk-value-item dk-text-center">
                <div class="dk-value-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Fiabilité</h3>
                <p>Produits vérifiés et transactions sécurisées</p>
            </div>

            <div class="dk-value-item dk-text-center">
                <div class="dk-value-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <h3>Rapidité</h3>
                <p>Achat en un clic, téléchargement instantané</p>
            </div>

            <div class="dk-value-item dk-text-center">
                <div class="dk-value-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#D2A30B" stroke-width="2">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                    </svg>
                </div>
                <h3>Support</h3>
                <p>Assistance disponible pour tous vos achats</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="dk-products-section dk-section dk-bg-gradient">
    <div class="dk-container">
        <div class="dk-section-header dk-text-center dk-mb-12">
            <h2>Découvrez nos produits</h2>
            <p class="dk-text-muted">Une sélection de produits digitaux de haute qualité pour développeurs et créateurs</p>
        </div>

        <div class="dk-products-grid">
            [dk_products limit="3"]
        </div>

        <div class="dk-text-center dk-mt-8">
            <a href="/boutique/" class="dk-btn dk-btn-primary">
                Voir tous les produits
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dk-icon-arrow">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="dk-categories dk-section">
    <div class="dk-container">
        <div class="dk-section-header dk-text-center dk-mb-12">
            <h2>Catégories de produits</h2>
            <p class="dk-text-muted">Explorez notre sélection organisée de produits digitaux dans trois catégories principales</p>
        </div>

        <div class="dk-categories-grid">
            <div class="dk-category-card">
                <div class="dk-category-icon dk-category-icon-blue">
                    <svg viewBox="0 0 28 28" fill="none" stroke="#155DFC" stroke-width="2.33">
                        <rect x="4.67" y="2.33" width="18.67" height="23.33" rx="2.33"></rect>
                        <line x1="14" y1="21" x2="14.01" y2="21"></line>
                    </svg>
                </div>
                <h3>Applications mobiles</h3>
                <p>Apps prêtes à l\'emploi pour iOS et Android</p>
                <a href="/categorie-produit/application/" class="dk-category-link">
                    Explorer
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </div>

            <div class="dk-category-card">
                <div class="dk-category-icon dk-category-icon-green">
                    <svg viewBox="0 0 28 28" fill="none" stroke="#00A63E" stroke-width="2.33">
                        <line x1="14" y1="8.17" x2="14" y2="24.5"></line>
                        <path d="M21 15.17L14 8.17 7 15.17"></path>
                        <path d="M3.5 8.17C3.5 5.5 5.5 3.5 8.17 3.5H19.83C22.5 3.5 24.5 5.5 24.5 8.17"></path>
                    </svg>
                </div>
                <h3>Ebooks</h3>
                <p>Guides et formations pour développer vos compétences</p>
                <a href="/categorie-produit/ebook/" class="dk-category-link">
                    Explorer
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </div>

            <div class="dk-category-card">
                <div class="dk-category-icon dk-category-icon-purple">
                    <svg viewBox="0 0 28 28" fill="none" stroke="#9810FA" stroke-width="2.33">
                        <rect x="3.5" y="3.5" width="21" height="21" rx="2.33"></rect>
                        <line x1="3.5" y1="10.5" x2="24.5" y2="10.5"></line>
                        <line x1="10.5" y1="24.5" x2="10.5" y2="10.5"></line>
                    </svg>
                </div>
                <h3>Templates</h3>
                <p>Designs professionnels pour vos projets web</p>
                <a href="/categorie-produit/template/" class="dk-category-link">
                    Explorer
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="dk-faq dk-section">
    <div class="dk-container">
        <div class="dk-faq-wrapper">
            <div class="dk-section-header dk-text-center dk-mb-12">
                <h2>Questions fréquentes</h2>
                <p class="dk-text-muted">Tout ce que vous devez savoir sur Digital Kappa</p>
            </div>

            [dk_faq limit="3"]
        </div>
    </div>
</section>

<!-- CTA Section -->
[dk_cta]
';
}

/**
 * FAQ page content
 */
function dk_get_faq_content() {
    return '
<!-- Hero Section -->
<section class="dk-page-hero dk-bg-gray">
    <div class="dk-container">
        <div class="dk-page-hero-content dk-text-center">
            <div class="dk-badge dk-badge-gold">
                <span>Support</span>
            </div>
            <h1>Foire aux questions</h1>
            <p class="dk-hero-description">
                Retrouvez les réponses à toutes vos questions sur Digital Kappa, nos produits et notre fonctionnement.
            </p>
        </div>
    </div>
</section>

<!-- FAQ Content -->
<section class="dk-section">
    <div class="dk-container">
        <div class="dk-faq-categories">
            <!-- General Questions -->
            <div class="dk-faq-category">
                <h2 class="dk-faq-category-title">Questions générales</h2>
                <div class="dk-faq-list">
                    <div class="dk-faq-item">
                        <button class="dk-faq-question" aria-expanded="false">
                            <span>Qu\'est-ce que Digital Kappa ?</span>
                            <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dk-faq-answer">
                            <p>Digital Kappa est une marketplace spécialisée dans les produits numériques de qualité. Nous proposons une sélection d\'applications mobiles, d\'ebooks et de templates conçus pour aider les créateurs, développeurs et entrepreneurs à gagner du temps et à optimiser leurs projets.</p>
                        </div>
                    </div>

                    <div class="dk-faq-item">
                        <button class="dk-faq-question" aria-expanded="false">
                            <span>Comment fonctionne l\'achat sur Digital Kappa ?</span>
                            <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dk-faq-answer">
                            <p>C\'est simple : parcourez notre catalogue, choisissez votre produit, cliquez sur "Acheter maintenant", et procédez au paiement sécurisé. Pas besoin de créer un compte, un simple email suffit. Vous recevrez immédiatement votre produit par email.</p>
                        </div>
                    </div>

                    <div class="dk-faq-item">
                        <button class="dk-faq-question" aria-expanded="false">
                            <span>Les produits sont-ils remboursables ?</span>
                            <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dk-faq-answer">
                            <p>Oui, nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits. Si un produit ne correspond pas à vos attentes, contactez notre support pour obtenir un remboursement.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Questions -->
            <div class="dk-faq-category">
                <h2 class="dk-faq-category-title">Paiement & téléchargement</h2>
                <div class="dk-faq-list">
                    <div class="dk-faq-item">
                        <button class="dk-faq-question" aria-expanded="false">
                            <span>Quels moyens de paiement acceptez-vous ?</span>
                            <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dk-faq-answer">
                            <p>Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) via notre partenaire de paiement sécurisé Stripe. Le paiement est 100% sécurisé.</p>
                        </div>
                    </div>

                    <div class="dk-faq-item">
                        <button class="dk-faq-question" aria-expanded="false">
                            <span>Comment télécharger mon produit après l\'achat ?</span>
                            <svg class="dk-faq-icon" viewBox="0 0 20 20" fill="none" stroke="#d2a30b" stroke-width="1.5">
                                <path d="M6 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="dk-faq-answer">
                            <p>Après le paiement, vous recevez immédiatement un email avec le(s) lien(s) de téléchargement. Ces liens sont valables à vie, vous pouvez donc télécharger votre produit quand vous le souhaitez.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="dk-contact-section dk-section dk-bg-gray">
    <div class="dk-container">
        <div class="dk-section-header dk-text-center dk-mb-12">
            <h2>Vous n\'avez pas trouvé votre réponse ?</h2>
            <p class="dk-text-muted">Notre équipe support est là pour vous aider</p>
        </div>
        <div class="dk-text-center">
            <a href="mailto:support@digitalkappa.com" class="dk-btn dk-btn-primary">Contacter le support</a>
        </div>
    </div>
</section>

[dk_cta title="Prêt à explorer nos produits ?" description="Découvrez notre sélection de produits digitaux de qualité" btn_text="Voir les produits"]
';
}

/**
 * How it works page content
 */
function dk_get_how_it_works_content() {
    return '
<!-- Hero Section -->
<section class="dk-page-hero dk-bg-gray">
    <div class="dk-container">
        <div class="dk-page-hero-content dk-text-center">
            <div class="dk-badge dk-badge-white">
                <span class="dk-badge-dot"></span>
                <span>Simple et sécurisé</span>
            </div>
            <h1>Comment ça marche ?</h1>
            <p class="dk-hero-description">
                Achetez et téléchargez vos produits digitaux en quelques clics. Notre processus simplifié vous garantit un accès immédiat à vos achats.
            </p>
        </div>
    </div>
</section>

<!-- Process Steps -->
<section class="dk-steps dk-section">
    <div class="dk-container">
        <div class="dk-steps-grid">
            <div class="dk-step">
                <div class="dk-step-number">1</div>
                <h3>Parcourez</h3>
                <p>Explorez notre catalogue de produits digitaux : applications, ebooks et templates. Utilisez les filtres pour trouver exactement ce dont vous avez besoin.</p>
            </div>

            <div class="dk-step">
                <div class="dk-step-number">2</div>
                <h3>Achetez en un clic</h3>
                <p>Pas de compte requis. Cliquez sur "Acheter maintenant", renseignez votre email et réglez en toute sécurité via notre système de paiement sécurisé.</p>
            </div>

            <div class="dk-step">
                <div class="dk-step-number">3</div>
                <h3>Téléchargez</h3>
                <p>Accédez immédiatement à votre produit après le paiement. Recevez un email de confirmation avec un lien de téléchargement valable à vie.</p>
            </div>
        </div>
    </div>
</section>

<!-- Security Section -->
<section class="dk-security dk-section dk-bg-gray">
    <div class="dk-container">
        <div class="dk-section-header dk-text-center dk-mb-12">
            <h2>Vos achats en toute sécurité</h2>
            <p class="dk-text-muted">Nous prenons la sécurité de vos données et de vos paiements très au sérieux.</p>
        </div>

        <div class="dk-security-grid">
            <div class="dk-security-card">
                <div class="dk-security-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3>Cryptage SSL</h3>
                <p>Toutes les transactions sont sécurisées</p>
            </div>

            <div class="dk-security-card">
                <div class="dk-security-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                        <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                </div>
                <h3>Paiement sécurisé</h3>
                <p>Nous ne stockons aucune donnée bancaire</p>
            </div>

            <div class="dk-security-card">
                <div class="dk-security-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </div>
                <h3>Accès à vie</h3>
                <p>Téléchargez vos produits quand vous voulez</p>
            </div>
        </div>
    </div>
</section>

[dk_cta]
';
}

/**
 * About page content
 */
function dk_get_about_content() {
    return '
<!-- Hero Section -->
<section class="dk-about-hero dk-section">
    <div class="dk-container">
        <div class="dk-about-hero-content dk-text-center">
            <div class="dk-badge dk-badge-gold">
                <span>À propos de nous</span>
            </div>
            <h1>Digital Kappa, votre partenaire digital</h1>
            <p class="dk-hero-description">
                Nous proposons des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.
            </p>
        </div>

        <!-- Stats -->
        <div class="dk-about-stats">
            <div class="dk-stat">
                <span class="dk-stat-value">2026</span>
                <span class="dk-stat-label">Année de lancement</span>
            </div>
            <div class="dk-stat">
                <span class="dk-stat-value">100%</span>
                <span class="dk-stat-label">Engagement qualité</span>
            </div>
            <div class="dk-stat">
                <span class="dk-stat-value">14 jours</span>
                <span class="dk-stat-label">Garantie satisfait ou remboursé</span>
            </div>
            <div class="dk-stat">
                <span class="dk-stat-value">24h</span>
                <span class="dk-stat-label">Support réactif</span>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="dk-story dk-section dk-bg-gray">
    <div class="dk-container">
        <div class="dk-story-content">
            <h2>Notre histoire</h2>
            <p>Digital Kappa naît de l\'envie de proposer des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.</p>
            <p>Le projet vise à rendre l\'accès aux outils digitaux plus rapide, plus clair et plus fiable. Contrairement aux marketplaces géantes où il est difficile de s\'y retrouver, nous proposons une sélection organisée qui évite la confusion.</p>
            <p>Notre mission est de vous faire gagner du temps en vous proposant des produits prêts à l\'emploi, pensés pour être directement utilisables dans vos projets personnels ou professionnels.</p>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="dk-values-section dk-section">
    <div class="dk-container">
        <div class="dk-section-header dk-text-center dk-mb-12">
            <h2>Nos valeurs</h2>
            <p class="dk-text-muted">Ce qui nous guide au quotidien</p>
        </div>

        <div class="dk-values-grid-about">
            <div class="dk-value-card">
                <h3>Simplicité</h3>
                <p>Des produits faciles à comprendre et à utiliser, sans complexité inutile.</p>
            </div>

            <div class="dk-value-card">
                <h3>Accessibilité</h3>
                <p>Des ressources accessibles à tous, quel que soit votre niveau.</p>
            </div>

            <div class="dk-value-card">
                <h3>Qualité</h3>
                <p>Une sélection rigoureuse garantissant l\'excellence de chaque produit.</p>
            </div>

            <div class="dk-value-card">
                <h3>Modernité</h3>
                <p>Des outils et designs à la pointe des tendances actuelles.</p>
            </div>

            <div class="dk-value-card">
                <h3>Fiabilité</h3>
                <p>Des produits testés et approuvés par notre communauté.</p>
            </div>

            <div class="dk-value-card">
                <h3>Satisfaction client</h3>
                <p>Votre réussite est notre priorité absolue.</p>
            </div>
        </div>
    </div>
</section>

[dk_cta title="Prêt à découvrir nos produits ?" description="Rejoignez la communauté Digital Kappa et accélérez vos projets" btn_text="Explorer le catalogue"]
';
}

/**
 * CGV page content
 */
function dk_get_cgv_content() {
    return '
<!-- Hero Section -->
<section class="dk-page-hero dk-bg-gray">
    <div class="dk-container">
        <div class="dk-page-hero-content dk-text-center">
            <div class="dk-badge dk-badge-gold">
                <span>Légal</span>
            </div>
            <h1>Conditions générales de vente</h1>
            <p class="dk-text-muted">Dernière mise à jour : 1er décembre 2024</p>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-legal-content dk-section">
    <div class="dk-container">
        <div class="dk-legal-wrapper">
            <div class="dk-legal-section">
                <h2>1. Objet</h2>
                <p>Les présentes Conditions Générales de Vente (CGV) régissent les ventes de produits numériques proposés par Digital Kappa sur le site digitalkappa.com.</p>
            </div>

            <div class="dk-legal-section">
                <h2>2. Produits</h2>
                <p>Digital Kappa commercialise des produits numériques téléchargeables : applications mobiles, ebooks, templates et autres ressources digitales.</p>
            </div>

            <div class="dk-legal-section">
                <h2>3. Prix</h2>
                <p>Les prix sont indiqués en euros (€) TTC. Digital Kappa se réserve le droit de modifier ses prix à tout moment, mais les produits seront facturés au prix en vigueur lors de la validation de la commande.</p>
            </div>

            <div class="dk-legal-section">
                <h2>4. Commande</h2>
                <p>La commande est validée après confirmation du paiement. Un email de confirmation est envoyé à l\'adresse fournie lors de l\'achat.</p>
            </div>

            <div class="dk-legal-section">
                <h2>5. Paiement</h2>
                <p>Le paiement s\'effectue par carte bancaire via notre prestataire sécurisé Stripe. Les données bancaires ne sont pas stockées sur nos serveurs.</p>
            </div>

            <div class="dk-legal-section">
                <h2>6. Livraison</h2>
                <p>Les produits numériques sont livrés immédiatement après validation du paiement, par email contenant les liens de téléchargement.</p>
            </div>

            <div class="dk-legal-section">
                <h2>7. Droit de rétractation</h2>
                <p>Conformément à l\'article L221-28 du Code de la consommation, le droit de rétractation ne peut être exercé pour les contenus numériques téléchargés. Cependant, Digital Kappa offre une garantie satisfait ou remboursé de 14 jours.</p>
            </div>

            <div class="dk-legal-section">
                <h2>8. Contact</h2>
                <p>Pour toute question, contactez-nous à : contact@digitalkappa.com</p>
            </div>
        </div>
    </div>
</section>
';
}

/**
 * Legal notice page content
 */
function dk_get_legal_content() {
    return '
<!-- Hero Section -->
<section class="dk-page-hero dk-bg-gray">
    <div class="dk-container">
        <div class="dk-page-hero-content dk-text-center">
            <div class="dk-badge dk-badge-gold">
                <span>Légal</span>
            </div>
            <h1>Mentions légales</h1>
            <p class="dk-text-muted">Informations légales obligatoires</p>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-legal-content dk-section">
    <div class="dk-container">
        <div class="dk-legal-wrapper">
            <div class="dk-legal-section">
                <h2>1. Éditeur du site</h2>
                <p>Le site digitalkappa.com est édité par Digital Kappa.</p>
                <p>Adresse : France</p>
                <p>Email : contact@digitalkappa.com</p>
            </div>

            <div class="dk-legal-section">
                <h2>2. Hébergement</h2>
                <p>Le site est hébergé par un prestataire professionnel garantissant la sécurité et la disponibilité du service.</p>
            </div>

            <div class="dk-legal-section">
                <h2>3. Propriété intellectuelle</h2>
                <p>L\'ensemble du contenu du site (textes, images, logos, etc.) est protégé par le droit d\'auteur. Toute reproduction non autorisée est interdite.</p>
            </div>

            <div class="dk-legal-section">
                <h2>4. Données personnelles</h2>
                <p>Les données collectées sont utilisées uniquement pour le traitement des commandes et l\'amélioration du service. Consultez notre Politique de Confidentialité pour plus de détails.</p>
            </div>

            <div class="dk-legal-section">
                <h2>5. Contact</h2>
                <p>Pour toute question concernant ces mentions légales, contactez-nous à : contact@digitalkappa.com</p>
            </div>
        </div>
    </div>
</section>
';
}

/**
 * Privacy policy page content
 */
function dk_get_privacy_content() {
    return '
<!-- Hero Section -->
<section class="dk-page-hero dk-bg-gray">
    <div class="dk-container">
        <div class="dk-page-hero-content dk-text-center">
            <div class="dk-badge dk-badge-gold">
                <span>Vie privée</span>
            </div>
            <h1>Politique de confidentialité</h1>
            <p class="dk-text-muted">Dernière mise à jour : 1er décembre 2024</p>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-legal-content dk-section">
    <div class="dk-container">
        <div class="dk-legal-wrapper">
            <div class="dk-legal-section">
                <h2>1. Introduction</h2>
                <p>Digital Kappa s\'engage à protéger la vie privée de ses utilisateurs. Cette politique décrit comment nous collectons, utilisons et protégeons vos données personnelles.</p>
            </div>

            <div class="dk-legal-section">
                <h2>2. Données collectées</h2>
                <p>Nous collectons les données suivantes :</p>
                <ul>
                    <li>Adresse email (pour l\'envoi des produits et la communication)</li>
                    <li>Nom et prénom (pour la facturation)</li>
                    <li>Données de navigation (cookies techniques)</li>
                </ul>
            </div>

            <div class="dk-legal-section">
                <h2>3. Utilisation des données</h2>
                <p>Vos données sont utilisées pour :</p>
                <ul>
                    <li>Traiter et livrer vos commandes</li>
                    <li>Vous envoyer les confirmations d\'achat</li>
                    <li>Vous contacter en cas de problème</li>
                    <li>Améliorer nos services</li>
                </ul>
            </div>

            <div class="dk-legal-section">
                <h2>4. Protection des données</h2>
                <p>Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles pour protéger vos données contre tout accès non autorisé.</p>
            </div>

            <div class="dk-legal-section">
                <h2>5. Vos droits</h2>
                <p>Conformément au RGPD, vous disposez d\'un droit d\'accès, de rectification, de suppression et de portabilité de vos données. Pour exercer ces droits, contactez-nous à : privacy@digitalkappa.com</p>
            </div>

            <div class="dk-legal-section">
                <h2>6. Cookies</h2>
                <p>Nous utilisons des cookies techniques nécessaires au fonctionnement du site. Aucun cookie publicitaire n\'est utilisé sans votre consentement.</p>
            </div>

            <div class="dk-legal-section">
                <h2>7. Contact</h2>
                <p>Pour toute question concernant cette politique, contactez-nous à : privacy@digitalkappa.com</p>
            </div>
        </div>
    </div>
</section>
';
}
