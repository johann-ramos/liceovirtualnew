<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter07/nav_tree.php');
$PAGE->requires->js('/pruebascook/chapter07/    nav_tree.js', true);
echo $OUTPUT->header();
?>
<div id="treeContainer">
<ul>
<li><a href="#">Item 1</a></li>
<li><a href="#">Item 2</a></li>
<li>Sub Tree
<ul>
<li><a href="#">Sub Item 1</a></li>
<li><a href="#">Sub Item 2</a></li>
</ul>
</li>
<li><a href="http://moodle.org/">Moodle.org</a></li>
</ul>
</div>
<?php
echo $OUTPUT->footer();
?>

