<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-35-173-94-156.compute-1.amazonaws.com';
$CFG->dbname    = 'dc5f67m5nerdr2';
$CFG->dbuser    = 'pdtekzcxkojldl';
$CFG->dbpass    = 'f049cd2fa49d551340df8a0753b56c0c0f21dc9ba5db9b8fb83a13cb4c4d9c0a';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '5432',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://gradlearning.herokuapp.com';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
