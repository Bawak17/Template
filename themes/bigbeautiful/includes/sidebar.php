<aside class="sidebar">
  <div class="side_box1">
    <h3>Shop by <span>Category</span></h3>

    <?php wp_nav_menu( array( 'theme_location' => 'third') ); ?>

    <a href="<?php echo site_url();?>/ecommerce-products" class="r_page">View All Products</a>
  </div>

  <div class="side_box2">

    <div class="sd_box1">
      <h3>Best Brands, <span>Best Services</span></h3>
      <a href="<?php echo site_url()?>/product-category/maxis" class="rp_page">MAXIS</a>
    </div>

    <div class="sd_box2">
      <h3>Fashion Eminence <span>Like No Other</span></h3>
      <a href="<?php echo site_url()?>/product-category/bodycon" class="rp_page">BODYCON</a>
    </div>

    <div class="sd_box3">
      <h3>Wide Selection <span>of Great Choices</span></h3>
      <a href="<?php echo site_url()?>/product-category/all-dresses" class="rp_page">ALL DRESSES</a>
    </div>

  </div>


</aside>
