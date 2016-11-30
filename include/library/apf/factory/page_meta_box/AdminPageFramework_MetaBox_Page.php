<?php 
/**
	Admin Page Framework v3.8.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/plugin-template>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class PluginTemplate_AdminPageFramework_MetaBox_Page extends PluginTemplate_AdminPageFramework_PageMetaBox {
    public function __construct($sMetaBoxID, $sTitle, $asPageSlugs = array(), $sContext = 'normal', $sPriority = 'default', $sCapability = 'manage_options', $sTextDomain = 'plugin-template') {
        parent::__construct($sMetaBoxID, $sTitle, $asPageSlugs, $sContext, $sPriority, $sCapability, $sTextDomain);
        $this->oUtil->showDeprecationNotice('The class, ' . __CLASS__ . ',', 'PluginTemplate_AdminPageFramework_PageMetaBox');
    }
}
