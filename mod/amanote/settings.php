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
 * Amanote module admin settings and defaults.
 *
 * @package     mod_amanote
 * @copyright   2018 Amaplex Software
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // General settings.
    $settings->add(new admin_setting_configtext('mod_amanote/autosaveperiod',
        get_string('autosaveperiod', 'amanote'),
        get_string('autosaveperiod_help', 'amanote'), 5));

    $settings->add(new admin_setting_configcheckbox('mod_amanote/saveinprivate',
        get_string('saveinprivate', 'amanote'),
        get_string('saveinprivate_help', 'amanote'), 1));

    $settings->add(new admin_setting_configtext('mod_amanote/key',
        get_string('key', 'amanote'),
        get_string('key_help', 'amanote'), ''));

    // Modedit defaults.
    $settings->add(new admin_setting_heading('amanotemodeditdefaults',
        get_string('modeditdefaults', 'admin'),
        get_string('condifmodeditdefaults', 'admin')));

    $settings->add(new admin_setting_configcheckbox('mod_amanote/printintro',
        get_string('printintro', 'amanote'),
        get_string('printintroexplain', 'amanote'), 1));

    $settings->add(new admin_setting_configcheckbox('mod_amanote/showsize',
        get_string('showsize', 'amanote'),
        get_string('showsize_desc', 'amanote'), 0));
    $settings->add(new admin_setting_configcheckbox('mod_amanote/showdate',
        get_string('showdate', 'amanote'),
        get_string('showdate_desc', 'amanote'), 0));

    // Important information.
    $settings->add(new admin_setting_heading('amanoteimportantinformation',
    get_string('importantinformationheading', 'amanote'),
    get_string('importantinformationdescription', 'amanote')));
}
