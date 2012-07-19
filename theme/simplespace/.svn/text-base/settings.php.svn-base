<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

// Create our admin page
$temp = new admin_settingpage('theme_simplespace', get_string('configtitle','theme_simplespace'));

// Background image setting
$name = 'theme_simplespace/background';
$title = get_string('background','theme_simplespace');
$description = get_string('backgrounddesc', 'theme_simplespace');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$temp->add($setting);

// logo image setting
$name = 'theme_simplespace/logo';
$title = get_string('logo','theme_simplespace');
$description = get_string('logodesc', 'theme_simplespace');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$temp->add($setting);

// link color setting
$name = 'theme_simplespace/linkcolor';
$title = get_string('linkcolor','theme_simplespace');
$description = get_string('linkcolordesc', 'theme_simplespace');
$default = '#0e53a7';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// link hover color setting
$name = 'theme_simplespace/linkhover';
$title = get_string('linkhover','theme_simplespace');
$description = get_string('linkhoverdesc', 'theme_simplespace');
$default = '#6899d3';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// main color setting
$name = 'theme_simplespace/maincolor';
$title = get_string('maincolor','theme_simplespace');
$description = get_string('maincolordesc', 'theme_simplespace');
$default = '#0e53a7';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// main color accent setting
$name = 'theme_simplespace/maincoloraccent';
$title = get_string('maincoloraccent','theme_simplespace');
$description = get_string('maincoloraccentdesc', 'theme_simplespace');
$default = '#4284d3';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// heading color setting
$name = 'theme_simplespace/headingcolor';
$title = get_string('headingcolor','theme_simplespace');
$description = get_string('headingcolordesc', 'theme_simplespace');
$default = '#a63c00';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// block color setting
$name = 'theme_simplespace/blockcolor';
$title = get_string('blockcolor','theme_simplespace');
$description = get_string('blockcolordesc', 'theme_simplespace');
$default = '#a68100';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// forum subject background color setting
$name = 'theme_simplespace/forumback';
$title = get_string('forumback','theme_simplespace');
$description = get_string('forumbackdesc', 'theme_simplespace');
$default = '#ffe073';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// forum subject font color setting
$name = 'theme_simplespace/forumcolor';
$title = get_string('forumcolor','theme_simplespace');
$description = get_string('forumcolordesc', 'theme_simplespace');
$default = '#04346c';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$temp->add($setting);

// Add our page to the structure of the admin tree
}