<?php 
/**
	Admin Page Framework v3.8.12 by <COPYRIGHT_HOLDER>
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<PROGRAM_URL>
	Copyright (c) <COPYRIGHT_YEARS>, <COPYRIGHT_HOLDER>; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PluginTemplate_AdminPageFramework_Format_PageResource_Script extends PluginTemplate_AdminPageFramework_Format_Base {
    static public $aStructure = array('src' => null, 'handle_id' => null, 'dependencies' => array(), 'version' => false, 'translation' => array(), 'in_footer' => false,);
    public $asSubject = '';
    public function __construct() {
        $_aParameters = func_get_args() + array($this->asSubject,);
        $this->asSubject = $_aParameters[0];
    }
    public function get() {
        return $this->_getFormatted($this->asSubject);
    }
    private function _getFormatted($asSubject) {
        if (is_array($asSubject)) {
            return $asSubject + self::$aStructure;
        }
        $_aSubject = array();
        if (is_string($asSubject)) {
            $_aSubject['src'] = $asSubject;
        }
        return $_aSubject + self::$aStructure;
    }
}
