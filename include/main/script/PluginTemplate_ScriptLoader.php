<?php
/**
 * Plugin Template
 * 
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]
 * 
 */

/**
 * Inserts custom CSS rules.
 * 
 * @since       0.0.1
 */
class PluginTemplate_ScriptLoader extends PluginTemplate_PluginUtility {
    
    /**
     * 
     */
    public $aScrollbars = array();
    public $oOption;
    
    /**
     * Sets up properties and hooks
     */
    public function __construct() {
        
        if ( defined( 'DOING_CRON' ) && DOING_CRON ) {
            return;
        }
        if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
            return;
        }
        
        $this->oOption     = PluginTemplate_Option::getInstance();
        $this->aScrollbars = $this->getAsArray( $this->oOption->get( 'items' ) );
        $this->aScrollbars = $this->_getFormattedScrollbarOptions(
            $this->aScrollbars
        );

        if ( count( $this->aScrollbars ) <= 0 ) {
            return;
        }        
        add_action( 'wp_enqueue_scripts', array( $this, 'replyToEnqueueScripts' ) );
        
    } 
        /**
         * @remark      Drops items with the Off status.
         * @return      array
         */
        private function _getFormattedScrollbarOptions( array $aScrollbars ) {
            foreach( $aScrollbars as $_iIndex => &$_aScrollbar ) {
                $_aScrollbar = $_aScrollbar + $this->oOption->aDefault[ 'items' ][ 0 ];
                if ( ! $_aScrollbar[ 'status' ] ) {
                    unset( $aScrollbars[ $_iIndex ] );
                }
            }
            return $aScrollbars;
        }
    /**
     * @callback        action      wp_enqueue_scripts
     */
    public function replyToEnqueueScripts() {

        $_iDebugMode = ( integer ) $this->oOption->isDebug();
      
        
        $_aFiles     = array(
            0 => '/main/asset/js/plugin-template-enabler.min.js',
            1 => '/main/asset/js/plugin-template-enabler.js',
        );
        $_sPath       = $_aFiles[ $_iDebugMode ];          
        wp_enqueue_script( 
            'plugin_template_enabler',     // handle id
            PluginTemplate_Registry::getPluginURL( $_sPath ), // script url
            array( 'malihu-plugin-template' ),   // dependencies
            '',     // version
            true    // in footer? yes
        );
        wp_localize_script( 
            'plugin_template_enabler',  // handle id - the above used enqueue handle id
            'plugin_template_enabler',  // name of the data loaded in the script
            $this->aScrollbars // translation array
        );         
        
    }
 
    
}