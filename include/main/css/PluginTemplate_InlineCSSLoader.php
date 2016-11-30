<?php
/**
 * Plugin Template
 * 
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]
 * 
 */

/**
 * Inserts custom CSS rules.
 * 
 * @since    0.0.1
 */
class PluginTemplate_InlineCSSLoader extends PluginTemplate_PluginUtility {
    
    public $oOption;
    public $sCSS = '';
    
    /**
     * Sets up properties and hooks
     */
    public function __construct() {
        
        if ( defined( 'DOING_CRON' ) && DOING_CRON ) {
            return;
        }
        if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
            return;
        }
                
        $this->oOption   = PluginTemplate_Option::getInstance();
        
        $this->sCSS  = $this->oOption->get( 'css', 'custom_css' );
        $this->sCSS .= $this->getScrollbarCSSRules( 
            $this->getAsArray( $this->oOption->get( 'items' ) ) 
        );
        $this->sCSS  = trim( $this->sCSS );
        if ( ! $this->sCSS ) {
            return;
        }
        
        add_action( 'wp_head', array( $this, 'replyToInsertInlineCSS' ) );
        
    } 
        /**
         * @return      string
         */
        private function getScrollbarCSSRules( array $aScrollbars ) {
            
            $_sDelimiter = $this->oOption->isDebug()
                ? PHP_EOL
                : ' ';
            $_aCSS       = array();
            
            foreach( $aScrollbars as $_aScrollbar ) {
                
                $_aScrollbar = $_aScrollbar + $this->oOption->aDefault[ 'items' ][ 0 ];
                if ( ! $_aScrollbar[ 'status' ] ) {
                    continue;
                }
                $_aScrollbar[ 'selector' ] = trim( $_aScrollbar[ 'selector' ] );
                if ( ! $_aScrollbar[ 'selector' ] ) {
                    continue;
                }
                
                // Start
                $_aEach    = array();
                $_aCSSEach = array(
                    "{$_aScrollbar[ 'selector' ]} {"
                );
                
                // y (height)
                if ( $_aScrollbar[ 'height' ][ 'size' ] ) {
                    $_aEach[] = "max-height: {$_aScrollbar[ 'height' ][ 'size' ]}{$_aScrollbar[ 'height' ][ 'unit' ]};";
                    $_aEach[] = "overflow-y: auto;";
                } else {
                    $_aEach[] = "overflow-y: hidden;";
                }
                
                // x (width)                           
                if ( $_aScrollbar[ 'width' ][ 'size' ] ) {
                    $_aEach[] = "max-width: {$_aScrollbar[ 'width' ][ 'size' ]}{$_aScrollbar[ 'width' ][ 'unit' ]};";
                    $_aEach[] = "white-space: pre-wrap;";
                    $_aEach[] = "overflow-x: auto;";
                } else {
                    $_aEach[] = "overflow-x: hidden;";
                }           
                
                // End
                $_aCSSEach[] = implode( $_sDelimiter, $_aEach ) . "}";
                
                $_aCSS[]     = implode( $_sDelimiter, $_aCSSEach );
                
            }
            return $_sDelimiter 
                . implode( $_sDelimiter, $_aCSS );
        }
    /**
     * @callback    action      wp_head
     * @return      void
     */
    public function replyToInsertInlineCSS() {

        $_sCSS = $this->oOption->isDebug()
            ? $this->sCSS
            : $this->minifyCSS( $this->sCSS );
            
        echo "<style class='plugin-template' type='text/css'>"
                . $_sCSS
            . "</style>";
        
    }
 
    
}