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

<tr>
<td class="mini-thumb"><?php the_post_thumbnail('thumbnail'); ?></td>
<td>
<p><?php custom_top_entry_meta(); ?></p>
<p>
<?php if ( is_single() ) : ?>
			<?php the_title(); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			
			<?php endif; // is_single() ?>
</p>
</td>
</tr>	


