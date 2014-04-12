<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="tab-pane tab-pane-fs">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
		<div class="fs_thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
		<div class="fs_thumbnail-title"><?php the_title(); ?></div>
			<?php if ( is_single() ) : ?>
			<h1 class="fresh-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="fresh-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<div class="fs-entry_meta"><?php custom_fs_meta(); ?></div>
			
		</header><!-- .entry-header -->

	

		
	</article><!-- #post -->

</div>

