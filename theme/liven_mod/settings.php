<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

// logo image setting
	$name = 'theme_liven_mod/logo';
	$title = get_string('logo','theme_liven_mod');
	$description = get_string('logodesc', 'theme_liven_mod');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	// link color setting
	$name = 'theme_liven_mod/headercolor';
	$title = get_string('headercolor','theme_liven_mod');
	$description = get_string('headercolordesc', 'theme_liven_mod');
	$default = '#03426a';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);
	
	// link color setting
	$name = 'theme_liven_mod/linkcolor';
	$title = get_string('linkcolor','theme_liven_mod');
	$description = get_string('linkcolordesc', 'theme_liven_mod');
	$default = '#24587a';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// link hover color setting
	$name = 'theme_liven_mod/linkhover';
	$title = get_string('linkhover','theme_liven_mod');
	$description = get_string('linkhoverdesc', 'theme_liven_mod');
	$default = '#666666';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);
}
