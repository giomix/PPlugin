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

use \core\event;
use mod_quiz\event\attempt_submitted;
use PHPUnit\PhpParser\Node\Expr\Exit_;


class event_handler
{

    public static function attempt_submitted($event)
    {
        global $DB;
        $userId = $event->userid;
        //$course = $DB->get_record('course', array('id' => $event->courseid));
        $attempt = $event->get_record_snapshot('quiz_attempts', $event->objectid);
        $quiz = $event->get_record_snapshot('quiz', $attempt->quiz);
        //$cm = get_coursemodule_from_id('quiz', $event->get_context()->instanceid, $event->courseid);
        $quizGrade = $DB->get_record('quiz_grades', array('quiz' => $attempt->quiz, 'userid' => $attempt->userid));
        $grade = $quizGrade->grade;

        //// TODO: get ID dinamically from from config in LocalLib + Create another switch for the final exams
        


        $quizId = $quiz->id;

        switch ($quizId) {
            case (1):
                $groupId = 1;;
                break;
            case (2):
                $groupId = 2;;
                break;
            case (3):
                $groupId = 3;;
                break;
            case (4):
                $groupId = 4;;
                break;
            case (5):
                $groupId = 5;;
                break;
            case (6):
                $groupId = 6;;
                break;
            case (7):
                $groupId = 7;;
                break;
            case (8):
                $groupId = 8;;
                break;
            case (9):
                $groupId = 9;;
                break;
            case (10) :
                $groupId = 10;;
                break;
            case (11) :
                $groupId = 11;;
                break;
            case (12):
                $groupId = 12;;
                break;
            case (13) :
                $groupId = 13;;
                break;
            case (14):
                $groupId = 14;;
                break;
            case (15) :
                $groupId = 15;;
                break;
            case (16):
                $groupId = 16;;
                break;
            case (17) :
                $groupId = 17;;
                break;
            case (18):
                $groupId = 18;;
                break;
            case (19) :
                $groupId = 19;;
                break;
            case (20):
                $groupId = 20;;
                break;
        }


        if ($grade < 6.0) {
            $record = (object)array('userid' => $userId, 'groupid' => $groupId);
            $DB->insert_record('groups_members', $record);
        }

    }
}
