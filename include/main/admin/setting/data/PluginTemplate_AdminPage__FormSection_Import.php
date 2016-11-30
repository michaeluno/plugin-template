<?php
/**
 * Plugin Template
 *
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Import' form section to the 'Manage Options' tab.
 *
 * @since    0.0.3
 */
class PluginTemplate_AdminPage__FormSection_Import extends PluginTemplate_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'import',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Import', 'plugin-template' ),
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
                'field_id'          => 'import_options',
                'title'             => __( 'Import Options', 'plugin-template' ),
                'type'              => 'import',
                'value'             => __( 'Upload Options', 'plugin-template' ),
                'save'              => false,
            )
        );

    }

}