<?php 


/*
_____________________________________________________________________________

Scratch 1.4 License

License
Scratch 1.4 Software
Copyright (c) 2009 Massachusetts Institute of Technology
Scratch is developed by the Lifelong Kindergarten group at MIT Media Lab.
See http://scratch.mit.edu

The Scratch logo and the Scratch cat are trademarks of MIT.

Permission is hereby granted, free of charge, to any person obtaining a 
copy of this software and accompanying documentation and media files 
(the "Software") to distribute the Software, including the right to use, 
copy, publish, or distribute copies of the Software, and to permit persons 
to whom the Software is furnished to do so, subject to the following 
conditions:

The above copyright notice and this permission notice shall be included 
in all copies of the Software.

If the software is published or distributed, the following statement shall be 
displayed in a visible place on a website or on distribution media such as CDs:

  Scratch is developed by the Lifelong Kindergarten group at the MIT Media Lab.
  See http://scratch.mit.edu

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER 
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING 
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
IN THE SOFTWARE.
_____________________________________________________________________________

*/


/*
 * __________________________________________________________________________
 *
 * Scratch filter for Moodle 2.0
 *
 *  This filter will replace any link to a Scratch file (.sb) 
 *  with a java applet that plays that Scratch inline the Moodle page
 *
 * @package    filter
 * @subpackage scratch
 * @copyright  2011 Ralf Krause  {@link http://www.moodletreff.de}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * __________________________________________________________________________
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/filelib.php');

class filter_scratch extends moodle_text_filter {

    function filter($text, array $options = array()) {
        global $CFG, $PAGE;

        if (!is_string($text)) {
            // non string data can not be filtered anyway
            return $text;
        }

        $newtext = $text; // fullclone is slow and not needed here

        $search = '/<a.*?href="([^<]+\.sb)"[^>]*>.*?<\/a>/is';
        $newtext = preg_replace_callback($search, 'filter_scratch_callback', $newtext);

        if (is_null($newtext) or $newtext === $text) {
            // error or not filtered
            return $text;
        }

        return $newtext;
    }
}



function filter_scratch_callback($link) {
    global $CFG;

    $url = $link[1];
    $relative_url = str_replace($CFG->wwwroot . '/', '../../', $url);

    $path = explode("/", $link[1]);
    $filename = $path[count($path) - 1];

    $align = $CFG->filter_scratch_center? 'margin: 0 auto;' : '';
    $autostart = $CFG->filter_scratch_autostart? 'true' : 'false';
    $showlink = $CFG->filter_scratch_showlink;
	$copyright = get_string('scratch_copyright','filter_scratch');
	
    $output = 
        '<div class="scratch" style="display: block; width: 482px; text-align: center; ' . $align . '">' .
        '<object type="application/x-java-applet" style="width:482px; height:387px;">' .
        '<param name="codebase" value="' . $CFG->wwwroot . '/filter/scratch/">' .
        '<param name="code" value="ScratchApplet">' .
        '<param name="archive" value="ScratchApplet.jar">' . 
        '<param name="project" value="' . $relative_url . '">' . 
        '<param name="autostart" value="' . $autostart . '">' .
        '<h3><a href="http://www.java.com/getjava/">Install Java</a> to view this project right on your browser!</h3>' .
        '</object>' .
        '<br /><small style="font-size:0.75em;">' . $copyright . ' <a href="http://scratch.mit.edu" target="_blank">http://scratch.mit.edu</a></small>' .
        ($showlink? '<br /><a href="' . $url .'"><img style="width:16px; height:16px;" src="' . $CFG->wwwroot . '/filter/scratch/download.gif" /> ' . $filename . '</a>' : '') .
        '</div>';	
	
    return $output;
}

?>
