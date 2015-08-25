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

form_security_validate( 'plugin_lightbox_config_edit' );

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

$f_display_on_img_preview = gpc_get_int( 'display_on_img_preview', OFF );
$f_display_on_img_link= gpc_get_int( 'display_on_img_link', OFF );

if ( plugin_config_get( 'display_on_img_preview' ) != $f_display_on_img_preview ) {
	plugin_config_set( 'display_on_img_preview', $f_display_on_img_preview );
}

if ( plugin_config_get( 'display_on_img_link' ) != $f_display_on_img_link ) {
	plugin_config_set( 'display_on_img_link', $f_display_on_img_link );
}


form_security_purge( 'plugin_lightbox_config_edit' );

print_successful_redirect( plugin_page( 'config', true ) );

