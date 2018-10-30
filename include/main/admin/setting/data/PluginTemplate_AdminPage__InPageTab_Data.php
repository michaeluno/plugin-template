<?php
/**
 * Plugin Template
 *
 *
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 *
 */

/**
 * Adds the 'Manage Options' tab to the 'Settings' page of the loader plugin.
 *
 * @since    0.0.3
 * @extends  PluginTemplate_AdminPage__InPageTab_Base
 */
class PluginTemplate_AdminPage__InPageTab_Data extends PluginTemplate_AdminPage__InPageTab_Base {

    /**
     * @return      array
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'tab_slug'  => 'reset',
            'title'     => __( 'Reset', 'plugin-template' ),
        );
    }
    
    /**
     * Triggered when the tab is loaded.
     */
    protected function _load( $oFactory ) {

        // Form sections
        new PluginTemplate_AdminPage__FormSection_Export( $oFactory, $this->_sPageSlug, $this->_sTabSlug );
        new PluginTemplate_AdminPage__FormSection_Import( $oFactory, $this->_sPageSlug, $this->_sTabSlug );
        new PluginTemplate_AdminPage__FormSection_DoReset( $oFactory, $this->_sPageSlug, $this->_sTabSlug );
        new PluginTemplate_AdminPage__FormSection_Delete( $oFactory, $this->_sPageSlug, $this->_sTabSlug );

    }

    /**
     * @param $oFactory
     */
    protected function _do( $oFactory ) {
        echo "<div class='right-submit-button'>"
                . get_submit_button()
            . "</div>";
    }

}
