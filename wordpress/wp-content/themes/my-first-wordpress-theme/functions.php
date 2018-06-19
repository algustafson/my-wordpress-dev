<?php

function create_post_type() {

  register_post_type('product',
    array(
      'public' => true,
      'labels' => array(
        'name' => 'Products',
        'singular_name' => 'Product'
      )
    )
  );


}

add_action('init','create_post_type');

 ?>
