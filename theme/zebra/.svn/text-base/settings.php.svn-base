<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * zebra theme settings page
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    //This is the note box for all the settings pages
    $name = 'theme_zebra/notes';
    $heading = get_string('notes', 'theme_zebra');
    $information = get_string('notesdesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //This is the descriptor for the following header settings
    $name = 'theme_zebra/headerinfo';
    $heading = get_string('headerinfo', 'theme_zebra');
    $information = get_string('headerinfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set the path to the logo image
    $name = 'theme_zebra/logourl';
    $title = get_string('logourl','theme_zebra');
    $description = get_string('logourldesc', 'theme_zebra');
    $default = 'logo/logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    //Set the minimum height for the logo image
    $name = 'theme_zebra/logourlheight';
    $title = get_string('logourlheight','theme_zebra');
    $description = get_string('logourlheightdesc', 'theme_zebra');
    $default = '100px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set alternate text for headermain
    $name = 'theme_zebra/headeralt';
    $title = get_string('headeralt','theme_zebra');
    $description = get_string('headeraltdesc', 'theme_zebra');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 20);
    $settings->add($setting);

    //Set body background image url
    $name = 'theme_zebra/backgroundurl';
    $title = get_string('backgroundurl', 'theme_zebra');
    $description = get_string('backgroundurldesc', 'theme_zebra');
    $default = 'core/background';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    //Set the home icon display option
    $name = 'theme_zebra/homeicon';
    $visiblename = get_string('homeicon', 'theme_zebra');
    $title = get_string('homeicon', 'theme_zebra');
    $description = get_string('homeicondesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set the home icon display option
    $name = 'theme_zebra/callink';
    $visiblename = get_string('callink', 'theme_zebra');
    $title = get_string('callink', 'theme_zebra');
    $description = get_string('callinkdesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set the calendar link display option
    $name = 'theme_zebra/dateformat';
    $title = get_string('dateformat', 'theme_zebra');
    $description = get_string('dateformatdesc', 'theme_zebra');
    $default = 'F j, Y';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set the user profile picture display option
    $name = 'theme_zebra/userpic';
    $visiblename = get_string('userpic', 'theme_zebra');
    $title = get_string('userpic', 'theme_zebra');
    $description = get_string('userpicdesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //This is the descriptor for the following general color settings
    $name = 'theme_zebra/colorsinfo';
    $heading = get_string('colorsinfo', 'theme_zebra');
    $information = get_string('colorsinfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set body background color
    $name = 'theme_zebra/bodybgcolor';
    $title = get_string('bodybgcolor','theme_zebra');
    $description = get_string('bodybgcolordesc', 'theme_zebra');
    $default = '#DDD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set links and menu color
    $name = 'theme_zebra/linkcolor';
    $title = get_string('linkcolor','theme_zebra');
    $description = get_string('linkcolordesc', 'theme_zebra');
    $default = '#234B6F';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set hovering color
    $name = 'theme_zebra/hovercolor';
    $title = get_string('hovercolor','theme_zebra');
    $description = get_string('hovercolordesc', 'theme_zebra');
    $default = '#4E7BA3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set font color
    $name = 'theme_zebra/fontcolor';
    $title = get_string('fontcolor','theme_zebra');
    $description = get_string('fontcolordesc', 'theme_zebra');
    $default = '#2F2F2F';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set main content background color
    $name = 'theme_zebra/contentbgcolor';
    $title = get_string('contentbgcolor','theme_zebra');
    $description = get_string('contentbgcolordesc', 'theme_zebra');
    $default = '#F4F6F8';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set column background color
    $name = 'theme_zebra/columnbgcolor';
    $title = get_string('columnbgcolor','theme_zebra');
    $description = get_string('columnbgcolordesc', 'theme_zebra');
    $default = '#F4F6F8';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set page-header background color
    $name = 'theme_zebra/headerbgcolor';
    $title = get_string('headerbgcolor','theme_zebra');
    $description = get_string('headerbgcolordesc', 'theme_zebra');
    $default = 'transparent';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set page-footer background color
    $name = 'theme_zebra/footerbgcolor';
    $title = get_string('footerbgcolor','theme_zebra');
    $description = get_string('footerbgcolordesc', 'theme_zebra');
    $default = '#DDD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //This is the descriptor for the following Moodle color settings
    $name = 'theme_zebra/moodlecolorsinfo';
    $heading = get_string('moodlecolorsinfo', 'theme_zebra');
    $information = get_string('moodlecolorsinfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set calendar course events color
    $name = 'theme_zebra/calcourse';
    $title = get_string('calcourse','theme_zebra');
    $description = get_string('calcoursedesc', 'theme_zebra');
    $default = '#FFD3BD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar global events color
    $name = 'theme_zebra/calglobal';
    $title = get_string('calglobal','theme_zebra');
    $description = get_string('calglobaldesc', 'theme_zebra');
    $default = '#D6F8CD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar group events color
    $name = 'theme_zebra/calgroup';
    $title = get_string('calgroup','theme_zebra');
    $description = get_string('calgroupdesc', 'theme_zebra');
    $default = '#FEE7AE';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar user events color
    $name = 'theme_zebra/caluser';
    $title = get_string('caluser','theme_zebra');
    $description = get_string('caluserdesc', 'theme_zebra');
    $default = '#DCE7EC';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar weekend color
    $name = 'theme_zebra/calweekend';
    $title = get_string('calweekend','theme_zebra');
    $description = get_string('calweekenddesc', 'theme_zebra');
    $default = '#A00';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set OK font color
    $name = 'theme_zebra/okfontcolor';
    $title = get_string('okfontcolor','theme_zebra');
    $description = get_string('okfontcolordesc', 'theme_zebra');
    $default = '#060';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set warning font color
    $name = 'theme_zebra/warningfontcolor';
    $title = get_string('warningfontcolor','theme_zebra');
    $description = get_string('warningfontcolordesc', 'theme_zebra');
    $default = '#F0E000';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set serious font color
    $name = 'theme_zebra/seriousfontcolor';
    $title = get_string('seriousfontcolor','theme_zebra');
    $description = get_string('seriousfontcolordesc', 'theme_zebra');
    $default = '#F07000';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set critical font color
    $name = 'theme_zebra/criticalfontcolor';
    $title = get_string('criticalfontcolor','theme_zebra');
    $description = get_string('criticalfontcolordesc', 'theme_zebra');
    $default = '#F00000';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //This is the descriptor for the following color scheme settings
    $name = 'theme_zebra/schemeinfo';
    $heading = get_string('schemeinfo', 'theme_zebra');
    $information = get_string('schemeinfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set gradient style for blocks, navbar, etc...
    $name = 'theme_zebra/colorscheme';
    $title = get_string('colorscheme','theme_zebra');
    $description = get_string('colorschemedesc', 'theme_zebra');
    $default = 'none';
    $choices = array('none'=>'None', 'dark'=>'Dark', 'light'=>'Light');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Set gradient style for custommenu
    $name = 'theme_zebra/menucolorscheme';
    $title = get_string('menucolorscheme','theme_zebra');
    $description = get_string('menucolorschemedesc', 'theme_zebra');
    $default = 'none';
    $choices = array('none'=>'None', 'dark'=>'Dark', 'light'=>'Light');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //This is the descriptor for the following page layout settings
    $name = 'theme_zebra/columninfo';
    $heading = get_string('columninfo', 'theme_zebra');
    $information = get_string('columninfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set min width for two column layout
    $name = 'theme_zebra/twocolmin';
    $title = get_string('twocolmin','theme_zebra');
    $description = get_string('twocolmindesc', 'theme_zebra');
    $default = '481px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set min width for three column layout
    $name = 'theme_zebra/threecolmin';
    $title = get_string('threecolmin','theme_zebra');
    $description = get_string('threecolmindesc', 'theme_zebra');
    $default = '769px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set max width for page content
    $name = 'theme_zebra/pagemaxwidth';
    $title = get_string('pagemaxwidth','theme_zebra');
    $description = get_string('pagemaxwidthdesc', 'theme_zebra');
    $default = '100%';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set whether or not to use the simple login layout
    $name = 'theme_zebra/simplelogin';
    $visiblename = get_string('simplelogin', 'theme_zebra');
    $title = get_string('simplelogin', 'theme_zebra');
    $description = get_string('simplelogindesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Set column width for region-pre and region-post
    $name = 'theme_zebra/colwidth';
    $title = get_string('colwidth','theme_zebra');
    $description = get_string('colwidthdesc','theme_zebra');
    $default = '200px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //This is the descriptor for the following browser compatibility settings
    $name = 'theme_zebra/compatibilityinfo';
    $heading = get_string('compatinfo', 'theme_zebra');
    $information = get_string('compatinfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Enable inclusion of respond.js in the footer
    $name = 'theme_zebra/userespond';
    $visiblename = get_string('userespond', 'theme_zebra');
    $title = get_string('userespond', 'theme_zebra');
    $description = get_string('useresponddesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Enable prompt of Google Chrome Frame
    $name = 'theme_zebra/usecf';
    $visiblename = get_string('usecf', 'theme_zebra');
    $title = get_string('usecf', 'theme_zebra');
    $description = get_string('usecfdesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Set maximum version for Chrome Frome prompt
    $name = 'theme_zebra/cfmaxversion';
    $title = get_string('cfmaxversion','theme_zebra');
    $description = get_string('cfmaxversiondesc', 'theme_zebra');
    $default = '6';
    $choices = array('ie6'=>'6', 'ie7'=>'7', 'ie8'=>'8');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //This is the descriptor for the following miscellaneous settings
    $name = 'theme_zebra/miscinfo';
    $heading = get_string('miscinfo', 'theme_zebra');
    $information = get_string('miscinfodesc', 'theme_zebra');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Include the Autohide css rules
    $name = 'theme_zebra/useautohide';
    $visiblename = get_string('useautohide', 'theme_zebra');
    $title = get_string('useautohide', 'theme_zebra');
    $description = get_string('useautohidedesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set custom css for theme
    $name = 'theme_zebra/customcss';
    $title = get_string('customcss', 'theme_zebra');
    $description = get_string('customcssdesc', 'theme_zebra');
    $setting = new admin_setting_configtextarea($name, $title, $description, null);
    $settings->add($setting);

    //Display branded footer logos
    $name = 'theme_zebra/branding';
    $visiblename = get_string('branding', 'theme_zebra');
    $title = get_string('branding', 'theme_zebra');
    $description = get_string('brandingdesc', 'theme_zebra');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);
}