<?php 
/**
	Admin Page Framework v3.8.18 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/plugin-template>
	Copyright (c) 2013-2018, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class PluginTemplate_AdminPageFramework_Factory___Script_Base extends PluginTemplate_AdminPageFramework_FrameworkUtility {
    public $oMsg;
    public function __construct($oMsg = null) {
        if ($this->hasBeenCalled(get_class($this))) {
            return;
        }
        $this->oMsg = $oMsg ? $oMsg : PluginTemplate_AdminPageFramework_Message::getInstance();
        $this->registerAction('customize_controls_print_footer_scripts', array($this, '_replyToPrintScript'));
        $this->registerAction('admin_print_footer_scripts', array($this, '_replyToPrintScript'));
        $this->registerAction('wp_print_footer_scripts', array($this, '_replyToPrintScript'));
        $this->construct();
        add_action('wp_enqueue_scripts', array($this, 'load'));
    }
    public function construct() {
    }
    public function load() {
    }
    public function _replyToPrintScript() {
        $_sScript = $this->getScript($this->oMsg);
        if (!$_sScript) {
            return;
        }
        echo "<script type='text/javascript' class='" . strtolower(get_class($this)) . "'>" . '/* <![CDATA[ */' . $_sScript . '/* ]]> */' . "</script>";
    }
    static public function getScript() {
        $_aParams = func_get_args() + array(null);
        $_oMsg = $_aParams[0];
        return "";
    }
}
