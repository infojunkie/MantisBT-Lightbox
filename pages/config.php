<?php
/**
 * Lightbox Integration
 * Copyright (C) Karim Ratib (karim@meedan.com)
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

form_security_validate( 'plugin_Lightbox_config' );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

/**
* Sets plugin config option if value is different from current/default
* @param string $p_name  option name
* @param string $p_value value to set
* @return void
*/
function config_set_if_needed( $p_name, $p_value ) {
	if ( $p_value != plugin_config_get( $p_name ) ) {
		plugin_config_set( $p_name, $p_value );
	}
}

$t_redirect_url = plugin_page( 'config_page', true );
layout_page_header( null, $t_redirect_url );
layout_page_begin();

config_set_if_needed( 'display_on_img_preview' , gpc_get_int( 'display_on_img_preview', OFF ) );
config_set_if_needed( 'display_on_img_link' , gpc_get_int( 'display_on_img_link', OFF ) );

form_security_purge( 'plugin_Lightbox_config' );

html_operation_successful( $t_redirect_url );
layout_page_end();
