<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter06/button.php');
$PAGE->requires->js('/pruebascook/chapter06/button.js', true);
?>
<?php
echo $OUTPUT->header();
?>
<input id="btnButton" type="button" value="Custom Button" />
<?php
echo $OUTPUT->footer();
?>

