<?php

/*

Theme Name: 	Université
Theme Version:	1
Designed by:	Rolley Tickner
						
Credits - and changes:

	Icons: http://famfamfam.com/lab/icons/silk/ - by Mark James, awesome icons available under the Creative Commons Attribution license.

	jQuery's theme roller for some of the images and themeroller css for those.
	
*/

$THEME->name = 'universite';
$THEME->csspostprocess = 'universite_process_css';
$THEME->parents = array('base');
$THEME->sheets = array(
	'layout',
	'formatting',
	'jquery-ui',
	'settings'
);

$THEME->custompix = true;

$THEME->layouts = array(
    'base' => array(
        'file' => 'standard.php',
        'regions' => array(),
    ),
    'standard' => array(
        'file' => 'standard.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    ),
    'course' => array(
        'file' => 'standard.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    ),
    'coursecategory' => array(
        'file' => 'standard.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    ),
    'incourse' => array(
        'file' => 'standard.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    ),
    'frontpage' => array(
        'file' => 'standard.php',
        'regions' => array('side-post','side-pre'),
        'defaultregion' => 'side-post',
    ),
    'mydashboard' => array(
        'file' => 'standard.php',
        'regions' => array('side-post','side-pre'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),
    ),
    'mypublic' => array(
        'file' => 'standard.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    ),
    'login' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('langmenu'=>true),
    ),
    'popup' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    'frametop' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    'maintenance' => array(
        'file' => 'standard.php',
        'regions' => array(),
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    'admin' => array(
        'file' => 'standard.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
    )
);

$THEME->enable_dock = true;
$THEME->javascripts_footer = array('themeScripts');
