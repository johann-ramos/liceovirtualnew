<?php
 
class theme_brightdrop_core_renderer extends core_renderer {


public function heading($text, $level = 2, $classes = 'main', $id = null) {
    $content  = html_writer::start_tag('div', array('class'=>'headingcontainer'));
    $content .= html_writer::empty_tag('img', array('src'=>$this->pix_url('hcourse', 'theme'), 'alt'=>'', 'class'=>'headingimage'));
    $content .= parent::heading($text, $level, $classes, $id);
    $content .= html_writer::end_tag('div');
    return $content;
}


protected function render_custom_menu(custom_menu $menu) {
        
		
		$courses = $this->page->navigation->get('courses');
 
if ( $courses && $courses->has_children()) {
    $branchlabel = get_string('courses');
    $branchurl   = new moodle_url('/course/index.php');
    $branchtitle = $branchlabel;
    $branchsort  = 10000;
 
    $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 
    foreach ($courses->children as $coursenode) {
        $branch->add($coursenode->get_content(), $coursenode->action, $coursenode->get_title());
    }
}

$mycourses = $this->page->navigation->get('mycourses');
 
if (isloggedin() && $mycourses && $mycourses->has_children()) {
    $branchlabel = get_string('mycourses');
    $branchurl   = new moodle_url('/course/index.php');
    $branchtitle = $branchlabel;
    $branchsort  = 10000;
 
    $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 
    foreach ($mycourses->children as $coursenode) {
        $branch->add($coursenode->get_content(), $coursenode->action, $coursenode->get_title());
    }
}
 
return parent::render_custom_menu($menu);		
		
    }

public function standard_footer_html() {
        global $CFG;

        // This function is normally called from a layout.php file in {@link header()}
        // but some of the content won't be known until later, so we return a placeholder
        // for now. This will be replaced with the real content in {@link footer()}.
        $output = self::PERFORMANCE_INFO_TOKEN;
        if ($this->page->legacythemeinuse) {
            // The legacy theme is in use print the notification
            $output .= html_writer::tag('div', get_string('legacythemeinuse'), array('class'=>'legacythemeinuse'));
        }
        if (!empty($CFG->debugpageinfo)) {
            $output .= '<div class="performanceinfo">This page is: ' . $this->page->debug_summary() . '</div>';
        }
		if ($this->page->pagetype == 'site-index') {
		$output .=html_writer::start_tag('div', array('class'=>'delink'));
		$output .= base64_decode('PGEgaHJlZj0iaHR0cDovL3d3dy45OXRlbXBsYXRlLmNvbS9tYWluL21vb2RsZV8yMF90aGVtZS5odG1sIj5Nb29kbGUgVGVtcGxhdGU8L2E+DQo8YSBocmVmPSJodHRwOi8vd3d3LnRoZW1lZm9ybWF0LmNvbSI+RnJlZSBUaGVtZTwvYT4=');
        $output .=html_writer::end_tag('div');}
		
		if (!empty($CFG->debugvalidators)) {
            $output .= '<div class="validators"><ul>
              <li><a href="http://validator.w3.org/check?verbose=1&amp;ss=1&amp;uri=' . urlencode(qualified_me()) . '">Validate HTML</a></li>
              <li><a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=' . urlencode(qualified_me()) . '">Section 508 Check</a></li>
              <li><a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=0&amp;warnp2n3e=1&amp;url1=' . urlencode(qualified_me()) . '">WCAG 1 (2,3) Check</a></li>
            </ul></div>';
        }
		
		
        return $output;
    }
	
	public function home_link() {
        global $CFG, $SITE;

        if ($this->page->pagetype == 'site-index') {
            return '<div class="sitelink">' . 'Powered by' .
                   '<a title="Moodle" href="http://moodle.org/"> Moodle' .
                   '</a></div>';

        } else if (!empty($CFG->target_release) && $CFG->target_release != $CFG->release) {
            // Special case for during install/upgrade.
            return '<div class="sitelink">'.
                   '<a title="Moodle" href="http://docs.moodle.org/en/Administrator_documentation" onclick="this.target=\'_blank\'">' .
                   '<img style="width:100px;height:30px" src="' . $this->pix_url('moodlelogo') . '" alt="moodlelogo" /></a></div>';

        } else if ($this->page->course->id == $SITE->id || strpos($this->page->pagetype, 'course-view') === 0) {
            return '<div class="homelink"><a href="' . $CFG->wwwroot . '/">' .
                    get_string('home') . '</a></div>';

        } else {
            return '<div class="homelink"><a href="' . $CFG->wwwroot . '/course/view.php?id=' . $this->page->course->id . '">' .
                    format_string($this->page->course->shortname) . '</a></div>';
        }
    }
	
	 
}



?>