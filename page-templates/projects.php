<?php

/**
 * Template Name: Projects Page
 *
 * @package WordPress
 * @subpackage Rcloud
 * @since Rcloud
 */

get_header(); ?>
<div class="wrapper clearfix">
<div class="main-project-content clearfix" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png)">
	<div class="menu">
		<ul class="clearfix">
			<li><a href="http://www.rigidclouds.com.ua/projects">Проекты</a></li>
			<li class="dropdown">
				<a href="http://www.rigidclouds.com.ua/services/#Investment">Услуги</a>
				<ul class="dropdown-list">
					<li><a href="http://www.rigidclouds.com.ua/services/#DevelopingGame">Разработка игр</a></li>
					<li><a href="http://www.rigidclouds.com.ua/services/#DevelopingApp">Создание приложений</a></li>
					<li><a href="http://www.rigidclouds.com.ua/services/#Outsource-service">Аутсорс-услуги</a></li>					
				</ul>
			</li>			
		</ul>
		<div class="logo"><a href="http://www.rigidclouds.com.ua"><img src="<?php bloginfo('template_url'); ?>/img/logo-97x111.png"></a></div>
		<ul class="clearfix">
			<li><a href="http://www.rigidclouds.com.ua/services/#Investment">Инвестирование</a></li>
			<li><a href="http://www.rigidclouds.com.ua/contacts">Контакты</a></li>
		</ul>
	</div>
	<div class="menu-mobile__btn">
		<span>&nbsp;</span>
		<span>&nbsp;</span>
		<span>&nbsp;</span>
	</div>
	<div class="menu-mobile clearfix">
		<div class="menu-mobile__btn-close"><i class="icon-menu-mobile-close"></i></div>			
		<?php wp_nav_menu(array(
		'theme_location' => 'footer_menu',
		'menu_class' => 'menu-mobile__list'
		)); ?>
	</div>
	<div class="main-project-title"><h1>ПРОЕКТЫ</h1></div>
	<div class="portfolio clearfix">
		<div class="portfolioFilter">
			<ul id="filter" class="clearfix">
				<li><a class="current" data-filter="*" href="#">Все</a></li>
				<li><a data-filter=".game" href="#">Разработка игр</a></li>
				<li><a data-filter=".application" href="#">Приложения социальных сетей</a></li>
			</ul>
		</div>
		<div class="portfolioContainer clearfix">
			<?php
				if ( have_posts() ) : // если имеются записи в блоге.
				query_posts( array( 'category__in' => array(5,6), 'orderby' => 'date', 'order' => 'DESC' ) );
				while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
			?>
			<div class="item <?php echo get_post_meta($post->ID, 'type_select', true) ?>">
				<div class="img"><?php the_post_thumbnail(array(298,290)); ?></div>
				<a href="<?php the_permalink(); ?>" class="item-hover">
					<div class="item-hover__text__gotham">
						<h3><?php the_title(); ?></h3>
						<p><?php echo get_post_meta($post->ID, 'heading', true) ?></p>
					</div>
				</a>
			</div>
			<?php 
				endwhile;  // завершаем цикл.
			endif;
			/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
			wp_reset_query();
			?>

		</div>
		<script>
			$(window).load(function(){
				var $container = $('.portfolioContainer');
				$container.isotope({
					filter: '*',
					animationOptions: {
						duration: 790,
						easing: 'linear',
						queue: false
					}
				});

				$('#filter a').click(function(){
					$('#filter .current').removeClass('current');
					$(this).addClass('current');

					var selector = $(this).attr('data-filter');
					$container.isotope({
						filter: selector,
						animationOptions: {
							duration: 790,
							easing: 'linear',
							queue: false
						}
					});
					return false;
				});
			});
		</script>
	</div>
</div>

<!-- <?php get_footer(); ?> -->
<div class="footer down clearfix">
	<div class="footer__menu">
		<?php wp_nav_menu(array(
			'theme_location' => 'footer_menu',
			'menu_class' => 'clearfix'
		)); ?>		
	</div>
	<div class="footer__social clearfix">		
		<?php if (!dynamic_sidebar('icons_footer')): ?>
		Место для иконок
		<?php endif; ?>
	</div>
	<div class="footer__contact">		
		<?php if (!dynamic_sidebar('contacts_footer')): ?>
		Место для контактов
		<?php endif; ?>
	</div>
	<div class="copy">
		<p><?php echo date('Y'); ?> © RigidClouds inc. Все права защищены</p>
	</div>
</div>





</div>

<?php wp_footer(); ?>
</body>
</html>