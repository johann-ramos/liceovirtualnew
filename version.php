<?php

/**
 * MOODLE VERSION INFORMATION
 *
 * This file defines the current version of the core Moodle code being used.
 * This is compared against the values stored in the database to determine
 * whether upgrades should be performed (see lib/db/*.php)
 *
 * @package    core
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$version  = 2011120500.00;              // 20111205      = branching date YYYYMMDD - do not modify!
                                        //         RR    = release increments - 00 in DEV branches
                                        //           .XX = incremental changes

$release  = '2.2 (Build: 20111205)';    // Human-friendly version name

$maturity = MATURITY_STABLE;            // this version's maturity level
