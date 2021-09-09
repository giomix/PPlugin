<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute en and/or modify
// en under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that en will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see http://www.gnu.org/licenses/.

/**
 * politoplugin local plugin
 *
 * This plugin automatically assigns users to a group based on a specific
 * entry test grade
 *
 * @package    local
 * @subpackage politoplugin
 * @author     Giovanni d'Amico, Enrico Perano, Cristian Ionut Herisu, Manu
 * @date       December 2021
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_politoplugin;
use settings_navigation;
use context;
use navigation_node;
use moodle_url;
use pix_icon;

/**
 * Checks the plugin config and returns the current status for
 * the "enabled" option
 *
 * @return bool
 * @throws \Exception
 * @throws \dml_exception
 */
function plugin_is_enabled(){
    $config = get_config('local_politoplugin');
    return isset($config->enabled) && $config->enabled;
}
