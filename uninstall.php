<?php
/**
 * Cleans up the plugin options.
 *    
 * @package      Plugin Template
 * @copyright    Copyright (c) <COPYRIGHT_YEARS>, <[COPYRIGHT_HOLDER]>
 * @author       [COPYRIGHT_HOLDER]
 * @authorurl    [AUTHOR_URI]
 * @since        0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

/* 
 * Plugin specific constant. 
 * We are going to load the main file to get the registry class. And in the main file, 
 * if this constant is set, it will return after declaring the registry class.
 **/
if ( ! defined( 'DOING_PLUGIN_UNINSTALL' ) ) {
    define( 'DOING_PLUGIN_UNINSTALL', true  );
}

/**
 * Set the main plugin file name here.
 */
$_sMaingPluginFileName  = 'plugin-template.php';
if ( file_exists( dirname( __FILE__ ). '/' . $_sMaingPluginFileName ) ) {
   include( $_sMaingPluginFileName );
}

if ( ! class_exists( 'PluginTemplate_Registry' ) ) {
    return;
}

// 1. Delete transients
$_aPrefixes = array(
    PluginTemplate_Registry::TRANSIENT_PREFIX, // the plugin transients
    'apf_',      // the admin page framework transients
);
foreach( $_aPrefixes as $_sPrefix ) {
    if ( ! $_sPrefix ) { 
        continue; 
    }
    $GLOBALS['wpdb']->query( "DELETE FROM `" . $GLOBALS['table_prefix'] . "options` WHERE `option_name` LIKE ( '_transient_%{$_sPrefix}%' )" );
    $GLOBALS['wpdb']->query( "DELETE FROM `" . $GLOBALS['table_prefix'] . "options` WHERE `option_name` LIKE ( '_transient_timeout_%{$_sPrefix}%' )" );    
}

// 2. Delete plugin data
$_oOption  = FetchTweets_Option::getInstance();
if ( ! $_oOption->get( array( 'delete', 'delete_upon_uninstall' ) ) ) {
    return true;
}

// Options stored in the `options` table.
array_walk_recursive( 
    PluginTemplate_Registry::$aOptionKeys, // subject array
    'delete_option'   // function name
);

// Delete custom tables
forach( PluginTemplate_Registry::$aDatabaseTables as $_aTable ) {
    if ( ! class_exists( $_aTable[ 'class_name' ] ) ) {
        continue;
    }
    $_oTable  = new $_aTable[ 'class_name' ];
    if ( ! method_exists( $_oTable, 'uninstall' ) ) {
        continue;
    }
    $_oTable->uninstall();
}