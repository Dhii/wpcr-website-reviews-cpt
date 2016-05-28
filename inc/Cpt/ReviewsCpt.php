<?php

namespace Dhii\WpCodeReviews\Website\Reviews\Cpt;

use \Dhii\WpCodeReviews\Website\Reviews\Core\CptInterface;

/**
 * Reviews custom post type.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
class ReviewsCpt implements CptInterface
{
    
    /**
     * {@inheritdoc}
     */
    public function getSlug()
    {
        return 'review';
    }
    
    /**
     * {@inheritdoc}
     */
    public function getLabels()
    {
        return array(
                'name'                  => __('Reviews', 'wpcrt'),
                'singular_name'         => __('Review', 'wpcrt'),
                'menu_name'             => __('Reviews', 'wpcrt'),
                'all_items'             => __('All reviews', 'wpcrt'),
                'add_new'               => __('Add new', 'wpcrt'),
                'add_new_item'          => __('Add new review', 'wpcrt'),
                'edit_item'             => __('Edit review', 'wpcrt'),
                'new_item'              => __('New review', 'wpcrt'),
                'view_item'             => __('View review', 'wpcrt'),
                'search_items'          => __('Search reviews', 'wpcrt'),
                'not_found'             => __('No reviews found', 'wpcrt'),
                'not_found_in_trash'    => __('No reviews found in trash', 'wpcrt'),
                'parent'                => __('Parent review', 'wpcrt'),
                'featured_image'        => __('Featured image for this review', 'wpcrt'),
                'set_featured_image'    => __('Set featured image for this review', 'wpcrt'),
                'remove_featured_image' => __('Remove featured image for this review', 'wpcrt'),
                'use_featured_image'    => __('Use as featured image for this review', 'wpcrt'),
                'archives'              => __('Review archives', 'wpcrt'),
                'insert_into_item'      => __('Insert into review', 'wpcrt'),
                'uploaded_to_this_item' => __('Upload to this review', 'wpcrt'),
                'filter_items_list'     => __('Filter reviews list', 'wpcrt'),
                'items_list_navigation' => __('Reviews list navigation', 'wpcrt'),
                'items_list'            => __('Reviews list', 'wpcrt'),
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function getArgs()
    {
        return array(
                'label'               => __('Reviews', 'wpcrt'),
                'labels'              => $this->getLabels(),
                'description'         => 'Code reviews for plugins and themes.',
                'public'              => true,
                'publicly_queryable'  => false,
                'show_ui'             => true,
                'show_in_rest'        => true,
                'rest_base'           => 'review',
                'has_archive'         => false,
                'show_in_menu'        => true,
                'exclude_from_search' => false,
                'capability_type'     => 'post',
                'map_meta_cap'        => true,
                'hierarchical'        => true,
                'rewrite'             => array(
                        'slug'       => 'review',
                        'with_front' => false
                ),
                'query_var'           => true,
                'menu_position'       => 5,
                'menu_icon'           => 'dashicons-awards',
                'supports'            => array(
                        'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        \register_post_type($this->getSlug(), $this->getArgs());
    }

}
