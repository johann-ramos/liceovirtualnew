<?php

// Written at Louisiana State University

class block_admin_email extends block_list {
    function init() {
        $this->title = get_string('pluginname', 'block_admin_email');
    }

    function applicable_formats() {
        return array('site' => true, 'course' => false, 'my' => false);
    }

    function get_content() {
        global $OUTPUT, $USER;

        if($this->content !== NULL) {
            return $this->content;
        }

        if(!is_siteadmin($USER->id)) {
            return $this->content;
        }

        $this->content = new stdclass;
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        $send_email_str = get_string('send_email', 'block_admin_email');
        $send_email_href = new moodle_url('/blocks/admin_email/');
        $send_email = html_writer::link($send_email_href, $send_email_str);
        $this->content->items[] = $send_email;

        $this->content->icons[] = $OUTPUT->pix_icon('i/email', $send_email_str);

        return $this->content;
    }
}
