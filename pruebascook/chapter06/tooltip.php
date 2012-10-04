<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter06/tooltip.php');
$PAGE->requires->js('/pruebascook/chapter06/tooltip.js', true);
echo $OUTPUT->header();
?>
<img id="logo" src="../../theme/image.php?theme=standard&image=moodlelo
go" title="Moodle Logo" />
<?php
echo $OUTPUT->footer();
?>

