<?php define( 'WP_USE_THEMES', false ); get_header(); ?>


  <body>

    <h1><?php echo get_bloginfo('name'); ?></h1>

    <h2><?php echo get_bloginfo('description'); ?></h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  </body>



</html>
