<?php 
/*--------------------------------------------------------------------------------------*/
/*---------------------  THALENTIA MOODLE SOCIAL & QUICK BAR ---------------------------*/
/*--------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------*/
/*  Moodle Social Bar 2.0:

    By Diego Maté: 
	
       - http://www.thalentia.com
	   
	   - http://www.twitter.com/thalentia
	   
	   - http://www.linkedin.com/diegothalentia 
	                                                                                    */
/*--------------------------------------------------------------------------------------*/



defined('MOODLE_INTERNAL') || die('No direct access');
global $DB, $CFG;
$themelayoutwww = $CFG->wwwroot.'/theme/'.$CFG->theme.'/layout';

/*            Query to know the number of students enroled in current course            */

$con = mysql_connect($CFG->dbhost ,$CFG->dbuser,$CFG->dbpass ); 
if (!$con){die('¡Error! Unable to connect MySQL Server: ' . mysql_error());} 
mysql_select_db($CFG->dbname, $con); 	

$query = " SELECT mdl_course.fullname, mdl_role_assignments.userid FROM mdl_course";
$query .= " INNER JOIN mdl_context ON mdl_context.instanceid = mdl_course.id";
$query .= " INNER JOIN mdl_role_assignments ON mdl_context.id = mdl_role_assignments.contextid";
$query .= " WHERE mdl_course.id = '".$COURSE->id."' ";

$total_students = mysql_num_rows(mysql_query($query));

/*      Query to know the number of students enroled in current course connected        */
        
if (isset($CFG->block_online_users_timetosee)) {
    $timetoshowusers = $CFG->block_online_users_timetosee * 60;
} else {
    $timetoshowusers = 300;
}
$timefrom = 100 * floor((time() - $timetoshowusers) / 100); 
$connected_students = $DB->count_records_select('user', "lastaccess > $timefrom AND id != 1");

/*                   Query to konw the number of unread messages                        */

$unread_messages = $DB->count_records('message', array('useridto' => $USER->id));

/*        Loading the files we need: styles and functions of thalentia_moodle_bar       */

echo '<link href="'.$themelayoutwww.'/thalentia_moodlebar/css/thalentia_moodlebar.css" rel="stylesheet" type="text/css"/>';
echo '<script src="'.$themelayoutwww.'/thalentia_moodlebar/script/jquery_min.js" type="text/javascript"></script>'; 
echo '<script src="'.$themelayoutwww.'/thalentia_moodlebar/script/thalentia_moodlebar.js" type="text/javascript"></script>'; 
?>

<!-------------------------------------------------------------------------------------*/
              The HTML tags to print de contenet of thalentia_moodle_bar      
/*-------------------------------------------------------------------------------------->

<div id="toolbar_container">
 <div id="toolbarbut">
 <?php echo '<a href="http://www.thalentia.com" target="_blank"><img src="'.$themelayoutwww.'/thalentia_moodlebar/images/thalentia-social.png" title="www.thalentia.com" style="float:right; margin-right:80px;"/></a>'; ?>
  <span class="login"><?php echo $OUTPUT->login_info();?></span>
  <span class="showbar"><a href="#"></a></span>
 </div>
 <div id="toolbar"> 
  <div class="leftside"> 
   <ul id="social">
    <li><a class="rss" rel="shadowbox;width=850;height=600" href="http://www.thalentia.com/moodle/novedades.php"></a><!-- Delete 'rel' atribute if you don't want to load the shadowbox effect -->
     <div id="tiprss" class="tip">
      <ul>
       <li>&nbsp;&nbsp;Suscribirse a NewsLetter</li>
      </ul>  
     </div>
    </li>
    <li><a class="facebook" href="http://www.facebook.com/thalentia.formacion" target="_blank"></a>
      <div id="tipfacebook" class="tip">
       <ul>
        <li>&nbsp;&nbsp;Seguirnos en Facebook</li>
       </ul>  
      </div>  
     </li>
     <li><a class="twitter" href="http://twitter.com/thalentia" target="_blank"></a>
      <div id="tiptwitter" class="tip">
       <ul>
        <li>&nbsp;&nbsp;Seguirnos en Twitter</li>
       </ul>  
      </div>
     </li>
     <li><a class="linkedin" href="http://www.linkedin.com/diegothalentia" target="_blank"></a>
      <div id="tiplinkedin" class="tip">
       <ul>
        <li>&nbsp;&nbsp;Seguirnos en Linkedin</li>
       </ul>  
      </div>
     </li>
     <li><a class="google" href="https://plus.google.com/116667713372474941177/" target="_blank"></a>
      <div id="tipgoogle" class="tip">
       <ul>
        <li>&nbsp;&nbsp;Seguirnos en Google+</li>
       </ul>  
      </div>
     </li>
   </ul>
  </div>
  <div class="rightside"> 
   <span class="downarr"><a href="#"></a></span>
   <span class="menu_title"><a class="menutit" href="#">quick menu</a></span>
    <div class="quickmenu">
     <ul>
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?><!-- You can put icons, just discomment php and replace qm_image.png-->
	    <?php echo '<a target="_top" href="'.$CFG->wwwroot.'"/>'; ?> - Mis Cursos</a>
      </li>
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?>
	    <?php echo '<a target="_top" href="'.$CFG->wwwroot.'/user/view.php" />'; ?> - Mi Perfil</a>
      </li>
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?>
	    <?php echo '<a target="_top" href="'.$CFG->wwwroot.'/user/index.php?id='.$COURSE->id.'" /> - Compañeros: '.$total_students.' | '.$connected_students.' On Line</a>'; ?>
      </li>
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?>
	    <?php echo '<a target="_top" href="'.$CFG->wwwroot.'/message" /> - Mensajes: '.$unread_messages.' Nuevos</a>'; ?>
      </li>      
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?>
	    <?php echo '<a target="_top" href="'.$CFG->wwwroot.'/calendar/view.php" />'; ?> - Calendario</a>
      </li>
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?>
	    <?php echo '<a target="_top" href="'.$CFG->wwwroot.'/grade/report/index.php?id='.$COURSE->id.'" />'; ?> - Calificaciones</a>
      </li>
      <li>
        <?php //echo '<img src="'.$themelayoutwww.'/thalentia_moodlebar/images/qm_image.png" style="float:left; margin-right:10px;"/>'; ?>
        <a rel="shadowbox;width=850;height=600" href="http://www.thalentia.com/moodle/soporte.php"> - Soporte Técnico</a><!-- Delete 'rel' atribute if you don't want to load the shadowbox effect -->
      </li>
     </ul> 
    </div>
  </div>
 </div>
</div>
