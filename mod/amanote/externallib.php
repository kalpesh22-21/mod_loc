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
 * Amanote external file.
 *
 * @package    mod_amanote
 * @copyright  2018 Amaplex Software
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir . "/externallib.php");

/**
 * Amanote external functions.
 *
 * @copyright  2018 Amaplex Software
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_amanote_external extends external_api {

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function can_update_resource_parameters() {
        return new external_function_parameters(
                array(
                    'resourceid' => new external_value(PARAM_INT, 'id of the amanote resource')
                )
        );
    }

    /**
     * Determine if the user can update a specific Amanote resource.
     *
     * @param integer $resourceid amanote resource id
     * @return boolean true if current user can update the amanote resource
     */
    public static function can_update_resource($resourceid) {
        global $DB;
        // Parameters validation.
        $params = self::validate_parameters(self::can_update_resource_parameters(),
                array('resourceid' => $resourceid));

        if (is_nan($resourceid) || $resourceid < 0) {
            throw new invalid_parameter_exception('Invalid amanote resource id');
        }

        if (!($amanote = $DB->get_record('amanote', array('id' => $resourceid)))) {
            throw new invalid_parameter_exception('There is no amanote resource with the given id');
        }

        // Get the course context for this amanote resource.
        $coursecontext = context_course::instance($amanote->course);
        self::validate_context($coursecontext);

        if (has_capability('moodle/course:update', $coursecontext)) {
            return true;
        }

        return false;
    }

    /**
     * Returns description of method result value.
     *
     * @return external_description
     */
    public static function can_update_resource_returns() {
        return new external_value(PARAM_BOOL, 'true if the current user can update the amanote resource');
    }
}