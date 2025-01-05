<?php
/* Template name: Event RSVP */
?>

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

<div id="event-page">
    <div class="wrapper">

        <!-- 
        // Ticket
        -->
        <section id="ticket">
            <div class="ticket-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Glare-SunsetF-Guts-Ticket.png" alt="" />
            </div>
        </section>

        <!-- 
        // Ticket Links
        -->
        <section id="ticket-link">
            <div class="ticket-holder">
                <a href="" title="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Glare-SunsetF-Guts-Ticket-RSVP.jpg" alt="" />
                </a>
            </div>
        </section>

        <!-- 
        // Video
        -->
        <section id="video">
            <div class="video-holder">
                <iframe src="https://www.youtube.com/embed/RAyYtjjmpag?si=WIJUD7Y5GkLvsWua" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <!-- 
        // FAQ
        -->
        <section id="faq">

            <div class="ticket-holder">
                <a href="" title="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Glare-SunsetF-Guts-Ticket-FAQ.jpg" alt="" />
                </a>
            </div>

            <div class="faq-wrapper">

                <details class="faq-item">
                    <summary>
                        <h3>What is Glare?</h3>
                    </summary>
                    <p>Glare is a music festival that takes place in the heart of the city. It is a celebration of music, art, and culture.</p>
                </details>

                <details class="faq-item">
                    <summary>
                        <h3>What is Glare?</h3>
                    </summary>
                    <p>Glare is a music festival that takes place in the heart of the city. It is a celebration of music, art, and culture.</p>
                </details>

            </div>
        </section>

        <!-- 
        // Logo
        -->
        <section id="logo">
            <div class="logo-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Glare-SunsetF-Logo.png" alt="Glare" />
            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>