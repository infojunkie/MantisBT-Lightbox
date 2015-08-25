(function ($) {
    $(document).ready(function () {
        if(lightbox_display_on_img_preview){
            $('#attachments').parent().parent().find('a').find('img').parent().attr('rel', 'lightbox');
        }
        if(lightbox_display_on_img_link){
            $('#attachments').parent().parent().find('.small').prev().prev().prev().attr('rel', 'lightbox');
        }
        $.getScript(lightboxlocation);
    });
})(jQuery);