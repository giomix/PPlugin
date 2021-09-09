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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * politoplugin local plugin
 *
 * This plugin automatically assigns users to a group based on a specific
 * entry test grade
 *
 * @package    local
 * @subpackage politoplugin
 * @author     Giovanni db'Amico, Enrico Perano, Cristian Ionut Herisu, Manu
 * @date       December 2021
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname']  = 'Polito Plugin';

// Course Settings
$string['actions'] = 'Azioni';

$string['coursesettings']  = 'Polito Plugin';
$string['coursesettingstitle']  = 'Polito Plugin; {$a}';

$string['pluginpolitodescription'] = 'Polito Plugin assegna automaticamente ad un gruppo di "recupero" una studente in base all esito di un test di ingresso';

// Capabilities
$string['politoplugin:managecourse']  = 'gestisci le impostazioni del corso';
