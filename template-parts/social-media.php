<style>
    .social-media {
        display: flex;
        flex-direction: row;
        gap: 10px;
        flex-wrap: wrap;
        list-style: none;
        margin: 20px;
        padding: 0;

        svg path {
            fill: #B587C0;
        }

        svg path.triangle {
            fill: #ffffff;
        }
    }

    .desktop .social-media {
        justify-content: flex-start;
    }

    .mobile .social-media {
        justify-content: center;
    }
</style>

<ul class="social-media">

    <li class="down-right-merch">
        <a href="https://glare.downrightmerch.com" title="Down Right Merch">
            <?php get_template_part('/template-parts/icon--shirt'); ?>
        </a>
    </li>

    <li class="bandsintown">
        <a href="https://www.bandsintown.com/a/732467-glare" title="Bandsintown">
            <?php get_template_part('/template-parts/icon--bandsintown'); ?>
        </a>
    </li>

    <li class="spotify">
        <a href="https://open.spotify.com/artist/2dXj6aC3DsxoTDyhk3u4gl?autoplay=true" title="Spotify">
            <?php get_template_part('/template-parts/icon--spotify'); ?>
        </a>
    </li>

    <li class="apple">
        <a href="https://music.apple.com/us/artist/glare/199398424" title="Apple Music">
            <?php get_template_part('/template-parts/icon--apple'); ?>
        </a>
    </li>

    <li class="bandcamp">
        <a href="https://glaretx.bandcamp.com/" title="Bandcamp">
            <?php get_template_part('/template-parts/icon--bandcamp'); ?>
        </a>
    </li>

    <li class="youtube">
        <a href="https://www.youtube.com/channel/UCVpnGkn7WCHuLmBaVD55L6A?feature=gws_kp_artist&feature=gws_kp_artist" title="YouTube">
            <?php get_template_part('/template-parts/icon--youtube'); ?>
        </a>
    </li>

    <li class="instagram">
        <a href="https://www.instagram.com/glare.tx/" title="Instagram">
            <?php get_template_part('/template-parts/icon--instagram'); ?>
        </a>
    </li>

    <li class="facebook">
        <a href="https://www.facebook.com/glaretx/" title="Facebook">
            <?php get_template_part('/template-parts/icon--facebook'); ?>
        </a>
    </li>

</ul>