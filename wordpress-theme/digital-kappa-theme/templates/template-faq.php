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
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
