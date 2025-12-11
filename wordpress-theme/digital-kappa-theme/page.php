<?php
/**
 * The template for displaying all pages
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('dk-page'); ?>>
            <?php if (!is_front_page()) : ?>
                <header class="dk-page-header dk-bg-gray">
                    <div class="dk-container">
                        <?php the_title('<h1 class="dk-page-title">', '</h1>'); ?>
                    </div>
                </header>
            <?php endif; ?>

            <div class="dk-page-content">
                <div class="dk-container">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'digital-kappa'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </div>
        </article>

        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
