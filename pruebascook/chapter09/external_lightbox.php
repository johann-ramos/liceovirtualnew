<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter09/external_lightbox.php');
$PAGE->requires->js('/pruebascook/lib/prototype.js');
$PAGE->requires->js('/pruebascook/lib/scriptaculous/src/scriptaculous.js');
$PAGE->requires->js('/pruebascook/lib/scriptaculous/src/effects.js');
$PAGE->requires->js('/pruebascook/lib/scriptaculous/src/builder.js');
$PAGE->requires->js('/pruebascook/lib/lightbox2/js/lightbox.js');
$PAGE->requires->css('/pruebascook/lib/lightbox2/css/lightbox.css');
echo $OUTPUT->header();
?>
<a href="flower.jpg" rel="lightbox"><img src="flower.jpg" width="150"
/></a>
<?php
echo $OUTPUT->footer();
?>

