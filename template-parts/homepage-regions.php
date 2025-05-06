<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>
<!-- ===================== Regions Start ================== -->
<section class="container m-auto">
      <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <div class="md:col-span-9 md:pr-6">
        <div class=" mb-4 bg-primary w-100 rounded-tl-lg rounded-tr-lg  pb-3">
          <p class="text-center font-bold p-3">What are you looking for?</p>
        <?php
$terms = get_terms(array(
  'taxonomy'   => 'destination_experience_type',
  'hide_empty' => false,
));

if (!empty($terms) && !is_wp_error($terms)) : ?>
  <ul class="tabs" class="flex justify-center gap-2">
    <li class="px-3 pb-1 rounded-lg bg-white active-tab">
      <a id="default-tab" href="#first" class="text-sm font-bold">All Regions</a>
    </li>
    <?php foreach ($terms as $term) : ?>
      <li class="px-3 pb-1 rounded-lg bg-white">
        <a href="#<?php echo esc_attr($term->slug); ?>" class="text-sm font-bold">
          <?php echo esc_html($term->name); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
<?php else : ?>
  <p>No Experience Types found.</p>
<?php endif; ?>
</div>
     
       <!-- Tab Contents -->
       <div class="tab-contents">
         <div id="first" class="py-3">
         <?php
$args = array(
  'post_type'      => 'destinations',
  'posts_per_page' => -1,
);

$destination_query = new WP_Query($args);

if ($destination_query->have_posts()) :
  while ($destination_query->have_posts()) : $destination_query->the_post();

    // Get region term (assuming one region per destination)
    $region_terms = wp_get_post_terms(get_the_ID(), 'destination_regions');
    $region_name = !empty($region_terms) ? $region_terms[0]->name : '';

    // Get experience type terms
    $experience_terms = wp_get_post_terms(get_the_ID(), 'destination_experience_type');
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
                <h3 class="text-black"><?php echo esc_html($region_name); ?></h3>
                
                <div class="item_categories">
                  <?php foreach ($experience_terms as $term) : ?>
                    <span><?php echo esc_html($term->name); ?></span>
                  <?php endforeach; ?>
                </div>
                
                <p class="widget_text_teaser my-3">
                <?php
                    $excerpt = get_the_excerpt();
                    echo wp_trim_words($excerpt, 20, '...');
                  ?>
                </p>
                
                <a class="read_more read_moreaaaa" href="<?php the_permalink(); ?>">
                  Read our <?php echo esc_html($region_name); ?> Honeymoon Guide
                </a>
              </div>
            </header>
          </div>
        </div>
      </div>
    </div>

  <?php endwhile;
  wp_reset_postdata();
else :
  echo '<p>No destinations found.</p>';
endif;
?>

          <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/uluwatu_bali.webp" alt="Tab 01">
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
                     <h3 class="text-black">Uluwatu</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/munduk_bali.webp" alt="Tab 01">
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
                     <h3 class="text-black">Munduk</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminyak_bali.webp" alt="Tab 01">
             </figure>
           </div>
           <div class="basis-2/3">
             <div class="flex flex-col justify-center p-5 pl-3">
               <div class="flex justify-between mb-1">
                 <header>
                   <div class="font-caveat text-xl font-medium text-sky-500">
                     <h3 class="text-black">Seminyak</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
         <div id="second" class="hidden py-3">
                <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
             </figure>
           </div>
           <div class="basis-2/3">
             <div class="flex flex-col justify-center p-5 pl-3">
               <div class="flex justify-between mb-1">
                 <header>
                   <div class="font-caveat text-xl font-medium text-sky-500">
                     <h3 class="text-black">Nusa Dua</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
         <div id="third" class="hidden py-3">
                <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
             </figure>
           </div>
           <div class="basis-2/3">
             <div class="flex flex-col justify-center p-5 pl-3">
               <div class="flex justify-between mb-1">
                 <header>
                   <div class="font-caveat text-xl font-medium text-sky-500">
                     <h3 class="text-black">Ubud</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
         <div id="fourth" class="hidden py-3">
              <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
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
                     <h3 class="text-black">Nusa Dua</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
     <div id="five" class="hidden py-3">
             <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
             </figure>
           </div>
           <div class="basis-2/3">
             <div class="flex flex-col justify-center p-5 pl-3">
               <div class="flex justify-between mb-1">
                 <header>
                   <div class="font-caveat text-xl font-medium text-sky-500">
                     <h3 class="text-black">Ubud</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="/regions/ubud-honeymoon/">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
     <div id="six" class="hidden py-3">
               <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
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
                     <h3 class="text-black">Nusa Dua</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="#">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
     <div id="seaven" class="hidden py-3">
               <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
             </figure>
           </div>
           <div class="basis-2/3">
             <div class="flex flex-col justify-center p-5 pl-3">
               <div class="flex justify-between mb-1">
                 <header>
                   <div class="font-caveat text-xl font-medium text-sky-500">
                     <h3 class="text-black">Ubud</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="#">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
     <div id="eight" class="hidden py-3">
          <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
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
                     <h3 class="text-black">Nusa Dua</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="#">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
     <div id="nine" class="hidden py-3">
          <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
             </figure>
           </div>
           <div class="basis-2/3">
             <div class="flex flex-col justify-center p-5 pl-3">
               <div class="flex justify-between mb-1">
                 <header>
                   <div class="font-caveat text-xl font-medium text-sky-500">
                     <h3 class="text-black">Ubud</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="#">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
     <div id="ten" class="hidden py-3">
             <div class="flex">
           <div class="basis-1/3">
             <figure class="min-[280px]:w-1/1 p-2 relative">
               <img class="w-full h-[280px] min-[280px]:h-full object-cover rounded-lg" width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/assets/images/ubud_bali.webp" alt="Tab 01">
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
                     <h3 class="text-black">Nusa Dua</h3>
                     <div class="item_categories">
                       <span class="">Luxury</span><span>Culture</span><span>Nature</span><span>Nightlife</span>
                     </div>
                     <p class="widget_text_teaser my-3">
                       Made famous by Eat Pray Love. Jungle, art, rice
                       fields, monkeys and spirituality.
                     </p>
                     <a class="read_more read_moreaaaa" href="#">Read our Ubud Honeymoon Guide</a>
                   </div>
                 </header>
               </div>
             </div>
           </div>
         </div>
         </div>
       </div>
		</div>
	</div>
</section>