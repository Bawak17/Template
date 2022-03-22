<div class="page_product">
  <div class="product_con">

    <?php $args = array(
      'post_type' => 'product',
      'meta_key' => '_featured',
      'meta_value' => 'yes',
      'posts_per_page' => 10,
      'order'=> 'asc'
         );
         $loop = new WP_Query($args);
         while ( $loop->have_posts() ) { $loop->the_post(); global $product; $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
        ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
        <?php $ids = $loop->post->ID ?>
      <section class="prod_box">
       <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" >
          <h3><?php the_title(); ?></h3>
          <p><?php the_content() ; ?></p>
          <a href="<?php echo get_permalink($loop->post->ID) ?>">VIEW DETAILS</a>
        </section>
      <?php } ?>

  </div>

  <div class="product_nav">
    <div class="prod_nav">
      <h3>Page</h3>
      <ul>
        <li><a href="javascript:;">1</a></li>
        <li><a href="javascript:;">2</a></li>
        <li><a href="javascript:;">3</a></li>
      </ul>
      <a href="Shop">View All</a>
    </div>
  </div>
</div>
