<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bali_honey_moon_static
 */

?>      
      <!-- ===================== Contact Start ================== -->
      <section class="py-8 lg:py-14" id="contact">
        <div class="wrapper">
          <div class="max-w-5xl mx-auto text-center">
            <div class="flex flex-col-reverse">
              <h2 class="text-2xl text-center font-bold mb-3 md:text-3xl">
                Lorem ipsum dolor sit amet.
              </h2>
              <p class="uppercase text-lg font-bold text-orangeColor">Contact US</p>
            </div>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae rem hic commodi dolore
              dolorem esse!
            </p>
          </div>

          <div
            class="mt-8 grid grid-cols-1 gap-3 xs:grid-cols-2 lg:grid-cols-3 lg:mt-10 md:gap-4 lg:gap-5"
          >
            <div
              class="flex items-center gap-2 bg-grayLight rounded-md shadow-md py-2 px-3 md:gap-4 md:py-3 md:px-5"
            >
              <span class="text-2xl text-orangeColor md:text-3xl">
                <i class="fa-solid fa-location-dot"></i>
              </span>
              <address>
                241 Badminton Road, <br />
                Downend, Bristol, BS166NR
              </address>
            </div>

            <div
              class="flex items-center gap-2 bg-grayLight rounded-md shadow-md py-2 px-3 md:gap-4 md:py-3 md:px-5"
            >
              <span class="text-2xl text-orangeColor md:text-3xl">
                <i class="fa-solid fa-phone"></i>
              </span>
              <div class="flex flex-col">
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="tel:01125125125"
                  >01125 125 125</a
                >
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="tel:01125125125"
                  >01125 125 125</a
                >
              </div>
            </div>

            <div
              class="flex items-center gap-2 bg-grayLight rounded-md shadow-md py-2 px-3 xs:col-span-2 sm:col-span-1 md:gap-4 md:py-3 md:px-5"
            >
              <span class="text-2xl text-orangeColor md:text-3xl">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <div class="flex flex-col">
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="mailto:info@locksmithlock.co.uk"
                >
                  info@locksmithlock.co.uk
                </a>
                <a
                  class="inline-block transition-all duration-200 hover:text-orangeColor"
                  href="mailto:support@locksmithlock.co.uk"
                >
                  support@locksmithlock.co.uk
                </a>
              </div>
            </div>
          </div>

          <div
            class="mt-3 flex flex-col gap-4 bg-grayLight rounded-md shadow-md p-4 md:flex-row md:gap-0 md:mt-4 lg:mt-5"
          >
            <div class="w-full md:w-1/2 md:pe-2">
              <iframe
                class="border border-gray-200 rounded-md min-h-60 h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7687.115623138421!2d-0.0723871134293148!3d51.49504916499399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sid!4v1729478758432!5m2!1sen!2sid"
                width="100%"
                height="100%"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>

            <div class="w-full md:w-1/2 md:ps-2">
              <form class="w-full">
                <div
                  class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 sm:gap-2 md:grid-cols-1 md:gap-4 lg:grid-cols-2 lg:gap-2"
                >
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="name">Name</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="text"
                      id="name"
                      name="name"
                    />
                  </div>
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="email">E-Mail</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="text"
                      id="email"
                      name="email"
                    />
                  </div>
                </div>
                <div
                  class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 sm:gap-2 md:grid-cols-1 md:gap-4 lg:grid-cols-2 lg:gap-2"
                >
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="phone">Phone</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="tel"
                      id="phone"
                      name="phone"
                    />
                  </div>
                  <div class="flex flex-col gap-1">
                    <label class="text-sm" for="subject">Subject</label>
                    <input
                      class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor"
                      type="text"
                      id="subject"
                      name="subject"
                    />
                  </div>
                </div>
                <div class="flex flex-col gap-1 mb-4">
                  <label class="text-sm" for="message">Message</label>
                  <textarea
                    class="py-2 px-3 text-base rounded-md border border-gray-200 focus:outline-none focus:border-orangeColor resize-y min-h-40"
                    name="message"
                    id="message"
                  ></textarea>
                </div>

                <div class="mb-4">
                  <input class="w-4" type="checkbox" id="updates" name="updates" />
                  <label class="text-sm" for="updates"
                    >I consent to Williams Locks contacting me in the future with news, service
                    information and other updates</label
                  >
                </div>

                <div>
                  <button
                    type="submit"
                    class="py-1.5 px-4 border border-orangeColor bg-orangeColor text-whiteColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ===================== Contact End ================== -->