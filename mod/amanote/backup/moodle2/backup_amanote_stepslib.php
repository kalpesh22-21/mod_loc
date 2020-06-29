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
 * Define all the backup steps that will be used by the backup_amanote_activity_task.
 *
 * @package     mod_amanote
 * @subpackage  backup-moodle2
 * @copyright   2018 Amaplex Software
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Define the complete amanote structure for backup, with file and id annotations.
 *
 * @copyright   2018 Amaplex Software
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class backup_amanote_activity_structure_step extends backup_activity_structure_step {

    /**
     * Defines the structure of the amanote element.
     *
     * @return backup_nested_element
     */
    protected function define_structure() {

        // To know if we are including userinfo.
        $userinfo = $this->get_setting_value('userinfo');

        // Define each element separated.
        $amanote = new backup_nested_element('amanote', array('id'), array(
            'name', 'intro', 'introformat', 'revision', 'timecreated', 'timemodified'));

        // Define sources.
        $amanote->set_source_table('amanote', array('id' => backup::VAR_ACTIVITYID));

        // Define file annotations.
        $amanote->annotate_files('mod_amanote', 'intro', null); // This file areas haven't itemid.
        $amanote->annotate_files('mod_amanote', 'content', null); // This file areas haven't itemid.

        // Return the root element (amanote), wrapped into standard activity structure.
        return $this->prepare_activity_structure($amanote);
    }
}
