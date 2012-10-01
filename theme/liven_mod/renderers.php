<?php
 
class theme_liven_mod_core_renderer extends core_renderer {

 protected function render_custom_menu(custom_menu $menu) {
 			
 			if (isloggedin()) {
 			$realuser = session_get_realuser();
            $fullname = fullname($realuser, true);
 			$branchlabel = $fullname;
            $branchurl = new moodle_url('/user/profile.php');
            $branchtitle = $branchlabel;
            $branchsort = -10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 			
 			$suburl = new moodle_url('/user/profile.php');
 			$branch->add(get_string('myprofile'), $suburl, get_string('myprofile'));
 			
 			$suburl = new moodle_url('/login/logout.php');
 			$branch->add(get_string('logout'), $suburl, get_string('logout'));
 			} else {
 			
 			$branchlabel = get_string('login');
            $branchurl = new moodle_url('/login/index.php');
            $branchtitle = $branchlabel;
            $branchsort = -10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 			
 			}
 
 return parent::render_custom_menu($menu);
    }


}
