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
$intro_heading  = get_field('intro_heading', $page_id);
$intro_paragraph = get_field('intro_paragraph', $page_id);
?>

<!-- ===================== Introduction Start ================== -->
<section class="container m-auto">
      <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <div class="md:col-span-9 md:pr-6">
        <?php if ($intro_heading): ?>
		    <h2 id="bali-honeymoon-the-perfect-romantic-destination" class="mb-3">
        <?php echo esc_html($intro_heading); ?>
          </h2>
          <?php endif; ?>
          <?php if ($intro_paragraph): ?>
          <p class="my-3">
          <?php echo wp_kses_post($intro_paragraph); ?>
          </p>
          <?php endif; ?>
		</div>
	</div>
</section>