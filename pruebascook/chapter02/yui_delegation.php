<?php

require_once(dirname(__FILE__) . '/../../config.php');

$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter02/yui_delegation.php');
$PAGE->requires->js('/pruebascook/chapter02/yui_delegation.js');

echo $OUTPUT->header();
?>
<div id="container">
<ul>
<li id="li-1"><a href="#">Item1</a></li>
<li id="li-2"><a href="#">Item2</a></li>
<li id="li-3"><a href="#">Item3</a></li>
<li id="li-4"><a href="#">Item4</a></li>
<li id="li-5"><a href="#">Item5</a></li>
</ul>
</div>
<?php
echo $OUTPUT->footer();
?>

