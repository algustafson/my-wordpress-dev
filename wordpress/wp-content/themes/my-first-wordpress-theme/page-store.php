<?php define( 'WP_USE_THEMES', false ); get_header(); ?>


  <body>

    <h1><?php echo get_bloginfo('name'); ?></h1>

    <h2><?php echo get_bloginfo('description'); ?></h2>

    <?php

    $product_query = array(
      'post_type' => 'product',
      'post_status' => 'publish'
    );

    $get_products = new WP_Query($product_query);

    ?>

    <?php if ( $get_products->have_posts() ) : while ( $get_products->have_posts() ) : $get_products->the_post(); ?>

      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  </body>



</html>
