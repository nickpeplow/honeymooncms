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
          7-Day Classic Bali Honeymoon Itinerary 2025
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
        src="<?php echo get_template_directory_uri(); ?>/assets/images/bali-honeymoon-itineraries.webp"
        class="rounded-lg w-full my-5"
      />
    </section>

<?php
$page_id = get_the_ID();

$itinerary_subtitle  = get_field('itinerary_subtitle', $page_id);
$itinerary_highlight_text = get_field('itinerary_highlight_text', $page_id);
$highlight_image_1 = get_field('highlight_image_1', $page_id);
$highlight_caption_1 = get_field('highlight_caption_1', $page_id);
$highlight_image_2 = get_field('highlight_image_2', $page_id);
$highlight_caption_2 = get_field('highlight_caption_2', $page_id);
$highlight_image_3 = get_field('highlight_image_3', $page_id);
$highlight_caption_3 = get_field('highlight_caption_3', $page_id);
$route_map_image = get_field('route_map_image', $page_id);
$route_map_caption = get_field('route_map_caption', $page_id);
$title = get_field('title', $page_id);
$details = get_field('details', $page_id);
?>

 <section class="container m-auto">
        <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
            <div class="md:col-span-9 md:pr-5">
                <!-- Introduction section -->
                <?php if ($itinerary_subtitle): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
                <?php echo esc_html($itinerary_subtitle); ?>
                </h2>
                <?php endif; ?>
                <?php if ($itinerary_highlight_text): ?>
                <p class="my-3">
                <?php echo wp_kses_post($itinerary_highlight_text); ?>
                </p>
                <?php endif; ?>
                <div class="alert-callout text-secondary text-base mt-6 p-4">
                    <strong>Looking for a Honeymoon Package?</strong><br/>
                    This itinerary is helpful when planning your own honeymoon, but it is not bookable as package. You might be interested in a stress-free <a class="text-tertiary underline font-bold" href="#"> Bali Honeymoon Package</a> too (many options available!).
                </div>
               <!-- Images with caption -->
            <div class="grid grid-cols-3 gap-4 my-11">
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_1): ?>
              <img src="<?php echo esc_url($highlight_image_1['url']); ?>" alt="<?php echo esc_attr($highlight_image_1['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
            <?php if ($highlight_caption_1): ?>
              <p class="text-sm text-center pt-2">
                <?php echo wp_kses_post($highlight_caption_1); ?>
              </p>
            <?php endif; ?>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_2): ?>
              <img src="<?php echo esc_url($highlight_image_2['url']); ?>" alt="<?php echo esc_attr($highlight_image_2['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
            <?php if ($highlight_caption_2): ?>
              <p class="text-sm text-center pt-2">
                <?php echo wp_kses_post($highlight_caption_2); ?>
              </p>
            <?php endif; ?>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_3): ?>
              <img src="<?php echo esc_url($highlight_image_3['url']); ?>" alt="<?php echo esc_attr($highlight_image_3['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
            <?php if ($highlight_caption_3): ?>
              <p class="text-sm text-center pt-2">
                <?php echo wp_kses_post($highlight_caption_3); ?>
              </p>
            <?php endif; ?>
            </div>
          </div>
          <p class="my-3">
                We’ve suggested some of our favorite activities, restaurants and hotels below, but you’ll find many more in our extensive <a class="text-tertiary underline font-bold" href="/regions/seminyak-honeymoon/">Honeymoon in Seminyak</a> and <a class="text-tertiary underline font-bold" href="/regions/ubud-honeymoon/">Honeymoon in Ubud</a>  guides.
            </p>
          <!-- Map Image section -->
            <h2 id="bali-regions-and-map " class="mb-3 mt-8">
                Route Map
            </h2>
            <div
            class="border border-dotted p-3 my-5 border-color rounded-lg border-dashed">
            <?php if ($route_map_image): ?>
            <img
              src="<?php echo esc_url($route_map_image['url']); ?>"
              class="rounded-lg w-full"
            />
            <?php endif; ?>
            <?php if ($route_map_caption): ?>
            <p class="text-center d-block text-sm text-center pt-2">
              <?php echo wp_kses_post($route_map_caption); ?>
            </p>
            <?php endif; ?>
          </div>
          <!-- Day by Day section-->
            <?php if ($title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
                <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>
            <?php if ($details): ?>
                <?php echo wp_kses_post($details); ?>
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
        ?>



        <?php if ($accomodation_title_1): ?>
          <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3 mt-6"><?php echo esc_html($accomodation_title_1); ?></h2>
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
        <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3"><?php echo esc_html($accomodation_title_2); ?></h2>
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

        <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
        <!-- Other Hotel section -->
        <h2 id="best-bali-honeymoon-itineraries" class="mb-3 mt-8">
                Other hotels
             </h2>
             <p class="my-3">
                While we believe The Viceroy and The Legian are great, there are many other excellent options for couples. Check out the articles below for <strong>romantic hotels at any budget</strong>:
            </p>
            <ul class="pl-5 list-disc">
                <li><a class="text-tertiary underline font-bold" href="/regions/ubud-honeymoon/#the-best-honeymoon-hotels-in-ubud">The best honeymoon hotels in Ubud</a></li>
                <li><a class="text-tertiary underline font-bold" href="/regions/seminyak-honeymoon/#honeymoon-hotels-in-seminyak">The best honeymoon hotels in Seminyak</a></li>
            </ul>
             <h2 id="best-bali-honeymoon-itineraries" class="mb-3 mt-8">
                More Bali Itineraries
             </h2>
             <p class="my-3">
                Based on our 5 years in Bali, we have crafted 8 Bali itineraries with care. Check the full list below or read more information on our<a class="text-tertiary underline font-bold" href="#">Bali Honeymoon Itineraries</a>.
            </p>
              <!-- Tabs -->
          <div class="tab-container">
            <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3 pb-2">What are you looking for?</p>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'itineraries_itinerary_types',
          'hide_empty' => false,
        ));
        ?>

        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
          <ul class="inline-flex px-1 w-full gap-2 justify-center flex-wrap">
            <li class="px-2 pb-1 rounded-lg bg-white active-tab">
              <a id="default-tab" href="#eleven" class="text-sm font-bold">All Itineraries</a>
            </li>
            <?php foreach ($terms as $term) : ?>
              <li class="px-2 pb-1 rounded-lg bg-white">
                <a href="#<?php echo esc_attr($term->slug); ?>" class="text-sm font-bold">
                  <?php echo esc_html($term->name); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else : ?>
          <p>No Itinerary Types found.</p>
        <?php endif; ?>
      </div>

      <!-- Tab Contents -->
      <div class="tab-contents">

        <!-- All Itineraries (Default) -->
        <div id="eleven" class="py-3">
          <?php
          $args = array(
            'post_type' => 'itineraries',
            'posts_per_page' => -1,
          );
          $itinerary_query = new WP_Query($args);

          if ($itinerary_query->have_posts()) :
            while ($itinerary_query->have_posts()) : $itinerary_query->the_post();

              $itinerary_terms = wp_get_post_terms(get_the_ID(), 'itineraries_itinerary_types');
              ?>
              <div class="flex">
                <div class="basis-1/3">
                  <figure class="min-[280px]:w-1/1 p-2 relative">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium', ['class' => 'w-full h-[280px] min-[280px]:h-full object-cover rounded-lg']); ?>
                    <?php else : ?>
                      <img class="w-full h-[280px] object-cover rounded-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Placeholder">
                    <?php endif; ?>

                    <div class="widget_fav absolute bg-yellow top-9 text-sm px-2 py-1">
                      ★ Our Fav!
                    </div>
                  </figure>
                </div>

                <div class="basis-2/3">
                  <div class="flex flex-col justify-center p-3 pl-3">
                    <div class="flex justify-between mb-1">
                      <header>
                        <div class="font-caveat text-xl font-medium text-sky-500">
                          <h3 class="text-black"><?php the_title(); ?></h3>

                          <div class="item_categories">
                            <?php foreach ($itinerary_terms as $term) : ?>
                              <span><?php echo esc_html($term->name); ?></span>
                            <?php endforeach; ?>
                          </div>

                          <p class="widget_text_teaser my-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                          </p>

                          <a class="read_more read_moreaaaa" href="<?php the_permalink(); ?>">
                            Read our <?php the_title(); ?> Guide
                          </a>
                        </div>
                      </header>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else :
            echo '<p>No itineraries found.</p>';
          endif;
          ?>
        </div>

        <!-- Tab for each itinerary type -->
        <?php foreach ($terms as $term) : ?>
          <div id="<?php echo esc_attr($term->slug); ?>" class="py-3 hidden">
            <?php
            $args = array(
              'post_type' => 'itineraries',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'itineraries_itinerary_types',
                  'field'    => 'slug',
                  'terms'    => $term->slug,
                )
              ),
            );
            $term_query = new WP_Query($args);

            if ($term_query->have_posts()) :
              while ($term_query->have_posts()) : $term_query->the_post();

                $itinerary_terms = wp_get_post_terms(get_the_ID(), 'itineraries_itinerary_types');
                ?>
                <div class="flex mb-6">
                  <div class="basis-1/3">
                    <figure class="min-[280px]:w-1/1 p-2 relative">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-[280px] min-[280px]:h-full object-cover rounded-lg']); ?>
                      <?php else : ?>
                        <img class="w-full h-[280px] object-cover rounded-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Placeholder">
                      <?php endif; ?>

                      <div class="widget_fav absolute bg-yellow top-9 text-sm px-2 py-1">
                        ★ Our Fav!
                      </div>
                    </figure>
                  </div>

                  <div class="basis-2/3">
                    <div class="flex flex-col justify-center p-5 pl-3">
                      <div class="flex justify-between mb-1">
                        <header>
                          <div class="font-caveat text-xl font-medium text-sky-500">
                            <h3 class="text-black"><?php the_title(); ?></h3>

                            <div class="item_categories">
                              <?php foreach ($itinerary_terms as $term) : ?>
                                <span><?php echo esc_html($term->name); ?></span>
                              <?php endforeach; ?>
                            </div>

                            <p class="widget_text_teaser my-3">
                              <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>

                            <a class="read_more read_moreaaaa" href="<?php the_permalink(); ?>">
                              Read our <?php the_title(); ?> Guide
                            </a>
                          </div>
                        </header>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<p>No itineraries found for ' . esc_html($term->name) . '</p>';
            endif;
            ?>
          </div>
        <?php endforeach; ?>
      </div>
          </div>
            <!-- Author section -->
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
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/olivia-dirk.png"
                  class="rounded-full w-full"
                />
              </div>
            </div>
            <p>
              We can help make your honeymoon perfect:<br />🧡 Check our
              <a class="text-tertiary underline font-bold" href="#"
                >Bali honeymoon packages</a
              >
              for a stress-free romantic honeymoon.<br />🧡 Let us design a
              personalized
              <a class="text-tertiary underline font-bold" href="#"
                >custom honeymoon itinerary</a
              >
              based on your interests.<br />🧡 Book
              <a class="text-tertiary underline font-bold" href="#"
                >unique romantic experiences</a
              >
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
                href="#7-days-in-bali-seminyak-beach--ubud-jungle"
                class=""
                >7 Days in Bali: Seminyak Beach & Ubud Jungle</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#route-map" class=""
                >Route Map</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#day-by-day" class=""
                >Day by Day</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#other-hotels" class=""
                >Other hotels</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#more-bali-itineraries" class=""
                >More Bali Itineraries</a
              >
            </li>
          </ul>
        </aside>
     
            </div>
        </div>
</section>

</main>

<?php get_footer(); ?>