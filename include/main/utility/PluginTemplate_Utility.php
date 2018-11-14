<?php
/**
 * Plugin Template
 * 
 * [PROGRAM_URI]
 * Copyright (c) <COPYRIGHT_YEARS> [COPYRIGHT_HOLDER]
 * 
 */

/**
 * Provides utility methods.
 * @since    0.0.1       Changed the name from `PluginTemplate_Utilities`.
 */
class PluginTemplate_Utility extends PluginTemplate_AdminPageFramework_WPUtility {

    /**
     * @remark  used upon plugin uninstall.
     * @param   string $sDirectoryPath
     * @return  bool|null
     * @since   0.0.8
     */
    static public function isDirectoryEmpty( $sDirectoryPath ) {
        if ( ! is_readable( $sDirectoryPath ) ) {
            return null;
        }
        return ( count( scandir( $sDirectoryPath ) ) == 2 );
    }

    /**
     * @remark  used upon plugin uninstall.
     * @param   $sDirectoryPath
     * @since   0.0.8
     */
    static public function removeDirectoryRecursive( $sDirectoryPath ) {

        if ( ! is_dir( $sDirectoryPath ) ) {
            return;
        }
        $_aItems = scandir( $sDirectoryPath );
        foreach( $_aItems as $_sItem ) {
            if ( $_sItem !== "." && $_sItem !== ".." ) {
                if (is_dir($sDirectoryPath . "/" . $_sItem ) ) {
                    self::removeDirectoryRecursive($sDirectoryPath . "/" . $_sItem );
                    continue;
                }
                unlink($sDirectoryPath . "/" . $_sItem );
            }
        }
        rmdir( $sDirectoryPath );

    }

}