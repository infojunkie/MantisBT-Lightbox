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
        // don't need jQuery in Mantis >= 1.3.0
        if( version_compare( MANTIS_VERSION, '1.3', '<' ) === true ) {
            $this->requires['jQuery'] = '>= 1.11.0';
        }
        $this->author = 'Karim Ratib';
        $this->contact = 'karim@meedan.com';
        $this->url = 'http://meedan.com';
    }

    function hooks() {
        return array(
            'EVENT_LAYOUT_RESOURCES' => 'add_lightbox',
        );
    }

    function add_lightbox($event, $bug_id) {
        if ($_SERVER['PHP_SELF'] !== '/view.php') return;
?>
<script src="/plugins/jQuery/files/jquery-min.js"></script>
<script src="/plugins/Lightbox/lightbox/js/lightbox.min.js"></script>
<script src="/plugins/Lightbox/Lightbox.js"></script>
<link href="/plugins/Lightbox/lightbox/css/lightbox.css" rel="stylesheet" />
<?php
    }
}
