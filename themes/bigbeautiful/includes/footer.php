  <?php    
    $prompt_message = '<span class="newsletter" style="color: #FFF;font-size:13px;">Please fill the following:</span>';
    if(isset($_POST['submit'])){
        @session_start();
        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email']))))
        { $prompt_message = '<div id="error" style="color: #FFF;font-size:13px;">Please enter a valid email address</div>';}
        else {
        $_SESSION['Name'] = (isset($_POST['Name'])) ? $_POST['Name'] : '';
        $_SESSION['Email'] = (isset($_POST['Email'])) ? $_POST['Email'] : '';
        $_SESSION['Comment'] = (isset($_POST['Comment'])) ? $_POST['Comment'] : '';
        echo '<script type="text/javascript">window.location="ecommerce-contact-us";</script>';
        }}
?>

<footer>
  <div class="wrapper">
    <div class="footer_con">

      <div class="foot_box_1">
        <h3>Send Us a Message Today!</h3>

       <form id="newsletterPopup" action="#" method="post">
          <input type="text"  value="" placeholder="* Full Name" name="Name" required>
          <input type="email" value="" placeholder="* Email Address" name="Email" required>
          <textarea  placeholder="* Message/s" name="Comment"></textarea>

          <?php if(!is_page('ecommerce-contact-us')){ ?>
            <input type="submit" name="submit" value="Submit Now">
          <?php } ?>
        </form>
      </div>

      <div class="foot_box_2">
        <?php dynamic_sidebar('foot1');?>
      </div>

      <div class="foot_box_3">
        <h3>Site Navigation</h3>

        <div class="footer_nav">
          <?php wp_nav_menu( array( 'theme_location' => 'secondary') ); ?>
        </div>

        <h3>Stay Connected With Us</h3>

        <?php dynamic_sidebar('foot2');?>
      </div>

      <div class="foot_box_4">
        <?php dynamic_sidebar('foot3');?>

        <div class="copyright">
         <h3>&copy; Copyright
          <?php
          $start_year = '';
          $current_year = date('Y');
          $copyright = ($current_year == $start_year) ? $start_year : $start_year.''.$current_year;
          echo $copyright;
          ?></h3>
          <span class="footer_comp">Big Beautiful Women</span>
          <a href="http://www.proweaver.com/ecommerce-custom-web-design" target="_blank">E-commerce Web Design</a>: <a href="http://proweaver.com" target="_blank">Proweaver</a>
        </div>
      </div>

    </div>

    </div>
</footer>

<span class="back_top"></span>

</div> <!-- End Clearfix -->
</div> <!-- End Protect Me -->

<?php get_includes('ie');?>

<!--
Solved HTML5 & CSS IE Issues
-->
<script src="<?php bloginfo('template_url');?>/js/modernizr-custom-v2.7.1.min.js"></script>

<!--
Solved Psuedo Elements IE Issues
-->
<script src="<?php bloginfo('template_url');?>/js/calcheight.js"></script>


<script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.skitter.min.js"></script>
<script>
$(document).ready(function() {
  $('.box_skitter_large').skitter({
    theme: 'minimalist',
    numbers_align: 'center',
    progressbar: false,
    navigation: false,
    numbers: false,
    dots:false,
    preview: false,
    interval: 2000
  });
});

</script>

<script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
<?php wp_footer(); ?>
</body>
</html>
