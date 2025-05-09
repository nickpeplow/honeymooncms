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
$dining_title  = get_field('dining_title', $page_id);
$dining_description = get_field('dining_description', $page_id);
?>


        <?php if ($dining_title): ?>
          <h2 id="romantic-dining-in-bali" class="mb-3 mt-8">
          <?php echo esc_html($dining_title); ?>
          </h2>
        <?php endif; ?>
        <?php if ($dining_description): ?>
        <p class="mt-3">
          <?php echo wpautop(wp_kses_post($dining_description)); ?>
        </p>
        <?php endif; ?>
        <?php
$args = array(
  'post_type' => 'restaurant',
  'posts_per_page' => -1,
);

$restaurant_query = new WP_Query($args);

if ($restaurant_query->have_posts()) :
  while ($restaurant_query->have_posts()) : $restaurant_query->the_post();
    $restaurant_terms = wp_get_post_terms(get_the_ID(), 'restaurant_restaurant_type'); 
    $region_terms = wp_get_post_terms(get_the_ID(), 'restaurant_regions'); 
    $region_name = !empty($region_terms) ? $region_terms[0]->name : '';
    ?>
    <div class="flex flex-wrap lg:flex-nowrap">
      <div class="basis-1/3">
        <figure class="min-[280px]:w-1/1 p-2 relative">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'w-full h-[280px] min-[280px]:h-full object-cover rounded-lg']); ?>
          <?php else : ?>
            <img class="w-full h-[280px] object-cover rounded-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Placeholder">
          <?php endif; ?>
        </figure>
      </div>

      <div class="w-full lg:w-2/3">
        <div class="flex flex-col justify-center p-3 pl-3">
          <div class="flex justify-between mb-1">
            <header>
              <div class="font-caveat text-xl font-medium text-sky-500">
                <h3 class="text-black"><?php the_title(); ?>
                  <?php if ($region_name) : ?>
                    (<?php echo esc_html($region_name); ?>)
                  <?php endif; ?>
                </h3>

                <div class="item_categories mb-2 mt-2">
                  <?php foreach ($restaurant_terms as $term) : ?>
                    <span><?php echo esc_html($term->name); ?></span>
                  <?php endforeach; ?>
                </div>

                <?php if (!empty($location)) : ?>
                  <span class="location text-sm text-gray-500"><?php echo esc_html($location); ?></span>
                <?php endif; ?>

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
  <?php
  endwhile;
  wp_reset_postdata();
else :
  echo '<p>No restaurants found.</p>';
endif;
?>
        <p>
          For more restaurant ideas, check out our list of
          <a class="text-tertiary underline font-bold" href="#"
            >10 Best Fine Dining Restaurants in Bali</a
          >, with up-to-date menu prices.
        </p>