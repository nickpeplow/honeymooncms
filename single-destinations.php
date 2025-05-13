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
          The Complete Ubud Honeymoon Guide 2025
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

<?php
$page_id = get_the_ID();

$destination_title  = get_field('destination_title', $page_id);
$destination_description = get_field('destination_description', $page_id);
$destination_image_1 = get_field('destination_image_1', $page_id);
$destination_caption_1 = get_field('destination_caption_1', $page_id);
$destination_image_2 = get_field('destination_image_2', $page_id);
$destination_caption_2 = get_field('destination_caption_2', $page_id);
$destination_image_3 = get_field('destination_image_3', $page_id);
$destination_caption_3 = get_field('destination_caption_3', $page_id);
$cultural_title  = get_field('cultural_title', $page_id);
$cultural_description = get_field('cultural_description', $page_id);
$cultural_image_1 = get_field('cultural_image_1', $page_id);
$cultural_caption_1 = get_field('cultural_caption_1', $page_id);
$cultural_image_2 = get_field('cultural_image_2', $page_id);
$cultural_caption_2 = get_field('cultural_caption_2', $page_id);
$cultural_image_3 = get_field('cultural_image_3', $page_id);
$cultural_caption_3 = get_field('cultural_caption_3', $page_id);
$explore_destination_title = get_field('explore_destination_title', $page_id);
$explore_destination_description = get_field('explore_destination_description', $page_id);
$explore_destination_image = get_field('explore_destination_image', $page_id);
$explore_destination_caption = get_field('explore_destination_caption', $page_id);
$hotel_title = get_field('hotel_title', $page_id);
$hotel_description = get_field('hotel_description', $page_id);
$hotel_another_description = get_field('hotel_another_description', $page_id);
$activities_title = get_field('activities_title', $page_id);
$activities_description = get_field('activities_description', $page_id);
$romantic_dining_title = get_field('romantic_dining_title', $page_id);
$romantic_dining_description = get_field('romantic_dining_description', $page_id);
$next_destinations_title = get_field('next_destinations_title', $page_id);
$next_destinations_description = get_field('next_destinations_description', $page_id);
$region_title = get_field('region_title', $page_id);
$region_description = get_field('region_description', $page_id);
?>

