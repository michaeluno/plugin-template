<?php 
/**
	Admin Page Framework v3.8.12 by <COPYRIGHT_HOLDER>
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<PROGRAM_URL>
	Copyright (c) <COPYRIGHT_YEARS>, <COPYRIGHT_HOLDER>; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PluginTemplate_AdminPageFramework_FieldType__nested extends PluginTemplate_AdminPageFramework_FieldType {
    public $aFieldTypeSlugs = array('_nested');
    protected $aDefaultKeys = array();
    protected function getStyles() {
        return ".plugin-template-fieldset > .plugin-template-fields > .plugin-template-field.with-nested-fields > .plugin-template-fieldset.multiple-nesting {margin-left: 2em;}.plugin-template-fieldset > .plugin-template-fields > .plugin-template-field.with-nested-fields > .plugin-template-fieldset {margin-bottom: 1em;}.with-nested-fields > .plugin-template-fieldset.child-fieldset > .plugin-template-child-field-title {display: inline-block;padding: 0 0 0.4em 0;}.plugin-template-fieldset.child-fieldset > label.plugin-template-child-field-title {display: table-row; white-space: nowrap;}";
    }
    protected function getField($aField) {
        $_oCallerForm = $aField['_caller_object'];
        $_aInlineMixedOutput = array();
        foreach ($this->getAsArray($aField['content']) as $_aChildFieldset) {
            if (is_scalar($_aChildFieldset)) {
                continue;
            }
            if (!$this->isNormalPlacement($_aChildFieldset)) {
                continue;
            }
            $_aChildFieldset = $this->getFieldsetReformattedBySubFieldIndex($_aChildFieldset, ( integer )$aField['_index'], $aField['_is_multiple_fields'], $aField);
            $_oFieldset = new PluginTemplate_AdminPageFramework_Form_View___Fieldset($_aChildFieldset, $_oCallerForm->aSavedData, $_oCallerForm->getFieldErrors(), $_oCallerForm->aFieldTypeDefinitions, $_oCallerForm->oMsg, $_oCallerForm->aCallbacks);
            $_aInlineMixedOutput[] = $_oFieldset->get();
        }
        return implode('', $_aInlineMixedOutput);
    }
}
class PluginTemplate_AdminPageFramework_FieldType_inline_mixed extends PluginTemplate_AdminPageFramework_FieldType__nested {
    public $aFieldTypeSlugs = array('inline_mixed');
    protected $aDefaultKeys = array('label_min_width' => '', 'show_debug_info' => false,);
    protected function getStyles() {
        return ".plugin-template-field-inline_mixed {width: 98%;}.plugin-template-field-inline_mixed > fieldset {display: inline-block;overflow-x: visible;padding-right: 0.4em;}.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields{display: inline;width: auto;table-layout: auto;margin: 0;padding: 0;vertical-align: middle;white-space: nowrap;}.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field {float: none;clear: none;width: 100%;display: inline-block;margin-right: auto;vertical-align: middle; }.with-mixed-fields > fieldset > label {width: auto;padding: 0;}.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field .plugin-template-input-label-string {padding: 0;}.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field > .plugin-template-input-label-container,.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field > * > .plugin-template-input-label-container{padding: 0;display: inline-block;width: 100%;}.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field > .plugin-template-input-label-container > label,.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field > * > .plugin-template-input-label-container > label{display: inline-block;}.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field > .plugin-template-input-label-container > label > input,.plugin-template-field-inline_mixed > fieldset > .plugin-template-fields > .plugin-template-field > * > .plugin-template-input-label-container > label > input{display: inline-block;min-width: 100%;margin-right: auto;margin-left: auto;}.plugin-template-field-inline_mixed .plugin-template-input-label-container,.plugin-template-field-inline_mixed .plugin-template-input-label-string{min-width: 0;}";
    }
}
