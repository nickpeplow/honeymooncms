<?php
class CustomPostTypes {
    public function __construct() {
        add_action('init', [$this, 'register_post_types']);
    }

    public function register_post_types() {
        $post_types = [
            'destinations' => [
                'singular' => 'Destinations',
                'plural'   => 'Destinations',
                'args'     => [
                    'menu_icon' => 'dashicons-location-alt',
                ]
            ],
            'accomodations' => [
                'singular' => 'Accomodations',
                'plural'   => 'Accomodations',
                'args'     => [
                    'menu_icon' => 'dashicons-building',
                    'has_archive' => true,
                    'rewrite'     => ['slug' => 'accomodations'], // Optional for pretty URLs
                    'public'      => true,
                ]
            ],
            'activities' => [
                'singular' => 'Activities',
                'plural'   => 'Activities',
                'args'     => [
                    'menu_icon' => 'dashicons-universal-access-alt',
                ]
            ],
            'itineraries' => [
                'singular' => 'Itineraries',
                'plural'   => 'Itineraries',
                'args'     => [
                    'menu_icon' => 'dashicons-location',
                ]
            ],
            'services_packages' => [
                'singular' => 'Services and Packages',
                'plural'   => 'Services and Packages',
                'args'     => [
                    'menu_icon' => 'dashicons-hammer',
                ]
            ],
            'faqs' => [
                'singular' => 'Faqs',
                'plural'   => 'Faqs',
                'args'     => [
                    'menu_icon' => 'dashicons-editor-help',
                     'has_archive' => true,
                     'rewrite'     => ['slug' => 'faqs'],
                     'public'      => true,
                ]
            ],
            'restaurant' => [
                'singular' => 'Restaurant',
                'plural'   => 'Restaurant',
                'args'     => [
                    'menu_icon' => 'dashicons-carrot',
                ]
            ],
        ];

        foreach ($post_types as $key => $settings) {
            $labels = [
                'name'               => $settings['plural'],
                'singular_name'      => $settings['singular'],
                'add_new'            => 'Add New',
                'add_new_item'       => 'Add New ' . $settings['singular'],
                'edit_item'          => 'Edit ' . $settings['singular'],
                'new_item'           => 'New ' . $settings['singular'],
                'view_item'          => 'View ' . $settings['singular'],
                'search_items'       => 'Search ' . $settings['plural'],
                'not_found'          => 'No ' . strtolower($settings['plural']) . ' found',
                'not_found_in_trash' => 'No ' . strtolower($settings['plural']) . ' found in Trash',
                'menu_name'          => $settings['plural'],
            ];

            $args = array_merge([
                'labels'             => $labels,
                'public'             => true,
                'has_archive'        => true,
                'rewrite'            => ['slug' => $key],
                'supports'           => ['title', 'editor', 'thumbnail'],
                'show_in_rest'       => true,
            ], $settings['args']);

            register_post_type($key, $args);
        }
    }
}

// Initialize the class
new CustomPostTypes();
