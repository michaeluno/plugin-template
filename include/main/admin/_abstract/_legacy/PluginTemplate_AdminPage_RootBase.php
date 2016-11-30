<?php
/**
 * Plugin Template
 * 
 * [AUTHOR_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 */

/**
 * Provides an abstract base for bases.
 * 
 * @since    0.0.1
 */
abstract class PluginTemplate_AdminPage_RootBase {
    
    /**
     * Stores callback method names.
     * 
     * @since   3
     */
    protected $aMethods = array(
        'replyToLoadPage',
        'replyToDoPage',
        'replyToDoAfterPage',
        'replyToLoadTab',
        'replyToDoTab',
        'validate',
    );

    /**
     * Handles callback methods.
     * @since    0.0.1
     * @return      mixed
     */
    public function __call( $sMethodName, $aArguments ) {
        
        if ( in_array( $sMethodName, $this->aMethods ) ) {
            return isset( $aArguments[ 0 ] ) 
                ? $aArguments[ 0 ] 
                : null;
        }       
        
        trigger_error( 
            PluginTemplate_Registry::NAME . ' : ' . sprintf( 
                __( 'The method is not defined: %1$s', 'plugin-template' ),
                $sMethodName 
            ), 
            E_USER_WARNING 
        );        
    }
   
    /**
     * A user constructor.
     * @since    0.0.1
     * @return      void
     */
    protected function construct( $oFactory ) {}
    
}