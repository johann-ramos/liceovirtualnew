<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter09/external_mootools.php');
$PAGE->requires->js('/pruebascook/lib/mootools-core-1.4.5-full-nocompat.js');
$PAGE->requires->js('/pruebascook/chapter09/external_mootools.js');
echo $OUTPUT->header();
echo $OUTPUT->footer();
?>

