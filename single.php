<?php
/* Single Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>


<main class="page--default">
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
    <?php the_content();  ?>
<?php endwhile; ?>

</main>

<?php
get_footer();