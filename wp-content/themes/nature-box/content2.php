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

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<li>
			<p class="block-category-list-meta"><?php custom_fs_list_meta(); ?></p>
			<?php if ( is_single() ) : ?>
			<p class="block-category-list-item"><?php the_title(); ?></p>
			<?php else : ?>
			
		<p class="block-category-list-item"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></p>
			
			<?php endif; // is_single() ?>
			
			</li>
		</header><!-- .entry-header -->


		
	</article><!-- #post -->


