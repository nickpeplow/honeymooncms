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
    ?>

    <section class="container m-auto">
        <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
            <div class="md:col-span-9 md:pr-5">
                <?php
                get_template_part('template-parts/homepage', 'introduction');
                get_template_part('template-parts/homepage', 'destination');
                get_template_part('template-parts/homepage', 'guide');
                get_template_part('template-parts/homepage', 'regions');
                get_template_part('template-parts/homepage', 'accomodation');
                get_template_part('template-parts/homepage', 'itineraries');
                get_template_part('template-parts/homepage', 'activities');
                get_template_part('template-parts/homepage', 'dining');
                get_template_part('template-parts/homepage', 'package');
                get_template_part('template-parts/homepage', 'other');
                get_template_part('template-parts/homepage', 'faq');
                get_template_part('template-parts/homepage', 'author'); 
                ?>
            </div>
			<div class="md:col-span-3 md:pl-3">
			   <?php
			   get_template_part('template-parts/homepage', 'sidebar');
			   ?>
			</div>
        </div>
    </section>

    <?php

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main>


<?php get_footer(); ?>