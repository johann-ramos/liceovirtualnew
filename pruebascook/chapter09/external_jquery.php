<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter09/external_jquery.php');
$PAGE->requires->js('/pruebascook/lib/jquery-1.7.2.js');
$PAGE->requires->js('/pruebascook/chapter09/external_jquery.js');
echo $OUTPUT->header();
echo $OUTPUT->footer();
?>

