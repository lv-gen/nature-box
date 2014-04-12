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

<div id="content">
    <?php if ( !dynamic_sidebar('homepage-widget-area') ); ?>
</div><!-- #content -->

<!-- Часть Слева -->
<div class="span7">
<div class="row">
<div class="for-block">

<!-- Слайдер Свежее -->
<div class="span4 margin-b">
<div class="fresh-slider">
<div class="fs-title">Популярное</div>
<img src="http://nature-box.ru/wp-content/uploads/2012/11/lygushka.png">
<div class="fs-slider-item-meta">09.06.13 Vffff</div>
<h2>Строение птицы</h2>
<p>
Есть специальные книги, рассказывающие о путешественниках и их открытиях. В них — сотни имен, и за каждым именем — история жизни и удивительных приключений. Что заставляло этих людей покидать дом, родные края, прощаться…
</p>
</div>
</div>
<div class="span3">
<ul class="block-category-list">
<li>
<p class="block-category-list-meta">sdfgsd dsfsdf sdfsdf sdfsdfsd</p>
<p class="block-category-list-item"><a href="/">Гуси</a></p>
</li>
</ul>
</div>
</div>
<!-- Конец Слайдер Свежее -->

<!-- Лента Постов -->


<div class="span7">
<div class="for-block">

<!-- Посты и Контент -->


		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		

<!-- Конец Посты и Контент -->

</div>	
</div>

<!-- Конец Лента Постов -->

<!-- Вывод постов из категории -->

<div class="span7">
	<div class="for-block">
	<div class="block-category">
<div class="block-title">Последние записи</div>

<div class="row">

<div class="span3">
<img src="http://nature-box.ru/wp-content/uploads/2012/12/lug-300x180.jpg">
</div>
<div class="span4">
<div class="block-category-title-posts">

<ul class="block-category-list">
<li>
<p class="block-category-list-meta">sdfgsd dsfsdf sdfsdf sdfsdfsd</p>
<p class="block-category-list-item"><a href="/">Гуси</a></p>
</li>
</ul>

</div>
</div>

</div>
    </div>


</div>
</div>

<!-- Конец Вывод постов из категории -->


</div>	
</div>
<!-- Конец Часть Слева -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>