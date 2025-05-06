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
		                <h3 class="mb-3 mt-8">Bali Honeymoon Planning Tips</h3>
        <ul class="pl-5 list-disc">
          <li class="pb-3">
            <strong>Slow is fine:</strong> the itineraries listen above keep a
            reasonable pace to get the most out of your stay. If you prefer
            taking it slower, or have some more days at the beach, we suggest
            picking an itinerary that is shorter than the actual number of days
            you are planning to stay. We would <em>not</em> suggest doing these
            itineraries faster than the suggested speed.
          </li>
          <li class="pb-3">
            <strong>Everyone’s budget is different:</strong> As we specialize in
            honeymoon itineraries, we are suggesting quite a few high-end hotels
            in these itineraries. If you’d like to keep your holiday within
            budget, check out our list of great
            <a class="text-tertiary underline font-bold" href="#"
              >Affordable Bali Hotels</a
            >
            for couples. In addition, the
            <a class="text-tertiary underline font-bold" hhref="#"
              >14-day Budget Travelers itinerary</a
            >
            is written with budget-conscious travelers in mind.
          </li>
          <li class="pb-3">
            A <strong>late night arrival</strong> into Bali Denpasar Airport, or
            an early departure on the way back? Spend some time in
            <a class="text-tertiary underline font-bold" href="#">Seminyak</a>.
            It is conveniently located less than 30 minutes from the airport,
            and a great place to relax before or after a long flight.
            Alternatively check out the calm beach town of
            <a class="text-tertiary underline font-bold" href="#">Sanur</a>.
          </li>
          <li class="pb-3">
            There is more than beaches, explore the
            <strong>inner lands of Bali</strong> too!
            <a class="text-tertiary underline font-bold" href="#">Ubud</a>
            is an amazing jungle town that cannot be missed on any Bali
            honeymoon itinerary.
            <a class="text-tertiary underline font-bold" href="#">Sidemen</a>
            and
            <a class="text-tertiary underline font-bold" href="#">Munduk</a>
            are great regions to escape the crowds.
          </li>
          <li class="pb-3">
            Ideally do not plan your
            <a class="text-tertiary underline font-bold" href="#"
              >Nusa Penida</a
            >
            or
            <a class="text-tertiary underline font-bold" href="#"
              >Gili Islands</a
            >
            visit just before your flight back home. Sometimes the weather can
            result in <strong>ferry cancellations</strong>, meaning you might
            miss your flight.
          </li>
          <li class="pb-3">
            <strong>Day Trips</strong> are a great way to see remote parts of
            Bali without hauling your suitcases everywhere. We’ve collected a
            list of
            <a class="text-tertiary underline font-bold" href="#"
              >popular day trips</a
            >
            that you can take from South Bali, however it is usually easy to
            find taxi drivers that are willing to take you anywhere on the
            island - just make sure to agree on a price in advance. Oh, did you
            know you can even take a day trip to the island of Nusa Penida, or
            an epic 24-hour organized journey to the Iljen Volcano on the island
            of Java?
          </li>
        </ul>
        <h2 id="romantic-activities-in-bali" class="mb-3 mt-8">
          Romantic Activities in Bali
        </h2>
        <p class="mb-3">
          Bali has a wide range of romantic activities to enjoy with your
          partner. The island is large, so it really depends where you stay!
          Learn to dive together in
          <a class="text-tertiary underline font-bold" href="#">Amed</a>,
          explore Bali’s best beaches and sunsets around
          <a class="text-tertiary underline font-bold" href="#">Uluwatu</a>,
          watch Dolphins in
          <a class="text-tertiary underline font-bold" href="#">Lovina</a>,
          enjoy fine dining in
          <a class="text-tertiary underline font-bold" href="#">Seminyak</a>
          or discover a spectacular jungle together around
          <a class="text-tertiary underline font-bold" href="#">Ubud</a>. The
          options are endless…
        </p>
        <p class="mb-3">
          However if you would force us to choose, these are our
          <strong>favorite romantic activities</strong> that make a perfect Bali
          Honeymoon:
        </p>
        <?php
$args = array(
  'post_type' => 'activities',
  'posts_per_page' => -1,
);

$activities_query = new WP_Query($args);

if ($activities_query->have_posts()) :
  while ($activities_query->have_posts()) : $activities_query->the_post();
    $activity_terms = wp_get_post_terms(get_the_ID(), 'activities_activity_types');
    $region_terms = wp_get_post_terms(get_the_ID(), 'activities_regions'); // Replace 'region' with your actual taxonomy name
    $region_name = !empty($region_terms) ? $region_terms[0]->name : '';
    $location = get_field('location'); // Optional ACF field
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
                  <?php foreach ($activity_terms as $term) : ?>
                    <span><?php echo esc_html($term->name);?></span>
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
  echo '<p>No activities found.</p>';
endif;
?>
        <p class="mt-3">
          <strong
            >Check out our full list of
            <a class="text-tertiary underline font-bold" href="#"
              >30 Favorite Romantic Activities in Bali</a
            >
            Here!</strong
          >
        </p>
        <p class="mt-3">
          One of the most romantic activities in Bali is watching the sunset.
          There are many great sunset locations across Bali. Check our overview
          of
          <a class="text-tertiary underline font-bold" href="#"
            >The 10 Most Romantic Bali Sunsets</a
          >
          for a complete overview. Great spots to watch the sunset are beach
          clubs, and therefore we have listed our
          <a class="text-tertiary underline font-bold" href="#"
            >15 Favorite Beach Clubs in Bali</a
          >
          in a separate article.
        </p>
        <p class="mt-3">
          Another great activity for couples on a honeymoon in Bali is visiting
          a
          <a class="text-tertiary underline font-bold" href="#"
            >spa, sauna or hotspring</a
          >
          - we love it so much that we wrote this dedicated guide with our
          favorite spots. You’ll feel so refreshed afterwards!
        </p>
        <p class="mt-3">
          You don’t need to move from hotel to hotel to see most of Bali. A
          great way to explore the island without a lot of hassle is by booking
          one of the many
          <a class="text-tertiary underline font-bold" href="#"
            >Bali day trips</a
          >. They normally include pick-up and drop off at your hotel.
        </p>
		</div>
	</div>
</section>