<?php
/**
 * Plugin Template
 * 
 * <PROGRAM_URI>
 * Copyright (c) <COPYRIGHT_YEARS> <COPYRIGHT_HOLDER>
 * 
 */

/**
 * Provides base methods for plugin event actions.
 
 * @package      Plugin Template
 * @since    0.0.1
 */
abstract class PluginTemplate_Event_Action_Base extends PluginTemplate_WPUtility {
    
    /**
     * Sets up hooks.
     * @since    0.0.1
     * @param       string      $sActionHookName
     * @param       integer     $iParameters        The number of parameters.
     */
    public function __construct( $sActionHookName, $iParameters=1 ) {

        add_action( 
            $sActionHookName, 
            array( 
                $this, 
                'doAction' 
            ),
            10, // priority
            $iParameters
        );    

    }
    
    /**
     * 
     * @callback        action       
     */
    public function doAction( /* $aArguments */ ) {
        
        $_aParams = func_get_args() + array( null );
        PluginTemplate_Debug::log( $_aParams );
        
    }
    
}