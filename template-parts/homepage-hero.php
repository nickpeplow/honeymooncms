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
  <div class="relative bg-banner bg-cover bg-no-repeat bg-center">
    <div class="absolute inset-0 bg-overlay"></div>
    <div class="wrapper pt-20 pb-8 relative z-20 md:pb-4 md:pt-16 lg:pb-0">
      <div
        class="flex flex-col-reverse items-center text-center w-full text-whiteColor lg:text-left lg:items-start lg:w-1/2">
        <h1 class="text-lg max-w-xl lg:text-xl">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae similique sequi
          doloremque magnam praesentium dolore, laudantium quasi fuga veniam molestiae?
        </h1>
        <h2 class="flex flex-col text-3xl font-bold mb-4 sm:text-4xl lg:text-5xl">
          <span class="font-semibold text-lg mb-2 md:text-xl lg:text-2xl">Lorem ipsum</span>
          <span> Locksmith Services </span>
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

      <!-- Hero Review -->
      <div
        class="mt-4 flex justify-center lg:mt-0 lg:absolute lg:right-4 lg:top-[64px] lg:z-20">
        <div class="flex items-center gap-2 bg-whiteColor rounded-sm p-2 shadow-sm xs:p-3">
          <div
            class="flex items-center gap-px text-whiteColor text-xs leading-none md:text-sm">
            <span
              class="flex items-center justify-center w-5 h-5 bg-greenColor md:w-6 md:h-6">
              <i class="fa-solid fa-star"></i>
            </span>
            <span
              class="flex items-center justify-center w-5 h-5 bg-greenColor md:w-6 md:h-6">
              <i class="fa-solid fa-star"></i>
            </span>
            <span
              class="flex items-center justify-center w-5 h-5 bg-greenColor md:w-6 md:h-6">
              <i class="fa-solid fa-star"></i>
            </span>
            <span
              class="flex items-center justify-center w-5 h-5 bg-greenColor md:w-6 md:h-6">
              <i class="fa-solid fa-star"></i>
            </span>
            <span
              class="flex items-center justify-center w-5 h-5 bg-greenColor md:w-6 md:h-6">
              <i class="fa-solid fa-star"></i>
            </span>
          </div>
          <p class="flex-1 text-xs leading-tight xss:text-sm">
            Highcliffe locksmith rated <b class="text-greenColor">5/5</b>
          </p>
        </div>
      </div>
    </div>

    <!-- Hero Shape -->
    <div class="relative z-10">
      <div class="flex justify-end overflow-hidden">
        <svg
          class="-mb-1 min-w-[150%] w-full max-h-[110px] hero-shape"
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none">
          <path
            d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z"
            class="fill-primary"></path>
        </svg>
      </div>

      <div class="py-3 bg-primary md:pt-5 md:pb-6">
        <ul
          class="wrapper flex items-center justify-center flex-wrap gap-x-6 gap-y-2 text-sm text-whiteColor lg:gap-x-8 xl:gap-x-10">
          <li class="flex items-center gap-2 text-sm md:text-base">
            <span class="text-orangeColor text-xl">
              <i class="fa-solid fa-check"></i>
            </span>
            <span>Locksmiths Near You In Highcliffe</span>
          </li>
          <li class="flex items-center gap-2 text-sm md:text-base">
            <span class="text-orangeColor text-lg">
              <i class="fa-solid fa-house"></i>
            </span>
            <span>Home & Business</span>
          </li>
          <li class="flex items-center gap-2 text-sm md:text-base">
            <span class="text-orangeColor text-lg">
              <i class="fa-solid fa-ban"></i>
            </span>
            <span>No Call Out Fee</span>
          </li>
          <li class="flex items-center gap-2 text-sm md:text-base">
            <span class="text-orangeColor text-lg xl:text-xl">
              <i class="fa-regular fa-user"></i>
            </span>
            <span>DBS Checked</span>
          </li>
          <li class="flex items-center gap-2 text-sm md:text-base">
            <span class="text-orangeColor text-lg xl:text-xl">
              <i class="fa-regular fa-thumbs-up"></i>
            </span>
            <span>Work Guaranteed</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>