<?php

namespace Dhii\WpCodeReviews\Website\Reviews\Taxonomy;

use \Dhii\WpCodeReviews\Website\Reviews\Core\TaxonomyInterface;

/**
 * The Plugins taxonomy.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
class PluginsTaxonomy implements TaxonomyInterface
{

    /**
     * {@inheritdoc}
     */
    public function getSlug()
    {
        return 'plugin';
    }

    /**
     * {@inheritdoc}
     */
    public function getLabels()
    {
        return array(
                "name"          => __('Plugins', 'wpcrt'),
                "singular_name" => __('plugin', 'wpcrt'),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getCpts()
    {
        return array('review');
    }

    /**
     * {@inheritdoc}
     */
    public function getArgs()
    {
        return array(
                "label"              => __('Plugins', 'wpcrt'),
                "labels"             => $this->getLabels(),
                "public"             => true,
                "hierarchical"       => true,
                "label"              => "Plugins",
                "show_ui"            => true,
                "query_var"          => true,
                "rewrite"            => array('slug' => 'plugin', 'with_front' => true),
                "show_admin_column"  => false,
                "show_in_rest"       => false,
                "rest_base"          => "",
                "show_in_quick_edit" => true,
        );
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        \register_taxonomy($this->getSlug(), $this->getCpts(), $this->getArgs());
    }

}
