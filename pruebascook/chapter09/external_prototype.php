<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter09/external_prototype.php');
$PAGE->requires->js('/pruebascook/lib/prototype.js');
$PAGE->requires->js('/pruebascook/chapter09/external_prototype.js');
echo $OUTPUT->header();
echo $OUTPUT->footer();
?>

