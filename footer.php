<?php get_template_part('/template-parts/social-icons'); ?>

<?php wp_footer(); ?>

<script>
    jQuery('.screenshot').on('click', function() {
        var video = jQuery(this).siblings('iframe');
        var videoSrc = video.attr('src');
        video.attr('src', videoSrc + '&autoplay=1');
        jQuery(video).css('opacity', 1);
        jQuery(this).hide();
        jQuery('.play-icon').hide();
    });
</script>

</body>
</html>