<?php
$default = 'rocket/pix/logo/rocket.png';

// Banner file setting
$default = 'rocket/pix/banner/default.png';

// Banner Height
$name = 'theme_rocket/bannerheight';
$title = get_string('bannerheight','theme_rocket');
$description = get_string('bannerheightdesc', 'theme_rocket');
$default = 255;
$choices = array(5=>get_string('nobanner', 'theme_rocket'), 55=>'50px', 105=>'100px',155=>'150px', 205=>'200px', 255=>'250px',  305=>'300px',355=>'350px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Fullscreen Toggle
$name = 'theme_rocket/screenwidth';
$title = get_string('screenwidth','theme_rocket');
$description = get_string('screenwidthdesc', 'theme_rocket');
$default = 1000;
$choices = array(1000=>get_string('fixedwidth','theme_rocket'), 97=>get_string('variablewidth','theme_rocket'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);


// Main theme trim colour setting

// Menu colour setting

// Menu hover colour setting

// Menu trim colour setting

// Menu link colour setting
// Copyright Notice

/* Use Autohide Toggle
$name = 'theme_rocket/autohide';
$title = get_string('autohide','theme_rocket');
$description = get_string('autohide desc', 'theme_rocket');
$default = 1000;
$choices = array('autohide_enable'=>get_string('enable','theme_rocket'), 'autohide_disable'=>get_string('disable','theme_rocket'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);
*/