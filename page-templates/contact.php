<?php

/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage TDD
 * @since TDD
 */
?>

<?php get_header(); ?>
<div class="wrapper clearfix">

<div class="header" style="background-image: url(<?php bloginfo('template_url'); ?>/img/contact-header-bg-1280x208.png); height: 208px;">
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
	<div class="header__title">
		<h5>Контакты</h5>
	</div>
</div>

<div class="contact-content" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png);">
		<div class="contact-content__wrap clearfix">			
			<div class="contact-content__right">
				<div class="content__right__info">
					<div class="right__info__contact">
						<div class="contact-title"><p>Позвоните нам</p></div>
						<div class="contact-text">
							<?php if (!dynamic_sidebar('contacts_page_block')): ?>
							Место для контактов
							<?php endif; ?>
						</div>
					</div>
					<div class="right__info__application">
						<div class="application-title">
							<p>Или напишите нам</p>
							<span>И мы свяжемся с вами.</span>
						</div>
						<div class="application-form contact-form">
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
								
								
											
											
											<?php the_content(); ?>
											
										
						
								<?php endwhile; ?>
							<?php endif; ?>							
						</div>
					</div>
				</div>
			</div>
			<div class="contact-content__left">
				<div class="content__left__title"><p>Наша команда</p></div>
				<div class="content__left__photo-box__wrap">
					<div class="content__left__photo-box clearfix">
						<div class="content__left__photo">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-photo1-261x174.png" width="261" height="174">
							<div class="item-hover">
								<!--<div class="item-hover__text__exo">
									<span>Евгений</span>
									<p>геймдизайнер</p>
								</div> -->
							</div>
						</div>
						<div class="content__left__photo">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-photo2-261x174.png" width="261" height="174">
							<div class="item-hover">
								<!--<div class="item-hover__text__exo">
									<span>Евгений</span>
									<p>геймдизайнер</p>
								</div> -->
							</div>
						</div>
						<div class="content__left__photo">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-photo3-261x174.png" width="261" height="174">
							<div class="item-hover">
								<!--<div class="item-hover__text__exo">
									<span>Евгений</span>
									<p>геймдизайнер</p>
								</div> -->
							</div>
						</div>
						<div class="content__left__photo">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-photo4-261x174.png" width="261" height="174">
							<div class="item-hover">
								<!--<div class="item-hover__text__exo">
									<span>Евгений</span>
									<p>геймдизайнер</p>
								</div> -->
							</div>
						</div>
						<div class="content__left__photo">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-photo5-261x174.png" width="261" height="174">
							<div class="item-hover">
								<!--<div class="item-hover__text__exo">
									<span>Евгений</span>
									<p>геймдизайнер</p>
								</div> -->
							</div>
						</div>
						<div class="content__left__photo">
							<img src="<?php bloginfo('template_url'); ?>/img/contact-photo6-261x174.png" width="261" height="174">
							<div class="item-hover">
								<!--<div class="item-hover__text__exo">
									<span>Евгений</span>
									<p>геймдизайнер</p>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="map">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
			<div id="map__canvas"></div>
			<script>
			 initialize();
			</script>
		</div>
		
	</div>


<?php get_footer(); ?>