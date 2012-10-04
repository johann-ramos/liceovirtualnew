<?php
require_once(dirname(__FILE__) . '/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter04/datasource_xml.php');
$PAGE->requires->js('/pruebascook/chapter04/datasource_xml.js');
echo $OUTPUT->header();
?>
<form>
<textarea id="contents" rows="10"></textarea>
<br />
<input id="go" type="button" value="Get XML">
</form>
<?php
echo $OUTPUT->footer();
?>

