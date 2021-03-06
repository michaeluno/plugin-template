=== Plugin Template ===
Contributors:       [COPYRIGHT_HOLDER], miunosoft
Donate link:        [AUTHOR_URI]donate
Tags:               template, plugin
Requires at least:  3.4
Requires PHP:       5.2.4
Tested up to:       5.0.3
Stable tag:         1.0.9
License:            GPLv2 or later
License URI:        http://www.gnu.org/licenses/gpl-2.0.html

[PROGRAM_DESCRIPTION]

== Description ==

<h4>Hi there!</h4>

This is a plugin template for the developer to modify it to create their own plugin.
  
= Supported Languages =
* English
  
== Installation ==

1. Upload **`plugin-template.php`** and other files compressed in the zip folder to the **`/wp-content/plugins/`** directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Go to **Dashboard** -> **Appearance** -> **Scrollbars**.
1. Configure the options by setting a selector and height.

== Frequently asked questions ==

== Other Notes ==

== Screenshots ==

1. **Some Image**
2. **Another Image**

== Changelog ==


= 0.1.0 =
- Fixed a bug that an unknown class was used in `uninstall.php`.
- Fixed a bug with `PluginTemplate_Registry::getPluginURL()` that slashes were doubled when an absolute path was passed.

= 0.0.9 =
- Fixed an issue that translation files were not automatically detected by wordpress.org.

= 0.0.8 =
- Fixed an issue that temporary directory could not be deleted upon plugin uninstallation.

= 0.0.7 =
- Added a test suite.
- Updated Admin Page Framework to 3.8.18.

= 0.0.6 =
- Fixed a bug calling an undefined property in a form validation.

= 0.0.5 =
- Added some class constants and methods in the registery class.
