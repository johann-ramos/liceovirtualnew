<?php

class block_unanswered_discussions_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        global $DB, $COURSE;

        // Start block specific section in config form
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // Shown options
        $showOptions = array();
        for($i=0; $i<=$this->block->maxShowOption; $i++) {
            $showOptions[] = $i;
        }
        $showOptions[0] = get_string('none', 'block_unanswered_discussions');

        // Control visibility of random unanswered posts
        $mform->addElement('select', 'config_randomposts', get_string('randomposts', 'block_unanswered_discussions'), $showOptions);
        $mform->setDefault('config_randomposts', $this->block->defaultLimits['randomposts']);
        $mform->addHelpButton('config_randomposts','config_show', 'block_unanswered_discussions');

        // Control visibility of oldest unanswered posts
        $mform->addElement('select', 'config_oldestposts', get_string('oldestposts', 'block_unanswered_discussions'), $showOptions);
        $mform->setDefault('config_oldestposts', $this->block->defaultLimits['oldestposts']);
        $mform->addHelpButton('config_oldestposts','config_show', 'block_unanswered_discussions');

        // Control visibility of own unanswered posts
        $mform->addElement('select', 'config_yourposts', get_string('yourpostsconfig', 'block_unanswered_discussions'), $showOptions);
        $mform->setDefault('config_yourposts', $this->block->defaultLimits['yourposts']);
        $mform->addHelpButton('config_yourposts','config_show', 'block_unanswered_discussions');

        $forums = $DB->get_records('forum', array('course'=>$COURSE->id), 'name ASC');
        $selectOptions = array();
        foreach($forums as $id=>$forum) {
            $selectOptions[$forum->id] = $forum->name;
        }
        if(empty($forums)) {
            $mform->addElement('html', get_string('noforatoexclude', 'block_unanswered_discussions'));
        }
        else {
            $select = &$mform->addElement('select', 'config_exclude', get_string('excludefora', 'block_unanswered_discussions'), $selectOptions);
            $select->setMultiple(true);
            $select->setSelected($this->block->config->exclude);
            $mform->addHelpButton('config_exclude','config_exclude', 'block_unanswered_discussions');
        }
    }
}
