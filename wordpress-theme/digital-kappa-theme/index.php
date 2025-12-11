<?php
/**
 * The main template file
 *
 * @package DigitalKappa
 */

get_header();
?>

<main id="primary" class="dk-main">
    <div class="dk-container">
        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header class="dk-page-header">
                    <h1 class="dk-page-title"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <div class="dk-posts-grid">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', get_post_type());
                endwhile;
                ?>
            </div>

            <?php
            the_posts_pagination(array(
                'prev_text' => __('Précédent', 'digital-kappa'),
                'next_text' => __('Suivant', 'digital-kappa'),
            ));
            ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
