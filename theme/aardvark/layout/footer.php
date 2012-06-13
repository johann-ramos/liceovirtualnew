	<div class="footer_block">
        <h4>©<?php
echo date("Y"); echo " "; echo $PAGE->theme->settings->copyright; ?></h4>
		<?php
            echo $OUTPUT->login_info();			
			echo $OUTPUT->standard_footer_html();
            ?>     
	
	</div>

	<div class="footer_block">
		<?php if ($hasdisclaimer) {?><h4><?php echo get_string('disclaimer','theme_aardvark');?></h4> <?php } else {}?>
        <?php if ($hasdisclaimer) {echo $PAGE->theme->settings->disclaimer;} else {}?>
        
        
	</div>

		<div class="footersocial" id="footersocial">
        <h4>Social Networks</h4>
<ul>

<?php if ($hasfacebook) {?><a href="<?php echo $PAGE->theme->settings->facebook;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/facebook', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hastwitter) {?><a href="<?php echo $PAGE->theme->settings->twitter;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/twitter', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hasgoogleplus) {?><a href="<?php echo $PAGE->theme->settings->googleplus;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/googleplus', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hasflickr) {?><a href="<?php echo $PAGE->theme->settings->flickr;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/flickr', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($haspicasa) {?><a href="<?php echo $PAGE->theme->settings->picasa;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/picasa', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hastumblr) {?><a href="<?php echo $PAGE->theme->settings->tumblr;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/tumblr', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hasblogger) {?><a href="<?php echo $PAGE->theme->settings->blogger;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/blogger', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($haslinkedin) {?><a href="<?php echo $PAGE->theme->settings->linkedin;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/linkedin', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hasyoutube) {?><a href="<?php echo $PAGE->theme->settings->youtube;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/youtube', 'theme')?>" /></li></a> <?php } else {}?>
<?php if ($hasvimeo) {?><a href="<?php echo $PAGE->theme->settings->vimeo;?> "><li><img src="<?php echo $OUTPUT->pix_url('social/vimeo', 'theme')?>" /></li></a> <?php } else {}?>


		  </ul>
		</div>