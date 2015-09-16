<?php

/**
 * Lightbox Integration
 * Copyright (C) 2015 Karim Ratib (karim.ratib@gmail.com) and Kaue Santoja (shinjiiraki@gmail.com)
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
        $this->name = plugin_lang_get('title');
        $this->description = plugin_lang_get('description');
        $this->version = '1.0';
        $this->page = 'config';
        $this->requires = array(
            'MantisCore' => '>=1.2, <1.4',
        );
        // don't need jQuery in Mantis >= 1.3.0
        if (version_compare(MANTIS_VERSION, '1.3', '<') === true) {
            $this->requires['jQuery'] = '>= 1.11.0';
        }
        $this->author = 'Karim Ratib and Kaue Santoja';
        $this->contact = 'kaue@santoja.com.br';
        $this->url = 'https://github.com/santoja/Lightbox';
    }

    /**
     * Default plugin configuration.
     */
    function config() {
        return array(
            'display_on_img_preview' => ON,
            'display_on_img_link' => OFF,
            'img_extensions' => 'jpg,jpeg,png,gif'
        );
    }

    function hooks() {
        return array(
            'EVENT_LAYOUT_RESOURCES' => 'add_lightbox',
        );
    }

    function add_lightbox($event) {
        $currentUrl = explode('/', $_SERVER['PHP_SELF']);
        if (end($currentUrl) !== 'view.php') return;
        
        return '        <script type="text/javascript">'.
                        'var lightbox_display_on_img_preview = '.plugin_config_get('display_on_img_preview').';'.
                        'var lightbox_display_on_img_link = '.plugin_config_get('display_on_img_link').';'.
                        'var lightboxlocation = "' . plugin_file('lightbox/js/lightbox-min.js') . '";'.
                        'var lightboxExtensions = "' . plugin_config_get('img_extensions') . '";'.
                        '</script>'.
                        '<link href="' . plugin_file('lightbox/css/lightbox.css') . '" rel="stylesheet">'.
			'<script type="text/javascript" src="' . plugin_file('Lightbox.js') . '"></script>';
    }

}
