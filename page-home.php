<!-- 
@@@@@@@@@@@@@@@@THRONE@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@#+-:... .....::*%@@@@@@@@@@@
@@@@@@%=:............:.:..:#@@@@@@@@@
@@@@%................::.:::-*@@@@@@@@
@@@%.:.........::=:*%+..::+=:.=@@@@@@
@@::.=:=*:..:=+:.  ...:--=%:.:+=@@@@@
@@@-:==:.=*#*=*%%%%%@%%%#%#=+**-@@@@@
@@@*::-+#%%%+:*%#%%%%%%%@%=::*##@@@@@
@@@=-#***%*=. .....::+*%%%%%%*##@@@@@
@@@%*#%#%*::-**=+==:::=**##%##%@@@@@@
@@@@@@#*:.:-**#%%-=%%%%%*****@@@@@@@@
@@@@@@=+::..=+-:.:=*****+***@@@@@@@@@
@@@@@@@%=:::::::..-=:::-+*%@@@@@@@@@@
@@@@@@@#*=-:::::..:==-=**%@@@@@@@@@@@
@@@@@@@@==--:::.:%%#==***%@@@@@@@@@@@
@@@@@@@@@**===-=***##****@@@@@@@@@@@@
@@@@@@@@@@=#*=::=****++*%@@@@@@@@@@@@
@@@@@@@@@@:-*#*=:=++=+**@@@@@@@@@@@@@
@@@@@@@@@@:::=*##*++**++*%@@@@@@@@@@@
@@@@@@@@@@-:-:::+*##*===+**@@@@@@@@@@
@@@@@@@@@@+:--=++=+*+---:......:%@@@@
@@@@@@@@@%+::-::::::::::..... .:+*#@@
@@@@@@@:.::::==-:::::::.....:*%%%@@@@
@@@@@@-.:::::::::::::::..:*%%%%%@@@@@
@@@@@:.::..::.::::..::::#%%%%%@@@@@@@
@@@@%...:.:..:.......::%%@%%%@@@@@@@@
@@@@%......::.........=@@%%%@@@@@@@@@
@@@@@@=-::.::......:#@@%%@@@@@@@@@@@@
@@@@@@@@@@%%%#*#%%@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
-->
<?php get_header(); ?>

<?php /* Template name: Mac */ ?>

