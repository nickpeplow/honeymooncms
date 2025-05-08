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
$section_title  = get_field('section_title', $page_id);
$section_intro = get_field('section_intro', $page_id);
$gallery_images_1 = get_field('gallery_images_1', $page_id);
$gallery_images_2 = get_field('gallery_images_2', $page_id);
$gallery_images_3 = get_field('gallery_images_3', $page_id);
$small_dscription = get_field('small_dscription', $page_id);
$explore_map_image = get_field('explore_map_image', $page_id);
$full_description = get_field('full_description', $page_id);
?>


        <?php if ($section_title): ?>
          <h2 id="indonesia-beyond-bali" class="mb-3 mt-8">
            <?php echo esc_html($section_title); ?>
          </h2>
          <?php endif; ?>
          <?php if ($section_intro): ?>
          <p class="mb-3">
            <?php echo wp_kses_post($section_intro); ?>
          </p>
          <?php endif; ?>
        <div class="grid grid-cols-3 gap-4 my-11">
          <div class="border border-white border-dashed rounded-lg">
          <?php if ($gallery_images_1): ?>
            <img
              src="<?php echo esc_url($gallery_images_1['url']); ?>" alt="<?php echo esc_attr($gallery_images_1['alt']); ?>"
              class="rounded-lg w-full"
            />
            <?php endif; ?>
            <p class="text-sm text-center pt-2">
              Komodo & Flores.
            </p>
          </div>
          <div class="border border-white border-dashed rounded-lg">
          <?php if ($gallery_images_2): ?>
            <img src="<?php echo esc_url($gallery_images_2['url']); ?>" alt="<?php echo esc_attr($gallery_images_2['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
            <p class="text-sm text-center pt-2">
              Raja Ampat.
            </p>
          </div>
          <div class="border border-white border-dashed rounded-lg">
          <?php if ($gallery_images_3): ?>
            <img
              src="<?php echo esc_url($gallery_images_3['url']); ?>" alt="<?php echo esc_attr($gallery_images_3['alt']); ?>"
              class="rounded-lg w-full"
            />
            <?php endif; ?>
            <p class="text-sm text-center pt-2">Mount Bromo.</p>
          </div>
        </div>
        <?php if ($small_dscription): ?>
          <p class="mb-3">
            <?php echo wp_kses_post($small_dscription); ?>
          </p>
        <?php endif; ?>
        <div class="border border-dotted p-3 my-5 border-color rounded-lg border-dashed">
          <?php if ($explore_map_image): ?>
            <img
              src="<?php echo esc_url($explore_map_image['url']); ?>" alt="<?php echo esc_attr($explore_map_image['alt']); ?>"
              class="rounded-lg w-full"
            />
          <?php endif; ?>
          <p class="text-center d-block text-sm text-center pt-2">
            Our favorite places to visit in Indonesia.
          </p>
        </div>
        <?php if ($full_description): ?>
        <ul class="pl-5 list-disc">
          <?php echo wp_kses_post($full_description); ?>
        </ul>
        <?php endif; ?>