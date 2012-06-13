<?php

function universite_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $replacement = $linkcolor;
    if (is_null($replacement)) {
        $replacement = '#246f7a';
    }
    $css = str_replace($tag, $replacement, $css);
    
    return $css;
}

function universite_set_linkcolorhover($css, $linkcolorhover) {
    $tag = '[[setting:linkcolorhover]]';
    $replacement = $linkcolorhover;
    if (is_null($replacement)) {
        $replacement = '#f4b100';
    }
    $css = str_replace($tag, $replacement, $css);
    
    return $css;
}

function universite_set_linkcolorheader($css, $linkcolorheader) {
    $tag = '[[setting:linkcolorheader]]';
    $replacement = $linkcolorheader;
    if (is_null($replacement)) {
        $replacement = '#c1d82f';
    }
    $css = str_replace($tag, $replacement, $css);
    
    return $css;
}

function universite_set_dockbuttons($css, $dockbuttons) {
    $tag = '[[setting:dockbuttons]]';
    $replacement = $docktitles;
    if (is_null($replacement)) {
        $replacement = '#fdf3b4';
    }
    $css = str_replace($tag, $replacement, $css);
    

    return $css;
}


function universite_set_headercolor($css, $headercolor) {
    $tag = '[[setting:headercolor]]';
    $replacement = $headercolor;
    if (is_null($replacement)) {
        $replacement = '#193a3c';
    }
    $css = str_replace($tag, $replacement, $css);
    

    return $css;
}

function universite_set_lighterheadercolor($css, $lighterheadercolor) {
    $tag = '[[setting:lighterheadercolor]]';
    $replacement = $lighterheadercolor;
    if (is_null($replacement)) {
        $replacement = '#27484d';
    }
    $css = str_replace($tag, $replacement, $css);
    

    return $css;
}




function universite_process_css($css, $theme) {
 
    if (!empty($theme->settings->headercolor)) {
        $headercolor = $theme->settings->headercolor;
    } else {
        $headercolor = null;
    }
    $css = universite_set_headercolor($css, $headercolor);

    if (!empty($theme->settings->lighterheadercolor)) {
        $lighterheadercolor = $theme->settings->lighterheadercolor;
    } else {
        $lighterheadercolor = null;
    }
    $css = universite_set_lighterheadercolor($css, $lighterheadercolor);

    if (!empty($theme->settings->dockbuttons)) {
        $dockbuttons = $theme->settings->dockbuttons;
    } else {
        $dockbuttons = null;
    }
    $css = universite_set_dockbuttons($css, $dockbuttons);


    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = universite_set_linkcolor($css, $linkcolor);

    if (!empty($theme->settings->linkcolorhover)) {
        $linkcolorhover = $theme->settings->linkcolorhover;
    } else {
        $linkcolorhover = null;
    }
    $css = universite_set_linkcolorhover($css, $linkcolorhover);
 
    if (!empty($theme->settings->linkcolorheader)) {
        $linkcolorheader = $theme->settings->linkcolorheader;
    } else {
        $linkcolorheader = null;
    }
    $css = universite_set_linkcolorheader($css, $linkcolorheader);

    return $css;
}





?>