<section class="container m-auto">
        <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
            <div class="md:col-span-9 md:pr-5">
            <!-- Introduction section start-->
                <?php if ($destination_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
                <?php echo esc_html($destination_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($destination_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($destination_description); ?>
                </p>
                <?php endif; ?>
                 <!-- Images with caption -->
                <div class="grid grid-cols-3 gap-4 my-11">
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($destination_image_1): ?>
                    <img src="<?php echo esc_url($destination_image_1['url']); ?>" alt="<?php echo esc_attr($destination_image_1['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($destination_caption_1): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($destination_caption_1); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($destination_image_2): ?>
                    <img src="<?php echo esc_url($destination_image_2['url']); ?>" alt="<?php echo esc_attr($destination_image_2['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($destination_caption_2): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($destination_caption_2); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($destination_image_3): ?>
                    <img src="<?php echo esc_url($destination_image_3['url']); ?>" alt="<?php echo esc_attr($destination_image_3['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($destination_caption_3): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($destination_caption_3); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                </div>
                <!-- Introduction section end -->
                <!-- Cultural section start -->
                 <?php if ($cultural_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
                <?php echo esc_html($cultural_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($cultural_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($cultural_description); ?>
                </p>
                <?php endif; ?>
                 <!-- Images with caption -->
                <div class="grid grid-cols-3 gap-4 my-11">
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($cultural_image_1): ?>
                    <img src="<?php echo esc_url($cultural_image_1['url']); ?>" alt="<?php echo esc_attr($cultural_image_1['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($cultural_caption_1): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($cultural_caption_1); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($cultural_image_2): ?>
                    <img src="<?php echo esc_url($cultural_image_2['url']); ?>" alt="<?php echo esc_attr($cultural_image_2['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($cultural_caption_2): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($cultural_caption_2); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                    <div class="border border-white border-dashed rounded-lg">
                    <?php if ($cultural_image_3): ?>
                    <img src="<?php echo esc_url($cultural_image_3['url']); ?>" alt="<?php echo esc_attr($cultural_image_3['alt']); ?>" class="rounded-lg w-full" />
                    <?php endif; ?>
                    <?php if ($cultural_caption_3): ?>
                    <p class="text-sm text-center pt-2">
                        <?php echo wp_kses_post($cultural_caption_3); ?>
                    </p>
                    <?php endif; ?>
                    </div>
                </div>
                <!-- Cultural section end -->
                <!-- Explore section start -->
                 <?php if ($explore_destination_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
                <?php echo esc_html($explore_destination_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($explore_destination_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($explore_destination_description); ?>
                </p>
                <?php endif; ?>
                <div
                class="my-5">
                <?php if ($explore_destination_image): ?>
                <img
                src="<?php echo esc_url($explore_destination_image['url']); ?>"
                class="rounded-lg w-full"
                />
                <?php endif; ?>
                <?php if ($explore_destination_caption): ?>
                <p class="text-center d-block text-sm text-center pt-2">
                <?php echo wp_kses_post($explore_destination_caption); ?>
                </p>
                <?php endif; ?>
            </div>
            <!-- Explore section end -->
            <!-- Best Honeymoon Hotel section start -->
            <?php if ($hotel_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mt-8 mb-3">
                <?php echo esc_html($hotel_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($hotel_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($hotel_description); ?>
                </p>
                <?php endif; ?>
                  <!-- Tabs -->
          <div class="tab-container">
            <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3 pb-2">What are you looking for?</p>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'accomodations_accomodation_types',
          'hide_empty' => false,
        ));
        ?>

        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
          <ul class="inline-flex px-1 w-full gap-2 justify-center flex-wrap">
            <li class="px-2 pb-1 rounded-lg bg-white active-tab">
              <a id="default-tab" href="#eleven" class="text-sm font-bold">All Hotels</a>
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
            'post_type' => 'accomodations',
            'posts_per_page' => -1,
          );
          $accomodations_query = new WP_Query($args);

          if ($accomodations_query->have_posts()) :
            while ($accomodations_query->have_posts()) : $accomodations_query->the_post();

              $accomodations_terms = wp_get_post_terms(get_the_ID(), 'accomodations_accomodation_types');
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
                            <?php foreach ($accomodations_terms as $term) : ?>
                              <span><?php echo esc_html($term->name); ?></span>
                            <?php endforeach; ?>
                          </div>

                           <div x-data="{ expanded: false }">
                  <p class="widget_text_teaser my-2">
                    <!-- Shortened Content (25 words) -->
                    <div x-show="!expanded" class="text-h4 font-normal leading-p text-secondary">
                      <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                    </div>

                    <!-- Full Content -->
                    <div x-show="expanded">
                      <?php echo apply_filters('the_content', get_the_content()); ?>
                    </div>
                  </p>
                  <div class="border-dashed h-1 border-t border-color"></div>
                  <div class="text-right mt-2">
                    <button
                      class="read_more read_moreaaaa no-underline text-black focus:outline-none"
                      @click="expanded = !expanded"
                      x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"
                    ></button>
                  </div>
                </div>
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
              'post_type' => 'accomodations',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'accomodations_accomodation_types',
                  'field'    => 'slug',
                  'terms'    => $term->slug,
                )
              ),
            );
            $term_query = new WP_Query($args);

            if ($term_query->have_posts()) :
              while ($term_query->have_posts()) : $term_query->the_post();

                $accomodations_terms = wp_get_post_terms(get_the_ID(), 'accomodations_accomodation_types');
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
                              <?php foreach ($accomodations_terms as $term) : ?>
                                <span><?php echo esc_html($term->name); ?></span>
                              <?php endforeach; ?>
                            </div>

                             <div x-data="{ expanded: false }">
                              <p class="widget_text_teaser my-2">
                                <!-- Shortened Content (25 words) -->
                                <div x-show="!expanded" class="text-h4 font-normal leading-p text-secondary">
                                  <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                                </div>

                                <!-- Full Content -->
                                <div x-show="expanded">
                                  <?php echo apply_filters('the_content', get_the_content()); ?>
                                </div>
                              </p>
                              <div class="border-dashed h-1 border-t border-color"></div>
                              <div class="text-right mt-2">
                                <button
                                  class="read_more read_moreaaaa no-underline text-black focus:outline-none"
                                  @click="expanded = !expanded"
                                  x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"
                                ></button>
                              </div>
                            </div>

                          </div>
                        </header>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<p>No accomodations found for ' . esc_html($term->name) . '</p>';
            endif;
            ?>
          </div>
        <?php endforeach; ?>
      </div>
          </div>
      <?php if ($hotel_another_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($hotel_another_description); ?>
                </p>
                <?php endif; ?>
                <!-- Best Honeymoon Hotel section end -->
                <!-- Honeymoon Activities section start -->
                <?php if ($activities_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mt-8 mb-3">
                <?php echo esc_html($activities_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($activities_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($activities_description); ?>
                </p>
                <?php endif; ?>
                 <!-- Tabs -->
          <div class="tab-container mt-8">
            <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3 pb-2">What type of activities would you like to do in Ubud?</p>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'activities_activity_types',
          'hide_empty' => false,
        ));
        ?>

        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
          <ul class="inline-flex px-1 w-full gap-2 justify-center flex-wrap">
            <li class="px-2 pb-1 rounded-lg bg-white active-tab">
              <a id="default-tab" href="#eleven" class="text-sm font-bold">All Activities</a>
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

        <!-- All activities (Default) -->
        <div id="eleven" class="py-3">
          <?php
          $args = array(
            'post_type' => 'activities',
            'posts_per_page' => -1,
          );
          $activities_query = new WP_Query($args);

          if ($activities_query->have_posts()) :
            while ($activities_query->have_posts()) : $activities_query->the_post();

              $activities_terms = wp_get_post_terms(get_the_ID(), 'activities_activity_types');
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
                            <?php foreach ($activities_terms as $term) : ?>
                              <span><?php echo esc_html($term->name); ?></span>
                            <?php endforeach; ?>
                          </div>

                           <div x-data="{ expanded: false }">
                  <p class="widget_text_teaser my-2">
                    <!-- Shortened Content (25 words) -->
                    <div x-show="!expanded" class="text-h4 font-normal leading-p text-secondary">
                      <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                    </div>

                    <!-- Full Content -->
                    <div x-show="expanded">
                      <?php echo apply_filters('the_content', get_the_content()); ?>
                    </div>
                  </p>
                  <div class="border-dashed h-1 border-t border-color"></div>
                  <div class="text-right mt-2">
                    <button
                      class="read_more read_moreaaaa no-underline text-black focus:outline-none"
                      @click="expanded = !expanded"
                      x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"
                    ></button>
                  </div>
                </div>
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

        <!-- Tab for each activities type -->
        <?php foreach ($terms as $term) : ?>
          <div id="<?php echo esc_attr($term->slug); ?>" class="py-3 hidden">
            <?php
            $args = array(
              'post_type' => 'activities',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'activities_activity_types',
                  'field'    => 'slug',
                  'terms'    => $term->slug,
                )
              ),
            );
            $term_query = new WP_Query($args);

            if ($term_query->have_posts()) :
              while ($term_query->have_posts()) : $term_query->the_post();

                $activities_terms = wp_get_post_terms(get_the_ID(), 'activities_activity_types');
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
                              <?php foreach ($activities_terms as $term) : ?>
                                <span><?php echo esc_html($term->name); ?></span>
                              <?php endforeach; ?>
                            </div>

                             <div x-data="{ expanded: false }">
                              <p class="widget_text_teaser my-2">
                                <!-- Shortened Content (25 words) -->
                                <div x-show="!expanded" class="text-h4 font-normal leading-p text-secondary">
                                  <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                                </div>

                                <!-- Full Content -->
                                <div x-show="expanded">
                                  <?php echo apply_filters('the_content', get_the_content()); ?>
                                </div>
                              </p>
                              <div class="border-dashed h-1 border-t border-color"></div>
                              <div class="text-right mt-2">
                                <button
                                  class="read_more read_moreaaaa no-underline text-black focus:outline-none"
                                  @click="expanded = !expanded"
                                  x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"
                                ></button>
                              </div>
                            </div>

                          </div>
                        </header>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<p>No accomodations found for ' . esc_html($term->name) . '</p>';
            endif;
            ?>
          </div>
        <?php endforeach; ?>
      </div>
          </div>
            <!-- Honeymoon Activities section end -->
            <!-- Romantic Dining section start -->
          <?php if ($romantic_dining_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mt-8 mb-3">
                <?php echo esc_html($romantic_dining_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($romantic_dining_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($romantic_dining_description); ?>
                </p>
                <?php endif; ?>
               <!-- Tabs -->
          <div class="tab-container mt-8">
            <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3 pb-2">What are you craving? Ubud has it all!</p>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'restaurant_restaurant_type',
          'hide_empty' => false,
        ));
        ?>

        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
          <ul class="inline-flex px-1 w-full gap-2 justify-center flex-wrap">
            <li class="px-2 pb-1 rounded-lg bg-white active-tab">
              <a id="default-tab" href="#eleven" class="text-sm font-bold">All Restaurants</a>
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

        <!-- All activities (Default) -->
        <div id="eleven" class="py-3">
          <?php
          $args = array(
            'post_type' => 'restaurant',
            'posts_per_page' => -1,
          );
          $restaurant_query = new WP_Query($args);

          if ($restaurant_query->have_posts()) :
            while ($restaurant_query->have_posts()) : $restaurant_query->the_post();

              $restaurant_terms = wp_get_post_terms(get_the_ID(), 'restaurant_restaurant_type');
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
                            <?php foreach ($restaurant_terms as $term) : ?>
                              <span><?php echo esc_html($term->name); ?></span>
                            <?php endforeach; ?>
                          </div>

                           <div x-data="{ expanded: false }">
                  <p class="widget_text_teaser my-2">
                    <!-- Shortened Content (25 words) -->
                    <div x-show="!expanded" class="text-h4 font-normal leading-p text-secondary">
                      <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                    </div>

                    <!-- Full Content -->
                    <div x-show="expanded">
                      <?php echo apply_filters('the_content', get_the_content()); ?>
                    </div>
                  </p>
                  <div class="border-dashed h-1 border-t border-color"></div>
                  <div class="text-right mt-2">
                    <button
                      class="read_more read_moreaaaa no-underline text-black focus:outline-none"
                      @click="expanded = !expanded"
                      x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"
                    ></button>
                  </div>
                </div>
                        </div>
                      </header>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else :
            echo '<p>No restaurant found.</p>';
          endif;
          ?>
        </div>

        <!-- Tab for each restaurant type -->
        <?php foreach ($terms as $term) : ?>
          <div id="<?php echo esc_attr($term->slug); ?>" class="py-3 hidden">
            <?php
            $args = array(
              'post_type' => 'restaurant',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'restaurant_restaurant_type',
                  'field'    => 'slug',
                  'terms'    => $term->slug,
                )
              ),
            );
            $term_query = new WP_Query($args);

            if ($term_query->have_posts()) :
              while ($term_query->have_posts()) : $term_query->the_post();

                $restaurant_terms = wp_get_post_terms(get_the_ID(), 'restaurant_restaurant_type');
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
                              <?php foreach ($restaurant_terms as $term) : ?>
                                <span><?php echo esc_html($term->name); ?></span>
                              <?php endforeach; ?>
                            </div>

                             <div x-data="{ expanded: false }">
                              <p class="widget_text_teaser my-2">
                                <!-- Shortened Content (25 words) -->
                                <div x-show="!expanded" class="text-h4 font-normal leading-p text-secondary">
                                  <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                                </div>

                                <!-- Full Content -->
                                <div x-show="expanded">
                                  <?php echo apply_filters('the_content', get_the_content()); ?>
                                </div>
                              </p>
                              <div class="border-dashed h-1 border-t border-color"></div>
                              <div class="text-right mt-2">
                                <button
                                  class="read_more read_moreaaaa no-underline text-black focus:outline-none"
                                  @click="expanded = !expanded"
                                  x-text="expanded ? 'Read Less ↑' : 'Read More ↓'"
                                ></button>
                              </div>
                            </div>

                          </div>
                        </header>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<p>No accomodations found for ' . esc_html($term->name) . '</p>';
            endif;
            ?>
          </div>
        <?php endforeach; ?>
      </div>
          </div>
            <!-- Romantic Dining section end -->
             <!-- How to get to Ubud section start -->
            <?php if ($region_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mt-8 mb-3">
                <?php echo esc_html($region_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($region_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($region_description); ?>
                </p>
                <?php endif; ?>
              <!-- How to get to Ubud section end -->
          <!-- Faq section start -->
            <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mt-8 mb-3">
                Frequently Asked Questions
              </h2>
      <section class="text-gray-700">
            <div class="container mx-auto">
              <div class="flex flex-wrap sm:mx-auto sm:mb-2 -mx-2">

          <?php
            // 1. Get the last part of the URL slug (e.g., "ubud" from "why-honeymoon-in-ubud")
            $slug = basename(get_permalink());
            $slug_parts = explode('-', $slug);
            $region_slug = end($slug_parts); // gets "ubud"

            // 2. Query FAQs that belong to this region
            $args = array(
                'post_type' => 'faqs',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order'   => 'Asc',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'faqs_regions',
                        'field'    => 'slug',
                        'terms'    => $region_slug,
                    ),
                ),
            );

            $query = new WP_Query($args);

            // 3. Display the matched FAQs
            if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="w-full pt-2 lg:pb-2">
                            <details class="border rounded-lg border-color">
                                <summary class="font-semibold bg-brown rounded-md py-2 px-4 flex items-center gap-2.5 text-black">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/questionmark.png"
                                        style="width: 20px; height: 20px" />
                                    <?php the_title(); ?>
                                </summary>

                                <span class="p-3 block">
                                    <?php the_content(); ?>
                                </span>
                            </details>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No FAQs found for this region.</p>
            <?php endif; ?>

              
            </div>
          </section>
          <!-- Faq section end -->
          <!-- Destination section start -->
          <?php if ($next_destinations_title): ?>
                <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mt-8 mb-3">
                <?php echo esc_html($next_destinations_title); ?>
                </h2>
                <?php endif; ?>
                <?php if ($next_destinations_description): ?>
                <p class="my-3">
                <?php echo wp_kses_post($next_destinations_description); ?>
                </p>
                <?php endif; ?>
                <!-- Tab -->
           <div class="tab-container mt-8">
      <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3">What are you looking for?</p>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'destination_experience_type',
          'hide_empty' => false,
        ));
        ?>

        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
          <ul class="tabs flex justify-center gap-2">
            <li class="px-3 pb-1 rounded-lg bg-white active-tab">
              <a href="#all" class="text-sm font-bold">All Regions</a>
            </li>
            <?php foreach ($terms as $term) : ?>
              <li class="px-3 pb-1 rounded-lg bg-white">
                <a href="#<?php echo esc_attr($term->slug); ?>" class="text-sm font-bold">
                  <?php echo esc_html($term->name); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else : ?>
          <p>No Experience Types found.</p>
        <?php endif; ?>
      </div>

      <!-- Tab Contents -->
      <div class="tab-contents">

        <!-- All Destinations -->
        <div id="all" class="py-3">
          <?php
          $args = array(
            'post_type' => 'destinations',
            'posts_per_page' => -1,
          );
          $destination_query = new WP_Query($args);

          if ($destination_query->have_posts()) :
            while ($destination_query->have_posts()) : $destination_query->the_post();

              $region_terms = wp_get_post_terms(get_the_ID(), 'destination_regions');
              $region_name = !empty($region_terms) ? $region_terms[0]->name : '';

              $experience_terms = wp_get_post_terms(get_the_ID(), 'destination_experience_type');
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
                          <h3 class="text-black"><?php echo esc_html($region_name); ?></h3>

                          <div class="item_categories">
                            <?php foreach ($experience_terms as $term) : ?>
                              <span><?php echo esc_html($term->name); ?></span>
                            <?php endforeach; ?>
                          </div>

                          <p class="widget_text_teaser my-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                          </p>

                          <a class="read_more read_moreaaaa" href="<?php the_permalink(); ?>">
                            Read our <?php echo esc_html($region_name); ?> Honeymoon Guide
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
            echo '<p>No destinations found.</p>';
          endif;
          ?>
        </div>

        <!-- Each Experience Type Tab -->
        <?php foreach ($terms as $term) : ?>
          <div id="<?php echo esc_attr($term->slug); ?>" class="py-3 hidden">
            <?php
            $args = array(
              'post_type' => 'destinations',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'destination_experience_type',
                  'field'    => 'slug',
                  'terms'    => $term->slug,
                )
              ),
            );
            $term_query = new WP_Query($args);

            if ($term_query->have_posts()) :
              while ($term_query->have_posts()) : $term_query->the_post();

                $region_terms = wp_get_post_terms(get_the_ID(), 'destination_regions');
                $region_name = !empty($region_terms) ? $region_terms[0]->name : '';

                $experience_terms = wp_get_post_terms(get_the_ID(), 'destination_experience_type');
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
                            <h3 class="text-black"><?php echo esc_html($region_name); ?></h3>

                            <div class="item_categories">
                              <?php foreach ($experience_terms as $term) : ?>
                                <span><?php echo esc_html($term->name); ?></span>
                              <?php endforeach; ?>
                            </div>

                            <p class="widget_text_teaser my-3">
                              <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>

                            <a class="read_more read_moreaaaa" href="<?php the_permalink(); ?>">
                              Read our <?php echo esc_html($region_name); ?> Honeymoon Guide
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
              echo '<p>No destinations found in ' . esc_html($term->name) . '</p>';
            endif;
            ?>
          </div>
        <?php endforeach; ?>
      </div>
          </div>

           <!-- Destination section end -->
             <!-- Author section start -->
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
          <!-- Author section end -->
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
                href="#why-honeymoon-in-ubud"
                class=""
                >Why Honeymoon in Ubud?</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#cultural-capital-of-bali" class=""
                >Cultural Capital of Bali</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#explore-ubud" class=""
                >Explore Ubud</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#the-best-honeymoon-hotels-in-ubud"
                >The Best Honeymoon Hotels in Ubud</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#honeymoon-activities-in-ubud"
                >Honeymoon Activities in Ubud</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#romantic-dining-in-ubud"
                >Romantic Dining in Ubud</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#how-to-get-to-ubud"
                >How to get to Ubud</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#frequently-asked-questions"
                >Frequently Asked Questions</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#next-destinations"
                >Next Destinations</a
              >
            </li>
          </ul>
        </aside>
            </div>
        </div>
</section>
<?php get_footer(); ?>