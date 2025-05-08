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
$itineraries_title  = get_field('itineraries_title', $page_id);
$itineraries_description = get_field('itineraries_description', $page_id);
?>


<section class="container m-auto">
      <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <div class="md:col-span-9 md:pr-6">
        <?php if ($itineraries_title): ?>
		    <h2 id="best-bali-honeymoon-itineraries" class="mb-3 mt-8">
          <?php echo esc_html($itineraries_title); ?>
        </h2>
        <?php endif; ?>
        <?php if ($itineraries_description): ?>
          <?php echo wpautop(wp_kses_post($itineraries_description)); ?>
        <?php endif; ?>
    
            <!-- Tabs -->
          <div class="tab-container">
            <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3">What are you looking for?</p>

        <?php
        $terms = get_terms(array(
          'taxonomy'   => 'itineraries_itinerary_types',
          'hide_empty' => false,
        ));
        ?>

        <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
          <ul class="inline-flex pt-2 px-1 w-full gap-2 justify-center flex-wrap">
            <li class="px-3 pb-1 rounded-lg bg-white active-tab">
              <a id="default-tab" href="#eleven" class="text-sm font-bold">All Itineraries</a>
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
		</div>
	</div>
</section>