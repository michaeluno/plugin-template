<?php 
/**
	Admin Page Framework v3.8.18 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/plugin-template>
	Copyright (c) 2013-2018, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PluginTemplate_AdminPageFramework_Form_post_meta_box extends PluginTemplate_AdminPageFramework_Form_Meta {
    public $sStructureType = 'post_meta_box';
    public function construct() {
        $this->_addDefaultResources();
    }
    private function _addDefaultResources() {
        $_oCSS = new PluginTemplate_AdminPageFramework_Form_View___CSS_meta_box;
        $this->addResource('internal_styles', $_oCSS->get());
    }
}
