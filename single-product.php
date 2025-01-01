<?php get_header( 'shop' ); ?>


<?php while ( have_posts() ) : ?>
   <?php global $product; ?>
   <?php the_post(); ?>

   
   <!-- 
      ==========
      IMAGES
      ==========
    -->
   <ul class="images">
     <?php
     $images = $product->get_gallery_image_ids();
     $args = array('order' => 'ASC', 'post_type' => 'attachment', 'post_parent' => $post->ID, 'post_mime_type' => 'image', 'post_status' => null, 'numberposts' => 9); 
     $items = get_posts($args);

     foreach ($items as $item) { 
         $atts = wp_get_attachment_image_src($item->ID, 'full'); ?>
         <li class="image">
             <img class="product-image" src="<?php echo $atts[0]; ?>" alt="<?php the_title(); ?>" />
         </li>
     <?php } ?>
   </ul>


   <!-- 
      ==========
      TITLE
      ==========
    -->
   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <h1><?php the_title(); ?></h1>
   </a>


   <!-- 
      ==========
      PRICE
      ==========
    -->
    <div class="price">
        $<?php echo $product->get_price(); ?>
    </div>


   <!-- 
      ==========
      CATEGORIES
      ==========
    -->
    <?php
    global $post;
    $terms = get_the_terms( $post->ID, 'product_cat' );
    ?>
    <ul class="categories">
        <?php
        foreach ($terms as $term) {
            $product_cat_id = $term->term_id; ?>
            <li class="category">
                <?php echo $term->name; ?>
            </li>
        <?php    
        } ?>
    </ul>


   <!-- 
      ==========
      ADD TO CART
      ==========
    -->
    <?php
    echo apply_filters(
        'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
        sprintf(
            '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
            esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
            esc_html( $product->add_to_cart_text() )
        ),
        $product,
        $args
    );
    ?>



<?php endwhile; ?>


<?php get_footer( 'shop' ); ?>