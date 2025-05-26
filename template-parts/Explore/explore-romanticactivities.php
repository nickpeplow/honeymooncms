<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>


<section class="flex flex-col container m-auto">
      <div
        class="container mx-auto flex justify-center items-start flex-col py-5"
      >
        <h1 class="text-black font-bold text-left mb-3 mt-5 ">
          50 ROMANTIC ACTIVITIES for a Unique Date in Bali ❤
        </h1>
        <p class="written-by text-left text-a">  
          Last updated Feb 17, 2025 by
          <a class="text-tertiary underline font-bold" href="/about-us/">Olivia &amp; Dirk</a>, based on our 7 years in
          Bali. We can help with
          <a class="text-tertiary underline font-bold" href="/services/bali-honeymoon-packages/">honeymoon packages</a>,
          <a class="text-tertiary underline font-bold" href="/services/unique-experiences/">experiences</a> and our
          <a class="text-tertiary underline font-bold" href="/services/honeymoon-planning/">planning service</a>.
        </p>
      </div>
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/romantic-activities.webp"
        class="rounded-lg w-full my-5"
      />
</section>

<section class="container m-auto">
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <div class="md:col-span-9 md:pr-5">
      <h2 id="sharing-our-favorite-romantic-spots-across-bali" class="mb-3">
    Sharing our favorite romantic spots across Bali…
</h2>
<p class="my-3">
    <p><strong>Looking for the perfect date idea in Bali? Or are you visiting the island with your partner, and looking for inspiration for unique romantic activities together? We got you covered with 50 ideas! We are a couple that lived in <a class="text-tertiary underline font-bold" href="/regions/canggu-honeymoon/">Canggu</a> and <a class="text-tertiary underline font-bold" href="/regions/ubud-honeymoon/">Ubud</a> for over 5 years, and we know all the romantic spots across the island, including some unique off-the-beaten path ideas!</strong></p>

    <p>Bali is a large island, and there are endless things to do depending on the region where you are staying. If you can’t find something suitable in the list below, we have written extensive articles with romantic ideas <a class="text-tertiary underline font-bold" href="/#bali-regions-and-map">for almost every region of Bali</a>. And if you are hungry after your date, we’ve listed <a class="text-tertiary underline font-bold" href="/explore/best-fine-dining-in-bali/">our favorite fine dining restaurants</a> too.</p>
</p>
<!-- Activities -->

  <h2 id="our-50-favorite-bali-date-ideas" class="mb-3 mt-5">
    Our 50 Favorite Bali Date Ideas!
</h2>
<p>Use the filters below to find the perfect romantic activity with your partner, your date, or during your honeymoon! In case you would like us to plan your honeymoon for you, we offer a <a class="text-tertiary underline font-bold" href="/services/honeymoon-planning/">Bali Honeymoon Planning Service</a> as well!</p>

<!-- Tabs -->
          <div class="tab-container mt-8">
            <div class="mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg pb-3">
        <p class="text-center font-bold p-3 pb-2">Plan your perfect Bali date!</p>

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
    <!-- Inspiration -->
     <h2 id="still-need-more-inspiration" class="mb-3 mt-5">
    Still need more inspiration?
</h2>
<p>We hope the list above helps you with planning a unique date! Still looking for more ideas? Our following articles might help you:</p>
<ul class="pl-5 list-disc mb-5">
<li class="pb-3">The best <a class="text-tertiary underline font-bold" href="/explore/best-bali-sunsets/">Sunset Spots</a> in Bali</li>
<li class="pb-3">Our favorite Bali <a class="text-tertiary underline font-bold" href="/explore/romantic-wellness-in-bali/">Wellness</a> (Saunas, Hot Springs, etc)</li>
<li class="pb-3"><a class="text-tertiary underline font-bold" href="/explore/best-bali-beach-clubs/">Beach Clubs</a> we enjoy visiting</li>
<li class="pb-3">Organized <a class="text-tertiary underline font-bold" href="/explore/best-bali-sunsets/">Day Trips</a> starting in South Bali</li>
<li class="pb-3">Unique <a class="text-tertiary underline font-bold" href="/explore/best-fine-dining-in-bali/">Fine Dining Restaurants</a></li>
<li class="pb-3">Secret <a class="text-tertiary underline font-bold" href="/explore/speakeasy-bars/">Speakeasy Cocktail Bars</a> in Canggu and Seminyak</li>
</ul>

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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/olivia-dirk.png" class="rounded-full w-full" />
          </div>
        </div>
        <p>
          We can help make your honeymoon perfect:<br />🧡 Check our
          <a class="text-tertiary underline font-bold" href="#">Bali honeymoon packages</a>
            for a stress-free romantic honeymoon.<br />🧡 Let us design a personalized
          <a class="text-tertiary underline font-bold" href="#">custom honeymoon itinerary</a>
            based on your interests.<br />🧡 Book
          <a class="text-tertiary underline font-bold" href="#">unique romantic experiences</a>
              with us.
        </p>
      </div>

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
                href="#sharing-our-favorite-romantic-spots-across-bali"
                class=""
                >Sharing our favorite romantic spots across Bali…</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#our-50-favorite-bali-date-ideas" class=""
                >Our 50 Favorite Bali Date Ideas!</a
              >
            </li>
            <li class="border-b">
              <a class="p-3 block text-a" href="#still-need-more-inspiration" class=""
                >Still need more inspiration?</a
              >
            </li>
          </ul>
        </aside>
     
     </div>
  </div>
</section>