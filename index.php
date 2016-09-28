<?php get_header(); ?>
<div class="wrapper clearfix">

<div class="header" style="background-image: url(<?php bloginfo('template_url'); ?>/img/header-bg-1280x714.png); height: 714px;">
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
	<div class="header__info">
		<h1>Мы– команда с ядром из<br/> профессиональных программистов,<br/> художников и дизайнеров.
			<br/>
			<br/>
			Мы влюблены в игры и обожаем<br/> процесс их создания.
		</h1>
	</div>
</div>
<div class="content">
	<div class="content__projects" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-181x178.png)">
		<div class="content__projects__bg-triangle"></div>
		<div class="content__projects__title">
			<h2>Наши проекты</h2>
		</div>
		
		<div class="content__projects__box">
			<div class="box-items clearfix">
				<?php
				if ( have_posts() ) : // если имеются записи в блоге.
				query_posts( array( 'category__in' => array(5,6), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );
				while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
				?>
				<div class="item">
					<div class="item-img">
						<!-- <?php the_post_thumbnail( array(298, 290)); ?> -->
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( array(298, 290) ); ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="item-btn"><a href="<?php the_permalink(); ?>" class="btn-red item-btn">Подробнее</a></div>
				</div>
				
						<?php 
					endwhile;  // завершаем цикл.
				endif;
				/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
				wp_reset_query();
				?>
			</div>					
		</div>
	</div>

	<div class="content__services" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-services-1280x557.png)">
		<div class="content__services__title">
			<h2>Услуги</h2>
		</div>
		<div class="content__services__box">
			<div class="box-items clearfix">
				<div class="item">
					<a href="services#DevelopingGame">
						<div class="item-img"><i class="icon-item-services-1"></i></div>
						<div class="item-text"><h6>Разработка игр</h6></div>
					</a>
				</div>
				<div class="item">
					<a href="services#DevelopingApp">
						<div class="item-img"><i class="icon-item-services-2"></i></div>
						<div class="item-text"><h6>Создание приложений</h6></div>
					</a>
				</div>
				<div class="item">
					<a href="services#Outsource-service">
						<div class="item-img"><i class="icon-item-services-3"></i></div>
						<div class="item-text"><h6>Аутсорс-услуги</h6></div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="content__application" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png);">
		<div class="content__application__title">
			<p>Оставьте свою заявку, и мы с Вами свяжемся</p>
		</div>
		<div class="application-form main-form">
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Контактная форма"]' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>