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
 * English strings for Amanote.
 *
 * @package     mod_amanote
 * @copyright   2018 Amaplex Software
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Amanote';
$string['modulename'] = 'Annotatable file';
$string['modulenameplural'] = 'Annotatable files';
$string['modulename_help'] = 'An annotatable file is a course resource (PDF) that students can open in Amanote© in order to take clear and structured notes on it.

Students have the possibility to:

* Open the course resource in a new browser tab
* Download the course resource on their computer
* Open the course resource in Amanote© and start a note-taking

When students open the course resource in Amanote©, they have the ability to start a smart note-taking. Their notes are linked to the different pages of the document. Moreover, they can enrich their notes with annotations, drawings, formulas, images, highlighting in slides, etc.

When students save their notes, they are saved within the resource in their personal space. The next time they open the resource, they will get their notes back.';
$string['amanote:addinstance'] = 'Add a new annotatable file';
$string['amanote:view'] = 'Open annotatable file';
$string['amanotecontent'] = 'Files and subfolders';
$string['downloadfile'] = 'Download';
$string['clicktoopen'] = 'Open in new tab';
$string['clicktodownloadfile'] = 'Download PDF file';
$string['clicktodownloadnotes'] = 'Download annotated file';
$string['clicktoamanote'] = 'Open in Amanote';
$string['statisticsbutton'] = 'Open Learning Analytics';
$string['openstatistics'] = 'Open statistics';
$string['openstatistics_help'] = 'This gives you access to the statistics of the students\' usage and their feedback on this resource.';
$string['podcastcreatorbutton'] = 'Open Podcast Creator';
$string['openpodcastcreator'] = 'Open podcast creator';
$string['openpodcastcreator_help'] = 'The podcast creator allow you to record a new podcast or edit an existing one.';
$string['autosaveperiod'] = 'Auto-save period';
$string['autosaveperiod_help'] = 'Configure the period of time in minutes between automatic saves (min.: 1, max.: 30). Setting the period to 0 means no auto-save.';
$string['saveinprivate'] = 'Save notes in private files';
$string['saveinprivate_help'] = 'Save the annotated file in the private files of the user. This will allow the user to get back its notes the next time he opens the annotatable file in Amanote.';
$string['key'] = 'Activation key';
$string['key_help'] = 'This key is required for advanced features such as Podcast Creator.';
$string['dnduploadamanote'] = 'Create annotatable file';
$string['showdate'] = 'Show upload/modified date';
$string['showdate_desc'] = 'Display upload/modified date on course page?';
$string['showdate_help'] = 'Displays the upload/modified date beside links to the resource.';
$string['showsize'] = 'Show size';
$string['showsize_desc'] = 'Display file size on course page?';
$string['showsize_help'] = 'Displays the file size, such as \'3.1 MB\', beside links to the resource.';
$string['printintro'] = 'Display resource description';
$string['printintroexplain'] = 'Display resource description below content?';
$string['uploadeddate'] = 'Uploaded {$a}';
$string['modifieddate'] = 'Modified {$a}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['openinamanote'] = 'Open in Amanote';
$string['openinamanote_help'] = 'Opening the document in Amanote let you start or continue a note-taking.';
$string['cannotcreatetoken'] = 'Open in Amanote';
$string['cannotcreatetoken_help'] = 'You don\' have the permissions to open the document in Amanote.';
$string['servicenotavailable'] = 'Open in Amanote';
$string['servicenotavailable_help'] = 'The service is not available. Please contact the site administrator.';
$string['guestsarenotallowed'] = 'Open in Amanote';
$string['guestsarenotallowed_help'] = 'Guest users are not allowed to open a resource in Amanote. Please log in to access this feature.';
$string['unexpectederror'] = 'Open in Amanote';
$string['unexpectederror_help'] = 'An unexpected error has occured, the resource cannot be opened in Amanote. Please contact the site administrator.';
$string['unsecureconnection'] = 'Warning! Your connection is not secure.';
$string['privacy:metadata'] = 'In order to integrate with Amanote, some user data need to be sent to the Amanote client application (remote system).';
$string['privacy:metadata:userid'] = 'The userid is sent from Moodle to Amanote in order to speed up the authentication process.';
$string['privacy:metadata:fullname'] = 'The user\'s full name is sent to the remote system to allow a better user experience.';
$string['privacy:metadata:email'] = 'The user\'s email is sent to the remote system to allow a better user experience (note sharing, notification, etc.).';
$string['privacy:metadata:subsystem:corefiles'] = 'Files (PDF, AMA) are stored using Moodle\'s file system.';
$string['nonotestodownload'] = 'Download annotated file';
$string['nonotestodownload_help'] = 'You don\'t have saved notes for this document yet.';
$string['pluginadministration'] = 'Amanote module administration';
$string['importantinformationheading'] = 'Important installation information';
$string['importantinformationdescription'] = 'In order for the module to work properly, please check that the following requirements are met on your Moodle site:

1. Web services are enabled (Site administration > Advanced feature)

2. *Moodle mobile web service* is enabled (Site administration > Plugins > Web services > External services)

3. REST protocol is activated (Site administration > Plugins > Web services > Manage protocols)

4. Capability *webservice/rest:use* is allowed for *authenticated users* (Site administration > Users > Permissions > Define Roles > Authenticated Users > Manage roles)';
