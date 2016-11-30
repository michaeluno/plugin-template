<?php
/**
 * Plugin Template
 *
 *
 * <PROGRAM_URI>
 * Copyright (c) <COPYRIGHT_YEARS> <COPYRIGHT_HOLDER>; Licensed under <LICENSE_TYPE>
 *
 */

/**
 * Adds the 'Items' tab to the 'Settings' page of the loader plugin.
 *
 * @since    0.0.3
 * @extends  PluginTemplate_AdminPage__InPageTab_Base
 */
class PluginTemplate_AdminPage__InPageTab_Item extends PluginTemplate_AdminPage__InPageTab_Base {

    /**
     * @return      array
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'tab_slug'  => 'items',
            'title'     => __( 'Items', 'plugin-template' ),
        );
    }
    
    /**
     * Triggered when the tab is loaded.
     */
    protected function _load( $oFactory ) {

        // Form sections
        new PluginTemplate_AdminPage__FormSection_Item(
            $oFactory,
            $this->_sPageSlug,
            $this->_sTabSlug
        );

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
