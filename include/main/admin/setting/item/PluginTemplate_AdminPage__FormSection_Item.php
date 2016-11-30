<?php
/**
 * Plugin Template
 *
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Items' form section to the 'Items' tab.
 *
 * @since   0.0.3
 * @extends PluginTemplate_AdminPage__FormSection_Base
 */
class PluginTemplate_AdminPage__FormSection_Item extends PluginTemplate_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'items3',
            'title'         => __( 'Items', 'plugin-template' ),
            'description'   => array(
                __( 'Define items.', 'plugin-template' ),
            ),
            'collapsible'       => array(
                'toggle_all_button' => array( 'top-left', 'bottom-left' ),
                'container'         => 'section',
                'is_collapsed'      => false,
            ),
            'repeatable'        => true, // this makes the section repeatable
            'sortable'          => true,
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
                'field_id'         => 'name',
                'type'             => 'section_title',
                'before_input'     => "<strong>"
                    . __( 'Name', 'plugin-template' )
                    . "</strong>:&nbsp; ",
                'attributes'       => array(
                    'style'         => 'min-width: 260px;',
                    'placeholder'   => __( 'Enter a scrollbar name', 'plugin-template' ),
                ),
            ),
            array(
                'field_id'         => 'status',
                'type'             => 'radio',
                'label'            => array(
                    1    => __( 'On', 'plugin-template' ),
                    0    => __( 'Off', 'plugin-template' ),
                ),
                'placement'        => 'section_title',
                'label_min_width'  => 0,
                'default'          => 1,
            ),
            array(
                'field_id'         => 'selector',
                'type'             => 'text',
                'title'            => __( 'Target Element Selector', 'plugin-template' ),
                'tip'              => "<p>"
                    . __( 'Define the CSS (jQuery) target selector of the element.', 'plugin-template' )
                    . ' e.g. <code>aside.widget</code>'
                    . "</p>"
                    . "<p>"
                    . __( 'For multiple selectors, delimit them by commas.', 'plugin-template' )
                    . ' e.g. <code>div.widget > ul, div.widget > div</code>'
                    . "</p>",
                'attributes'       => array(
                    'size'  => 52,
                ),
            ),
            array(
                'field_id'          => 'height',
                'type'              => 'size',
                'title'             => __( 'Element Height', 'plugin-template' ),
                'tip'               => __( 'The target element maximum height.', 'plugin-template' )
                    . ' ' . __( 'HTMNL elements that exceed this value will have a scrollbar.', 'plugin-template' ),
                'units'             => array(
                    'px'    => 'px',
                    '%'    => '%',
                ),
            ),
            array(
                'field_id'          => 'position',
                'type'              => 'radio',
                'title'             => __( 'Position', 'plugin-template' ),
                'label'             => array(
                    'inside'     => 'inside',
                    'outside'    => 'outside',
                ),
                'default'           => 'inside',
            ),
            array(
                'field_id'          => 'inline_css',
                'type'              => 'text',
                'title'             => __( 'Inline CSS', 'plugin-template' ),
                'label'             => array(
                    'property' => __( 'Property', 'plugin-template' ),
                    'value'    => __( 'Value', 'plugin-template' ),
                ),
                'attributes'        => array(
                    'field' => array(
                        'style' => 'width: 100%;'
                    ),
                ),
                'tip'               => "<p>"
                    . __( 'Apply these inline CSS rules to the target elements.', 'plugin-template' )
                    . ' e.g. ' . '<code>white-space</code>: <code>nowrap</code>'
                    . "</p>",
                'repeatable'        => true,
            ),
            array(
                'field_id'          => 'theme',
                'type'              => 'select',
                'title'             => __( 'Theme', 'plugin-template' ),
                'label'             => array(
                    'light'                 => __( 'Light', 'plugin-template' ),
                    'dark'                  => __( 'Dark', 'plugin-template' ),
                    'minimal'               => __( 'Minimal', 'plugin-template' ),
                    'minimal-dark'          => __( 'Minimal-Dark', 'plugin-template' ),
                    'light-2'               => __( 'Light 2', 'plugin-template' ),
                    'dark-2'                => __( 'Dark 2', 'plugin-template' ),
                    'light-3'               => __( 'Light 3', 'plugin-template' ),
                    'dark-3'                => __( 'Dark 3', 'plugin-template' ),
                    'light-thick'           => __( 'Light Thick', 'plugin-template' ),
                    'dark-thick'            => __( 'Dark Thick', 'plugin-template' ),
                    'light-thin'            => __( 'Light thin', 'plugin-template' ),
                    'dark-thin'             => __( 'Dark thin', 'plugin-template' ),
                    'inset'                 => __( 'Inset', 'plugin-template' ),
                    'inset-dark'            => __( 'Inset-Dark', 'plugin-template' ),
                    'inset-2'               => __( 'Inset 2', 'plugin-template' ),
                    'inset-2-dark'          => __( 'Inset 2 Dark', 'plugin-template' ),
                    'inset-3'               => __( 'Inset 3', 'plugin-template' ),
                    'inset-3-dark'          => __( 'Inset 3 Dark', 'plugin-template' ),
                    'rounded'               => __( 'Rounded', 'plugin-template' ),
                    'rounded-dark'          => __( 'Rounded Dark', 'plugin-template' ),
                    'rounded-dots'          => __( 'Rounded Dots', 'plugin-template' ),
                    'rounded-dots-dark'     => __( 'Rounded Dots Dark', 'plugin-template' ),
                    '3d'                    => __( '3D', 'plugin-template' ),
                    '3d-dark'               => __( '3D Dark', 'plugin-template' ),
                    '3d-thick'              => __( '3D Thick', 'plugin-template' ),
                    '3d-thick-dark'         => __( '3D Thick Dark', 'plugin-template' ),
                ),
                'default'           => 'light',
            ),
            array(
                'field_id'          => 'color',
                'type'              => 'color',
                'title'             => 'Color',
                'default'           => '',
            ),

            array()
        );

    }

}