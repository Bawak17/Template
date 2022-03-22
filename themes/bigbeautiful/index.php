<?php
@session_start();
get_includes('head');
get_includes('header');
?>
<?php if ( is_front_page() ) { get_includes('banner');} ?>

	<div id="main_area">
		<div class="wrapper">

			<?php get_includes('sidebar');?>

			<div class="page_content">

				<?php if ( is_front_page() ) { get_includes('product'); } ?>

				<main>
					<?php get_template_part('loop','page');?>
				</main>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

<?php get_includes('footer');?>
