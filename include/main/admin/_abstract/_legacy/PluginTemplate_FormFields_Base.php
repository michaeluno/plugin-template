<?php
/**
 * Plugin Template
 * 
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]
 * 
 */

/**
 * Provides abstract methods for form fields.
 * 
 * @since    0.0.1
 */
abstract class PluginTemplate_FormFields_Base extends PluginTemplate_WPUtility {

    /**
     * Stores the option object.
     */
    public $oOption;
    

    public function __construct() {
        
        $this->oOption         = PluginTemplate_Option::getInstance();
        
    }
    
    /**
     * Should be overridden in an extended class.
     * 
     * @remark      Do not even declare this method as parameters will be vary 
     * and if they are different PHP will throw errors.
     */
    // public function get() {}
  
}