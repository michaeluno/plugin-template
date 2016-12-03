<?php
/**
 * Plugin Name:    Plugin Template
 * Plugin URI:     [PROGRAM_URI]
 * Description:    [PROGRAM_DESCRIPTION]
 * Author:         [COPYRIGHT_HOLDER]
 * Author URI:     [AUTHOR_URI]
 * Version:        0.0.3
 */

/**
 * Provides the basic information about the plugin.
 * 
 * @since    0.0.1       
 */
class PluginTemplate_Registry_Base {
 
    const VERSION        = '0.0.3';    // <--- DON'T FORGET TO CHANGE THIS AS WELL!!
    const NAME           = 'Plugin Template';
    const DESCRIPTION    = '[PROGRAM_DESCRIPTION]';
    const URI            = '[PROGRAM_URI]';
    const AUTHOR         = '[COPYRIGHT_HOLDER]';
    const AUTHOR_URI     = '[AUTHOR_URI]';
    const PLUGIN_URI     = '[PROGRAM_URI]';
    const COPYRIGHT      = 'Copyright (c) <COPYRIGHT_YEARS>, [COPYRIGHT_HOLDER]';
    const LICENSE        = '<COPYRIGHT_TYPE>';
    const CONTRIBUTORS   = '';
 
}

/**
 * Provides the common data shared among plugin files.
 * 
 * To use the class, first call the setUp() method, which sets up the necessary properties.
 * 
 * @package     Plugin Template
 * @since       0.0.1
*/
final class PluginTemplate_Registry extends PluginTemplate_Registry_Base {
    
    const TEXT_DOMAIN               = 'plugin-template';
    const TEXT_DOMAIN_PATH          = '/language';
    
    /**
     * The hook slug used for the prefix of action and filter hook names.
     * 
     * @remark      The ending underscore is not necessary.
     */    
    const HOOK_SLUG                 = 'pitml';    // without trailing underscore
    
    /**
     * The transient prefix. 
     * 
     * @remark      This is also accessed from uninstall.php so do not remove.
     * @remark      Up to 8 characters as transient name allows 45 characters or less ( 40 for site transients ) so that md5 (32 characters) can be added
     */    
    const TRANSIENT_PREFIX          = 'PITML';
    
    /**
     * 
     * @since       0.0.1
     */
    static public $sFilePath;  
    
    /**
     * 
     * @since       0.0.1
     */    
    static public $sDirPath;    
    
    /**
     * @since    0.0.1
     */
    static public $aOptionKeys = array(    
        'setting'           => 'plugin_template', 
    );

    /**
     * Represents the plugin options structure and their default values.
     * @var         array
     * @since       0.0.3
     */
    static public $aOptions = array(
        'delete'    => array(
            'delete_on_uninstall' => false,
        ),

        'css'       => array(
            'custom_css' => '',
        ),

        'items' => array(
            0   => array(
                'status'    => true,    // or false
                'name'      => '', // just a label for the user to remember
                'selector'  => '',
                'width'     => array(
                    'size'  => null,
                    'unit'  => null,
                ),
                'height'    => array(
                    'size'  => null,
                    'unit'  => null,
                ),
                'position'  => 'inside', // or outside

                'inline_css'    => array(), // 1.1+

                // @see http://manos.malihu.gr/repository/plugin-template/demo/examples/scrollbar_themes_demo.html
                'theme'     => 'light',

                // custom colors
                'mCSB_draggerContainer' => '',
                'mCSB_dragger'          => '',
                'mCSB_dragger_bar'      => '',
                'mCSB_draggerRail'      => '',
                'mCSB_scrollTools'      => '',

            ),
        ),
    );
        
    /**
     * Used admin pages.
     * @since    0.0.1
     */
    static public $aAdminPages = array(
        // key => 'page slug'        
        'setting'           => 'pitml_settings', 
    );
    
    /**
     * Used post types.
     */
    static public $aPostTypes = array(
    );
    
