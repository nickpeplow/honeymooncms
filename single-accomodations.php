<?php

/**
 * Template Name: Single itineraries Template
 *
 * This is a custom page template.
 *
 */
get_header(); ?>

<section class="flex flex-col container m-auto">
      <div
        class="container mx-auto flex justify-center items-start flex-col py-5"
      >
        <h1 class="text-black font-bold text-left mb-3 mt-5 ">
          The 22 Most Luxurious Hotels in Bali 2025
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
        src="<?php echo get_template_directory_uri(); ?>/assets/images/most-luxury-hotels-in-bali.webp"
        class="rounded-lg w-full my-5"
      />
    </section>

<?php
    $page_id = get_the_ID();

    $accomodation_heading  = get_field('accomodation_heading', $page_id);
    $accomodation_description = get_field('accomodation_description', $page_id);
    $accomodation_image_1 = get_field('accomodation_image_1', $page_id);
    $accomodation_caption_1 = get_field('accomodation_caption_1', $page_id);
    $accomodation_image_2 = get_field('accomodation_image_2', $page_id);
    $accomodation_caption_2 = get_field('accomodation_caption_2', $page_id);
    $accomodation_image_3 = get_field('accomodation_image_3', $page_id);
    $accomodation_caption_3 = get_field('accomodation_caption_3', $page_id);
    $accomodation_another_description  = get_field('accomodation_another_description', $page_id);
    $bali_hotels_title = get_field('bali_hotels_title', $page_id);
    $bali_hotels_description  = get_field('bali_hotels_description', $page_id);
    $luxurious_hotels_title = get_field('luxurious_hotels_title', $page_id);
    $luxurious_hotels_description  = get_field('luxurious_hotels_description', $page_id);
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
    $accomodation_price_link_1  = get_field('accomodation_price_link_1');
    $accomodation_description_1 = get_field('accomodation_description_1');
    $accomodation_availability_link_1  = get_field('accomodation_availability_link_1');
    $accomodation_rating_1 = get_field('accomodation_rating_1');
?>

<section class="container m-auto">
        <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
            <div class="md:col-span-9 md:pr-5">
              <!-- Introduction section start-->
                <?php if ($accomodation_heading): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
                <?php echo esc_html($accomodation_heading); ?>
                </h2>
                <?php endif; ?>
                <?php if ($accomodation_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($accomodation_description); ?>
                </p>
                <?php endif; ?>
                 <!-- Images with caption -->
                <div class="grid grid-cols-3 gap-4 my-11">
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($accomodation_image_1): ?>
                    <img src="<?php echo esc_url($accomodation_image_1['url']); ?>" alt="<?php echo esc_attr($accomodation_image_1['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($accomodation_caption_1): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($accomodation_caption_1); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($accomodation_image_2): ?>
                    <img src="<?php echo esc_url($accomodation_image_2['url']); ?>" alt="<?php echo esc_attr($accomodation_image_2['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($accomodation_caption_2): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($accomodation_caption_2); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($accomodation_image_3): ?>
                    <img src="<?php echo esc_url($accomodation_image_3['url']); ?>" alt="<?php echo esc_attr($accomodation_image_3['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($accomodation_caption_3): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($accomodation_caption_3); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                </div>
                 <?php if ($accomodation_another_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($accomodation_another_description); ?>
                </p>
                <?php endif; ?>
                <!-- Introduction section end -->
                <!-- favorite luxury Bali hotels section start -->
                 <?php if ($bali_hotels_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3 mt-8">
                <?php echo esc_html($bali_hotels_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($bali_hotels_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($bali_hotels_description); ?>
                </p>
                <?php endif; ?>
                <!-- favorite luxury Bali hotels section end -->
                <!-- Luxurious hotels section start -->
                <?php if ($luxurious_hotels_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3 mt-8">
                <?php echo esc_html($luxurious_hotels_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($luxurious_hotels_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($luxurious_hotels_description); ?>
                </p>
                <?php endif; ?>
                <!-- Resort and spa section -->
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
        <p class="inline_cta bg-primary text-center rounded-lg p-2 mt-9 mb-6">
          Love it?
          <?php if ($accomodation_price_link_1): ?>
          <a
            class="text-tertiary underline font-bold"
            href="<?php echo esc_html($accomodation_price_link_1); ?>"
            target="_blank"
            rel="nofollow"
            >Check prices now!</a>
            <?php endif; ?>
        </p>
        <?php if ($accomodation_description_1): ?>
        <p>
          <?php echo wpautop(wp_kses_post($accomodation_description_1)); ?>
        </p>
        <?php endif; ?>
        <?php if ($accomodation_availability_link_1): ?>
        <a class="read_more pt-6" href="<?php echo esc_html($accomodation_availability_link_1); ?>" target="_blank"
          >Check Availability</a
        >
        <?php endif; ?>
        <div class="text-center mb-5">
        <?php if ($accomodation_availability_link_1): ?>
          <a
            class="read_more is_button no-underline"
            href="<?php echo esc_html($accomodation_availability_link_1); ?>"
            target="_blank"
            rel="follow"
          >
            <strong class="text-3xl no-underline mb-1 border-b-3"
              >Check Availability</strong
            ><br /><span class="text-gray-500 text-lg no-underline"
              ><strong style="color: #1fc900; font-size: larger">✓</strong>
              Rated
              <?php if ($accomodation_rating_1): ?>
              <span class="star bg-green text-white px-2 py-1 rounded-lg mx-1"
                ><span>★</span><?php echo esc_html($accomodation_rating_1); ?></span
              >
              <?php endif; ?>
              at Booking. →</span
            ></a
          >
          <?php endif; ?>
        </div>
                <!-- Luxurious hotels section end -->

            </div>
        </div>
</section>

<?php get_footer(); ?>