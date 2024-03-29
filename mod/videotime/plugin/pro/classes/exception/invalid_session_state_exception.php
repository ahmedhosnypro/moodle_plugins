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
 * Plugin version and other meta-data are defined here.
 *
 * @package     videotimeplugin_pro
 * @copyright   2018 bdecent gmbh <https://bdecent.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace videotimeplugin_pro\exception;

/**
 * Plugin version and other meta-data are defined here.
 *
 * @copyright   2018 bdecent gmbh <https://bdecent.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class invalid_session_state_exception extends \moodle_exception {
    /**
     * Constructor
     *
     * @param int $errorcode
     * @param string $module
     * @param string $link
     * @param string $a
     * @param string $debuginfo
     */
    public function __construct($errorcode = null, $module = '', $link = '', $a = null, $debuginfo = null) {
        if (is_null($errorcode)) {
            $errorcode = 'invalid_session_state';
            $module = 'videotime';
        }

        parent::__construct($errorcode, $module, $link, $a, $debuginfo);
    }
}
