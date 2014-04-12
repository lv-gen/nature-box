<!-- Правый столбец -->

<!-- Навигация -->
<div class="span3">
<div class="block-title">Навигация</div>
<div class="row">
<form name="calcForm" class="span3">
<!--<select name="master1" class="span3" id="master1" size="1" onchange="izmen()">
<option value="1">Живая природа</option>
<option value="2">Не живая природа</option>
<option value="3">География</option>
<option value="4">Биология</option>
<option value="5">Экология</option>
<option value="6">Путешествия</option>
<option value="7">Исследователи</option>
<option value="8">Страны и континенты</option>
<option value="9">Планета Земля</option>
<option value="10">Космос</option>
</select> <br>-->
<select name="master2" class="span3" id="del2" size="1"> 
<option value="0">Выберите раздел:</option>
<option value="1">Живая природа</option>
<option value="2">Не живая природа</option>
<option value="3">География</option>
<option value="4">Биология</option>
<option value="5">Экология</option>
<option value="6">Путешествия</option>
<option value="7">Исследователи</option>
<option value="8">Страны и континенты</option>
<option value="9">Планета Земля</option>
<option value="10">Космос</option>
</select> 
<a href="" id="sel" class="btn disabled">Перейти</a>
</form>
</div>
</div>
<!-- Конец Навигация -->

<div class="span3">
<div class="block-title">Последние записи</div>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
<table class="table mini-table">
<?php if ( have_posts() ) ?>

			<?php /* Start the Loop */ ?>
			<?php query_posts('cat=8'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-for-sidebar', get_post_format() ); ?>
			<?php endwhile; ?>

<?php>wp_reset_query();?>
</table>

</div>




<!-- Конец Правый столбец -->
