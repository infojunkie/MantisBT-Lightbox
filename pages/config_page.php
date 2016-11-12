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
 access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

 layout_page_header( plugin_lang_get( 'title' ) );

 layout_page_begin( 'manage_overview_page.php' );

 print_manage_menu( 'manage_plugin_page.php' );

 ?>

 <div class="col-md-12 col-xs-12">
 <div class="space-10"></div>
 <div class="form-container">
 <form action="<?php echo plugin_page( 'config' ) ?>" method="post">
 <fieldset>
 <div class="widget-box widget-color-blue2">
 <div class="widget-header widget-header-small">
     <h4 class="widget-title lighter">
         <i class="ace-icon fa fa-exchange"></i>
         <?php echo plugin_lang_get( 'title' ) ?>
     </h4>
 </div>

 <?php echo form_security_field( 'plugin_Lightbox_config' ) ?>
 <div class="widget-body">
 <div class="widget-main no-padding">
 <div class="table-responsive">
 <table class="table table-bordered table-condensed table-striped">

        <tr>
            <td class="category">
                <?php echo plugin_lang_get('on_preview') ?>
            </td>
            <td class="center">
                <label><input type="checkbox" name="display_on_img_preview" value="1" <?php echo( ON == plugin_config_get('display_on_img_preview') ) ? 'checked="checked" ' : '' ?>/></label>
            </td>
        </tr>

        <tr>
            <td class="category">
                <?php echo plugin_lang_get('on_link') ?>
            </td>
            <td class="center">
                <label><input type="checkbox" name="display_on_img_link" value="1" <?php echo( ON == plugin_config_get('display_on_img_link') ) ? 'checked="checked" ' : '' ?>/></label>
            </td>
        </tr>

</table>
</div>
</div>
<div class="widget-toolbox padding-8 clearfix">
    <input type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo plugin_lang_get( 'action_update' ) ?>" />
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div>

<?php
layout_page_end();
