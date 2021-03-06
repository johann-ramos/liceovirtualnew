<?php

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->dirroot.'/lib/formslib.php');

class user_editadvanced_form extends moodleform {

    // Define the form
    function definition() {
        global $USER, $CFG, $COURSE;

        $mform =& $this->_form;

        if (is_array($this->_customdata) && array_key_exists('editoroptions', $this->_customdata)) {
            $editoroptions = $this->_customdata['editoroptions'];
        } else {
            $editoroptions = null;
        }

        //Accessibility: "Required" is bad legend text.
        $strgeneral  = get_string('general');
        $strrequired = get_string('required');

        /// Add some extra hidden fields
        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->addElement('hidden', 'course', $COURSE->id);
        $mform->setType('course', PARAM_INT);

        /// Print the required moodle fields first
        $mform->addElement('header', 'moodle', $strgeneral);

        $mform->addElement('text', 'username', get_string('username'), 'size="20"');
        $mform->addRule('username', $strrequired, 'required', null, 'client');
        //agregar minimo de caracteres
        $mform->addRule('username', get_string('usernameminlength'), 'minlength', 6, 'client');
        //
        $mform->setType('username', PARAM_RAW);

        $auths = get_plugin_list('auth');
        $auth_options = array();
        foreach ($auths as $auth => $unused) {
            $auth_options[$auth] = get_string('pluginname', "auth_{$auth}");
        }
        $mform->addElement('select', 'auth', get_string('chooseauthmethod','auth'), $auth_options);
        $mform->addHelpButton('auth', 'chooseauthmethod', 'auth');

        if (!empty($CFG->passwordpolicy)){
            $mform->addElement('static', 'passwordpolicyinfo', '', print_password_policy());
        }
        $mform->addElement('passwordunmask', 'newpassword', get_string('newpassword'), 'size="20"');
        $mform->addHelpButton('newpassword', 'newpassword');
        $mform->setType('newpassword', PARAM_RAW);

        $mform->addElement('advcheckbox', 'preference_auth_forcepasswordchange', get_string('forcepasswordchange'));
        $mform->addHelpButton('preference_auth_forcepasswordchange', 'forcepasswordchange');
        /// shared fields
        useredit_shared_definition($mform, $editoroptions);

        /// Next the customisable profile fields
        profile_definition($mform);

        $this->add_action_buttons(false, get_string('updatemyprofile'));
    }

    function definition_after_data() {
        global $USER, $CFG, $DB, $OUTPUT;

        $mform =& $this->_form;
        if ($userid = $mform->getElementValue('id')) {
            $user = $DB->get_record('user', array('id'=>$userid));
        } else {
            $user = false;
        }
 //Para sacar el selector de lenguajes del registro se tiene q comentar esta entrada mas la de editlib referentes al idioma
 
        // if language does not exist, use site default lang
        if ($langsel = $mform->getElementValue('lang')) {
            $lang = reset($langsel);
            // check lang exists
            if (!get_string_manager()->translation_exists($lang, false)) {
                $lang_el =& $mform->getElement('lang');
                $lang_el->setValue($CFG->lang);
            }
        }

        // user can not change own auth method
        if ($userid == $USER->id) {
            $mform->hardFreeze('auth');
            $mform->hardFreeze('preference_auth_forcepasswordchange');
        }

        // admin must choose some password and supply correct email
        if (!empty($USER->newadminuser)) {
            $mform->addRule('newpassword', get_string('required'), 'required', null, 'client');
        }

        // require password for new users
        if ($userid == -1) {
            $mform->addRule('newpassword', get_string('required'), 'required', null, 'client');
        }

        // print picture
        if (!empty($CFG->gdversion) and empty($USER->newadminuser)) {
            if ($user) {
                $context = get_context_instance(CONTEXT_USER, $user->id, MUST_EXIST);
                $fs = get_file_storage();
                $hasuploadedpicture = ($fs->file_exists($context->id, 'user', 'icon', 0, '/', 'f2.png') || $fs->file_exists($context->id, 'user', 'icon', 0, '/', 'f2.jpg'));
                if (!empty($user->picture) && $hasuploadedpicture) {
                    $imagevalue = $OUTPUT->user_picture($user, array('courseid' => SITEID, 'size'=>64));
                } else {
                    $imagevalue = get_string('none');
                }
            } else {
                $imagevalue = get_string('none');
            }
            $imageelement = $mform->getElement('currentpicture');
            $imageelement->setValue($imagevalue);

            if ($user && $mform->elementExists('deletepicture') && !$hasuploadedpicture) {
                $mform->removeElement('deletepicture');
            }
        }

        /// Next the customisable profile fields
        profile_definition_after_data($mform, $userid);
    }

    function validation($usernew, $files) {
        global $CFG, $DB;

        $usernew = (object)$usernew;
        $usernew->username = trim($usernew->username);

        $user = $DB->get_record('user', array('id'=>$usernew->id));
        $err = array();

        if (!empty($usernew->newpassword)) {
            $errmsg = '';//prevent eclipse warning
            if (!check_password_policy($usernew->newpassword, $errmsg)) {
                $err['newpassword'] = $errmsg;
            }
        }

        if (empty($usernew->username)) {
            //might be only whitespace
            $err['username'] = get_string('required');
        } else if (!$user or $user->username !== $usernew->username) {
            //check new username does not exist
            if ($DB->record_exists('user', array('username'=>$usernew->username, 'mnethostid'=>$CFG->mnet_localhost_id))) {
                $err['username'] = get_string('usernameexists');
            }
            //check rut
            if ($DB->record_exists('user', array('rut'=>$usernew->rut, 'mnethostid'=>$CFG->mnet_localhost_id))) {
                $err['rut'] = get_string('rutexists');
            }
            
            
            //check allowed characters
            if ($usernew->username !== moodle_strtolower($usernew->username)) {
                $err['username'] = get_string('usernamelowercase');
            } else {
                if ($usernew->username !== clean_param($usernew->username, PARAM_USERNAME)) {
                    $err['username'] = get_string('invalidusername');
                }
            }
        }

        if (!$user or $user->email !== $usernew->email) {
            if (!validate_email($usernew->email)) {
                $err['email'] = get_string('invalidemail');
            } else if ($DB->record_exists('user', array('email'=>$usernew->email, 'mnethostid'=>$CFG->mnet_localhost_id))) {
                $err['email'] = get_string('emailexists');
            }
        }

        /// Next the customisable profile fields
        $err += profile_validation($usernew, $files);

        if (count($err) == 0){
            return true;
        } else {
            return $err;
        }
    }
}


