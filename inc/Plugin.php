<?php

namespace Dhii\WpCodeReviews\Website\Reviews;

/**
 * Main plugin class.
 */
class Plugin
{

    /**
     * Custom post types.
     * 
     * @var Core\CptInterface[]
     */
    protected $_cpts;

    /**
     * Taxonomies.
     * 
     * @var Core\TaxonomyInterface[]
     */
    protected $_taxonomies;

    /**
     * Constructs a new instance.
     */
    public function __construct()
    {
        $this->_cpts = [
                new Cpt\ReviewsCpt()
        ];
        $this->_taxonomies = [
                new Taxonomy\PluginsTaxonomy()
        ];
    }

    /**
     * Triggered on plugin activation.
     */
    public function onActivate()
    {
        \flush_rewrite_rules();
    }

    /**
     * Triggered on plugin deactivation.
     */
    public function onDeactivate()
    {
        
    }

    /**
     * Gets the custom post types.
     * 
     * @return Core\CptInterface[]
     */
    public function getCpts()
    {
        return $this->_cpts;
    }
    
    /**
     * Gets the taxonomies.
     * 
     * @return Core\TaxonomyInterface[]
     */
    public function getTaxonomies()
    {
        return $this->_taxonomies;
    }
    
    /**
     * Registers the Custom Post Types.
     * 
     * @return Plugin This instance.
     */
    public function registerCpts()
    {
        foreach ($this->getCpts() as $cpt) {
            $cpt->register();
        }
        return $this;
    }
    
    /**
     * Registers the taxonomies.
     * 
     * @return Plugin This instance.
     */
    public function registerTaxonomies()
    {
        foreach ($this->getTaxonomies() as $taxonomy) {
            $taxonomy->register();
        }
        return $this;
    }

    /**
     * Registers the hooks to WordPress.
     */
    public function hook()
    {
        \add_action('init', array($this,'registerCpts'));
        \add_action('init', array($this,'registerTaxonomies'));
    }

}
