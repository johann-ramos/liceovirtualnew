<?php

require_once(dirname(__FILE__) . '/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter02/yui_console.php');
$PAGE->requires->js('/pruebascook/chapter02/yui_console.js');

echo $OUTPUT->header();

?>

<h1>YUI Console</h1>

<?php
echo $OUTPUT->footer();
?>

