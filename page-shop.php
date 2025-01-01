<?php
get_header();

global $product;

$term = get_queried_object();

$loop = new WP_Query(
    array(
        'post_type' => 'product',
        'posts_per_page' => 999,
        'orderby' => 'title',
        'order'   => 'ASC',
    )
);
?>

<?php
while ( $loop->have_posts() ) : $loop->the_post();
?>
    <h2><?php the_title(); ?></h2>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
<?php
endwhile;
?>

<?php
get_footer();