<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>
<h1>Blog</h1> 
<?php if ( have_posts() ):
 while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h2 class="entry-title"><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></h2>
							<?php the_excerpt(); ?> 
					<?php } ?>
					<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>

					<div class="entry-content">
						<?php //the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
		

<?php endwhile; // end of the loop. 
	else: ?>
<div class="entry-content">
	<p class="comingsoon">No Blog Post</p>
</div>
<?php endif; ?>