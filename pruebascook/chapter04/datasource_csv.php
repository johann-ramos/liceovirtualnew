<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_url('/pruebascook/chapter04/datasource_json.php');
$PAGE->requires->js('/pruebascook/chapter04/datasource_csv.js');
echo $OUTPUT->header();
?>
<form>
<textarea id="contents" rows="10"></textarea>
<br />
<input id="go" type="button" value="Get CSV">
</form>
<?
echo $OUTPUT->footer();
?>

