<?php

/**
 * Template Name: Services Page
 *
 * @package WordPress
 * @subpackage TDD
 * @since TDD
 */
?>
<?php get_header(); ?>
<div class="wrapper clearfix">

	<div class="services-content">		
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

				
		<div id="services-full-page">

			<!--section0-->

			<div class="section" id="section0" style="background-image: url(<?php bloginfo('template_url'); ?>/img/section0-bg-1280x1029.png); width:100%; height: auto">

				<div class="section__header">
					<div class="title"><h1>Разработка игр</h1></div>
					<p>Мы придерживаемся стратегии индивидуального подхода к каждому клиенту,<br/>
						однако есть общая схема нашей работы над игровым проектом, доказавшая свою эффективность:</p>
				</div>
				<div class="section0-content clearfix">
					<div class="content__application content__application__popup content__application__popup1" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png);">
						<div class="content__application__title">
							<p>Оставьте свою заявку, и мы с Вами свяжемся</p>
							<i class="icon-close1"></i>
						</div>
						<div class="application-form application-form-popup">							
							<?php if ( have_posts() ) : // если имеются записи в блоге.
							//query_posts( array( 'cat' => 5, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );
							while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
							?>
							<div class="application-form main-form">
								<?php the_content(); ?>
							</div>
							<?php 
								endwhile;  // завершаем цикл.
							endif;
							/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
							wp_reset_query();
							?>
						</div>
					</div>
					<div class="section0-content__left">
						<div class="img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/section0-img-239x483.png); width:239px; height: 483px;"></div>
						<a class="section-content__btn section1-content__btn btn-green">Заказать</a>
					</div>
					<div class="section0-content__right">
						<div class="marks">
							<i class="icon-section0-marks"></i>
						</div>
						<div class="text">
							<h3>Техническое задание (ТЗ)</h3>
								<p>Мы всегда готовы выслушать все пожелания наших клиентов и создать конкретное, подробное ТЗ, максимально учитывающее все Ваши пожелания.</p>
							<h3>Договор об инвестировании</h3>
								<p>	Закрепляя все оговорённые положения, сроки, стоимость и режим финансирования проекта. Юридическая поддержка призвана защитить Ваши и наши права и интересы.</p>
							<h3>Модель</h3>
								<p>	Мы создаём прототип, который демонстрирует основные функции и механики, чтобы проверить возможность реализации Вашей идеи.</p>
							<h3>Разработка</h3>
								<p>	Программирование, работа с API, интеграция с различными системами и устройствами, проектирование логики и балансировка игровых данных. Мы тщательно прорабатываем архитектуру кода, учитывая возможности развития игры как продукта и добавления новых функций.</p>
							<h3>Дизайн/Интерфейс</h3>
								<p>С большим вниманием мы подходим к разработке и созданию дизайна и интерфейса, учитывая как жанровые особенности игры, так и специфику платформы — PC, MAC, мобильные устройства.</p>
							<h3>Тестирование</h3>
							<p>	Каждый проект перед запуском проходит многоступенчатое тестирование – так мы ищем слабую часть системы. Тестируется всё — от интерфейса и совместимости с заявленными платформами до игровой логики и баланса.</p>
						</div>
					</div>
				</div>

			</div>

			<!--section1-->

		<div class="section" id="section1" style="background-image: url(<?php bloginfo('template_url'); ?>/img/section1-bg-1280x922.png); width:100%; height: auto;">

			<div class="section__header">
				<div class="title"><h1>Создание приложений для социальных сетей и мобильных устройств</h1></div>
				<p>Сегодня разработка высококачественных компьютерных игр и мобильных приложений является<br/>
					приоритетным направлением нашей компании. Однако предоставляемые нами услуги этим не ограничиваются</p>
			</div>
			<div class="section1-content clearfix">
				<div class="section1__icon-box">

					<!--social-network-->
					<h2>Приложения для социальных сетей</h2>
					<div class="section1__social-network clearfix">

						<div class="social-network-item">
							<i class="icon-services-social-vk"></i>
							<p>Вконтакте</p>
						</div>

						<div class="social-network-item">
							<i class="icon-services-social-fb"></i>
							<p>Facebook</p>
						</div>

						<div class="social-network-item">
							<i class="icon-services-social-odnoklassniki"></i>
							<p>Одноклассники</p>
						</div>
					</div>

					<!--mobile-platform-->
					<h2>Мобильные платформы</h2>
					<div class="section1__mobile-platform clearfix">

						<div class="mobile-platform-item">
							<i class="icon-services-platform-android"></i>
							<p>Android</p>
						</div>

						<div class="mobile-platform-item">
							<i class="icon-services-platform-ios"></i>
							<p>iOS</p>
						</div>

						<div class="mobile-platform-item">
							<i class="icon-services-platform-wp"></i>
							<p>Windows Phone</p>
						</div>

					</div>
				</div>
				<a class="section-content__btn section2-content__btn btn-green">Заказать</a>

				<div class="content__application content__application__popup content__application__popup2" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png);">
					<div class="content__application__title">
						<p>Оставьте свою заявку, и мы с Вами свяжемся</p>
						<i class="icon-close2"></i>
					</div>
					<div class="application-form application-form-popup">
						<?php if ( have_posts() ) : // если имеются записи в блоге.
							//query_posts( array( 'cat' => 5, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );
							while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
							?>
							<div class="application-form main-form">
								<?php the_content(); ?>
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

		</div>

		<!--section2-->

		<div class="section" id="section2" style="background-image: url(<?php bloginfo('template_url'); ?>/img/section2-bg-1280x922.png); width:100%; height: auto;">

			<div class="section__header">
				<div class="title"><h1>Аутсорс-услуги</h1></div>
				<p>Мы предлагаем широкий спектр аутсорс-услуг в сфере разработки игр</p>
			</div>
			<div class="section2-content clearfix">
				<div class="section2-icon-box">
					<div class="section2-icon-box-top clearfix">
						<div class="icon-box-item-left">
							<div class="icon-box-item-img"><i class="icon-outsource-model"></i></div>
							<div class="icon-box-item-title"><h2>3D-МОДЕЛИРОВАНИЕ</h2></div>
							<div class="icon-box-item-text">
								<p>3D скульптурирование, ретопология,<br/>
								текстурирование, создание<br/>
								элементов окружения (2D и 3D)</p>
							</div>
						</div>
						<div class="icon-box-item-right">
							<div class="icon-box-item-img"><i class="icon-outsource-develop"></i></div>
							<div class="icon-box-item-title"><h2>РАЗРАБОТКА</h2></div>
							<div class="icon-box-item-text">
								<p>Проектирование, дизайн, создание GUI,<br/>
									проведение usability-тестов</p>
							</div>
						</div>
					</div>
					<div class="section2-icon-box-bottom clearfix">
						<div class="icon-box-item-left">
							<div class="icon-box-item-img"><i class="icon-outsource-engineer"></i></div>
							<div class="icon-box-item-title"><h2>ПРОЕКТИРОВАНИЕ ЛОГИКИ</h2></div>
							<div class="icon-box-item-text">
								<p>Проектирование логики,<br/>
									программирование модулей front/back-end</p>
							</div>
						</div>
						<div class="icon-box-item-right">
							<div class="icon-box-item-img"><i class="icon-outsource-game"></i></div>
							<div class="icon-box-item-title"><h2>GAME-ДИЗАЙН</h2></div>
							<div class="icon-box-item-text">
								<p>Создание корректной документации к проекту,<br/>
									ТЗ, расчёты/проверка игрового баланса,<br/>
									разработка или проверка эффективности<br/>
									внутриигровой монетизации</p>
							</div>
						</div>
					</div>
				</div>
				<a class="section-content__btn section3-content__btn btn-green">Заказать</a>

				<div class="content__application content__application__popup content__application__popup3" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png);">
					<div class="content__application__title">
						<p>Оставьте свою заявку, и мы с Вами свяжемся</p>
						<i class="icon-close3"></i>
					</div>
					<div class="application-form application-form-popup">
						<?php if ( have_posts() ) : // если имеются записи в блоге.
							//query_posts( array( 'cat' => 5, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );
							while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
							?>
							<div class="application-form main-form">
								<?php the_content(); ?>
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

		</div>

		<!--section3-->

		<div class="section" id="section3" style="background-image: url(<?php bloginfo('template_url'); ?>/img/section3-bg-1280x794.png); width:100%; height: auto">

			<div class="section__header">
				<div class="title"><h1>ИНВЕСТИЦИИ</h1></div>
				<p>Наша команда из опытных разработчиков способна создать игру или<br/>
					приложение абсолютно любой сложности в соответствии с требованиями современной игровой индустрии.</p>
			</div>

			<div class="section3-content clearfix">
				<div class="section3-slider-wrap">
					<div class="nav-prev"></div>
					<div class="nav-next"></div>
					<div class="section3-slider clearfix">
						<div class="item">
							<div class="img"><a href="http://www.rigidclouds.com.ua/age-of-valor/"><img src="<?php bloginfo('template_url'); ?>/img/investment-age-of-valor-269x269.png" width="269" height="269"></a></div>
							<div class="title"><h3>Age of Valor</h3></div>
							<div class="text"><p>Пошаговая стратегия для социальных сетей.</p></div>
						</div>
						<div class="item">
							<div class="img"><a href="http://www.rigidclouds.com.ua/cars-war/"><img src="<?php bloginfo('template_url'); ?>/img/investment-car-wars-269x269.png" width="269" height="269"></a></div>
							<div class="title"><h3>CarsWar</h3></div>
							<div class="text"><p>Онлайн-шутер для любителей скорости и адреналина!</p></div>
						</div>
					</div>
				</div>

				<div class="section3-content-text">
					<p>На сегодняшний день набирает популярность инвестирование в сферу IT.<br/>
						Мы предлагаем Вам возможность инвестировать в онлайн-игры и игры для социальных сетей.</p>
				</div>
				<div class="section3-content-info">
					<div class="section3-content-info-title">
						<p>Хотите ли Вы воплотить свои идеи в реальность, или Вы желаете вложить деньги в долю одного их наших проектов –<br/>
							<span>Вы попали именно туда, куда хотели.</span></p>
					</div>
					<div class="section3-content-info-list-box clearfix">
						<div class="list-box-item">
							<i>1</i>
							<p>Оставьте заявку на сайте,
								напишите нам на e-mail
								или позвоните нам.</p>
						</div>
						<div class="list-box-item">
							<i>2</i>
							<p>Мы свяжемся с Вами,
								внимательно вас выслушаем и
								вместе с Вами составим
								подробное техническое задание,
								исходя из которого определим
								стоимость Вашей игры.</p>
						</div>
						<div class="list-box-item">
							<i>3</i>
							<p>Мы ищем тонкую грань
								между классикой и инновациями
								в дизайне, звуке, сюжете и
								игровых механиках –
								и добиваемся неугасающего
								интереса игроков, с каждым
								разом открывающих для
								себя новые грани наших игр.</p>
						</div>

					</div>
				</div>


				<div class="content__application" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-57x74.png);">
					<div class="content__application__title">
						<p>Оставьте свою заявку, и мы с Вами свяжемся</p>
					</div>
					<div class="application-form main-form">
						<?php if ( have_posts() ) : // если имеются записи в блоге.
							//query_posts( array( 'cat' => 5, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ) );
							while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
							?>
							<div class="application-form main-form">
								<?php the_content(); ?>
							</div>
							<?php 
								endwhile;  // завершаем цикл.
							endif;
							/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
							wp_reset_query();
						?>
						</br>
						</br>
						</br>
					</div>
				</div>
			</div>

		</div>
		</div>

	</div>
<!--Подключаем fullpage для страницы услуги-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slimscroll.min.js"></script>
<script>
	$("#services-full-page").fullpage({
		scrollOverflow:true,
		navigation:true,
		navigationPosition:'left',
		navigationTooltips:['Разработка игр','Создание приложений','Аутсорс-услуги','Инвестиции'],
		anchors:['DevelopingGame','DevelopingApp','Outsource-service','Investment']
	});
</script>
</div>
<?php wp_footer(); ?>