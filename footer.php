<?php /* get_template_part('/template-parts/social-icons'); */ ?>

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

<script>
// Fetch all the details element.
const detailsList = document.querySelectorAll("details");

// When a details is open, close all other details.
function handleDetailToggle(event) {
  // We are only interested in details being opened.
  // Also, without the guard below, we'd run into an infinite loop.
  if (!event.target.open) return;
  for (let details of detailsList) {
    details.open = details === event.target;
  }
}

// Add toggle listeners.
for (let details of detailsList) {
  details.addEventListener("toggle", handleDetailToggle);
}
</script>

</body>
</html>