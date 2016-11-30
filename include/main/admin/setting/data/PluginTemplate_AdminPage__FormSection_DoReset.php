<?php
/**
 * Plugin Template
 *
 * <PROGRAM_URI>
 * Copyright (c) <COPYRIGHT_YEARS> <COPYRIGHT_HOLDER>; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Reset' form section to the 'Manage Options' tab.
 *
 * @since    0.0.3
 */
class PluginTemplate_AdminPage__FormSection_DoReset extends PluginTemplate_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'do_reset',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Reset', 'plugin-template' ),
            'save'          => false,
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
                'field_id'          => 'reset_confirmation_check',
                'title'             => __( 'Reset Options', 'plugin-template' ),
                'type'              => 'checkbox',
                'label'             => __( 'I understand the options will be erased by pressing the reset button.', 'plugin-template' ),
                'save'              => false,
                'value'             => false,
            ),
            array(
                'field_id'          => 'reset',
                'type'              => 'submit',
                'reset'             => true,
                'skip_confirmation' => true,
                // 'show_title_column' => false,
                'value'             => __( 'Reset', 'plugin-template' ),
            )
        );

    }

    /**
     * Validates the submitted form data.
     *
     * @since    0.0.2
     */
    public function validate( $aInputs, $aOldInput, $oAdminPage, $aSubmitInfo ) {

        $_bVerified = true;
        $_aErrors   = array();

        // If the pressed button is not the one with the check box, do not set a field error.
        if ( 'reset' !== $aSubmitInfo[ 'field_id' ] ) {
            return $aInputs;
        }

        if ( ! $aInputs[ 'reset_confirmation_check' ] ) {

            $_bVerified = false;
            $_aErrors[ $this->sSectionID ][ 'reset_confirmation_check' ] = __( 'Please check the check box to confirm you want to reset the settings.', 'plugin-template' );

        }

        // An invalid value is found. Set a field error array and an admin notice and return the old values.
        if ( ! $_bVerified ) {
            $oAdminPage->setFieldErrors( $_aErrors );
            $oAdminPage->setSettingNotice( __( 'There was something wrong with your input.', 'plugin-template' ) );
            return $aOldInput;
        }

        return $aInputs;

    }

}