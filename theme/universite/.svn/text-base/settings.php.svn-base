<?php

/* the default for headers (the darker colour) is #193a3c */
/* the default for links is #2f8382 */

$temp = new admin_settingpage('theme_universite', get_string('configtitle','theme_universite'));


// link color setting
$name = 'theme_universite/linkcolor';
$title = get_string('linkcolor','theme_universite');
$description = get_string('linkcolordesc', 'theme_universite');
$default = '#246f7a';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

$name = 'theme_universite/linkcolorhover';
$title = get_string('linkcolorhover','theme_universite');
$description = get_string('linkcolorhoverdesc', 'theme_universite');
$default = '#f4b100';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

$name = 'theme_universite/linkcolorheader';
$title = get_string('linkcolorheader','theme_universite');
$description = get_string('linkcolorheaderdesc', 'theme_universite');
$default = '#c1d82f';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);


// dock
$name = 'theme_universite/dockbuttons';
$title = get_string('dockbuttons','theme_universite');
$description = get_string('dockbuttonsdesc', 'theme_universite');
$default = '#fdf3b4';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// header setting
$name = 'theme_universite/headercolor';
$title = get_string('headercolor','theme_universite');
$description = get_string('headercolordesc', 'theme_universite');
$default = '#193a3c';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

$name = 'theme_universite/lighterheadercolor';
$title = get_string('lighterheadercolor','theme_universite');
$description = get_string('lighterheadercolordesc', 'theme_universite');
$default = '#27484d';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);


// Add our page to the structure of the admin tree
$ADMIN->add('themes', $temp);

?>