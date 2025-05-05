<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>

<section class="-mt-px">
  <div class="relative bg-banner bg-cover bg-no-repeat bg-center py-8">
    <div class="absolute inset-0 bg-overlay"></div>
        <!-- ------ breadcrumb  -------- -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- ------ breadcrumb  -------- -->

        <div class="wrapper py-8 relative z-20">
        <div
            class="flex flex-col-reverse items-center text-center w-full text-whiteColor lg:text-left lg:items-start lg:w-1/2">
            <h1 class="text-lg max-w-xl lg:text-xl">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae similique sequi
            doloremque magnam praesentium dolore, laudantium quasi fuga veniam molestiae?
            </h1>
            <h2 class="flex flex-col text-3xl font-bold mb-4 sm:text-4xl lg:text-5xl">
            <span class="font-semibold text-lg mb-2 md:text-xl lg:text-2xl">Lorem ipsum</span>
            <span> <?php echo get_the_title(); ?> </span>
            </h2>
        </div>

        <!-- CTA -->
        <div class="flex justify-center mt-8 lg:hidden">
            <a
            href="tel:01125125125"
            class="flex items-center gap-3 bg-primary px-6 py-2 rounded-full shadow-sm xss:py-3">
            <div class="hidden bg-size-100 bg-24-seven w-16 h-16 bg-no-repeat xss:block"></div>
            <div class="flex-1 text-center">
                <p class="text-2xl font-bold text-whiteColor xss:text-3xl">01125 125 125</p>
                <p class="uppercase text-yellowColor text-xs whitespace-nowrap">
                24/7 Locksmith Service Dedicated Line
                </p>
                <p class="uppercase font-bold text-xl text-center text-whiteColor">
                Click To Call
                </p>
            </div>
            </a>
        </div>

        <div class="hidden lg:flex items-center gap-2.5 mt-8 sm:gap-4">
            <a
            href="tel:01125125125"
            class="inline-block py-2 px-4 text-lg font-medium text-whiteColor capitalize border border-orangeColor bg-orangeColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor">Call (011) 2512-5125</a>
            <a
            href="#services"
            class="inline-block py-2 px-4 text-lg font-medium text-orangeColor capitalize border border-orangeColor bg-transparent rounded-md transition-all duration-200 hover:bg-orangeColor hover:text-whiteColor">Our Services</a>
        </div>
        </div>

  </div>
</section>