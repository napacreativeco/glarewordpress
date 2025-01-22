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
                        <img src="/wp-content/uploads/2025/01/myspace-header-crop.png" alt="" />
                    </div>

                    <!-- Hero -->
                    <div class="myspace-hero">
                        <img src="/wp-content/uploads/2025/01/myspace-header.png" alt="" />
                    </div>

                    <!-- ACTIONS -->
                     <div class="actions-bar">
                        <div class="listen">
                            <img src="/wp-content/uploads/2025/01/listen-thumbnail.png" alt="" />
                        </div>
                        <div class="message">
                            <img src="/wp-content/uploads/2025/01/message-thumbnail.png" alt="" />
                        </div>
                        <div class="friends">
                            <img src="/wp-content/uploads/2025/01/add-friends-thumbnail.png" alt="" />
                        </div>
                        <div class="merch">
                            <img src="/wp-content/uploads/2025/01/buy-merch-thumbnail.png" alt="" />
                        </div>
                     </div>

                     <!-- two column -->
                      <div class="two-column">
                        <div class="contact col-1">
                            <img src="/wp-content/uploads/2025/01/more-photos.png" alt="" />
                            <img src="/wp-content/uploads/2025/01/contact-image.png" alt="" />
                            <img class="sdr-logo" src="/wp-content/uploads/2025/01/sunday-drive-pink.png" alt="" />
                        </div>
                        <div class="col-2">
                            <div class="buy-merch" style="background: url('/wp-content/uploads/2025/01/merch-background.png'); background-size: cover; background-position: center center;">
                                <img class="title" src="/wp-content/uploads/2025/01/buy-merch.png" alt="" />
                                <img class="items" src="/wp-content/uploads/2025/01/merch-items.png" alt="" />
                            </div>
                            <img class="upcoming-shows" src="/wp-content/uploads/2025/01/upcoming-shows.png" alt="" />
                        </div>

                      </div>

                </div>

            </div>

            <div class="horizontal-scrollbar">
                <div class="inner">&nbsp;</div>
                <img src="http://localhost:10030/wp-content/uploads/2025/01/draggers.png" alt="" />
            </div>
            
        </div>

    </div>

    <div class="app-bar">
        <img src="/wp-content/uploads/2025/01/app-bar.png" alt="" />
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

