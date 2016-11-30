<?php 
/**
	Admin Page Framework v3.8.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/plugin-template>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class PluginTemplate_AdminPageFramework_Form_View___CSS_Base extends PluginTemplate_AdminPageFramework_FrameworkUtility {
    public $aAdded = array();
    public function add($sCSSRules) {
        $this->aAdded[] = $sCSSRules;
    }
    public function get() {
        $_sCSSRules = $this->_get() . PHP_EOL;
        $_sCSSRules.= $this->_getVersionSpecific();
        $_sCSSRules.= implode(PHP_EOL, $this->aAdded);
        return $_sCSSRules;
    }
    protected function _get() {
        return '';
    }
    protected function _getVersionSpecific() {
        return '';
    }
}
class PluginTemplate_AdminPageFramework_Form_View___CSS_CollapsibleSection extends PluginTemplate_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        $_sCSSRules = ".plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box, .plugin-template-collapsible-section-title.plugin-template-collapsible-type-box{font-size:13px;background-color: #fff;padding: 15px 18px;margin-top: 1em; border-top: 1px solid #eee;border-bottom: 1px solid #eee;}.plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.collapsed.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.collapsed {border-bottom: 1px solid #dfdfdf;margin-bottom: 1em; }.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box {margin-top: 0;}.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.collapsed {margin-bottom: 0;}#poststuff .plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.plugin-template-section-title h3,#poststuff .plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.plugin-template-section-title h3{font-size: 1em;margin: 0;}.plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.accordion-section-title:after,.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.accordion-section-title:after {top: 12px;right: 15px;}.plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.accordion-section-title:after,.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.accordion-section-title:after {content: '\\f142';}.plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.accordion-section-title.collapsed:after,.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.accordion-section-title.collapsed:after {content: '\\f140';} .plugin-template-collapsible-sections-content.plugin-template-collapsible-content.accordion-section-content,.plugin-template-collapsible-section-content.plugin-template-collapsible-content.accordion-section-content,.plugin-template-collapsible-sections-content.plugin-template-collapsible-content-type-box, .plugin-template-collapsible-section-content.plugin-template-collapsible-content-type-box{border: 1px solid #dfdfdf;border-top: 0;background-color: #fff;}tbody.plugin-template-collapsible-content {display: table-caption; padding: 10px 20px 15px 20px;}tbody.plugin-template-collapsible-content.table-caption {display: table-caption; }.plugin-template-collapsible-toggle-all-button-container {margin-top: 1em;margin-bottom: 1em;width: 100%;display: table; }.plugin-template-collapsible-toggle-all-button.button {height: 36px;line-height: 34px;padding: 0 16px 6px;font-size: 20px;width: auto;}.flipped > .plugin-template-collapsible-toggle-all-button.button.dashicons {-moz-transform: scaleY(-1);-webkit-transform: scaleY(-1);transform: scaleY(-1);filter: flipv; }.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box .plugin-template-repeatable-section-buttons {margin: 0;margin-right: 2em; }.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box .plugin-template-repeatable-section-buttons.section_title_field_sibling {margin-top: 0;}.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box .repeatable-section-button {background: none; }.accordion-section-content.plugin-template-collapsible-content-type-button {background-color: transparent;}.plugin-template-collapsible-button {color: #888;margin-right: 0.4em;font-size: 0.8em;}.plugin-template-collapsible-button-collapse {display: inline;} .collapsed .plugin-template-collapsible-button-collapse {display: none;}.plugin-template-collapsible-button-expand {display: none;}.collapsed .plugin-template-collapsible-button-expand {display: inline;}.plugin-template-collapsible-section-title .plugin-template-fields {display: inline;}.plugin-template-collapsible-section-title .plugin-template-field {float: none;}.plugin-template-collapsible-section-title .plugin-template-fieldset {display: inline;margin-right: 1em;vertical-align: middle; }#poststuff .plugin-template-collapsible-title.plugin-template-collapsible-section-title .section-title-container.has-fields .section-title{width: auto;display: inline-block;margin: 0 1em 0 0.4em;vertical-align: middle;}";
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.accordion-section-title:after,.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.accordion-section-title:after {content: '';top: 18px;}.plugin-template-collapsible-sections-title.plugin-template-collapsible-type-box.accordion-section-title.collapsed:after,.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box.accordion-section-title.collapsed:after {content: '';} .plugin-template-collapsible-toggle-all-button.button {font-size: 1em;}.plugin-template-collapsible-section-title.plugin-template-collapsible-type-box .plugin-template-repeatable-section-buttons {top: -8px;}";
        }
        return $_sCSSRules;
    }
}
