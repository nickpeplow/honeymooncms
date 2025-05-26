<?php

/**
 * Template Name:  Beach Club
 *
 * This is a custom page template.
 *
 */
get_header(); ?>

<div class="bg-Purple px-2 py-1">
  <div class="flex overflow-x-auto justify-center">
    
    <!-- Tab 1 - Active -->
    <a href="/blog/itineraries/7-day-classic-bali-itinerary" class="bg-lightBlack text-white px-2 py-1 rounded shadow">
      <div class="font-bold text-sm leading-normal text-center">Beach Clubs</div>
    </a>

    <!-- Tab 2 -->
    <a href="/blog/itineraries/7-day-away-from-the-crowds-itinerary" class="text-white px-2 py-1 hover:bg-lightBlack rounded m-0">
      <div class="font-bold text-sm leading-normal text-center">Romantic Activities</div>
    </a>

    <!-- Tab 3 -->
    <a href="/blog/itineraries/hipster-itinerary" class="text-white px-2 py-1 hover:bg-lightBlack rounded m-0">
      <div class="font-bold text-sm leading-normal text-center">Day trips</div>
    </a>

    <!-- Tab 4 -->
    <a href="/blog/itineraries/relaxed-itinerary" class="text-white px-2 py-1 hover:bg-lightBlack rounded m-0">
      <div class="font-bold text-sm leading-normal text-center">Fine Dining</div>
    </a>

    <!-- Tab 5 -->
    <a href="/blog/itineraries/bali-highlights" class="text-white px-2 py-1 hover:bg-lightBlack rounded m-0">
      <div class="font-bold text-sm leading-normal text-center">Speakeasy Bars</div>
    </a>

    <!-- Tab 6 -->
    <a href="/blog/itineraries/diving-itinerary" class="text-white px-2 py-1 hover:bg-lightBlack rounded m-0">
      <div class="font-bold text-sm leading-normal text-center">Sunset Spots</div>
    </a>

    <!-- Tab 7 -->
    <a href="/blog/itineraries/luxury-itinerary" class="text-white px-2 py-1 hover:bg-lightBlack rounded m-0">
      <div class="font-bold text-sm leading-normal text-center">Wellness</div>
    </a>

  </div>
</div>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/Explore/explore', 'beachclub');
    ?>

    <?php

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; 
    ?>

</main>


<?php get_footer(); ?>