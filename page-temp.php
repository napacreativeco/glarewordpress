<?php /* Template name: Temp */ ?>

<style>
    body {
        background: #111;
        color: #fff;
    }

    .temp-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    svg {
        width: 40px;
    }

    img {
        max-width: 140px;
    }
</style>

<?php get_header(); ?>

<div class="temp-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/glare-sunburst.png" alt="Glare" />
</div>

<?php get_footer(); ?>