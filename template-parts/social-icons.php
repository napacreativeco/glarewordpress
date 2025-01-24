<style>
    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        list-style: none;
        padding: 0;
    }

    .social-item {
        margin-right: 1rem;
    }

    .social-item:last-child {
        margin-right: 0;
    }

    .social-item a {
        display: block;
        width: 40px;
        height: 40px;
        background-color: #000;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .social-item a svg path {
        fill: #fff;
    }

    .social-item a:hover {
        background-color: #333;
    }

</style>

<ul class="social-icons">

    <li class="social-item down-right-merch">
        <a href="https://glare.downrightmerch.com" title="Down Right Merch">
            <?php get_template_part('/template-parts/icon--shirt'); ?>
        </a>
    </li>

    <li class="social-item bandsintown">
        <a href="https://www.bandsintown.com/a/732467-glare" title="Bandsintown">
            <?php get_template_part('/template-parts/icon--bandsintown'); ?>
        </a>
    </li>

    <li class="social-item spotify">
        <a href="https://open.spotify.com/artist/2dXj6aC3DsxoTDyhk3u4gl?autoplay=true">
            <?php get_template_part('/template-parts/icon--spotify'); ?>
        </a>
    </li>

    <li class="social-item apple">
        <a href="https://music.apple.com/us/artist/glare/199398424">
            <?php get_template_part('/template-parts/icon--apple'); ?>
        </a>
    </li>

    <li class="social-item bandcamp">
        <a href="https://glaretx.bandcamp.com/">
            <?php get_template_part('/template-parts/icon--bandcamp'); ?>
        </a>
    </li>

    <li class="social-item youtube">
        <a href="https://www.youtube.com/channel/UCVpnGkn7WCHuLmBaVD55L6A?feature=gws_kp_artist&feature=gws_kp_artist">
            <?php get_template_part('/template-parts/icon--youtube'); ?>
        </a>
    </li>

    <li class="social-item instagram">
        <a href="https://www.instagram.com/glare.tx/">
            <?php get_template_part('/template-parts/icon--instagram'); ?>
        </a>
    </li>

    <li class="social-item facebook">
        <a href="https://www.facebook.com/glaretx/">
            <?php get_template_part('/template-parts/icon--facebook'); ?>
        </a>
    </li>

</ul>