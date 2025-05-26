<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>

<section class="flex flex-col container m-auto">
      <div
        class="container mx-auto flex justify-center items-start flex-col py-5"
      >
        <h1 class="text-black font-bold text-left mb-3 mt-5 ">
          Our 10 Favorite Bali Day Trips and Guided Tours in 2025.
        </h1>
        <p class="written-by text-left text-a">  
          Last updated Feb 17, 2025 by
          <a class="text-tertiary underline font-bold" href="/about-us/">Olivia &amp; Dirk</a>, based on our 7 years in
          Bali. We can help with
          <a class="text-tertiary underline font-bold" href="/services/bali-honeymoon-packages/">honeymoon packages</a>,
          <a class="text-tertiary underline font-bold" href="/services/unique-experiences/">experiences</a> and our
          <a class="text-tertiary underline font-bold" href="/services/honeymoon-planning/">planning service</a>.
        </p>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/daytrips.webp"
        class="rounded-lg w-full my-5"
      />
</section>

<section class="container m-auto">
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <div class="md:col-span-9 md:pr-5">
        <h2 id="its-time-for-michelin-to-come-to-bali" class="mb-3">
            It’s time for Michelin to come to Bali…
        </h2>
        <p class="my-3">
            <strong>Bali’s high end dining scene will surprise you! While Michelin still hasn’t launched a guide for Indonesia (they only sell tires here), there’s a handful of restaurants in Bali that can definitely compete at the international level. We live in Bali and love dining, so we’ve tried many of the high-end degustation restaurants and tasting menu experiences across the island. In this article we highlight our favorites, <span style="text-decoration: underline;text-decoration-color: #e3b5a6;text-decoration-thickness: 3px;">based on our own experience</span> visiting most of these high end restaurants in Bali!</strong>
        </p>
        <div class="grid grid-cols-3 gap-4 my-8">
            <div class="border border-white border-dashed rounded-lg">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/mount_agung_small.webp"
                class="rounded-lg w-full"
              />
              <p class="text-sm text-center">
                Kubu in Ubud.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/rice_terraces_small.webp"
                class="rounded-lg w-full"
              />
              <p class="text-sm text-center">
                Sangsaka in Seminyak.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/uluwatu_cliffs_small.webp"
                class="rounded-lg w-full"
              />
              <p class="text-sm text-center">
                The Cave near Uluwatu.
              </p>
            </div>
        </div>
        <p>Fine Dining is <strong>relatively affordable</strong> in Bali, especially compared with similar restaurants in Europe or the United States. We therefore suggest even those on smaller budgets to give fine dining a consideration: this might be the most affordable place to try a Chef’s tasting menu (where the menu consists of multiple courses set by the restaurant).</p>
        <p>Bali’s best restaurants can be found where the high(er) end tourists are. Typical <strong>hotspots</strong> with the best restaurants are <a class="text-tertiary underline font-bold" href="/regions/ubud-honeymoon/">Ubud</a>, <a class="text-tertiary underline font-bold" href="/regions/seminyak-honeymoon/">Seminyak</a> and <a href="/regions/uluwatu-honeymoon/">Uluwatu</a>, with more and more fancy restaurants opening up in <a class="text-tertiary underline font-bold" href="/regions/canggu-honeymoon/">Canggu</a> lately as well. The best restaurants are often part of <a class="text-tertiary underline font-bold" href="/stay/most-luxurious-hotels-bali/">luxury Bali hotels</a>, but all restaurants listed below can be visisted without staying overnight. If you do want to stay somewhere overnight after your dinner, check out our list with <a class="text-tertiary underline font-bold" href="/stay/most-luxurious-hotels-bali/">the most luxurious hotels in Bali</a>.</p>
        <p>If you intend to treat your partner and yourself to a fine dining experience on your <a href="/">Bali Honeymoon</a>, make sure to <strong>reserve a table</strong> in as far as possible in advance. These are all very popular restaurants that run out of seats!</p>
        <p>Note that all prices of menus listed below are <strong>excluding taxes and services</strong>, usually around 20%. The <strong>order of these restaurants</strong> is by region: Number 1 is not necessarily better than number 14!</p>
        
         <?php
// Query 3 accomodation posts (adjust as needed)
$accomodations = new WP_Query([
    'post_type' => 'accomodations',
    'posts_per_page' => 3,
]);

