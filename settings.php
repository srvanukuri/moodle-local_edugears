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
 * Settings page for EduGears AI LTI.
 *
 * @package    local_edugears
 * @copyright  2026 EduGears AI <support@edugears.ai>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_edugears', get_string('pluginname', 'local_edugears'));

    // Heading with description and link.
    $settings->add(new admin_setting_heading(
        'local_edugears/settings_heading',
        get_string('settings_heading', 'local_edugears'),
        get_string('settings_heading_desc', 'local_edugears')
    ));

    // Display the registration URL (read-only for reference).
    $settings->add(new admin_setting_description(
        'local_edugears/registration_url_display',
        get_string('registration_url', 'local_edugears'),
        '<div style="padding: 10px; background: #f0f0f0; border: 1px solid #ccc; border-radius: 4px; font-family: monospace; font-size: 14px;">'
        . 'https://lti-api.edugears.ai/lti/register'
        . '</div><br>'
        . get_string('registration_url_desc', 'local_edugears')
        . '<br><br>'
        . html_writer::link(
            new moodle_url('/mod/lti/toolconfigure.php'),
            get_string('manage_tools_link', 'local_edugears'),
            ['class' => 'btn btn-primary', 'target' => '_blank']
        )
    ));

    $ADMIN->add('localplugins', $settings);
}
