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
</style>

<?php get_header(); ?>

<div class="temp-container">
    <?php get_template_part('/template-parts/icon--throne'); ?>
</div>

<?php get_footer(); ?>