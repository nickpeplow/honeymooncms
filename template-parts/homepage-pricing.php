<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>
<section class="py-8 lg:py-14 bg-grayLight">
  <div class="wrapper">
    <div class="max-w-5xl mx-auto text-center">
      <div class="flex flex-col-reverse">
        <h2 class="text-2xl text-center font-bold mb-3 md:text-3xl">
          Lorem ipsum dolor sit amet.
        </h2>
        <p class="uppercase text-lg font-bold text-orangeColor">Pricing & FAQ</p>
      </div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae rem hic!</p>
    </div>

    <div class="mt-8 flex flex-col gap-6 md:flex-row lg:mt-10 md:gap-4 lg:gap-5">
      <!-- Pricing -->
      <div class="w-full md:w-1/2">
        <h3 class="text-xl font-semibold lg:text-2xl">Service price list</h3>

        <div class="mt-3 bg-whiteColor p-4 rounded-md shadow-md">
          <ul class="">
            <li
              class="flex items-center gap-4 justify-between uppercase text-xs text-primary font-bold border-b border-gray-400 pb-2">
              <span>Service</span>
              <span>Price Starting at</span>
            </li>

            <!-- Pricing Item 1 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">Re-keying</span>
              <span class="text-lg font-semibold text-orangeColor">$19</span>
            </li>

            <!-- Pricing Item 2 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">House Lockout Service</span>
              <span class="text-lg font-semibold text-orangeColor">$29</span>
            </li>

            <!-- Pricing Item 3 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">Apartment Lockout Service</span>
              <span class="text-lg font-semibold text-orangeColor">$29</span>
            </li>

            <!-- Pricing Item 4 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">Car Lockout Service</span>
              <span class="text-lg font-semibold text-orangeColor">$29</span>
            </li>

            <!-- Pricing Item 5 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">Changing Locks</span>
              <span class="text-lg font-semibold text-orangeColor">$45</span>
            </li>

            <!-- Pricing Item 6 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">Car Key Making</span>
              <span class="text-lg font-semibold text-orangeColor">$90</span>
            </li>

            <!-- Pricing Item 7 -->
            <li class="flex items-center gap-4 justify-between border-b border-gray-400 py-2">
              <span class="flex-1">Transponder Key Programming</span>
              <span class="text-lg font-semibold text-orangeColor">$65</span>
            </li>
          </ul>

          <ul class="mt-4 list-disc list-inside">
            <li>No hidden fees guarantee</li>
            <li>Best price guarantee</li>
            <li>Insurance work acceptance</li>
          </ul>
        </div>
      </div>

      <div class="mb-2 flex justify-center md:hidden">
        <div class="max-w-md w-full flex flex-col items-center text-center">
          <a
            href="#contact"
            class="block w-full text-center py-2 px-4 text-lg uppercase font-medium text-whiteColor border border-orangeColor bg-orangeColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor">Contact Us Now</a>
          <h4 class="mt-1.5 mb-1 text-primary">Payment Methods Accepted</h4>
          <img
            class="max-w-[300px] w-full h-auto"
            src="<?php echo THEME_ICON_URL; ?>/payment-options.png"
            alt="Payment Options" />
        </div>
      </div>

      <!-- FAQ -->
      <div class="w-full md:w-1/2">
        <h3 class="text-xl font-semibold lg:text-2xl">How to select the best lock?</h3>
        <div class="mt-3 flex flex-col gap-2.5">
          <!-- FAQ 1 -->
          <div class="faq__item active bg-whiteColor rounded-md shadow-md">
            <div
              class="faq__item-header group flex items-center justify-between gap-3 py-3 px-4 cursor-pointer">
              <h4
                class="faq__item-title flex-1 text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-orangeColor">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h4>

              <button
                class="faq__item-button flex items-center justify-center w-6 h-6 text-sm transition-all duration-200 group-hover:text-orangeColor">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>

            <div class="faq__item-content overflow-hidden max-h-0s">
              <div class="border-t border-gray-100 py-2 px-4">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, eos! Itaque,
                  minus quasi consequuntur corrupti sapiente beatae necessitatibus nobis
                  laudantium!
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq__item bg-whiteColor rounded-md shadow-md">
            <div
              class="faq__item-header group flex items-center justify-between gap-3 py-3 px-4 cursor-pointer">
              <h4
                class="faq__item-title flex-1 text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-orangeColor">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h4>

              <button
                class="faq__item-button flex items-center justify-center w-6 h-6 text-sm transition-all duration-200 group-hover:text-orangeColor">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>

            <div class="faq__item-content overflow-hidden max-h-0s">
              <div class="border-t border-gray-100 py-2 px-4">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, eos! Itaque,
                  minus quasi consequuntur corrupti sapiente beatae necessitatibus nobis
                  laudantium!
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq__item bg-whiteColor rounded-md shadow-md">
            <div
              class="faq__item-header group flex items-center justify-between gap-3 py-3 px-4 cursor-pointer">
              <h4
                class="faq__item-title flex-1 text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-orangeColor">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h4>

              <button
                class="faq__item-button flex items-center justify-center w-6 h-6 text-sm transition-all duration-200 group-hover:text-orangeColor">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>

            <div class="faq__item-content overflow-hidden max-h-0s">
              <div class="border-t border-gray-100 py-2 px-4">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, eos! Itaque,
                  minus quasi consequuntur corrupti sapiente beatae necessitatibus nobis
                  laudantium!
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq__item bg-whiteColor rounded-md shadow-md">
            <div
              class="faq__item-header group flex items-center justify-between gap-3 py-3 px-4 cursor-pointer">
              <h4
                class="faq__item-title flex-1 text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-orangeColor">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h4>

              <button
                class="faq__item-button flex items-center justify-center w-6 h-6 text-sm transition-all duration-200 group-hover:text-orangeColor">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>

            <div class="faq__item-content overflow-hidden max-h-0s">
              <div class="border-t border-gray-100 py-2 px-4">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, eos! Itaque,
                  minus quasi consequuntur corrupti sapiente beatae necessitatibus nobis
                  laudantium!
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="faq__item bg-whiteColor rounded-md shadow-md">
            <div
              class="faq__item-header group flex items-center justify-between gap-3 py-3 px-4 cursor-pointer">
              <h4
                class="faq__item-title flex-1 text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-orangeColor">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h4>

              <button
                class="faq__item-button flex items-center justify-center w-6 h-6 text-sm transition-all duration-200 group-hover:text-orangeColor">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>

            <div class="faq__item-content overflow-hidden max-h-0s">
              <div class="border-t border-gray-100 py-2 px-4">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, eos! Itaque,
                  minus quasi consequuntur corrupti sapiente beatae necessitatibus nobis
                  laudantium!
                </p>
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="faq__item bg-whiteColor rounded-md shadow-md">
            <div
              class="faq__item-header group flex items-center justify-between gap-3 py-3 px-4 cursor-pointer">
              <h4
                class="faq__item-title flex-1 text-lg font-semibold leading-tight transition-all duration-300 group-hover:text-orangeColor">
                Lorem ipsum dolor sit amet consectetur adipisicing.
              </h4>

              <button
                class="faq__item-button flex items-center justify-center w-6 h-6 text-sm transition-all duration-200 group-hover:text-orangeColor">
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            </div>

            <div class="faq__item-content overflow-hidden max-h-0s">
              <div class="border-t border-gray-100 py-2 px-4">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, eos! Itaque,
                  minus quasi consequuntur corrupti sapiente beatae necessitatibus nobis
                  laudantium!
                </p>
              </div>
            </div>
          </div>
          <!-- FAQ item end -->
        </div>
      </div>
    </div>

    <div class="hidden mt-6 justify-center md:flex lg:mt-8">
      <div class="max-w-md w-full flex flex-col items-center text-center">
        <a
          href="#contact"
          class="block w-full text-center py-2 px-4 text-lg uppercase font-medium text-whiteColor border border-orangeColor bg-orangeColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor">Contact Us Now</a>
        <h4 class="mt-1.5 mb-1 text-primary">Payment Methods Accepted</h4>
        <img
          class="max-w-[300px] w-full h-auto"
          src="<?php echo THEME_ICON_URL; ?>/payment-options.png"
          alt="Payment Options" />
      </div>
    </div>
  </div>
</section>