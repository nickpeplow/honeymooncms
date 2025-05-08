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

// Group 1
$highlight_title_1       = get_field('highlight_title_1', $page_id);
$highlight_description_1 = get_field('highlight_description_1', $page_id);
$highlight_image_1_1     = get_field('highlight_image_1_1', $page_id);
$highlight_image_1_2     = get_field('highlight_image_1_2', $page_id);
$highlight_image_1_3     = get_field('highlight_image_1_3', $page_id);

// Group 2
$highlight_title_2       = get_field('highlight_title_2', $page_id);
$highlight_description_2 = get_field('highlight_description_2', $page_id);
$highlight_image_2_1     = get_field('highlight_image_2_1', $page_id);
$highlight_image_2_2     = get_field('highlight_image_2_2', $page_id);
$highlight_image_2_3     = get_field('highlight_image_2_3', $page_id);


// Group 3
$highlight_title_3       = get_field('highlight_title_3', $page_id);
$highlight_description_3 = get_field('highlight_description_3', $page_id);
$highlight_image_3_1     = get_field('highlight_image_3_1', $page_id);
$highlight_image_3_2     = get_field('highlight_image_3_2', $page_id);
$highlight_image_3_3     = get_field('highlight_image_3_3', $page_id);
?>


        <?php if ($highlight_title_1 || $highlight_description_1): ?>
		        <h3 class="mb-3 mt-8"><?php echo esc_html($highlight_title_1); ?></h3>
          <p>
          <?php echo wp_kses_post($highlight_description_1); ?>
          </p>
          <div class="grid grid-cols-3 gap-4 my-11">
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_1_1): ?>
              <img src="<?php echo esc_url($highlight_image_1_1['url']); ?>" alt="<?php echo esc_attr($highlight_image_1_1['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Tropical Forest with Agung Volcano in the background.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_1_2): ?>
              <img src="<?php echo esc_url($highlight_image_1_2['url']); ?>" alt="<?php echo esc_attr($highlight_image_1_2['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Rice Terraces stacked vertically against a hill near Ubud.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_1_3): ?>
              <img src="<?php echo esc_url($highlight_image_1_3['url']); ?>" alt="<?php echo esc_attr($highlight_image_1_3['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Cliffs with a white-sand beach near Uluwatu.
              </p>
            </div>
          </div>
          <?php endif; ?>
          <?php if ($highlight_title_2 || $highlight_description_2): ?>
          <h3 class="mb-3 mt-8"><?php echo esc_html($highlight_title_2); ?></h3>
          <p>
          <?php echo wp_kses_post($highlight_description_2); ?>
          </p>
          <div class="grid grid-cols-3 gap-4 my-11">
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_2_1): ?>
              <img src="<?php echo esc_url($highlight_image_2_1['url']); ?>" alt="<?php echo esc_attr($highlight_image_2_1['alt']); ?>" class="rounded-lg w-full"/>
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Ulan Danu Temple on Beratan lake in central Bali.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_2_2): ?>
              <img src="<?php echo esc_url($highlight_image_2_2['url']); ?>" alt="<?php echo esc_attr($highlight_image_2_2['alt']); ?>" class="rounded-lg w-full" />
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Traditional Kecak Firedance near Uluwatu Temple.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_2_3): ?>
              <img src="<?php echo esc_url($highlight_image_2_3['url']); ?>" alt="<?php echo esc_attr($highlight_image_2_3['alt']); ?>" class="rounded-lg w-full"/>
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Lempuyang Temple overlooking the Agung volcano.
              </p>
            </div>
          </div>
          <?php endif; ?>
          <?php if ($highlight_title_3 || $highlight_description_3): ?>
          <h3 class="mb-3 mt-8"><?php echo esc_html($highlight_title_3); ?></h3>
          <p>
          <?php echo wp_kses_post($highlight_description_3); ?>
          </p>
          <div class="grid grid-cols-3 gap-4 my-11">
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_3_1): ?>
              <img src="<?php echo esc_url($highlight_image_3_1['url']); ?>" alt="<?php echo esc_attr($highlight_image_3_1['alt']); ?>" class="rounded-lg w-full"/>
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                Luxurious Viceroy hotel in Ubud.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_3_2): ?>
              <img src="<?php echo esc_url($highlight_image_3_2['url']); ?>" alt="<?php echo esc_attr($highlight_image_3_2['alt']); ?>" class="rounded-lg w-full"/>
            <?php endif; ?>
              <p class="text-sm text-center pt-2">
                La Brisa Beachclub in Canggu.
              </p>
            </div>
            <div class="border border-white border-dashed rounded-lg">
            <?php if ($highlight_image_3_3): ?>
              <img src="<?php echo esc_url($highlight_image_3_3['url']); ?>" alt="<?php echo esc_attr($highlight_image_3_3['alt']); ?>" class="rounded-lg w-full"/>
            <?php endif; ?>
              <p class="text-sm text-center pt-2">Karma Beach near Uluwatu.</p>
            </div>
          </div>
          <?php endif; ?>