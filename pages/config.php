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
auth_reauthenticate();
access_ensure_global_level(config_get('manage_plugin_threshold'));

html_page_top(plugin_lang_get('title') . ' config');

print_manage_menu();
?>

<br />
<form action="<?php echo plugin_page('config_edit') ?>" method="post">
    <?php echo form_security_field('plugin_lightbox_config_edit') ?>
    <table align="center" class="width50" cellspacing="1">
        <tr>
            <td class="form-title" colspan="3">
                <?php echo plugin_lang_get('title') . ': ' . plugin_lang_get('config') ?>
            </td>
        </tr>

        <tr <?php echo helper_alternate_class() ?>>
            <td class="category">
                <?php echo plugin_lang_get('on_preview') ?>
            </td>
            <td class="center">
                <label><input type="checkbox" name="display_on_img_preview" value="1" <?php echo( ON == plugin_config_get('display_on_img_preview') ) ? 'checked="checked" ' : '' ?>/></label>
            </td>
        </tr>

        <tr <?php echo helper_alternate_class() ?>>
            <td class="category">
                <?php echo plugin_lang_get('on_link') ?>
            </td>
            <td class="center">
                <label><input type="checkbox" name="display_on_img_link" value="1" <?php echo( ON == plugin_config_get('display_on_img_link') ) ? 'checked="checked" ' : '' ?>/></label>
            </td>
        </tr>
        
        <tr <?php echo helper_alternate_class() ?>>
            <td class="category">
                <?php echo plugin_lang_get('img_extensions') ?>
            </td>
            <td class="center">
                <label><input type="text" name="img_extensions" value="<?php echo plugin_config_get('img_extensions');?>"/></label>
            </td>
        </tr>
        
        

        <tr>
            <td class="center" colspan="2">
                <input type="submit" class="button" value="<?php echo lang_get('change_configuration') ?>" />
            </td>
        </tr>

    </table>
</form>

<?php
html_page_bottom();
