<?php

require_once(dirname(__FILE__) . '/../../config.php');
//require_once(dirname(__FILE__) . '/../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter01/requirejs_init_lang.php');
$PAGE->requires->js('/pruebascook/chapter01/requirejs_init_lang.js');
//           linea que contiene course     archivo lang moodle.php        
$PAGE->requires->string_for_js('course', 'moodle');
$PAGE->requires->js_init_call('lang');

echo $OUTPUT->header();
echo $OUTPUT->footer();

?>
