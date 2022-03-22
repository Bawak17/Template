<?php
@session_start();
get_header();
get_includes('banner');
get_includes('nav');
?>	
<!--main-->
<div id="main" class="clearfix">

	<?php if ( is_front_page() ) { get_includes('left'); } ?>
		
	<div class="col-a">
	<?php if ( is_front_page() ) { get_includes('flash'); } ?>

		<div class="content">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

			</div>
			<?php if ( is_front_page() ) { get_includes('bottom'); } ?>
				
	</div>
	<?php get_includes('right');?>

</div>	
<!--end main-->
<?php get_includes('footer');?>
