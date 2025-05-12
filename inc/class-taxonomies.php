<?php
class CustomTaxonomies {
    public function __construct() {
        add_action('init', [$this, 'register_taxonomies']);
    }

    public function register_taxonomies() {
        $taxonomies = [
            'destination_regions' => [
                'singular'     => 'Regions',
                'plural'       => 'Regions',
                'post_types'   => ['destinations'],
                'hierarchical' => true,
                'args'         => []
            ],
            'destination_experience_type' => [
                'singular'     => 'Experience Type',
                'plural'       => 'Experience Type',
                'post_types'   => ['destinations'],
                'hierarchical' => true,
                'args'         => []
            ],
            'accomodations_regions' => [
                'singular'     => 'Regions',
                'plural'       => 'Regions',
                'post_types'   => ['accomodations'],
                'hierarchical' => true,
                'args'         => []
            ],
            'accomodations_price_range' => [
                'singular'     => 'Price Range',
                'plural'       => 'Price Range',
                'post_types'   => ['accomodations'],
                'hierarchical' => true,
                'args'         => []
            ],
            'accomodations_accomodation_types' => [
                'singular'     => 'Accomodation Types',
                'plural'       => 'Accomodation Types',
                'post_types'   => ['accomodations'],
                'hierarchical' => true,
                'args'         => []
            ],
            'activities_regions' => [
                'singular'     => 'Regions',
                'plural'       => 'Regions',
                'post_types'   => ['activities'],
                'hierarchical' => true,
                'args'         => []
            ],
            'activities_price_range' => [
                'singular'     => 'Price Range',
                'plural'       => 'Price Range',
                'post_types'   => ['activities'],
                'hierarchical' => true,
                'args'         => []
            ],
            'activities_activity_types' => [
                'singular'     => 'Activity Types',
                'plural'       => 'Activity Types',
                'post_types'   => ['activities'],
                'hierarchical' => true,
                'args'         => []
            ],
            'itineraries_itinerary_types' => [
                'singular'     => 'Itinerary Types',
                'plural'       => 'Itinerary Types',
                'post_types'   => ['itineraries'],
                'hierarchical' => true,
                'args'         => []
            ],
            'restaurant_regions' => [
                'singular'     => 'Regions',
                'plural'       => 'Regions',
                'post_types'   => ['restaurant'],
                'hierarchical' => true,
                'args'         => []
            ],
            'restaurant_restaurant_type' => [
                'singular'     => 'Restaurant Type',
                'plural'       => 'Restaurant Type',
                'post_types'   => ['restaurant'],
                'hierarchical' => true,
                'args'         => []
            ],
        ];

        foreach ($taxonomies as $key => $settings) {
            $labels = [
                'name'              => $settings['plural'],
                'singular_name'     => $settings['singular'],
                'search_items'      => 'Search ' . $settings['plural'],
                'all_items'         => 'All ' . $settings['plural'],
                'parent_item'       => $settings['hierarchical'] ? 'Parent ' . $settings['singular'] : null,
                'parent_item_colon' => $settings['hierarchical'] ? 'Parent ' . $settings['singular'] . ':' : null,
                'edit_item'         => 'Edit ' . $settings['singular'],
                'update_item'       => 'Update ' . $settings['singular'],
                'add_new_item'      => 'Add New ' . $settings['singular'],
                'new_item_name'     => 'New ' . $settings['singular'] . ' Name',
                'menu_name'         => $settings['plural'],
            ];

            $args = array_merge([
                'labels'            => $labels,
                'public'            => true,
                'hierarchical'      => $settings['hierarchical'],
                'show_in_rest'      => true,
                'show_admin_column' => true,
                'rewrite'           => ['slug' => $key],
            ], $settings['args']);

            register_taxonomy($key, $settings['post_types'], $args);
        }
    }
}

// Initialize the class
new CustomTaxonomies();
