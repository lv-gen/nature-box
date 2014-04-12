<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<!-- Часть Слева -->
<div class="span9">
<div class="row">


<!-- Слайдер Свежее -->
<div id="content">
    <?php if ( !dynamic_sidebar('homepage-widget-area') ); ?>
   
</div><!-- #content -->

<!-- Статья -->
<div class="span9">
<div class="for-block">
<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; // end of the loop. ?>
</div>	
</div>
<!-- Конец Статья -->

</div>	
</div>
<!-- Конец Часть Слева -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>