<div class="mac-container">

    <?php get_template_part('template-parts/macUI/system-menu'); ?>

    <div class="browser"> 
        <div class="browser-wrap">

            <div class="browser-ui">
                <img src="/wp-content/uploads/2025/01/browser-ui.png" alt="" />
            </div>

            <div class="webpage">

                <div class="myspace-page">

                    <!-- Header -->
                    <div class="myspace-header">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/myspace-header-crop.png" alt="" />
                    </div>

                    <!-- Hero -->
                    <div class="myspace-hero">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/updated-hero.png" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/updated-hero--two.png" alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/updated-hero--three.png" alt="" />
                    </div>

                    <!-- ACTIONS -->
                     <div class="actions-bar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/myspace-link-bar.png" alt="" />
                     </div>

                     <!-- TWO COLUMN -->
                      <div class="two-column">

                        <!-- COL 1 -->
                        <div class="contact col-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/more-photos.png" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/contact-image.png" alt="" />
                            <a href="https://sundaydrive-records.com" title="Sunday Drive Records" target="_blank" style="cursor: pointer;">
                                <img class="sdr-logo desktop" src="<?php echo get_template_directory_uri(); ?>/assets/sunday-drive-pink.png" alt="" />
                            <a href="https://deathwishinc.com" title="Deathwish Inc." target="_blank" style="cursor: pointer;">
                                <img class="deathwish-logo desktop" src="<?php echo get_template_directory_uri(); ?>/assets/deathwish-logo.png" alt="" />
                            </a>

                            <div class="desktop">
                                <?php get_template_part('/template-parts/social-media'); ?>
                            </div>
                            
                        </div>

                        <!-- COL 2 -->
                        <div class="col-2">

                            <div class="buy-merch" 
                                 style="background: url('<?php echo get_template_directory_uri(); ?>/assets/merch-background.png'); background-size: cover; background-position: center center; cursor: pointer;"
                                 onclick="window.location.href = 'https://glare.downrightmerch.com';">
                                <img class="title" src="<?php echo get_template_directory_uri(); ?>/assets/buy-merch--shirt.png" alt="" />
                                <img class="title" src="<?php echo get_template_directory_uri(); ?>/assets/buy-merch--shirt-vinyl.png" alt="" />
                                <img class="title" src="<?php echo get_template_directory_uri(); ?>/assets/buy-merch--hoodie.png" alt="" />
                            </div>

                            <div class="desktop">
                                <img class="upcoming-shows" src="<?php echo get_template_directory_uri(); ?>/assets/upcoming-shows.png" alt="" />
                                <div class="shows-container">
                                    <?php get_template_part('/template-parts/bandsintown'); ?>
                                </div>
                            </div>

                        </div>

                      </div>

                      <div class="mobile">
                        <?php get_template_part('/template-parts/social-media'); ?>
                      </div>

                      <!-- MOBILE -->
                      <div class="mobile">
                        <img class="mobile upcoming-shows" src="<?php echo get_template_directory_uri(); ?>/assets/upcoming-shows.png" alt="" />
                        <?php get_template_part('/template-parts/bandsintown'); ?>
                        <img class="sdr-logo mobile" src="<?php echo get_template_directory_uri(); ?>/assets/sunday-drive-pink.png" alt="" />
                        <img class="deathwish-logo mobile" src="<?php echo get_template_directory_uri(); ?>/assets/deathwish-logo.png" alt="" />
                      </div>

                </div>

            </div>

            <!-- Horizontal Scroll -->
            <div class="horizontal-scrollbar">
                <div class="inner">&nbsp;</div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/draggers.png" alt="" />
            </div>
            
        </div>

    </div>

    <div class="app-bar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/app-bar.png" alt="" />
    </div>

</div>

<script>
    var uiHeight = jQuery('.browser-ui').height();
    var webPage = jQuery('.webpage');

    /*
    WINDOW RESIZE
    */
    jQuery(document).on('ready', function() {
        jQuery('.webpage').css('height', 'calc(70vh - ' + uiHeight + 'px)');
    });

    jQuery(window).on('resize', function() {
        jQuery('.webpage').css('height', 'calc(70vh - ' + uiHeight + 'px)');
    });

    
    /*
    HERO
    */
    jQuery(document).ready(function() {
        let hero = jQuery('.myspace-hero img'); // Select all images within the div
        let currentImage = 0;

        // Initially hide all images except the first one
        jQuery(hero).not(':first').hide();

        setInterval(function() {
            // Hide the current image
            jQuery(hero).eq(currentImage).fadeOut(0); // Fade out over 0.5 seconds (optional)

            // Increment the current image index, wrapping around if necessary
            currentImage = (currentImage + 1) % jQuery(hero).length;

            // Show the next image
            jQuery(hero).eq(currentImage).fadeIn(500); // Fade in over 0.5 seconds (optional)
        }, 2000); // Cycle every 1 second
    });


    /*
    MERCH
    */
    jQuery(document).ready(function() {
        let images = jQuery('.buy-merch img'); // Select all images within the div
        let currentImage = 0;

        // Initially hide all images except the first one
        jQuery(images).not(':first').hide();

        setInterval(function() {
            // Hide the current image
            jQuery(images).eq(currentImage).fadeOut(0); // Fade out over 0.5 seconds (optional)

            // Increment the current image index, wrapping around if necessary
            currentImage = (currentImage + 1) % jQuery(images).length;

            // Show the next image
            jQuery(images).eq(currentImage).fadeIn(500); // Fade in over 0.5 seconds (optional)
        }, 1000); // Cycle every 1 second
    });
</script>


<?php get_footer(); ?>

