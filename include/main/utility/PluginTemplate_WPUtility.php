<?php
/**
 * Plugin Template
 * 
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]
 * 
 */

/**
 * Provides utility methods that uses WordPerss built-in functions.
 *
 * @package     Plugin Template
 * @since    0.0.1
 */
class PluginTemplate_WPUtility extends PluginTemplate_Utility {

    /**
     * Deletes transient items by prefix of a transient key.
     *
     * @since    0.0.1
     * @remark  for the deactivation hook. Also used by the Clear Caches submit button.
     */
    public static function cleanTransients( $asPrefixes=array( 'CSB' ) ) {

        // This method also serves for the deactivation callback and in that case, an empty value is passed to the first parameter.
        $_aPrefixes = is_array( $asPrefixes )
            ? $asPrefixes
            : ( array ) $asPrefixes;

        foreach( $_aPrefixes as $_sPrefix ) {
            $GLOBALS['wpdb']->query( "DELETE FROM `" . $GLOBALS['table_prefix'] . "options` WHERE `option_name` LIKE ( '_transient_%{$_sPrefix}%' )" );
            $GLOBALS['wpdb']->query( "DELETE FROM `" . $GLOBALS['table_prefix'] . "options` WHERE `option_name` LIKE ( '_transient_timeout_%{$_sPrefix}%' )" );
        }

    }

}