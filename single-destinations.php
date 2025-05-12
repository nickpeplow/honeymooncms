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
              echo '<p>No accomodations found for ' . esc_html($term->name) . '</p>';
            endif;
            ?>
          </div>
        <?php endforeach; ?>
      </div>
          </div>
                 <!-- Best Honeymoon Hotel section end -->
            </div>
            <div class="md:col-span-3 md:pl-3">
            </div>
        </div>
</section>
<?php get_footer(); ?>