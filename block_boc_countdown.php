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
 * BOC countdown block.
 *
 * @package    block_boc_countdown
 * @copyright  Prateek Sachan {@link http://prateeksachan.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * BOC countdown block.
 *
 * @package    block_boc_countdown
 * @copyright  Prateek Sachan {@link http://prateeksachan.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_boc_countdown extends block_base {

    /**
     * Initialises the block.
     *
     * @return void
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_boc_countdown');
    }

    /**
     * Gets the block contents.
     *
     * If we can avoid it better not check the server status here as connecting
     * to the server will slow down the whole page load.
     *
     * @return string The block HTML.
     */
    public function get_content() {
        global $OUTPUT;
        if ($this->content !== null) {
            return $this->content;
        }

        $params = array(
            'boctime' => strtotime('friday 5pm')
        );
        $this->page->requires->js_call_amd('block_boc_countdown/boc_countdown', 'init', $params);

        $this->content = new stdClass();

        $this->content->text  = html_writer::start_tag('div', array('class' => 'boc_countdown'));
        $this->content->text .= html_writer::tag('div', '', array('class' => 'boc_timer'));
        $this->content->text .= html_writer::end_tag('div');

        return $this->content;
    }
}
