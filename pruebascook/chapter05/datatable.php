<?php

require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter05/datatable.php');
$PAGE->requires->js('/pruebascook/chapter05/datatable.js', true);
echo $OUTPUT->header();
?>
<div id="container">
<table id="cooktable">
<thead>
<tr>
<th>Chapter No.</th>
<th>Title</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Combining Moodle and JavaScript</td>
</tr>
<tr>
<td>2</td>
<td>Moodle and Yahoo! User Interface Library (YUI)</td>
</tr>
<tr>
<td>3</td>
<td>Moodle forms validation</td>
</tr>
<tr>
<td>4</td>
<td>Manipulating data</td>
</tr>
<tr>
<td>5</td>
<td>Working with data tables</td>
</tr>
<tr>
<td>6</td>
<td>Enhancing page elements</td>
</tr>
<tr>
<td>7</td>
<td>Advanced layout techniques</td>
</tr>
<tr>
<td>8</td>
<td>Animating components</td>
</tr>
<tr>
<td>9</td>
<td>Integrating external libraries</td>
</tr>
</tbody>
</table>
</div>
<?php
echo $OUTPUT->footer();
?>

