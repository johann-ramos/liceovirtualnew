<?php
    
    // Set the theme trim color
    
    // Set the custommenu color
    if (!empty($theme->settings->menucolor)) {
    
    // Set the custommenu hover color
    if (!empty($theme->settings->menuhovercolor)) {
    
    // Set the custommenu trim color
    if (!empty($theme->settings->menutrimcolor)) {

	// Set the custommenu link color
    if (!empty($theme->settings->menulinkcolor)) {

	// Set the banner height

	// Set the screenwidth

	// Toggle AutoHide functionality
    
    // Set the background image for the Banner 
        


function rocket_set_themecolor($css, $themecolor) {

function rocket_set_themetrimcolor($css, $themetrimcolor) {

function rocket_set_menucolor($css, $menucolor) {

function rocket_set_menuhovercolor($css, $menuhovercolor) {

function rocket_set_menulinkcolor($css, $menulinkcolor) {

function rocket_set_menutrimcolor($css, $menutrimcolor) {

function rocket_set_banner($css, $banner) {

function rocket_set_bannerheight($css, $bannerheight) {

function rocket_set_screenwidth($css, $screenwidth) {
	$screenwidthmargintag = '[[setting:screenwidthmargintag]]';
		$css = str_replace($tag, $replacement.'px', $css);
		$css = str_replace($screenwidthmargintag, ($replacement+5).'px', $css);
	}
	if ( $replacement == "97" ) {
		$css = str_replace($tag, $replacement.'%', $css);
	}

function rocket_set_autohide($css, $autohide) {
 * get_performance_output() override get_peformance_info()
 *  in moodlelib.php. Returns a string
 * values ready for use.
 *
 * This function was created by Lei Zhang and was originally used in the decaf theme
 * @return string
 */
function rocket_performance_output($param) {
	
    $html = '<div class="performanceinfo"><ul>';
	if (isset($param['realtime'])) $html .= '<li><a class="red" href="#"><var>'.$param['realtime'].' secs</var><span>Load Time</span></a></li>';
	if (isset($param['memory_total'])) $html .= '<li><a class="orange" href="#"><var>'.display_size($param['memory_total']).'</var><span>Memory Used</span></a></li>';
    if (isset($param['includecount'])) $html .= '<li><a class="blue" href="#"><var>'.$param['includecount'].' Files </var><span>Included</span></a></li>';
    if (isset($param['dbqueries'])) $html .= '<li><a class="purple" href="#"><var>'.$param['dbqueries'].' </var><span>DB Read/Write</span></a></li>';
    $html .= '</ul></div>';

    return $html;
}

 * Generate updated custommenu with enroled courses listed
 */
    public function __construct(custom_menu_item $menunode) {
        parent::__construct($menunode->get_text(), $menunode->get_url(), $menunode->get_title(), $menunode->get_sort_order(), $menunode->get_parent());
        $this->children = $menunode->get_children();
 
        $matches = array();
        if (preg_match('/^\[\[([a-zA-Z0-9\-\_\:]+)\]\]$/', $this->text, $matches)) {
            try {
                $this->text = get_string($matches[1], 'theme_rocket');
            } catch (Exception $e) {
                $this->text = $matches[1];
            }
        }
 
        $matches = array();
        if (preg_match('/^\[\[([a-zA-Z0-9\-\_\:]+)\]\]$/', $this->title, $matches)) {
            try {
                $this->title = get_string($matches[1], 'theme_rocket');
            } catch (Exception $e) {
                $this->title = $matches[1];
            }
        }
    }
}