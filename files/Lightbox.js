(function ($) {
        $(document).ready(function () {
            $('#attachments').parent().parent().find('a').find('img').parent().attr('rel', 'lightbox');
			$.getScript(lightboxlocation);
        });
    })(jQuery);