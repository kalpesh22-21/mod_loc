<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Amanote module version information.
 *
 * @package     mod_amanote
 * @copyright   2018 Amaplex Software
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once($CFG->dirroot.'/mod/amanote/lib.php');
require_once($CFG->dirroot.'/mod/amanote/locallib.php');
require_once($CFG->libdir.'/completionlib.php');

$id = optional_param('id', 0, PARAM_INT);
$a  = optional_param('a', 0, PARAM_INT);

if ($a) {  // Two ways to specify the module.
    $amanote = $DB->get_record('amanote', array('id' => $a), '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('amanote', $amanote->id, $amanote->course, false, MUST_EXIST);

} else {
    $cm = get_coursemodule_from_id('amanote', $id, 0, false, MUST_EXIST);
    $amanote = $DB->get_record('amanote', array('id' => $cm->instance), '*', MUST_EXIST);
}

$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);

require_course_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/amanote:view', $context);

// Completion and trigger events.
amanote_view($amanote, $course, $cm, $context);

$PAGE->set_url('/mod/amanote/view.php', array('id' => $cm->id));

// Get the file.
$fs = get_file_storage();
$files = $fs->get_area_files($context->id, 'mod_amanote', 'content', 0, 'sortorder DESC, id ASC', false);
$file = reset($files);

amanote_print_header($amanote, $cm, $course);
amanote_print_heading($amanote, $cm, $course, true);
amanote_print_intro($amanote, $cm, $course, true);

amanote_print_buttons($amanote, $file, $course);
