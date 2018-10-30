<?php
/**
 * Plugin Template
 *
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Delete' form section to the 'Reset' tab.
 *
 * @since    0.0.3
 */
class PluginTemplate_AdminPage__FormSection_Delete extends PluginTemplate_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'delete',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Delete', 'plugin-template' ),
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
                'label'             => __( 'Delete plugin data upon plugin uninstall.', 'plugin-template' ),
            )
        );

    }

}