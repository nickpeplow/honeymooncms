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
    <header class="sticky top-0 bg-whiteColor shadow-md md:shadow-none md:static z-40">
        <!-- ---------------- Info ------------- -->

        <!-- ---------------- Logo & Trust & CTA ------------- -->

        <div class="py-2.5 md:py-2">
            <div
                class="wrapper flex items-center flex-wrap justify-center lg:justify-between md:flex-wrap flex-col-reverse  md:flex-row">
                <!-- Logo -->
                <div class="flex justify-between md:hidden lg:hidden sm:hidden">
                    <a href="#" class="flex items-center gap-2 pe-4 border-e border-gray-200 md:gap-3 lg:gap-4">
                        <img class="flex-shrink-0 max-w-6 h-auto md:max-w-8 lg:max-w-10"
                            src="<?php echo THEME_ICON_URL; ?>/logo.png" alt="Locksmith Logo" />
                        <h2
                            class="flex-1 flex flex-col text-lg font-bold leading-none md:text-xl md:leading-none lg:text-2xl lg:leading-none">
                            <span class="text-base text-primary md:text-lg lg:text-xl">Aberdeen</span>
                            <span class="text-blackColor">Locksmith</span>
                        </h2>
                    </a>
                    <button class="text-2xl text-blackColor lg:hidden" id="menu-toggler">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="hidden md:block">
                    <a href="#" class="flex items-center gap-2 pe-4 border-e border-gray-200 md:gap-3 lg:gap-4">
                        <img class="flex-shrink-0 max-w-6 h-auto md:max-w-8 lg:max-w-10"
                            src="<?php echo THEME_ICON_URL; ?>/logo.png" alt="Locksmith Logo" />
                        <h2
                            class="flex-1 flex flex-col text-lg font-bold leading-none md:text-xl md:leading-none lg:text-2xl lg:leading-none">
                            <span class="text-base text-primary md:text-lg lg:text-xl">Aberdeen</span>
                            <span class="text-blackColor">Locksmith</span>
                        </h2>
                    </a>
                </div>
                <!-- Trust -->
                <div>
                    <div
                        class="flex-1 flex items-center justify-end gap-4 px-4 lg:ps-10 lg:pe-6 text-center lg:text-left ">

                        <a href="tel:01125125125"
                            class="text-1xl text-primary leading-none p-1 transition duration-200 hover:text-primary ">Login</a>
                        <h6 class="text-1xl  text-primary leading-none p-1 transition duration-200 hover:text-primary">
                            Call Us <a href="tel:01125125125"
                                class="text-1xl  text-primary leading-none p-1 transition duration-200 hover:text-primary">01125125125</a>
                        </h6>
                        <a href="tel:01125125125"
                            class="text-2xl  text-primary leading-none p-1 transition duration-200 hover:text-primary"
                            style="width:30px;color:#2d3e61;"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512 ">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg></a>



                    </div>


                    <nav class="hidden sticky top-0 z-50 md:block">
                        <div class="relative text-primary pt-px ">
                            <div class="wrapper">
                                <ul class="flex items-center font-raleway text-whiteColor">
                                    <li>
                                        <a href="#"
                                            class="text-primary inline-block py-2.5 px-4 transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Locksmith</a>
                                    </li>
                                    <li class="group">
                                        <div
                                            class="flex items-center gap-2 text-primary cursor-pointer py-2.5 px-4 transition-all duration-200 group-hover:bg-whiteColor group-hover:text-blackColor">
                                            <span>Locksmith Services</span>
                                            <span class="text-base">
                                                <svg class="svg-inline--fa fa-caret-down" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="caret-down"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-caret-down"></i> Font Awesome fontawesome.com -->
                                            </span>
                                        </div>

                                        <!-- ---------- Mega Menu ------------ -->
                                        <div
                                            class="absolute top-full bg-whiteColor left-0 w-full py-4 hidden group-hover:block shadow-md z-50">
                                            <div class="wrapper">
                                                <div class="grid grid-cols-3">
                                                    <!-- Genetal Links -->
                                                    <div class="col-span-2 text-blackColor pt-2.5">
                                                        <p class="font-bold mb-2.5">General Locksmith Services</p>
                                                        <ul class="grid grid-cols-2 gap-y-1 gap-x-4">
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>All Locksmith Services</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Non Destructive Entry</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Lock Changes &amp; Repairs</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Burglary Repairs</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex  text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Get a Quote</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Smart Locks</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Alarm Installation</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>HD CCTV Installation</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Security Surveys</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>How Safe is Your Neighbourhood?</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>All Locksmith Services</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Non Destructive Entry</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Lock Changes &amp; Repairs</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="inline-flex text-primary items-center gap-1.5 text-sm py-1 px-2 transition-all duration-200 hover:bg-tertiary">
                                                                    <span class="text-xs"><svg
                                                                            class="svg-inline--fa fa-arrow-right"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="arrow-right"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                                                            </path>
                                                                        </svg>
                                                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                                                                    <span>Burglary Repairs</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="flex items-center">
                                                        <img class="w-full h-auto" src="https://placehold.co/300x150"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wrapper font-sans border border-gray-200 py-4 mt-5 mb-2.5">
                                                <h3 class="text-center text-2xl font-semibold mb-3 text-blackColor">
                                                    Need a locksmith in Highcliffe right now? Call us for 24/7 locksmith
                                                    response
                                                </h3>

                                                <div class="flex items-center justify-center gap-0.5">
                                                    <a href="tel:01125125125"
                                                        class="text-2xl font-bold text-primary leading-none p-1 transition duration-200 hover:text-primary">01125125125</a>
                                                    <span class="text-gray-200 text-xl leading-none">│</span>

                                                    <a href="tel:01125125125"
                                                        class="text-2xl font-bold text-primary leading-none p-1 transition duration-200 hover:text-primary">01125125125</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#about"
                                            class="inline-block py-2.5 px-4 text-primary font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">About</a>
                                    </li>
                                    <li>
                                        <a href="#services"
                                            class="inline-block py-2.5 px-4 text-primary font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Services</a>
                                    </li>
                                    <li>
                                        <a href="#location"
                                            class="inline-block py-2.5 px-4 text-primary font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Locations</a>
                                    </li>
                                    <li>
                                        <a href="#contact"
                                            class="inline-block py-2.5 px-4 text-primary font-raleway transition-all duration-200 hover:bg-whiteColor hover:text-blackColor">Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>



                </div>
            </div>

        </div>
        <!-- ------ breadcrumb  -------- -->




        <nav aria-label="breadcrumb" class="w-full wrapper  ">
            <ol
                class="flex w-full flex-wrap items-center rounded-md bg-slate-50  py-2  xs:justify-center sm:justify-center">
                <li
                    class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800 ">
                    <a href="#">Home</a>
                    <span class="pointer-events-none mx-2 text-slate-800 px-4" Style="width: 45px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                        </svg>
                    </span>
                </li>
                <li
                    class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                    <a href="#">Components</a>
                    <span class="pointer-events-none mx-2 text-slate-800 px-4" Style="width: 45px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                        </svg>
                    </span>
                </li>
                <li
                    class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                    <a href="#">Breadcrumbs</a>
                </li>
            </ol>
        </nav>








        <!-- ------ breadcrumb  -------- -->


        <!-- ------ Mobile Menu -------- -->
        <nav class="nav-menu max-w-[340px] w-full max-h-dvh fixed top-[67px] bottom-0 right-0 py-5 px-6 bg-whiteColor border-t border-gray-200 overflow-y-auto z-40 md:hidden"
            id="nav-menu">
            <ul class="flex flex-col gap-1 font-raleway text-blackColor pb-4">
                <li>
                    <a href="#" class="menu-link block py-px">Locksmith</a>
                </li>
                <li>
                    <a href="#about" class="menu-link block py-px">About</a>
                </li>
                <li>
                    <a href="#services" class="menu-link block py-px">Services</a>
                </li>
                <li>
                    <a href="#location" class="menu-link block py-px">Locations</a>
                </li>
                <li>
                    <a href="#contact" class="menu-link block py-px">Contact Us</a>
                </li>

                <li class="ps-3">
                    <ul class="flex flex-col gap-1">
                        <p class="font-bold mt-2.5 mb-1.5 -ms-3">General Locksmith Services</p>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>All Locksmith Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Non Destructive Entry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Lock Changes & Repairs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Burglary Repairs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Get a Quote</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Smart Locks</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Alarm Installation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>HD CCTV Installation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>Security Surveys</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-link inline-flex items-center gap-1.5 py-px">
                                <span class="text-sm"><i class="fa-solid fa-arrow-right"></i></span>
                                <span>How Safe is Your Neighbourhood?</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="backdrop fixed inset-0 md:hidden z-30" id="backdrop"></div>
    <!-- ===================== Header End ================== -->


    <main>
        <!-- ===================== Hero Start ================== -->

        <section class="-mt-px">
            <div class="relative bg-banner bg-cover bg-no-repeat bg-center pb-2">
                <div class="absolute inset-0 bg-overlay"></div>
                <div class="wrapper pt-20 pb-8 relative z-20  md:pt-16 ">
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



                    <div class="lg:flex items-center gap-2.5 mt-8 sm:gap-4 text-center lg:text-left">
                        <a href="tel:01125125125"
                            class="inline-block py-2 px-4 text-lg font-medium text-whiteColor capitalize border border-orangeColor bg-orangeColor rounded-md transition-all duration-200 hover:bg-transparent hover:text-orangeColor">Start
                            your quote</a>

                    </div>
                </div>
            </div>


            </div>
            </div>
        </section>