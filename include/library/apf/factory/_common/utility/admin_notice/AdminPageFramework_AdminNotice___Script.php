<?php 
/**
	Admin Page Framework v3.8.12 by <COPYRIGHT_HOLDER>
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<PROGRAM_URL>
	Copyright (c) <COPYRIGHT_YEARS>, <COPYRIGHT_HOLDER>; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PluginTemplate_AdminPageFramework_AdminNotice___Script extends PluginTemplate_AdminPageFramework_Factory___Script_Base {
    public function load() {
        wp_enqueue_script('jquery');
    }
    static public function getScript() {
        return <<<JAVASCRIPTS
( function( $ ) {
    jQuery( document ).ready( function() {         

        var _oAdminNotices = jQuery( '.plugin-template-settings-notice-message' );
        if ( _oAdminNotices.length ) {
                    
            // Animation of the `slideDown()` method does not work well when the target element has a margin
            // so enclose the elemnet in a new container and apply new margins to it.
            var _oContainer     = jQuery( _oAdminNotices )
                .css( 'margin', '0' )   // prevents jumpy animation
                .wrap( "<div class='plugin-template-admin-notice-animation-container'></div>" );
            _oContainer.css( 'margin-top', '1em' );
            _oContainer.css( 'margin-bottom', '1em' );
            
            // Now animate.
            jQuery( _oAdminNotices )
                .css( 'visibility', 'hidden' )
                .slideDown( 800 )
                .css( {opacity: 0, visibility: 'visible'})
                .animate( {opacity: 1}, 400 );
                
        }

    });              

}( jQuery ));
JAVASCRIPTS;
        
    }
}
