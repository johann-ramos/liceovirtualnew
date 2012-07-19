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
 * zebra theme install functions
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
 
function xmldb_theme_zebra_install() {
    $currentsetting = get_config('theme_zebra');
 
    // Create linkcolor
    set_config('linkcolor', $currentsetting->firstcolor, 'theme_zebra');
    // Remove firstcolor
    unset_config('firstcolor', 'theme_zebra');
  
    // Create hovercolor
    set_config('hovercolor', $currentsetting->secondcolor, 'theme_zebra');
    // Remove secondcolor
    unset_config('secondcolor', 'theme_zebra');
  
    // Create fontcolor
    set_config('fontcolor', $currentsetting->thirdcolor, 'theme_zebra');
    // Remove thirdcolor
    unset_config('third', 'theme_zebra');
  
    // Create contentbgcolor
    set_config('hovercolor', $currentsetting->fourthcolor, 'theme_zebra');
    // Remove fourthcolor
    unset_config('fourthcolor', 'theme_zebra');
  
    // Create columnbgcolor
    set_config('columnbgcolor', $currentsetting->fifthcolor, 'theme_zebra');
    // Remove fifthcolor
    unset_config('fifthcolor', 'theme_zebra');
  
    // Create headerbgcolor
    set_config('headerbgcolor', $currentsetting->sixthcolor, 'theme_zebra');
    // Remove sixthcolor
    unset_config('sixthcolor', 'theme_zebra');
  
    // Create footerbgcolor
    set_config('footerbgcolor', $currentsetting->seventhcolor, 'theme_zebra');
    // Remove seventhcolor
    unset_config('seventhcolor', 'theme_zebra');
    
    return true;
}