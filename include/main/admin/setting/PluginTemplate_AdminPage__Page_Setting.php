<?php
/**
 * Plugin Template
 * 
 * <PROGRAM_URI>
 * Copyright (c) <COPYRIGHT_YEARS> <COPYRIGHT_HOLDER>; Licensed under <LICENSE_TYPE>
 * 
 */

/**
 * Adds the `Settings` page.
 * 
 * @since    0.0.1
 */
class PluginTemplate_AdminPage__Page_Setting extends PluginTemplate_AdminPage__Page_Base {

    /**
     * @param  $oFactory
     * @return array
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'page_slug'     => PluginTemplate_Registry::$aAdminPages[ 'setting' ],
            'title'         => __( 'Plugin Template', 'plugin-template' ),
            // 'screen_icon'   => PluginTemplate_Registry::getPluginURL( "asset/image/screen_icon_32x32.png" ),
        );
    }

    /**
     * A user constructor.
     * 
     * @since    0.0.3
     * @return   void
     */
    protected function _construct( $oFactory ) {
        
        // Tabs
        new PluginTemplate_AdminPage__InPageTab_Item( $oFactory, $this->_sPageSlug );
        new PluginTemplate_AdminPage__InPageTab_General( $oFactory, $this->_sPageSlug );
        new PluginTemplate_AdminPage__InPageTab_Data( $oFactory, $this->_sPageSlug );

    }   

}