if ($accomodations->have_posts()) :
    while ($accomodations->have_posts()) : $accomodations->the_post();

    $accomodation_title_1  = get_field('accomodation_title_1');
    $accomodation_short_text_1 = get_field('accomodation_short_text_1');
    $accomodation_image_1_1  = get_field('accomodation_image_1_1');
    $accomodation_image_1_1_caption = get_field('accomodation_image_1_1_caption');
    $accomodation_image_1_2  = get_field('accomodation_image_1_2');
    $accomodation_image_1_2_caption = get_field('accomodation_image_1_2_caption');
    $accomodation_image_1_3  = get_field('accomodation_image_1_3');
    $accomodation_image_1_3_caption = get_field('accomodation_image_1_3_caption');
    $accomodation_image_1_4  = get_field('accomodation_image_1_4');
    $accomodation_image_1_4_caption = get_field('accomodation_image_1_4_caption');
    $accomodation_description_1 = get_field('accomodation_description_1');

    ?>

    <?php if ($accomodation_title_1): ?>
          <h3 class="mt-8"><?php echo esc_html($accomodation_title_1); ?></h3>
        <?php endif; ?>
        <?php if ($accomodation_short_text_1): ?>
        <span class="italic text-gray-500"><?php echo esc_html($accomodation_short_text_1); ?></span>
        <?php endif; ?>
        <div class="grid grid-cols-2 gap-4">
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_1_1): ?>
              <img src="<?php echo esc_url($accomodation_image_1_1['url']); ?>" alt="<?php echo esc_attr($accomodation_image_1_1['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_1_1_caption): ?>
              <p class="text-sm text-center">
              <?php echo esc_html($accomodation_image_1_1_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_1_2): ?>
              <img
                src="<?php echo esc_url($accomodation_image_1_2['url']); ?>" alt="<?php echo esc_attr($accomodation_image_1_2['alt']); ?>"
                class="rounded-lg w-full"
              />
              <?php endif; ?>
              <?php if ($accomodation_image_1_2_caption): ?>
              <p class="text-sm text-center">
              <?php echo esc_html($accomodation_image_1_2_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_1_3): ?>
              <img src="<?php echo esc_url($accomodation_image_1_3['url']); ?>" alt="<?php echo esc_attr($accomodation_image_1_3['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_1_3_caption): ?>
              <p class="text-sm text-center">
                <?php echo esc_html($accomodation_image_1_3_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_1_4): ?>
              <img src="<?php echo esc_url($accomodation_image_1_4['url']); ?>" alt="<?php echo esc_attr($accomodation_image_1_4['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_1_4_caption): ?>
              <p class="text-sm text-center text-gray-500">
                <?php echo esc_html($accomodation_image_1_4_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
        </div>
        <?php if ($accomodation_description_1): ?>
        <p>
          <?php echo wpautop(wp_kses_post($accomodation_description_1)); ?>
        </p>
        <?php endif; ?>

     <?php endwhile;
    wp_reset_postdata();
endif;
?>

        <div class="gap-4 bg-info p-5 rounded-lg mt-8">
        <div class="grid grid-cols-12">
          <div class="col-span-10">
            <h2 class="my-3">We are Olivia &amp; Dirk</h2>
            <p class="italic text-gray-500">
              Hi! We have put together this guide with a lot of care, based
              on our own experiences. As a couple, we have lived in Bali for
              the past 5 years, and we fell in love with the island. We have
              visited every corner of Bali, especially the romantic places
              ;-). While our articles do contain affiliate links, you can
              trust us to recommend only the experiences that we love. >
            </p>
          </div>
          <div class="col-span-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/olivia-dirk.png" class="rounded-full w-full" />
          </div>
        </div>
        <p>
          We can help make your honeymoon perfect:<br />🧡 Check our
          <a class="text-tertiary underline font-bold" href="#">Bali honeymoon packages</a>
            for a stress-free romantic honeymoon.<br />🧡 Let us design a personalized
          <a class="text-tertiary underline font-bold" href="#">custom honeymoon itinerary</a>
            based on your interests.<br />🧡 Book
          <a class="text-tertiary underline font-bold" href="#">unique romantic experiences</a>
              with us.
        </p>
      </div>

    </div>
    <div class="md:col-span-3 md:pl-3">
        <aside class="border rounded-lg">
          <h4
            class="bg-primary p-3 rounded-tl-lg rounded-tr-lg text-h4 font-semibold"
          >
            On this page:
          </h4>
          <ul id="right-sticky">
            <li class="border-b">
              <a
                class="p-3 block text-a"
                href="#its-time-for-michelin-to-come-to-bali"
                class=""
                >It’s time for Michelin to come to Bali…</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#koral-restaurant---the-apurva-kempinski-bali-(nusa-dua)" class=""
                >1. Koral Restaurant - The Apurva Kempinski Bali (Nusa Dua)</a
              >
            </li>
          </ul>
        </aside>
    </div>
  </div>
</section>