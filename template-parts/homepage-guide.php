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
$map_title         = get_field('map_title', $page_id);
$small_description = get_field('small_description', $page_id);
$map_image         = get_field('map_image', $page_id);
$map_description   = get_field('map_description', $page_id);
?>

<section class="container m-auto">
      <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <div class="md:col-span-9 md:pr-6">
          <?php if ($map_title): ?>
		        <h2 id="bali-regions-and-map " class="mb-3 mt-8">
            <?php echo esc_html($map_title); ?>
          </h2>
          <?php endif; ?>
          <?php if ($small_description): ?>
          <p>
            <?php echo wp_kses_post($small_description); ?>
          </p>
          <?php endif; ?>
          <?php if ($map_image): ?>
          <div
            class="border border-dotted p-3 my-5 border-color rounded-lg border-dashed"
          >
            <img
              src="<?php echo esc_url($map_image['url']); ?>"
              class="rounded-lg w-full"
            />
            <p class="text-center d-block text-sm text-center pt-2">
              Map of Bali with 10 great places to visit during your honeymoon.
              Click to enlarge.
            </p>
          </div>
          <?php endif; ?>
          <?php if ($map_description): ?>
          <p class="mb-3">
          <?php echo wp_kses_post($map_description); ?>
          </p>
          <?php endif; ?>
		</div>
	</div>
</section>
<!-- ===================== Choose US End ================== -->