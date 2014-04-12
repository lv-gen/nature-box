<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- Подключаем Bootstrap -->

<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/ntr.css" rel="stylesheet">



<!-- Конец Подключаем Bootstrap -->

<!-- Подключаем Google шрифты -->

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<!-- Конец Подключаем Google шрифты -->

 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<?php wp_head(); ?>

<!-- Подключаем BootStrap -->

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-transition.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-alert.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-modal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tab.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tooltip.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-popover.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-button.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-typeahead.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>


<!-- Конец Подключаем BootStrap -->

</head>

<body <?php body_class(); ?>>

<!-- Навбар -->
<div class="navbar navbar-fixed-top">
<div class="navbar-inner ntr-navbar">
<div class="container">
	<div class="row">
<div class="span12">
<div class="nav-collapse">
<?php
$args = array(
'menu_id'=>'topmenu-2',
'menu_class'=>'nav nav-nt',
'theme_location'=>'top-2',
'container'=>''
);
wp_nav_menu($args);
?>
<?php get_search_form(); ?>
</div> 
</div>
</div>
</div>
</div>
</div>
<!-- Конец Навбар -->
	


<div class="container height100pr main-content main-shadows">
<div class="row height100pr">
<div class="span12 height100pr">
<!-- Тело -->
<div class="row">

<div class="span12">
<div class="for-block-logo" align="center">
<a href="/"><img src="/logo.png"></a>
</div>
</div>	

<div class="span12">
<div class="for-block">

<div id="myCarousel" class="carousel slide">
<div class="carousel-inner">
<div class="item active">
<img src="/sl1.jpg" alt="">
<div class="carousel-caption ntr-carousel-caption">
<div class="ntr-carousel-content">
	<div class="ntr-carousel-content-inner">
<h4>Как зарождалась планета Земля!</h4>
<p>Земля не всегда была такой, какой мы ее наблюдаем сейчас. Процесс образования планеты занял огромное количество времени.</p>
<p class="ntr-carousel-content-button"><a href="/kak-zarozhdalas-planeta-zemlya/" class="btn btn-small">Смотреть</a></p>
    </div>
</div>
</div>

</div>
<div class="item">
<img src="/sl2.jpg" alt="">
<div class="carousel-caption ntr-carousel-caption">
<div class="ntr-carousel-content">
	<div class="ntr-carousel-content-inner">
<h4>Что растет на полях?</h4>
<p>Пшеница, рожь, ячмень, овес, кукуруза,просо,гречиха,лен,картофель,свекла,<br>морковь,разные кормовые травы — такие как клевер,люцерна,тимофеева трава.</p>
<p class="ntr-carousel-content-button"><a href="/chto-rastet-na-polyax/" class="btn btn-small">Читать</a></p>
    </div>
</div>
</div>

</div>

</div>
<a class="carousel-control left ntr-carousel-control ntr-carousel-control-left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right ntr-carousel-control ntr-carousel-control-right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

</div>
</div>	








