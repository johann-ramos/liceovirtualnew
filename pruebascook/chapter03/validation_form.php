<?php
require_once($CFG->libdir.'/formslib.php');
class validation_form extends moodleform{
    function definition(){
        $mform =& $this->_form;
        //Validar campo vacío
        $mform->addElement('text', 'mytext1', 'Required');
        $mform->addRule('mytext1', 'Required', 'required', null, 'client');
        
        //Validar longitud máxima
        $mform->addElement('text', 'mytext2', 'Max length 5');
        $mform->addRule('mytext2', 'Max length 5', 'maxlength', 5, 'client');

        //Validar longitud mínima
        $mform->addElement('text', 'mytext3', 'Min length 5');
        $mform->addRule('mytext3', 'Min length 5', 'minlength', 5, 'client');

        //Validar longitud en un rango
        $mform->addElement('text', 'mytext4', 'Length 3-5');
        $mform->addRule('mytext4', 'Length 3-5', 'rangelength', array(3,5), 'client');

	    //Validar ingreso de mail
        $mform->addElement('text', 'mytext6', 'Email');
        $mform->addRule('mytext6', 'Email', 'email', null, 'client');

        //Validar con expresiones regulares
        $mform->addElement('text', 'mytext5', 'URL');
        $mform->addRule('mytext5', 'URL', 'regex', '^http://www.^', 'server');

        //Validar solo letras
        $mform->addElement('text', 'mytext7', 'Letters only');
        $mform->addRule('mytext7', 'Letters only', 'lettersonly', null, 'client');

        //Validar solo alfanumerico
        $mform->addElement('text', 'mytext8', 'Alpha-numeric');
        $mform->addRule('mytext8', 'Alpha-numeric', 'alphanumeric', null, 'client');
        
        //Validar solo numeros
        $mform->addElement('text', 'mytext9', 'Numeric');
        $mform->addRule('mytext9', 'Numeric', 'numeric', null, 'client');

        //Validar puntuacion
        $mform->addElement('text', 'mytext10', 'No punctuation');
        $mform->addRule('mytext10', 'No punctuation', 'nopunctuation', null, 'client');

        //Validar cero al inicio
        $mform->addElement('text', 'mytext11', 'No leading zero');
        $mform->addRule('mytext11', 'No leading zero', 'nonzero', null, 'client');

        //Validar 2 campos
        $mform->addElement('text', 'mytext12', 'Must be equal (1st)');
        $mform->addElement('text', 'mytext12_compare', 'Must be equal (2nd)');
        $mform->addRule( array('mytext12','mytext12_compare'), 'Must match', 'compare', 'eq', 'server' );

        //Validar con un javascript personalizado
        $mform->addElement('text', 'mytext13', 'Custom');
        $mform->addRule('mytext13', 'Custom', 'callback', 'mycallback', 'client');

        $mform->addElement('submit', 'submitbutton', 'Submit');
    }
}
?>

