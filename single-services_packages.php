<?php

/**
 * Template Name: Single itineraries Template
 *
 * This is a custom page template.
 *
 */
get_header(); ?>

<main id="primary" class="site-main">

<section class="flex flex-col container m-auto">
      <div
        class="container mx-auto flex justify-center items-start flex-col py-5"
      >
        <h1 class="text-black font-bold text-left mb-3 mt-5 ">
          Bali Honeymoon Packages crafted with care ❤️
        </h1>
        <p class="written-by text-left text-a">  
          Last updated Jan 07, 2025 by
          <a class="text-tertiary underline font-bold" href="/about-us/">Olivia &amp; Dirk</a>, based on our 7 years in
          Bali. We can help with
          <a class="text-tertiary underline font-bold" href="/services/bali-honeymoon-packages/">honeymoon packages</a>,
          <a class="text-tertiary underline font-bold" href="/services/unique-experiences/">experiences</a> and our
          <a class="text-tertiary underline font-bold" href="/services/honeymoon-planning/">planning service</a>.
        </p>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud-honeymoon-guide.webp"
        class="rounded-lg w-full my-5"
      />
    </section>

 </main>

<?php get_footer(); ?>