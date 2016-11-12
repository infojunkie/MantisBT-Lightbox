(function ($) {
  $(document).ready(function () {
    if (lightbox_display_on_img_preview) {
      $('.bug-attachment-preview-image a').attr('rel', 'lightbox');
    }
    if (lightbox_display_on_img_link) {
      $('div#bugnotes').find('*').filter(function() {
        return this.id.match(/attachment_preview_\d+_(open|closed)/);
      }).find('a:nth-child(2)').attr('rel', 'lightbox');
    }
  });
})(jQuery);
