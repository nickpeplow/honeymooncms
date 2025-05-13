<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>



<?php
$page_id = get_the_ID(6);

// Get each field value
$accomodation_title  = get_field('accomodation_title', $page_id);
$accomodation_description = get_field('accomodation_description', $page_id);
?>


        <?php if ($accomodation_title): ?>
		    <h2 id="honeymoon-hotels-and-resorts" class="mb-3 mt-5">
          <?php echo esc_html($accomodation_title); ?>
        </h2>
        <?php endif; ?>
        <?php if ($accomodation_description): ?>
          <?php echo wpautop(wp_kses_post($accomodation_description)); ?>
        <?php endif; ?>

      

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
    $accomodation_price_link_1  = get_field('accomodation_price_link_1');
    $accomodation_description_1 = get_field('accomodation_description_1');
    $accomodation_availability_link_1  = get_field('accomodation_availability_link_1');
    $accomodation_rating_1 = get_field('accomodation_rating_1');
    $accomodation_title_2  = get_field('accomodation_title_2');
    $accomodation_short_text_2 = get_field('accomodation_short_text_2');
    $accomodation_image_2_1  = get_field('accomodation_image_2_1');
    $accomodation_image_2_1_caption = get_field('accomodation_image_2_1_caption');
    $accomodation_image_2_2  = get_field('accomodation_image_2_2');
    $accomodation_image_2_2_caption = get_field('accomodation_image_2_2_caption');
    $accomodation_image_2_3  = get_field('accomodation_image_2_3');
    $accomodation_image_2_3_caption = get_field('accomodation_image_2_3_caption');
    $accomodation_image_2_4  = get_field('accomodation_image_2_4');
    $accomodation_image_2_4_caption = get_field('accomodation_image_2_4_caption');
    $accomodation_price_link_2  = get_field('accomodation_price_link_2');
    $accomodation_description_2 = get_field('accomodation_description_2');
    $accomodation_availability_link_2  = get_field('accomodation_availability_link_2');
    $accomodation_rating_2 = get_field('accomodation_rating_2');
    $accomodation_title_3  = get_field('accomodation_title_3');
    $accomodation_short_text_3 = get_field('accomodation_short_text_3');
    $accomodation_image_3_1  = get_field('accomodation_image_3_1');
    $accomodation_image_3_1_caption = get_field('accomodation_image_3_1_caption');
    $accomodation_image_3_2  = get_field('accomodation_image_3_2');
    $accomodation_image_3_2_caption = get_field('accomodation_image_3_2_caption');
    $accomodation_image_3_3  = get_field('accomodation_image_3_3');
    $accomodation_image_3_3_caption = get_field('accomodation_image_3_3_caption');
    $accomodation_image_3_4  = get_field('accomodation_image_3_4');
    $accomodation_image_3_4_caption = get_field('accomodation_image_3_4_caption');
    $accomodation_price_link_3  = get_field('accomodation_price_link_3');
    $accomodation_description_3 = get_field('accomodation_description_3');
    $accomodation_availability_link_3  = get_field('accomodation_availability_link_3');
    $accomodation_rating_3 = get_field('accomodation_rating_3');
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
        <?php if ($accomodation_title_2): ?>
        <h3 class="mt-8"><?php echo esc_html($accomodation_title_2); ?></h3>
        <?php endif; ?>
        <?php if ($accomodation_short_text_2): ?>
          <span class="italic text-gray-500"><?php echo esc_html($accomodation_short_text_2); ?></span>
        <?php endif; ?>
        <div class="grid grid-cols-2 gap-4">
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_2_1): ?>
              <img src="<?php echo esc_url($accomodation_image_2_1['url']); ?>" alt="<?php echo esc_attr($accomodation_image_2_1['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_2_1_caption): ?>
              <p class="text-sm text-center">
                <?php echo esc_html($accomodation_image_2_1_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_2_2): ?>
              <img
                src="<?php echo esc_url($accomodation_image_2_2['url']); ?>" alt="<?php echo esc_attr($accomodation_image_2_2['alt']); ?>"
                class="rounded-lg w-full"
              />
              <?php endif; ?>
              <?php if ($accomodation_image_2_2_caption): ?>
              <p class="text-sm text-center">
              <?php echo esc_html($accomodation_image_2_2_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_2_3): ?>
              <img src="<?php echo esc_url($accomodation_image_2_3['url']); ?>" alt="<?php echo esc_attr($accomodation_image_2_3['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_2_3_caption): ?>
              <p class="text-sm text-center">
              <?php echo esc_html($accomodation_image_2_3_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_2_4): ?>
              <img src="<?php echo esc_url($accomodation_image_2_4['url']); ?>" alt="<?php echo esc_attr($accomodation_image_2_4['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_2_4_caption): ?>
              <p class="text-sm text-center text-gray-500">
              <?php echo esc_html($accomodation_image_2_4_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
        </div>
        <p class="inline_cta bg-primary text-center rounded-lg p-2 mt-9 mb-6">
          Love it?
          <?php if ($accomodation_price_link_2): ?>
          <a
            class="text-tertiary underline font-bold"
            href="<?php echo esc_html($accomodation_price_link_2); ?>"
            target="_blank"
            rel="nofollow"
            >Check prices now!</a
          >
          <?php endif; ?>
        </p>
        <?php if ($accomodation_description_2): ?>
        <p>
        <?php echo wpautop(wp_kses_post($accomodation_description_2)); ?>
        </p>
        <?php endif; ?>
        <?php if ($accomodation_availability_link_2): ?>
        <a class="read_more pt-6" href="<?php echo esc_html($accomodation_availability_link_2); ?>" target="_blank"
          >Check Availability</a
        >
        <?php endif; ?>
        <div class="text-center mb-5">
        <?php if ($accomodation_availability_link_2): ?>
          <a
            class="read_more is_button no-underline"
            href="<?php echo esc_html($accomodation_availability_link_2); ?>"
            target="_blank"
            rel="follow"
          >
            <strong class="text-3xl no-underline mb-1 border-b-3"
              >Check Availability</strong
            ><br /><span class="text-gray-500 text-lg no-underline"
              ><strong style="color: #1fc900; font-size: larger">✓</strong>
              Rated
              <?php if ($accomodation_rating_2): ?>
              <span class="star bg-green text-white px-2 py-1 rounded-lg mx-1"
                ><span>★</span><?php echo esc_html($accomodation_rating_2); ?></span
              >
              <?php endif; ?>
              at Booking. →</span
            ></a
          >
          <?php endif; ?>
        </div>

        <?php if ($accomodation_title_3): ?>
        <h3 class="mt-8"><?php echo esc_html($accomodation_title_3); ?></h3>
        <?php endif; ?>
        <?php if ($accomodation_short_text_3): ?>
          <span class="italic text-gray-500"><?php echo esc_html($accomodation_short_text_3); ?></span>
        <?php endif; ?>
        <div class="grid grid-cols-2 gap-4">
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_3_1): ?>
              <img src="<?php echo esc_url($accomodation_image_3_1['url']); ?>" alt="<?php echo esc_attr($accomodation_image_3_1['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_3_1_caption): ?>
              <p class="text-sm text-center">
                <?php echo esc_html($accomodation_image_3_1_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_3_2): ?>
              <img
                src="<?php echo esc_url($accomodation_image_3_2['url']); ?>" alt="<?php echo esc_attr($accomodation_image_3_2['alt']); ?>"
                class="rounded-lg w-full"
              />
              <?php endif; ?>
              <?php if ($accomodation_image_3_2_caption): ?>
              <p class="text-sm text-center">
              <?php echo esc_html($accomodation_image_3_2_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_3_3): ?>
              <img src="<?php echo esc_url($accomodation_image_3_3['url']); ?>" alt="<?php echo esc_attr($accomodation_image_3_3['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_3_3_caption): ?>
              <p class="text-sm text-center">
              <?php echo esc_html($accomodation_image_3_3_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
          <div class="text-hover">
            <a href="#">
            <?php if ($accomodation_image_3_4): ?>
              <img src="<?php echo esc_url($accomodation_image_3_4['url']); ?>" alt="<?php echo esc_attr($accomodation_image_3_4['alt']); ?>" class="rounded-lg w-full" />
              <?php endif; ?>
              <?php if ($accomodation_image_3_4_caption): ?>
              <p class="text-sm text-center text-gray-500">
              <?php echo esc_html($accomodation_image_3_4_caption); ?>
              </p>
              <?php endif; ?>
            </a>
          </div>
        </div>
        <p class="inline_cta bg-primary text-center rounded-lg p-2 mt-9 mb-6">
          Love it?
          <?php if ($accomodation_price_link_3): ?>
          <a
            class="text-tertiary underline font-bold"
            href="<?php echo esc_html($accomodation_price_link_3); ?>"
            target="_blank"
            rel="nofollow"
            >Check prices now!</a
          >
          <?php endif; ?>
        </p>
        <?php if ($accomodation_description_3): ?>
        <p>
        <?php echo wpautop(wp_kses_post($accomodation_description_3)); ?>
        </p>
        <?php endif; ?>
        <?php if ($accomodation_availability_link_3): ?>
        <a class="read_more pt-6" href="<?php echo esc_html($accomodation_availability_link_3); ?>" target="_blank"
          >Check Availability</a
        >
        <?php endif; ?>
        <div class="text-center mb-5">
        <?php if ($accomodation_availability_link_3): ?>
          <a
            class="read_more is_button no-underline"
            href="<?php echo esc_html($accomodation_availability_link_3); ?>"
            target="_blank"
            rel="follow"
          >
            <strong class="text-3xl no-underline mb-1 border-b-3"
              >Check Availability</strong
            ><br /><span class="text-gray-500 text-lg no-underline"
              ><strong style="color: #1fc900; font-size: larger">✓</strong>
              Rated
              <?php if ($accomodation_rating_3): ?>
              <span class="star bg-green text-white px-2 py-1 rounded-lg mx-1"
                ><span>★</span><?php echo esc_html($accomodation_rating_3); ?></span
              >
              <?php endif; ?>
              at Booking. →</span
            ></a
          >
          <?php endif; ?>
        </div>

        <p class="mt-5">
          For more amazing Bali hotels, check out our list of
          <a class="text-tertiary underline font-bold" href="#"
            >most luxurious Bali hotels</a
          >
          or
          <a class="text-tertiary underline font-bold" href="#"
            >private pool villas</a
          >.
        </p>

        <?php endwhile;
    wp_reset_postdata();
endif;
?>