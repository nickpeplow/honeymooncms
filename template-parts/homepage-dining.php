<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>
<section class="container m-auto">
      <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <div class="md:col-span-9 md:pr-6">
		                <h2 id="romantic-dining-in-bali" class="mb-3 mt-8">
          Romantic Dining in Bali
        </h2>
        <p class="mt-3">
          In most countries, the Michelin Guide sets the record straight. It
          decides which restaurants deserve their famous stars. Unfortunately,
          they not operate in Bali or Indonesia. We believe they should! Bali
          offers
          <strong
            >world-class
            <a class="text-tertiary underline font-bold" href="#"
              >fine dining</a
            >
            experiences</strong
          >
          that can compete with some of the finest Michelin-starred restaurants
          out there.
        </p>
        <p class="mt-3">
          Most romantic fine dining restaurants can be found in
          <a class="text-tertiary underline font-bold" href="#">Ubud</a>
          and
          <a class="text-tertiary underline font-bold" href="#">Seminyak</a>.
          We’ve listed a few below. In Ubud, you can even find some options for
          romantic <strong>private dining</strong> surrounded by candlelights in
          a secluded location overlooking the jungle. The perfect dining
          experience for couples on their honeymoon!
        </p>
        <p class="mt-3">
          While
          <a class="text-tertiary underline font-bold" href="#">Canggu</a>
          and
          <a class="text-tertiary underline font-bold" href="#">Uluwatu</a>
          are not offering the same level of fine dining as Ubud or Seminyak,
          they offer a wide variety of <strong>healthy food</strong> and varied
          international dining options – likely to serve the health-conscious
          surfers staying in these places. Canggu is where you will likely be
          served the most “Instagram-worthy” plates of beautifully presented
          dishes.
        </p>
        <p class="mt-3">
          Don’t just stick to fancy food! You might like to splurge a little on
          your honeymoon. But don’t forget to try out the excellent
          <strong>local Balinese and Indonesian dishes</strong>. Bali is known
          for its pork dishes, including <em>Sate Babi</em> (grilled pork
          skewers) and <em>Babi Guling</em> (spicy dish made of suckling pig).
          <em>Ayam Betutu</em> is a delicious Balinese meal consisting of
          chicken and rice. Anywhere across Bali you will find <em>Warungs</em>,
          local family restaurants serving a wide variety of Indonesian dishes.
          Don’t know what to choose? Ask for <em>Nasi Campur</em>, a bowl of
          white rice surrounded by samples of the best dishes they have on
          offer.
        </p>
        <p class="my-8">
          If we had to pick our
          <strong>favorite honeymoon restaurants in Bali</strong>, these would
          be our picks:
        </p>
        <?php
$args = array(
  'post_type' => 'restaurant',
  'posts_per_page' => -1,
);

$restaurant_query = new WP_Query($args);

if ($restaurant_query->have_posts()) :
  while ($restaurant_query->have_posts()) : $restaurant_query->the_post();
    $restaurant_terms = wp_get_post_terms(get_the_ID(), 'restaurant_restaurant_type'); // Change taxonomy name if different
    $region_terms = wp_get_post_terms(get_the_ID(), 'restaurant_regions'); // Replace with your actual region taxonomy
    $region_name = !empty($region_terms) ? $region_terms[0]->name : '';
    $location = get_field('location'); // ACF field (optional)
    ?>
    <div class="flex flex-wrap lg:flex-nowrap mb-6">
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
        <div class="flex flex-col justify-center p-5 pl-3">
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
                    <span x-show="!expanded">
                      <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                    </span>
                    <span x-show="expanded">
                      <?php echo get_the_excerpt(); ?>
                    </span>
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
		</div>
	</div>
</section>