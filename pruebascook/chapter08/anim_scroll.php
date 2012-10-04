<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter08/anim_scroll.php');
$PAGE->requires->js('/pruebascook/chapter08/anim_scroll.js', true);
echo $OUTPUT->header();
?>
<div id="anim-container" style="border:1px solid black;background-color:#0099FF;float:left;padding:5px;width:120px;height:200px;overflow:hidden;">
<h1>Animation: Scroll</h1>
<p>
Moodle (abbreviation for Modular Object-Oriented
Dynamic Learning Environment) is a free and open-source
e-learning software platform, also known as a Course
Management System, Learning Management System, or
Virtual Learning Environment (VLE). As of October
2010 it had a user base of 49,952 registered and
verified sites, serving 37 million users in 3.7 million
courses.
</p>
<p>
Moodle was originally developed by Martin Dougiamas
to help educators create online courses with a focus on
interaction and collaborative construction of content,
and is in continual evolution.
</p>
</div>
<?php
echo $OUTPUT->footer();
?>
