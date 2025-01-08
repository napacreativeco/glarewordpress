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
                <a href="https://link.dice.fm/u4bbae8379e0" title="Glare - Sunset Funeral Event">
                    <img src="https://sunset-funeral.com/wp-content/uploads/2025/01/Glare-SunsetF-Guts-Ticket.png" alt="" />
                </a>
            </div>
        </section>

        <!-- 
        // Ticket Links
        -->
        <section id="ticket-link">
            <div class="ticket-holder">
                <a href="https://link.dice.fm/u4bbae8379e0" title="Glare - Sunset Funeral Event">
                    <img src="https://sunset-funeral.com/wp-content/uploads/2025/01/Glare-SunsetF-Guts-Ticket-RSVP.jpg" alt="" />
                </a>
            </div>
        </section>

        <!-- 
        // Video
        -->
        <section id="video">
            <div class="video-holder">
                <iframe id="video-item" src="https://www.youtube.com/embed/ocwKD3snD3s?si=enzTT867v9MYBv7i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="screenshot">
                    <img src="https://sunset-funeral.com/wp-content/uploads/2025/01/video-thumbnail.png" alt="" />
                </div>
                <?php get_template_part('template-parts/icon--play'); ?>
            </div>
        </section>

        <!-- 
        // FAQ
        -->
        <?php
        // get posts
        $posts = get_posts(array(
            'post_type'         => 'faq',
            'posts_per_page'    => -1,
            'orderby'           => 'ordering_number',
            'order'             => 'ASC'
        ));
        ?>
        <section id="faq">

            <div class="ticket-holder">
                <a href="" title="">
                    <img src="https://sunset-funeral.com/wp-content/uploads/2025/01/Glare-SunsetF-Guts-Ticket-FAQ.jpg" alt="" />
                </a>
            </div>

            <div class="faq-wrapper">
                <?php foreach( $posts as $post ): 
                    setup_postdata( $post )
                ?>

                    <details class="faq-item">
                        <summary>
                            <h3><?php the_title(); ?></h3>
                        </summary>
                        
                        <?php the_content(); ?>
                    </details>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>
            </div>
        </section>

        <!-- 
        // Logo
        -->
        <section id="logo">
            <div class="logo-image">
                <img src="https://sunset-funeral.com/wp-content/uploads/2025/01/Glare-SunsetF-Logo.png" alt="Glare" />
            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>