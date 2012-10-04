<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter07/nav_dropdown.php');
$PAGE->requires->js('/pruebascook/chapter07/nav_dropdown.js', true);
echo $OUTPUT->header();
?>
<div id="menu" class="yui3-menu yui3-menu-horizontal yui3-
menubuttonnav" style="float:left;height:100px;">
<div class="yui3-menu-content">
<ul>
<li class="yui3-menuitem">
<a class="yui3-menuitem-content" href="#">Item 1</a>
</li>
<li class="yui3-menuitem">
<a class="yui3-menuitem-content" href="#">Item 2</a>
</li>
<li>
<a class="yui3-menu-label" href="#submenu-1">
<em>Sub Menu</em>
</a>
<div id="submenu-1" class="yui3-menu">
<div class="yui3-menu-content">
<ul>
<li class="yui3-menuitem">
<a class="yui3-menuitem-content" href="#">Sub Item 1</a>
</li>
<li class="yui3-menuitem">
<a class="yui3-menuitem-content" href="#">Sub Item 2</a>
</li>
</ul>
</div>
</div>
</li>
<li class="yui3-menuitem">
<a class="yui3-menuitem-content"
href="http://moodle.org/">Moodle.org
</a>
</li>
</ul>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>

