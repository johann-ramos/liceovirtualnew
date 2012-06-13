<?php

/*
 * __________________________________________________________________________
 *
 * Scratch filter for Moodle 2.0
 *
 *  This filter will replace any links to a Scratch file (.sb) 
 *  with a java applet that plays that Scratch inline
 *
 * @package    filter
 * @subpackage scratch
 * @copyright  2011 Ralf Krause  {@link http://www.moodletreff.de}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * __________________________________________________________________________
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
  $settings->add(new admin_setting_configcheckbox('filter_scratch_center', get_string('scratch_center','filter_scratch'), '', 1));
  $settings->add(new admin_setting_configcheckbox('filter_scratch_showlink', get_string('scratch_showlink','filter_scratch'), '', 1));
  $settings->add(new admin_setting_configcheckbox('filter_scratch_autostart', get_string('scratch_autostart','filter_scratch'), '', 0));
}

?>
