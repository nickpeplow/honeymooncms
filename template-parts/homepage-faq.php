<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>

		    <h2 id="frequently-asked-questions" class="mb-3 mt-8">
			  Frequently Asked Questions
			</h2>
			<section class="text-gray-700">
            <div class="container mx-auto">
              <div class="flex flex-wrap sm:mx-auto sm:mb-2 -mx-2">

          <?php
            $args = array(
                'post_type' => 'faqs',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="w-full pt-2 lg:pb-2">
                  <details class="mb-4 border rounded-lg border-color">
                    <summary
                      class="font-semibold bg-brown rounded-md py-2 px-4 flex items-center gap-2.5 text-black"
                    >
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/questionmark.png"
                        class=""
                        style="width: 20px; height: 20px"
                      />
                      <?php the_title(); ?>
                    </summary>

                    <span class="p-3 block">
                        <?php the_content(); ?>
                    </span>
                  </details>
                </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
          ?>
              </div>
            </div>
          </section>
		