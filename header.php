<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bali_honey_moon_static
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- ===================== Header Start ================== -->
  <header class="bg-primary">
      <nav class="relative">
        <div class="container mx-auto flex justify-between items-center">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/balihoneymoonguide-logo-small.png"
            alt="Tailwindcss Navigation"
          />

          <ul class="hidden md:flex space-x-6 text-sm">
            <li class=" hidden lg:flex" style="background-color: rgba(0, 0, 0, 0.1)">
              <a href="#">Bali Honeymoon</a>
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Services </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-4">
                  <a
                    href="#"
                    title="Bali Honeymoon Packages crafted with care ❤️"
                    >Bali Honeymoon Packages<br /><small
                      >Book a complete romantic honeymoon 🌴</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Packages </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Regions </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Stay </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Explore </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Itineraries </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Beyond Bali </a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
            <li class="flex relative group ">
              <a href="#" class="mr-1">Info</a>
              <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
              <!-- Submenu starts -->
              <ul
                class="top-[80px] absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
              >
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a href="#" title="4+ Night Taste of Bali Honeymoon Package"
                    >Taste of Bali<br /><small>4+ Nights</small></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                    >Honeymoon Planning Service<br /><small
                      >We'll design your perfect itinerary 🧡</small
                    ></a
                  >
                </li>
                <li class="text-sm hover:bg-slate-100 leading-8">
                  <a
                    href="#"
                    title="Book Unique Bali Experiences for Couples Directly"
                    >Book Unique Experiences<br /><small
                      >Yachts, Helicopters and more 🍹</small
                    ></a
                  >
                </li>
              </ul>
              <!-- Submenu ends -->
            </li>
          </ul>

          <!-- Mobile menu icon -->
          <button id="mobile-icon" class="md:hidden">
            <i onclick="changeIcon(this)" class="fa-solid fa-bars"></i>
          </button>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden flex justify-center w-full">
          <div id="mobile-menu" class="mobile-menu absolute top-23 w-full">
            <!-- add hidden here later -->
            <ul class="bg-gray-100 shadow-lg leading-9 font-bold h-screen">

              <li class="flex relative group">
                <a href="#" class="mr-1">Services</a>
                <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
                <!-- Submenu starts -->
                <ul
                  class="relative bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
                >
                  <li class="text-sm hover:bg-slate-100 leading-8">
                    <a
                      href="#"
                      title="Bali Honeymoon Packages crafted with care ❤️"
                      >Bali Honeymoon Packages<br /><small
                        >Book a complete romantic honeymoon 🌴</small
                      ></a
                    >
                  </li>
                  <li class="text-sm hover:bg-slate-100 leading-8">
                    <a
                      href="#"
                      title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                      >Honeymoon Planning Service<br /><small
                        >We'll design your perfect itinerary 🧡</small
                      ></a
                    >
                  </li>
                  <li class="text-sm hover:bg-slate-100 leading-8">
                    <a
                      href="#"
                      title="Book Unique Bali Experiences for Couples Directly"
                      >Book Unique Experiences<br /><small
                        >Yachts, Helicopters and more 🍹</small
                      ></a
                    >
                  </li>
                </ul>
                <!-- Submenu ends -->
              </li>
              <li class="flex relative group">
                <a href="#" class="mr-1">Packages </a>
                <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
                <!-- Submenu starts -->
                <ul
                  class="absolute bg-white w-56 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg"
                >
                  <li class="text-sm hover:bg-slate-100 leading-8">
                    <a
                      href="#"
                      title="Bali Honeymoon Packages crafted with care ❤️"
                      >Bali Honeymoon Packages<br /><small
                        >Book a complete romantic honeymoon 🌴</small
                      ></a
                    >
                  </li>
                  <li class="text-sm hover:bg-slate-100 leading-8">
                    <a
                      href="#"
                      title="Personalized Bali Honeymoon Planning Service 🧡🌴"
                      >Honeymoon Planning Service<br /><small
                        >We'll design your perfect itinerary 🧡</small
                      ></a
                    >
                  </li>
                  <li class="text-sm hover:bg-slate-100 leading-8">
                    <a
                      href="#"
                      title="Book Unique Bali Experiences for Couples Directly"
                      >Book Unique Experiences<br /><small
                        >Yachts, Helicopters and more 🍹</small
                      ></a
                    >
                  </li>
                </ul>
                <!-- Submenu ends -->
              </li>
              <li
                class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"
              >
                <a href="#" class="block pl-7">About</a>
              </li>
              <li
                class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"
              >
                <a href="#" class="block pl-7">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

  <!-- ===================== Nav Menu End ================== -->