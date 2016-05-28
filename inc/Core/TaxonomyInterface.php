<?php

namespace Dhii\WpCodeReviews\Website\Reviews\Core;

/**
 * Generix taxonomy interface.
 * 
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface TaxonomyInterface extends EntityInterface
{
    
    /**
     * Gets the taxonomy slug name.
     * 
     * @return string
     */
    public function getSlug();
    
    /**
     * Gets the taxonomy labels.
     * 
     * @return array
     */
    public function getLabels();
    
    /**
     * Gets the taxonomy's related CPTs.
     * 
     * @return array
     */
    public function getCpts();
    
    /**
     * Gets the taxonomy configuration args.
     * 
     * @return array
     */
    public function getArgs();

}
