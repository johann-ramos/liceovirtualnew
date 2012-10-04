<?php

require_once(dirname(__FILE__) . '/../../config.php');
require_once('./validation_form.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter03/validation.php');
$PAGE->requires->js('/pruebascook/chapter03/validation.js');

echo $OUTPUT->header();
echo $OUTPUT->heading('Moodle JavaScript Cookbook');

$mform = new validation_form();
if ($fromform=$mform->get_data()){
    print_object($fromform);
}
else{
    $mform->display();
}
echo $OUTPUT->footer();
?>

