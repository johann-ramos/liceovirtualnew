<?php

require_once(dirname(__FILE__) . '/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter02/yui_event.php');
$PAGE->requires->js('/pruebascook/chapter02/yui_eventbasic.js');

echo $OUTPUT->header();

?>

<form>
<input type="button" id="btn1" value="Button 1" />
</form>

<?php
echo $OUTPUT->footer();
?>
