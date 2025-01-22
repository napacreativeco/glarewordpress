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
                            <div class="shows-container">
                                <script charset="utf-8" src="https://widgetv3.bandsintown.com/main.min.js"></script>
                                <a class="bit-widget-initializer"
                                    data-artist-name="id_732467"
                                    data-events-to-display=""
                                    data-background-color="rgba(255,255,255,1)"
                                    data-separator-color="rgba(221,221,221,1)"
                                    data-text-color="rgba(66,66,66,1)"
                                    data-font="Helvetica"
                                    data-auto-style="true"
                                    
                                    data-button-label-capitalization="uppercase"
                                    data-header-capitalization="uppercase"
                                    data-location-capitalization="uppercase"
                                    data-venue-capitalization="uppercase"
                                    data-display-local-dates="true"
                                    data-local-dates-position="tab"
                                    data-display-past-dates="true"
                                    data-display-details="false"
                                    data-display-lineup="false"
                                    data-display-start-time="false"
                                    data-social-share-icon="false"
                                    data-display-limit="all"

                                    data-date-format="MMM. D, YYYY"
                                    data-date-orientation="horizontal"
                                    data-date-border-color="#4A4A4A"
                                    data-date-border-width="1px"
                                    data-date-capitalization="capitalize"
                                    data-date-border-radius="10px"

                                    data-event-ticket-cta-size="medium"
                                    data-event-custom-ticket-text=""
                                    data-event-ticket-text="TICKETS"
                                    data-event-ticket-icon="false"
                                    data-event-ticket-cta-text-color="rgba(255,255,255,1)"
                                    data-event-ticket-cta-bg-color="rgba(74,74,74,1)"
                                    data-event-ticket-cta-border-color="rgba(74,74,74,1)"
                                    data-event-ticket-cta-border-width="0px"
                                    data-event-ticket-cta-border-radius="2px"
 
                                    data-sold-out-button-text-color="rgba(255,255,255,1)"
                                    data-sold-out-button-background-color="rgba(74,74,74,1)"
                                    data-sold-out-button-border-color="rgba(74,74,74,1)"
                                    data-sold-out-button-clickable="true"
  
                                    data-event-rsvp-position="left"
                                    data-event-rsvp-cta-size="medium"
                                    data-event-rsvp-only-show-icon="false"
                                    data-event-rsvp-text="RSVP"
                                    data-event-rsvp-icon="false"
                                    data-event-rsvp-cta-text-color="rgba(74,74,74,1)"
                                    data-event-rsvp-cta-bg-color="rgba(255,255,255,1)"
                                    data-event-rsvp-cta-border-color="rgba(74,74,74,1)"
                                    data-event-rsvp-cta-border-width="1px"
                                    data-event-rsvp-cta-border-radius="2px"
         
                                    data-follow-section-position="top"
                                    data-follow-section-alignment="center"
                                    data-follow-section-header-text="Get updates on new shows, new music, and more"
                                    data-follow-section-cta-size="medium"
                                    data-follow-section-cta-text="FOLLOW"
                                    data-follow-section-cta-icon="false"
                                    data-follow-section-cta-text-color="rgba(255,255,255,1)"
                                    data-follow-section-cta-bg-color="rgba(74,74,74,1)"
                                    data-follow-section-cta-border-color="rgba(74,74,74,1)"
                                    data-follow-section-cta-border-width="0px"
                                    data-follow-section-cta-border-radius="2px"
                       
                                    data-play-my-city-position="bottom"
                                    data-play-my-city-alignment="center"
                                    data-play-my-city-header-text="Don’t see a show near you?"
                                    data-play-my-city-cta-size="medium"
                                    data-play-my-city-cta-text="REQUEST A SHOW"
                                    data-play-my-city-cta-icon="false"
                                    data-play-my-city-cta-text-color="rgba(255,255,255,1)"
                                    data-play-my-city-cta-bg-color="rgba(74,74,74,1)"
                                    data-play-my-city-cta-border-color="rgba(74,74,74,1)"
                                    data-play-my-city-cta-border-width="0px"
                                    data-play-my-city-cta-border-radius="2px"
      
                                    data-optin-font=""
                                    data-optin-text-color=""
                                    data-optin-bg-color=""
                                    data-optin-cta-text-color=""
                                    data-optin-cta-bg-color=""
                                    data-optin-cta-border-width=""
                                    data-optin-cta-border-radius=""
                                    data-optin-cta-border-color=""
               
                                    data-language="en"
                                    data-layout-breakpoint="900"
                                    data-app-id=""
                                    data-affil-code=""
                                    data-bit-logo-position="bottomRight"
                                    data-bit-logo-color="rgba(66,66,66,1)"
                                ></a>
                            </div>
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

