<?php

require_once(dirname(__FILE__).'/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter01/blank.php');

echo $OUTPUT->header();

echo "algo";

echo $OUTPUT->footer();

?>

