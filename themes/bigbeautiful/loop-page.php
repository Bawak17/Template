<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_front_page() ) { ?>
			<h1><span>Welcome to</span> Big Beautiful Women </h1>
		<?php } else { ?>
			<h1><?php the_title(); ?></h1>
				<?php if($post->post_content=="" && !is_page('sitemap')) { ?>
					<p>We are still updating our website with contents. Please check back next time.</p>
				<?php } ?>
		<?php } ?>
		<div class="entry-content">

			<?php if ( has_post_thumbnail() ) {?>
				<?php the_post_thumbnail('full', array('class' => 'thumb_right_dd'));?>
			<?php }?>

			<?php the_content();
			if(is_page( 'ecommerce-contact-us' )) { ?>
				<p><iframe id="myframe" style="width:100%;overflow:hidden;border:0;" src="<?php bloginfo('template_url'); ?>/forms/contactForm.php"></iframe>
				<script type="text/javascript">
				//<![CDATA[
				document.getElementById('myframe').onload = function(){
				calcHeight();
				};
				//]]>
				</script>
				</p>
			<?php }elseif(is_page('sitemap')){ ?>
				<ul class="sitemap"><?php wp_list_pages(array('title_li' => '')); ?></ul>
			<?php } ?>
			<!-- <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?> -->
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-## -->
<?php endwhile; // end of the loop. ?>
