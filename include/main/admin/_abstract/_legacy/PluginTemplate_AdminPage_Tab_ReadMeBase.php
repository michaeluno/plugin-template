<?php
/**
 * Plugin Template
 * 
 * Demonstrates the usage of Admin Page Framework.
 * 
 * [AUTHOR_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]; Licensed under <LICENSE_TYPE>
 * 
 */

/**
 * A base class that provides methods to display readme file contents.
 * 
 * @sicne       3       Extends `PluginTemplate_AdminPage_Tab_Base`.
 * @extends     PluginTemplate_AdminPage_Tab_Base
 */
abstract class PluginTemplate_AdminPage_Tab_ReadMeBase extends PluginTemplate_AdminPage_Tab_Base {
        
    /**
     * 
     * @since    0.0.1
     */
    protected function _getReadmeContents( $sFilePath, $sTOCTitle, $asSections=array() ) {
        
        $_oWPReadmeParser = new PluginTemplate_AdminPageFramework_WPReadmeParser( 
            $sFilePath,
            array(
                '%PLUGIN_DIR_URL%'  => PluginTemplate_Registry::getPluginURL(),
                '%WP_ADMIN_URL%'    => admin_url(),
            )
        );    
        $_sContent = '';
        foreach( ( array ) $asSections as $_sSection  ) {
            $_sContent .= $_oWPReadmeParser->getSection( $_sSection );  
        }        
        if ( $sTOCTitle ) {            
            $_oTOC = new PluginTemplate_AdminPageFramework_TableOfContents(
                $_sContent,
                4,
                $sTOCTitle
            );
            return $_oTOC->get();        
        }
        return $_sContent;
        
    }
    
}