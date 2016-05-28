<?php

namespace Dhii\WpCodeReviews\Website\Reviews\Core;

/**
 * Generix Custom Post Type interface.
 * 
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface CptInterface extends EntityInterface
{
    
    /**
     * Gets the CPT slug name.
     * 
     * @return string
     */
    public function getSlug();
    
    /**
     * Gets the CPT labels.
     * 
     * @return array
     */
    public function getLabels();
    
    /**
     * Gets the CPT configuration args.
     * 
     * @return array
     */
    public function getArgs();

}