    /**
     * Used post types by meta boxes.
     */
    static public $aMetaBoxPostTypes = array(
    );
    
    /**
     * Used taxonomies.
     * @remark      
     */
    static public $aTaxonomies = array(
    );
    
    /**
     * Used shortcode slugs
     */
    static public $aShortcodes = array(
    );

    /**
     * Stores custom database table names.
     * @remark      The below is the structure
     * array(
     *      'slug (part of database wrapper class file name)' => array(
     *          'version'   => '0.1',
     *          'name'      => 'table_name',    // serves as the table name suffix
     *      ),
     *      ...
     * )
     * @since       0.0.3
     */
    static public $aDatabaseTables = array(
        // 'ft_tweets'        => array(
        // 'name'              => 'ft_tweets', // serves as the table name suffix
        // 'version'           => '0.0.1',
        // 'across_network'    => true,
        // 'class_name'        => 'FetchTweets_DatabaseTable_ft_tweets',
        // ),
//        'ft_http_requests' => array(
//            'name'              => 'ft_http_requests',  // serves as the table name suffix
//            'version'           => '0.0.1',
//            'across_network'    => true,
//            'class_name'        => 'FetchTweets_DatabaseTable_ft_http_requests',
//        ),
    );
    
    /**
     * Sets up class properties.
     * @return      void
     */
    static function setUp( $sPluginFilePath ) {
        self::$sFilePath = $sPluginFilePath; 
        self::$sDirPath  = dirname( self::$sFilePath );  
    }    
    
    /**
     * @return      string
     */
    public static function getPluginURL( $sRelativePath='' ) {
        if ( isset( self::$_sPluginURLCache ) ) {
            return self::$_sPluginURLCache . $sRelativePath;
        }
        self::$_sPluginURLCache = trailingslashit( plugins_url( '', self::$sFilePath ) );
        return self::$_sPluginURLCache . $sRelativePath;
    }
        /**
         * @since    0.0.1.1.6
         */
        static private $_sPluginURLCache;

    /**
     * Requirements.
     * @since    0.0.1
     */    
    static public $aRequirements = array(
        'php' => array(
            'version'   => '5.2.4',
            'error'     => 'The plugin requires the PHP version %1$s or higher.',
        ),
        'wordpress'         => array(
            'version'   => '3.4',
            'error'     => 'The plugin requires the WordPress version %1$s or higher.',
        ),
        // 'mysql'             => array(
            // 'version'   => '5.0.3', // uses VARCHAR(2083) 
            // 'error'     => 'The plugin requires the MySQL version %1$s or higher.',
        // ),
        'functions'     => '', // disabled
        // array(
            // e.g. 'mblang' => 'The plugin requires the mbstring extension.',
        // ),
        // 'classes'       => array(
            // 'DOMDocument' => 'The plugin requires the DOMXML extension.',
        // ),
        'constants'     => '', // disabled
        // array(
            // e.g. 'THEADDONFILE' => 'The plugin requires the ... addon to be installed.',
            // e.g. 'APSPATH' => 'The script cannot be loaded directly.',
        // ),
        'files'         => '', // disabled
        // array(
            // e.g. 'home/my_user_name/my_dir/scripts/my_scripts.php' => 'The required script could not be found.',
        // ),
    );

}
PluginTemplate_Registry::setUp( __FILE__ );

// Do not load if accessed directly. Not exiting here because other scripts will load this main file such as uninstall.php and inclusion list generator
// and if it exists their scripts will not complete.
if ( ! defined( 'ABSPATH' ) ) {
    return;
}

include( dirname( __FILE__ ).'/include/library/apf/admin-page-framework.php' );
include(dirname(__FILE__) . '/include/PluginTemplate_Bootstrap.php');
new PluginTemplate_Bootstrap(
    PluginTemplate_Registry::$sFilePath,
    PluginTemplate_Registry::HOOK_SLUG    // hook prefix    
);