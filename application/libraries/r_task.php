<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* ==============================================================
 *
 * Python3
 *
 * ==============================================================
 *
 * @copyright  2014 Richard Lobb, University of Canterbury
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('application/libraries/LanguageTask.php');

class R_Task extends Task {
    public function __construct($filename, $input, $params) {
        parent::__construct($filename, $input, $params);
        //$this->default_params['interpreterargs'] = array('-BE');
    }

    public static function getVersionCommand() {
        return array('Rscript --version ', '/R scripting front-end version ([0-9._]*)/');
    }

    public function compile() {

    }


    // A default name for Python3 programs
    public function defaultFileName($sourcecode) {
        return 'prog.r';
    }


    public function getExecutablePath() {
        return '/usr/bin/Rscript';
     }


     public function getTargetFile() {
         return $this->sourceFileName;
     }
};
