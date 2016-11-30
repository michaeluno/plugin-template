<?php 
/**
	Admin Page Framework v3.8.12 by <COPYRIGHT_HOLDER>
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<PROGRAM_URL>
	Copyright (c) <COPYRIGHT_YEARS>, <COPYRIGHT_HOLDER>; Licensed under MIT <http://opensource.org/licenses/MIT> */
class PluginTemplate_AdminPageFramework_Form_Model___SetFieldResources extends PluginTemplate_AdminPageFramework_Form_Base {
    public $aArguments = array();
    public $aFieldsets = array();
    public $aResources = array('internal_styles' => array(), 'internal_styles_ie' => array(), 'internal_scripts' => array(), 'src_styles' => array(), 'src_scripts' => array(),);
    public $aFieldTypeDefinitions = array();
    public $aCallbacks = array('is_fieldset_registration_allowed' => null,);
    public function __construct() {
        $_aParameters = func_get_args() + array($this->aArguments, $this->aFieldsets, $this->aResources, $this->aFieldTypeDefinitions, $this->aCallbacks,);
        $this->aArguments = $_aParameters[0];
        $this->aFieldsets = $_aParameters[1];
        $this->aResources = $_aParameters[2];
        $this->aFieldTypeDefinitions = $_aParameters[3];
        $this->aCallbacks = $_aParameters[4] + $this->aCallbacks;
    }
    public function get() {
        $this->_setCommon();
        $this->_set();
        return $this->aResources;
    }
    private static $_bCalled = false;
    private function _setCommon() {
        if (self::$_bCalled) {
            return;
        }
        self::$_bCalled = true;
        new PluginTemplate_AdminPageFramework_Form_View___Script_RegisterCallback;
        $this->_setCommonFormInternalCSSRules();
    }
    private function _setCommonFormInternalCSSRules() {
        $_aClassNames = array('PluginTemplate_AdminPageFramework_Form_View___CSS_Form', 'PluginTemplate_AdminPageFramework_Form_View___CSS_Field', 'PluginTemplate_AdminPageFramework_Form_View___CSS_Section', 'PluginTemplate_AdminPageFramework_Form_View___CSS_CollapsibleSection', 'PluginTemplate_AdminPageFramework_Form_View___CSS_FieldError', 'PluginTemplate_AdminPageFramework_Form_View___CSS_ToolTip',);
        foreach ($_aClassNames as $_sClassName) {
            $_oCSS = new $_sClassName;
            $this->aResources['internal_styles'][] = $_oCSS->get();
        }
        $_aClassNamesForIE = array('PluginTemplate_AdminPageFramework_Form_View___CSS_CollapsibleSectionIE',);
        foreach ($_aClassNames as $_sClassName) {
            $_oCSS = new $_sClassName;
            $this->aResources['internal_styles_ie'][] = $_oCSS->get();
        }
    }
    protected function _set() {
        foreach ($this->aFieldsets as $_sSecitonID => $_aFieldsets) {
            $_bIsSubSectionLoaded = false;
            foreach ($_aFieldsets as $_iSubSectionIndexOrFieldID => $_aSubSectionOrField) {
                if ($this->isNumericInteger($_iSubSectionIndexOrFieldID)) {
                    if ($_bIsSubSectionLoaded) {
                        continue;
                    }
                    $_bIsSubSectionLoaded = true;
                    foreach ($_aSubSectionOrField as $_aField) {
                        $this->_setFieldResources($_aField);
                    }
                    continue;
                }
                $_aField = $_aSubSectionOrField;
                $this->_setFieldResources($_aField);
            }
        }
    }
    private function _setFieldResources(array $aFieldset) {
        if (!$this->_isFieldsetAllowed($aFieldset)) {
            return;
        }
        if ($this->hasFieldDefinitionsInContent($aFieldset)) {
            foreach ($aFieldset['content'] as $_asNestedFieldset) {
                if (is_scalar($_asNestedFieldset)) {
                    continue;
                }
                $this->_setFieldResources($_asNestedFieldset);
            }
        }
        if ($this->hasNestedFields($aFieldset)) {
            $aFieldset['type'] = '_nested';
        }
        $_sFieldtype = $this->getElement($aFieldset, 'type');
        $_aFieldTypeDefinition = $this->getElementAsArray($this->aFieldTypeDefinitions, $_sFieldtype);
        if (empty($_aFieldTypeDefinition)) {
            return;
        }
        if (is_callable($_aFieldTypeDefinition['hfDoOnRegistration'])) {
            call_user_func_array($_aFieldTypeDefinition['hfDoOnRegistration'], array($aFieldset));
        }
        $this->callBack($this->aCallbacks['load_fieldset_resource'], array($aFieldset,));
        if ($this->_isAlreadyRegistered($_sFieldtype, $this->aArguments['structure_type'])) {
            return;
        }
        new PluginTemplate_AdminPageFramework_Form_Model___FieldTypeRegistration($_aFieldTypeDefinition, $this->aArguments['structure_type']);
        $_oFieldTypeResources = new PluginTemplate_AdminPageFramework_Form_Model___FieldTypeResource($_aFieldTypeDefinition, $this->aResources);
        $this->aResources = $_oFieldTypeResources->get();
    }
    private function _isAlreadyRegistered($sFieldtype, $sStructureType) {
        if (isset(self::$_aRegisteredFieldTypes[$sFieldtype . '_' . $sStructureType])) {
            return true;
        }
        self::$_aRegisteredFieldTypes[$sFieldtype . '_' . $sStructureType] = true;
        return false;
    }
    static private $_aRegisteredFieldTypes = array();
    private function _isFieldsetAllowed(array $aFieldset) {
        return $this->callBack($this->aCallbacks['is_fieldset_registration_allowed'], array(true, $aFieldset,));
    }
}
