<?php

/**
 * Plugin Name: WPCR - Custom Post Types & Taxonomies.
 * Description: Custom Post Types and Taxonomies for the WP Code Reviews website.
 * Author: WP Code Reviews
 * Author URI: http://wpcodereviews.com
 * Version: 0.1
 */

use \Dhii\WpCodeReviews\Website\Reviews\Plugin;

// Load the autoloader - punz!
require_once implode(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);

// Activation/Deactivation hooks
register_activation_hook(__FILE__, array(wpcr(), 'onActivate'));
register_deactivation_hook(__FILE__, array(wpcr(), 'onActivate'));

/**
 * Gets the plugin singleton instance.
 * @staticvar Plugin $instance The singleton instance.
 * @return Plugin
 */
function wpcr()
{
    static $instance = null;
    return is_null($instance)
            ? $instance = new Plugin()
            : $instance;
}

wpcr()->hook();
