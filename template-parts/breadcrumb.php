<?php
/**
 * Template part for displaying breadcrumb with structured data
 *
 * @package bali_honey_moon_static
 */

if (!is_front_page()) :
    $breadcrumb_list = []; // Array to hold the breadcrumb items
    $position = 1; // Position counter for breadcrumb items

    // Add the "Home" breadcrumb
    $breadcrumb_list[] = [
        "@type" => "ListItem",
        "position" => $position++,
        "name" => "Home",
        "item" => home_url()
    ];
    ?>

    <nav aria-label="breadcrumb" class="wrapper relative z-20">
        <ol class="flex w-full flex-wrap items-center justify-center lg:justify-start">
            <li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                <a href="<?php echo home_url(); ?>" class="text-whiteColor">Home</a>
                <span class="pointer-events-none mx-2 text-slate-800 px-4" style="width: 45px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                    </svg>
                </span>
            </li>

            <?php
            // Add category or parent page breadcrumbs
            if (is_category() || is_single()) :
                $category = get_the_category();
                if ($category) :
                    $breadcrumb_list[] = [
                        "@type" => "ListItem",
                        "position" => $position++,
                        "name" => $category[0]->cat_name,
                        "item" => get_category_link($category[0]->term_id)
                    ];
                    ?>
                    <li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                        <a href="<?php echo get_category_link($category[0]->term_id); ?>" class="text-whiteColor"><?php echo $category[0]->cat_name; ?></a>
                        <span class="pointer-events-none mx-2 text-slate-800 px-4" style="width: 45px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c-12.5-12.5-12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg>
                        </span>
                    </li>
                <?php endif;
            elseif (is_page()) :
                $ancestors = get_post_ancestors(get_the_ID());
                $ancestors = array_reverse($ancestors);
                foreach ($ancestors as $ancestor) :
                    $breadcrumb_list[] = [
                        "@type" => "ListItem",
                        "position" => $position++,
                        "name" => get_the_title($ancestor),
                        "item" => get_permalink($ancestor)
                    ];
                    ?>
                    <li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                        <a href="<?php echo get_permalink($ancestor); ?>" class="text-whiteColor"><?php echo get_the_title($ancestor); ?></a>
                        <span class="pointer-events-none mx-2 text-slate-800 px-4" style="width: 45px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c-12.5-12.5-12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg>
                        </span>
                    </li>
                <?php endforeach;
            endif;

            // Add the current page as the last breadcrumb
            $breadcrumb_list[] = [
                "@type" => "ListItem",
                "position" => $position,
                "name" => get_the_title(),
                "item" => get_permalink()
            ];
            ?>
            <li class="flex cursor-pointer items-center text-sm text-slate-500 transition-colors duration-300 hover:text-slate-800">
                <span class="text-whiteColor"><?php echo get_the_title(); ?></span>
            </li>
        </ol>
    </nav>

    <!-- Output JSON-LD structured data for breadcrumbs -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": <?php echo json_encode($breadcrumb_list, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
    }
    </script>

<?php endif; ?>
