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


<h1><?php the_title(); ?></h1>

<div class="full-story-entry_meta"><?php twentytwelve_entry_meta(); ?></div>

<?php the_post_thumbnail(); ?>

<div class="full-story-content"><?php the_content( __( '', '' ) ); ?></div>

<div class="commebts-list">

<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>

<?php comments_template( '', true ); ?>

</div>