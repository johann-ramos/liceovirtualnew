<script text/javascript>
function toggle5(showHideDiv, switchImgTag) {
        var ele = document.getElementById(showHideDiv);
        var imageEle = document.getElementById(switchImgTag);
        if(ele.style.display == "block") {
                ele.style.display = "none";
		imageEle.innerHTML = '<img src="<?php echo $OUTPUT->pix_url('profile/down', 'theme')?>">';
        }
        else {
                ele.style.display = "block";
                imageEle.innerHTML = '<img src="<?php echo $OUTPUT->pix_url('profile/up', 'theme')?>">';
        }
}
</script>


<?php

	function get_content () {
	global $USER, $CFG, $SESSION, $COURSE;
	$wwwroot = '';
	$signup = '';}

	if (empty($CFG->loginhttps)) {
		$wwwroot = $CFG->wwwroot;
	} else {
		$wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
	}

if (!isloggedin() or isguestuser()) {
	echo '<div class="profilelogin" id="profilelogin">';
	echo '<form id="login" method="post" action="'.$wwwroot.'/login/index.php?authldap_skipntlmsso=1">';
	echo '<ul>';
	echo '<li><input class="loginform" type="text" name="username" id="login_username" value="" placeholder="'.get_string('username').'" /></li>';
	echo '<li><input class="loginform" type="password" name="password" id="login_password" value="" placeholder="'.get_string('password').'" /></li>';
	echo '<li><input type="submit" value="&nbsp;&nbsp;'.get_string('login').'&nbsp;&nbsp;" /></li>';
	echo '</ul>';
	echo '</form>';
	echo '</div>';
	echo '</div>';
} else { ?>
	
	<div class="profilepic" id="profilepic">
	<?php
		
			echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'"><img src="'.$CFG->wwwroot.'/user/pix.php?file=/'.$USER->id.'/f1.jpg" width="80px" height="80px" title="'.$USER->firstname.' '.$USER->lastname.'" alt="'.$USER->firstname.' '.$USER->lastname.'" /></a>';
		
	?>
</div> <?php
	echo '<div class="profilename" id="profilename">';

	echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'">'.$USER->firstname.' '.$USER->middlename.' '.$USER->lastname.' '.$USER->secondlastname.'</a>';

?>

<a id="imageDivLink" href="javascript:toggle5('profilebar', 'imageDivLink');"><img src="<?php echo $OUTPUT->pix_url('profile/down', 'theme')?>" /></a>

<?php

echo '</div>'; // end of headerwrap
?>
</div>
<div class="profilebar" id="profilebar" style="display: none;">
<!--	<div class="profilebar_block">
        <h4>Block TBC</h4>
		
	
	</div>
-->
	<div class="profilebar_events">
		<h4><?php echo get_string('upcomingevents','calendar');?></h4>
        
        <?php include ('upcoming.php');?>
        
	</div>

	<div class="profilebar_account">
		<h4><?php echo get_string('mymoodle', 'my');?></h4>
		<div class="profileoptions" id="profileoptions">
			<table width="100%" border="0">
			<tr>
			<td valign="top"> <ul>
			<a href="<?php echo $CFG->wwwroot; ?>/my"><li><img src="<?php echo $OUTPUT->pix_url('profile/courses', 'theme')?>" />&nbsp;<?php echo get_string('mycourses');?></li></a>
            			<a href="<?php echo $CFG->wwwroot; ?>/user/profile.php"><li><img src="<?php echo $OUTPUT->pix_url('profile/profile', 'theme')?>" />&nbsp;<?php echo get_string('viewprofile');?></li></a>
                        <a href="<?php echo $CFG->wwwroot; ?>/user/editadvanced.php"><li><img src="<?php echo $OUTPUT->pix_url('profile/editprofile', 'theme')?>" />&nbsp;<?php echo get_string('editmyprofile');?></li></a>

            			<a href="<?php echo $CFG->wwwroot; ?>/user/filesedit.php"><li><img src="<?php echo $OUTPUT->pix_url('profile/myfiles', 'theme')?>" />&nbsp;<?php echo get_string('myfiles');?></li></a>

			</ul></td>
			<td valign="top"><ul>
           	<a href="<?php echo $CFG->wwwroot; ?>/calendar/view.php?view=month"><li><img src="<?php echo $OUTPUT->pix_url('profile/calendar', 'theme')?>" />&nbsp;<?php echo get_string('calendar','calendar');?></li></a>

			<?php if ($hasemailurl) {?><a href="<?php echo $PAGE->theme->settings->emailurl;?> "><li><img src="<?php echo $OUTPUT->pix_url('profile/email', 'theme')?>" />&nbsp;<?php echo get_string('email','theme_aardvark');?></li></a> <?php } else {}?>
			<a href="<?php echo $CFG->wwwroot; ?>/login/logout.php"><li><img src="<?php echo $OUTPUT->pix_url('profile/logout', 'theme')?>" />&nbsp;<?php echo get_string('logout');?></li></a>
			</ul></td>
			</tr>
			</table>
		</div>
	</div>
        <div class="profilebarclear">
        </div>


<?php }?>
