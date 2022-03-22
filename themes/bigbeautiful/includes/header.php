<header>
  <div class="header_fixed">
    <div class="header_top">
      <div class="wrapper">
        <?php dynamic_sidebar('htopinfo');?>
      </div>
    </div>
    <div class="header_bot">
      <div class="wrapper">
          <div class="hbot_left">
            <a href="index.php"><img src="<?php bloginfo('template_url');?>/images/main_logo.png" alt="<?php echo get_bloginfo('name');?>" width="270"/></a>
          </div>

          <div class="hbot_right">
            <form action="#">
              <input type="text" placeholder="Search Products…" name="s">
              <input type="submit">
            </form>

            <?php get_includes('nav'); ?>

          </div>
      </div>
    </div>
  </div>
    <div class="header_dummy"></div>
</header>
