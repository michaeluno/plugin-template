<?php
/**
 * Plugin Template
 *
 * <PROGRAM_URI>
 * Copyright (c) <COPYRIGHT_YEARS> <COPYRIGHT_HOLDER>; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Export' form section to the 'Manage Options' tab.
 *
 * @since    0.0.3
 */
class PluginTemplate_AdminPage__FormSection_Export extends PluginTemplate_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'export',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Export', 'plugin-template' ),
        );
    }

    /**
     * Get adding form fields.
     * @since    0.0.3
     * @return   array
     */
    protected function _getFields( $oFactory ) {
        return array(
            array(
                'field_id'          => 'export_options',
                'title'             => __( 'Export Options', 'plugin-template' ),
                'type'              => 'export',
                'value'             => __( 'Download', 'plugin-template' ),
                'save'              => false,
            )
        );

    }

}