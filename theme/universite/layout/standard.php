<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($hassidepre && !$hassidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($hassidepost && !$hassidepre) {
    $bodyclasses[] = 'side-post-only';
} else if ($hassidepost && $hassidepre) {
    $bodyclasses[] = 'both-pre-post';
} else if (!$hassidepost && !$hassidepre) {
    $bodyclasses[] = 'content-only';
}

echo $OUTPUT->doctype() ?>

<html <?php echo $OUTPUT->htmlattributes() ?>>

<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />

    <?php 
		
		echo $OUTPUT->standard_head_html();
		
		if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'Nokia') || strstr($_SERVER['HTTP_USER_AGENT'],'SonyEricsson') || strstr($_SERVER['HTTP_USER_AGENT'],'Blackberry') || strstr($_SERVER['HTTP_USER_AGENT'],'Android')) 
		{
			echo "<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />";
			echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; \">";
			echo "<link rel=\"apple-touch-icon\" href=\"" . $OUTPUT->pix_url('regular_icon', 'theme') . "\" />";
			echo "<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"" . $OUTPUT->pix_url('retina_icon', 'theme') . "\" />";
			
			$mobileDevice = true;
		}
		else if (strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) {
			echo "<link rel=\"apple-touch-icon\" href=\"" . $OUTPUT->pix_url('regular_icon', 'theme') . "\" />";
			echo "<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"" . $OUTPUT->pix_url('retina_icon', 'theme') . "\" />";
			$mobileDevice = false; // no screen size adjusting needed for ipad..			
		}
		else $mobileDevice = false;
	?>
</head>

<body id="<?php echo $PAGE->bodyid ?>" class="<?php echo $PAGE->bodyclasses.' '.join(' ', $bodyclasses); if ($mobileDevice) echo " mobileView";?>">

<?php if ($hascustommenu) { ?>
<div id="custommenu"><?php echo $custommenu; ?></div>
<?php } ?>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php if ($hasheading || $hasnavbar) { ?>
    <div id="header">
        <?php if ($hasheading) { ?>
            <h1><?php echo $PAGE->heading ?></h1>
            <div id="loginDetails">
				<?php
                    echo $OUTPUT->login_info();
                    if (!empty($PAGE->layout_options['langmenu'])) {
                        echo $OUTPUT->lang_menu();
                    }
                    echo $PAGE->headingmenu		
                ?>
            </div>
        <?php } ?>
        <div id="logo" style="opacity:0;"><img src="<?php echo $OUTPUT->pix_url('logo', 'theme') ?>" alt="Institution's logo" /> </div>
        <?php if ($hasnavbar) { ?>
             <div id="buttonContainer"><?php echo $PAGE->button; ?></div>
	    <?php } ?>
    </div>
<?php } ?>

<!-- parameter the breadcrumbs -->
<?php if ($hasnavbar) { ?>
<div id="breadcrumbs" class="ui-widget-header"><?php echo $OUTPUT->navbar(); ?></div>
<?php } ?>

<!-- END OF HEADER -->

<!-- START OF PAGE CONTENT -->
    <div id="page-content"> 	

		<?php if ($hassidepost) { ?>
        <div id="region-post" class="block-region" >
            <div class="region-content">
                <?php echo $OUTPUT->blocks_for_region('side-post'); ?>
            </div>
        </div>
        <?php } ?>    

		<?php if ($hassidepre) { ?>
        <div id="region-pre" class="block-region" >
            <div class="region-content">
                <?php echo $OUTPUT->blocks_for_region('side-pre'); ?>
            </div>
        </div>
        <?php } ?>    
        

        <div id="region-main">
	
            <div id="contentCol" class="region-content">
                <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                <div style="clear:both;"></div>
            </div>
    
        </div>

		<!-- START OF FOOTER -->
		<?php if ($hasfooter) { ?>
        <div id="page-footer" class="clearfix">
            <?php
            echo $OUTPUT->login_info();
            echo $OUTPUT->standard_footer_html();
            ?>
        </div>
    <?php } ?>
	
    </div> 					<!-- END OF PAGE CONTENT -->




<?php 
echo $OUTPUT->standard_end_of_body_html();
?>

</body>
</html>