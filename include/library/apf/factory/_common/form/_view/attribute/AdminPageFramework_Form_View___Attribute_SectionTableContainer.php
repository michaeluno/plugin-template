<?php 
/**
	Admin Page Framework v3.8.12 by <COPYRIGHT_HOLDER>
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<PROGRAM_URL>
	Copyright (c) <COPYRIGHT_YEARS>, <COPYRIGHT_HOLDER>; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PluginTemplate_AdminPageFramework_Form_View___Attribute_SectionTableContainer extends PluginTemplate_AdminPageFramework_Form_View___Attribute_Base {
    protected function _getAttributes() {
        $_aSectionAttributes = $this->uniteArrays($this->dropElementsByType($this->aArguments['attributes']), array('id' => $this->aArguments['_tag_id'], 'class' => $this->getClassAttribute('plugin-template-section', $this->getAOrB($this->aArguments['section_tab_slug'], 'plugin-template-tab-content', null), $this->getAOrB($this->aArguments['_is_collapsible'], 'is_subsection_collapsible', null)),));
        $_aSectionAttributes['class'] = $this->getClassAttribute($_aSectionAttributes['class'], $this->dropElementsByType($this->aArguments['class']));
        $_aSectionAttributes['style'] = $this->getStyleAttribute($_aSectionAttributes['style'], $this->getAOrB($this->aArguments['hidden'], 'display:none', null));
        return $_aSectionAttributes;
    }
}
