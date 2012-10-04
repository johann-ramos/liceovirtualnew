<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter09/external_scriptaculous.php');
$PAGE->requires->js('/pruebascook/lib/prototype.js');
$PAGE->requires->js('/pruebascook/lib/scriptaculous/src/scriptaculous.js');
$PAGE->requires->js('/pruebascook/lib/scriptaculous/src/effects.js');
$PAGE->requires->js('/pruebascook/chapter09/external_scriptaculous.js');
echo $OUTPUT->header();
?>
<div id="demo">Hello from script.aculo.us</div>
<?php
echo $OUTPUT->footer();
?>

