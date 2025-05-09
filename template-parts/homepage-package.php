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
$quick_guide_title  = get_field('quick_guide_title', $page_id);
$quick_guide_description = get_field('quick_guide_description', $page_id);
?>

      <!-- ===================== Services & Package Section Start ================== -->
        <?php if ($quick_guide_title): ?>
          <h2 id="the-cost-of-a-bali-honeymoon" class="mb-3 mt-8">
            <?php echo esc_html($quick_guide_title); ?>
          </h2>
        <?php endif; ?>
        <?php if ($quick_guide_description): ?>
          <p class="mb-3">
            <?php echo wpautop(wp_kses_post($quick_guide_description)); ?>
          </p>
        <?php endif; ?>
		
      <!-- ===================== Services & Package Section End ================== -->