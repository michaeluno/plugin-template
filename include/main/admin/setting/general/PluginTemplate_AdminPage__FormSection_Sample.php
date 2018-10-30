<?php
/**
 * Plugin Template
 *
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Sample' form section to the 'General' tab.
 *
 * @since    0.0.3
 */
class PluginTemplate_AdminPage__FormSection_Sample extends PluginTemplate_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'sample',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Sample', 'plugin-template' ),
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
                'field_id'          => 'delete_on_uninstall',
                'type'              => 'checkbox',
                'show_title_column' => false,
                'label'             => __( 'This is a checkbox', 'plugin-template' ),
            )
        );

    }

}