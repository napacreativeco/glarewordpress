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
                    <div class="myspace-hero">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/myspace-header-crop.png" alt="" />
                    </div>

                    <!-- Hero -->
                    <div class="myspace-hero">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/myspace-header.png" alt="" />
                    </div>

                    <!-- ACTIONS -->
                     <div class="actions-bar">
                        <div class="listen">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/listen-thumbnail.png" alt="" />
                        </div>
                        <div class="message">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/message-thumbnail.png" alt="" />
                        </div>
                        <div class="friends">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/add-friends-thumbnail.png" alt="" />
                        </div>
                        <div class="merch">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/buy-merch-thumbnail.png" alt="" />
                        </div>
                     </div>

                     <!-- two column -->
                      <div class="two-column">
                        <div class="contact col-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/more-photos.png" alt="" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/contact-image.png" alt="" />
                            <img class="sdr-logo" src="<?php echo get_template_directory_uri(); ?>/assets/sunday-drive-pink.png" alt="" />
                        </div>
                        <div class="col-2">
                            <div class="buy-merch" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/merch-background.png'); background-size: cover; background-position: center center;">
                                <img class="title" src="<?php echo get_template_directory_uri(); ?>/assets/buy-merch.png" alt="" />
                                <img class="items" src="<?php echo get_template_directory_uri(); ?>/assets/merch-items.png" alt="" />
                            </div>
                            <img class="upcoming-shows" src="<?php echo get_template_directory_uri(); ?>/assets/upcoming-shows.png" alt="" />
                        </div>

                      </div>

                </div>

            </div>

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

    jQuery(document).on('ready', function() {
        jQuery('.webpage').css('height', 'calc(70vh - ' + uiHeight + 'px)');

        console.log('load');
    });

    jQuery(window).on('resize', function() {
        jQuery('.webpage').css('height', 'calc(70vh - ' + uiHeight + 'px)');
    });
</script>


<?php get_footer(); ?>

