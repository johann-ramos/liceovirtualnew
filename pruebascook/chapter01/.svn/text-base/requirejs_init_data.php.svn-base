<?php
require_once(dirname(__FILE__) . '/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter01/requirejs_init_data.php');
$PAGE->requires->js('/pruebascook/chapter01/requirejs_init_data.js');
$PAGE->requires->js_init_call('hello', array('Hola', $USER->username));

echo $OUTPUT->header();
echo $OUTPUT->footer();
?>

