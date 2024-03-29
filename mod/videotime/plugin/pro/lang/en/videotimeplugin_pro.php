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
 * Plugin strings are defined here.
 *
 * @package     videotimeplugin_pro
 * @copyright   2018 bdecent gmbh <https://bdecent.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Video Time Pro';
$string['privacy:metadata:videotime_session'] = 'User video sessions';
$string['privacy:metadata:videotime_session:user_id'] = 'The user ID watching video';
$string['privacy:metadata:videotime_session:module_id'] = 'The ID of videotime activity';
$string['privacy:metadata:videotime_session:state'] = 'Whether video was finished';
$string['privacy:metadata:videotime_session:time'] = 'Cumulative time watching the video';
$string['privacy:metadata:videotime_session:timestarted'] = 'Time that this session started';
$string['privacy:metadata:videotime_session:percent_watch'] = 'Furthest part of video that user has watched';
$string['privacy:metadata:videotime_session:current_watch_time'] = 'The last reported position of the session';
