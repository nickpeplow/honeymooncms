<?php

/**
 * Template Name: Home Page Template
 *
 * This is a custom page template.
 *
 */
get_header(); ?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/homepage', 'hero');
        get_template_part('template-parts/homepage', 'about');
        get_template_part('template-parts/homepage', 'services');
        get_template_part('template-parts/homepage', 'testimonials');
        get_template_part('template-parts/homepage', 'statistics');
        get_template_part('template-parts/homepage', 'locations');
        get_template_part('template-parts/homepage', 'call-to-action');
        get_template_part('template-parts/homepage', 'features');
        get_template_part('template-parts/homepage', 'pricing');
        get_template_part('template-parts/homepage', 'contact');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php get_footer(); ?>