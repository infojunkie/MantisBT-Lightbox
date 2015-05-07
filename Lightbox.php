<?php
/**
 * Lightbox Integration
 * Copyright (C) 2015 Karim Ratib (karim.ratib@gmail.com)
 *
 * Lightbox Integration is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 * Lightbox Integration is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Lightbox Integration; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
 * or see http://www.gnu.org/licenses/.
 */

class LightboxPlugin extends MantisPlugin {
    function register() {
        $this->name = plugin_lang_get( 'title' );
        $this->description = plugin_lang_get( 'description' );
        $this->version = '0.1';
        $this->requires = array(
            'MantisCore' => '>= 1.2.0',
        );
        $this->author = 'Karim Ratib';
        $this->contact = 'karim@meedan.com';
        $this->url = 'http://meedan.com';
    }

    function hooks() {
        return array(
            'EVENT_VIEW_BUG_DETAILS' => 'add_lightbox',
        );
    }

    function add_lightbox($event, $bug_id) {
?>
<script src="/plugins/Lightbox/lightbox/js/jquery-1.7.2.min.js"></script>
<script src="/plugins/Lightbox/lightbox/js/lightbox.js"></script>
<script src="/plugins/Lightbox/Lightbox.js"></script>
<link href="/plugins/Lightbox/lightbox/css/lightbox.css" rel="stylesheet" />
<?php
    }
}
