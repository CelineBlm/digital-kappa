/**
 * Digital Kappa Theme - Main JavaScript
 * Handles animations, interactions, and dynamic functionality
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initFaqAccordion();
        initSmoothScroll();
        initProductGallery();
        initTabs();
        initAnimations();
        initSearchToggle();
        initBackToTop();
        initLiveSearch();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.getElementById('dk-menu-toggle');
        const mobileMenu = document.getElementById('dk-mobile-menu');
        const closeMenu = document.getElementById('dk-close-menu');
        const body = document.body;

        if (!menuToggle || !mobileMenu) return;

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            body.classList.add('menu-open');
        });

        if (closeMenu) {
            closeMenu.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                body.classList.remove('menu-open');
            });
        }

        // Close on outside click
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                body.classList.remove('menu-open');
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                body.classList.remove('menu-open');
            }
        });
    }

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.dk-faq-item');

        faqItems.forEach(function(item) {
            const question = item.querySelector('.dk-faq-question');
            const answer = item.querySelector('.dk-faq-answer');

            if (!question || !answer) return;

            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('active');

                // Close all other items in the same category
                const category = item.closest('.dk-faq-category');
                if (category) {
                    category.querySelectorAll('.dk-faq-item.active').forEach(function(openItem) {
                        if (openItem !== item) {
                            openItem.classList.remove('active');
                            openItem.querySelector('.dk-faq-answer').style.maxHeight = null;
                        }
                    });
                }

                // Toggle current item
                if (isOpen) {
                    item.classList.remove('active');
                    answer.style.maxHeight = null;
                } else {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });

        // Open first item by default
        const firstItem = document.querySelector('.dk-faq-item');
        if (firstItem) {
            const firstAnswer = firstItem.querySelector('.dk-faq-answer');
            firstItem.classList.add('active');
            if (firstAnswer) {
                firstAnswer.style.maxHeight = firstAnswer.scrollHeight + 'px';
            }
        }
    }

    /**
     * Smooth Scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');

                if (targetId === '#') return;

                const target = document.querySelector(targetId);

                if (target) {
                    e.preventDefault();

                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Product Gallery (Single Product Page)
     */
    function initProductGallery() {
        const thumbnails = document.querySelectorAll('.dk-thumbnail');
        const mainImage = document.getElementById('dk-main-product-image');

        if (!thumbnails.length || !mainImage) return;

        thumbnails.forEach(function(thumbnail) {
            thumbnail.addEventListener('click', function() {
                const newSrc = this.getAttribute('data-image');

                // Update main image with fade effect
                mainImage.style.opacity = '0';

                setTimeout(function() {
                    mainImage.src = newSrc;
                    mainImage.style.opacity = '1';
                }, 200);

                // Update active state
                thumbnails.forEach(function(t) {
                    t.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    }

    /**
     * Tabs (Product Details)
     */
    function initTabs() {
        const tabButtons = document.querySelectorAll('.dk-tab-btn');
        const tabPanels = document.querySelectorAll('.dk-tab-panel');

        if (!tabButtons.length || !tabPanels.length) return;

        tabButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');

                // Update buttons
                tabButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');

                // Update panels
                tabPanels.forEach(function(panel) {
                    panel.classList.remove('active');
                    if (panel.id === targetTab) {
                        panel.classList.add('active');
                    }
                });
            });
        });
    }

    /**
     * Scroll Animations
     */
    function initAnimations() {
        const animatedElements = document.querySelectorAll(
            '.dk-value-card, .dk-product-card, .dk-category-card, ' +
            '.dk-step-card, .dk-faq-item, .dk-stat-item, .dk-feature-card'
        );

        if (!animatedElements.length) return;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('dk-animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(function(element) {
            element.classList.add('dk-animate-on-scroll');
            observer.observe(element);
        });

        // Add CSS for animations
        if (!document.getElementById('dk-animation-styles')) {
            const style = document.createElement('style');
            style.id = 'dk-animation-styles';
            style.textContent = `
                .dk-animate-on-scroll {
                    opacity: 0;
                    transform: translateY(30px);
                    transition: opacity 0.6s ease, transform 0.6s ease;
                }
                .dk-animate-on-scroll.dk-animated {
                    opacity: 1;
                    transform: translateY(0);
                }
                .dk-value-card.dk-animate-on-scroll { transition-delay: 0s; }
                .dk-value-card.dk-animate-on-scroll:nth-child(2) { transition-delay: 0.1s; }
                .dk-value-card.dk-animate-on-scroll:nth-child(3) { transition-delay: 0.2s; }
                .dk-value-card.dk-animate-on-scroll:nth-child(4) { transition-delay: 0.3s; }
                .dk-product-card.dk-animate-on-scroll:nth-child(1) { transition-delay: 0s; }
                .dk-product-card.dk-animate-on-scroll:nth-child(2) { transition-delay: 0.1s; }
                .dk-product-card.dk-animate-on-scroll:nth-child(3) { transition-delay: 0.2s; }
                .dk-product-card.dk-animate-on-scroll:nth-child(4) { transition-delay: 0.3s; }
            `;
            document.head.appendChild(style);
        }
    }

    /**
     * Search Toggle (Mobile)
     */
    function initSearchToggle() {
        const searchToggle = document.getElementById('dk-search-toggle');
        const searchForm = document.getElementById('dk-search-form');

        if (!searchToggle || !searchForm) return;

        searchToggle.addEventListener('click', function() {
            searchForm.classList.toggle('active');
            if (searchForm.classList.contains('active')) {
                searchForm.querySelector('input').focus();
            }
        });
    }

    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const backToTop = document.getElementById('dk-back-to-top');

        if (!backToTop) {
            // Create button if it doesn't exist
            const button = document.createElement('button');
            button.id = 'dk-back-to-top';
            button.className = 'dk-back-to-top';
            button.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
            `;
            button.setAttribute('aria-label', 'Retour en haut');
            document.body.appendChild(button);

            // Add styles
            if (!document.getElementById('dk-back-to-top-styles')) {
                const style = document.createElement('style');
                style.id = 'dk-back-to-top-styles';
                style.textContent = `
                    .dk-back-to-top {
                        position: fixed;
                        bottom: 2rem;
                        right: 2rem;
                        width: 48px;
                        height: 48px;
                        border-radius: 50%;
                        background: var(--dk-gold, #d2a30b);
                        color: white;
                        border: none;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        opacity: 0;
                        visibility: hidden;
                        transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
                        z-index: 999;
                        box-shadow: 0 4px 12px rgba(210, 163, 11, 0.4);
                    }
                    .dk-back-to-top:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 6px 16px rgba(210, 163, 11, 0.5);
                    }
                    .dk-back-to-top.visible {
                        opacity: 1;
                        visibility: visible;
                    }
                    .dk-back-to-top svg {
                        width: 24px;
                        height: 24px;
                    }
                `;
                document.head.appendChild(style);
            }

            setupBackToTop(button);
        } else {
            setupBackToTop(backToTop);
        }
    }

    function setupBackToTop(button) {
        // Show/hide on scroll
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                button.classList.add('visible');
            } else {
                button.classList.remove('visible');
            }
        });

        // Scroll to top on click
        button.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Live Search Functionality
     */
    function initLiveSearch() {
        const searchInputs = document.querySelectorAll('.dk-search-input');

        searchInputs.forEach(function(input) {
            const form = input.closest('form');
            let searchTimeout;
            let resultsContainer;

            // Create results container
            resultsContainer = document.createElement('div');
            resultsContainer.className = 'dk-search-results';
            resultsContainer.style.display = 'none';
            form.appendChild(resultsContainer);

            // Add styles for search results
            if (!document.getElementById('dk-live-search-styles')) {
                const style = document.createElement('style');
                style.id = 'dk-live-search-styles';
                style.textContent = `
                    .dk-search-form {
                        position: relative;
                    }
                    .dk-search-results {
                        position: absolute;
                        top: 100%;
                        left: 0;
                        right: 0;
                        background: white;
                        border: 1px solid var(--dk-gray-200, #e5e7eb);
                        border-radius: 0.5rem;
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                        z-index: 100;
                        margin-top: 0.5rem;
                        max-height: 400px;
                        overflow-y: auto;
                    }
                    .dk-search-result-item {
                        display: flex;
                        align-items: center;
                        gap: 1rem;
                        padding: 0.75rem 1rem;
                        text-decoration: none;
                        color: inherit;
                        transition: background-color 0.2s;
                        border-bottom: 1px solid var(--dk-gray-100, #f3f4f6);
                    }
                    .dk-search-result-item:last-child {
                        border-bottom: none;
                    }
                    .dk-search-result-item:hover {
                        background-color: var(--dk-gray-50, #f9fafb);
                    }
                    .dk-search-result-image {
                        width: 48px;
                        height: 48px;
                        border-radius: 0.5rem;
                        object-fit: cover;
                        background: var(--dk-gray-100, #f3f4f6);
                    }
                    .dk-search-result-info {
                        flex: 1;
                        min-width: 0;
                    }
                    .dk-search-result-title {
                        font-size: 0.875rem;
                        color: var(--dk-dark, #1a1a1a);
                        margin: 0 0 0.25rem 0;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }
                    .dk-search-result-price {
                        font-size: 0.875rem;
                        color: var(--dk-gold, #d2a30b);
                        font-weight: 600;
                    }
                    .dk-search-no-results,
                    .dk-search-loading {
                        padding: 1.5rem;
                        text-align: center;
                        color: var(--dk-text-muted, #6b7280);
                    }
                    .dk-search-view-all {
                        display: block;
                        padding: 0.75rem 1rem;
                        text-align: center;
                        background: var(--dk-gray-50, #f9fafb);
                        color: var(--dk-gold, #d2a30b);
                        text-decoration: none;
                        font-weight: 500;
                        font-size: 0.875rem;
                    }
                    .dk-search-view-all:hover {
                        background: rgba(210, 163, 11, 0.1);
                    }
                `;
                document.head.appendChild(style);
            }

            // Input event listener
            input.addEventListener('input', function() {
                const query = this.value.trim();

                clearTimeout(searchTimeout);

                if (query.length < 2) {
                    resultsContainer.style.display = 'none';
                    return;
                }

                // Show loading
                resultsContainer.innerHTML = '<div class="dk-search-loading">Recherche...</div>';
                resultsContainer.style.display = 'block';

                // Debounce search
                searchTimeout = setTimeout(function() {
                    performSearch(query, resultsContainer);
                }, 300);
            });

            // Close on click outside
            document.addEventListener('click', function(e) {
                if (!form.contains(e.target)) {
                    resultsContainer.style.display = 'none';
                }
            });

            // Close on escape
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    resultsContainer.style.display = 'none';
                }
            });
        });
    }

    function performSearch(query, container) {
        // Use WooCommerce REST API or WordPress AJAX
        const ajaxUrl = typeof dk_ajax !== 'undefined' ? dk_ajax.ajax_url : '/wp-admin/admin-ajax.php';

        fetch(ajaxUrl + '?action=dk_live_search&s=' + encodeURIComponent(query))
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success && data.data.products && data.data.products.length > 0) {
                    let html = '';
                    data.data.products.forEach(function(product) {
                        html += `
                            <a href="${product.url}" class="dk-search-result-item">
                                <img src="${product.image}" alt="${product.title}" class="dk-search-result-image">
                                <div class="dk-search-result-info">
                                    <h4 class="dk-search-result-title">${product.title}</h4>
                                    <span class="dk-search-result-price">${product.price}</span>
                                </div>
                            </a>
                        `;
                    });

                    // Add view all link
                    html += `<a href="/?s=${encodeURIComponent(query)}&post_type=product" class="dk-search-view-all">Voir tous les résultats</a>`;

                    container.innerHTML = html;
                } else {
                    container.innerHTML = '<div class="dk-search-no-results">Aucun produit trouvé</div>';
                }
            })
            .catch(function() {
                container.innerHTML = '<div class="dk-search-no-results">Erreur de recherche</div>';
            });
    }

    /**
     * WooCommerce: Update cart fragments
     */
    if (typeof jQuery !== 'undefined') {
        jQuery(document.body).on('added_to_cart', function() {
            // Handle cart updates
        });

        jQuery(document.body).on('checkout_error', function() {
            // Scroll to error
            jQuery('html, body').animate({
                scrollTop: jQuery('.woocommerce-notices-wrapper').offset().top - 100
            }, 500);
        });
    }

})();
