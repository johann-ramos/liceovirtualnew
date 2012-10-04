<?php

require_once(dirname(__FILE__) . '/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter02/yui_cal.php');
$PAGE->requires->js('/pruebascook/chapter02/yui_cal.js');
echo $OUTPUT->header();
?>
<div id="calContainer"></div>
<?php
echo $OUTPUT->footer();
?>

