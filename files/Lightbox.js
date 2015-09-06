(function ($) {
    $(document).ready(function () {
        if(lightbox_display_on_img_preview){
            $('#attachments').parent().parent().find('a').find('img').parent().attr('rel', 'lightbox');
        }
        if(lightbox_display_on_img_link){
            var lightBoxObjlink = $('#attachments').parent().parent().find('.small').prev().prev().prev();
            var lightBoxLabel;
            var lightBoxpieces;
            var lightBoxExtension;
            lightboxExtensions = lightboxExtensions.replace(/[\. ]+/g, "").split(',');
            lightBoxObjlink.each(function(){
               lightBoxLabel = $(this).html();
               lightBoxpieces = lightBoxLabel.split('.');
               lightBoxExtension = lightBoxpieces[lightBoxpieces.length-1];
               if(lightboxExtensions.indexOf(lightBoxExtension) > -1){
                   $(this).attr('rel', 'lightbox');
               }
            });
             
            
        }
        $.getScript(lightboxlocation);
    });
})(jQuery);