<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'liceovirtualnew';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'zq3l24ti';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'http://www.liceovirtualnew.com';
//$CFG->wwwroot   = 'http://thesun.dyndns-server.com/liceovirtualnew';
$CFG->dataroot  = '/home/johann/moodledata/moodledata-liceovirtualnew';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = ',dCk#a6bbRWXrIVn;[/S9qe#L7W}P]ik';

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
