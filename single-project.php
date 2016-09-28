<?php get_header(); ?>
<div class="wrapper clearfix">
	<div class="header" style="background-image: url(<?php 
				$attachmentID = get_post_meta($post->ID, 'proj_header_img', true); // attachment ID				
				$image_attributes = wp_get_attachment_image_src($attachmentID, 'full');
				//echo $image_attributes;
				echo $image_attributes[0]; ?>);">
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
		<div class="header__info project-header">
			<h1><?php the_title(); ?></h1>
			<p><?php echo get_post_meta($post->ID, 'heading_text', true) ?></p>
		</div>
	</div>
	
	<div class="project-content clearfix" style="background-image: url(<?php bloginfo('template_url'); ?>/img/content-bg-181x178.png)">
		<div class="project-content__wrap clearfix">
			<div class="project-content__left">
				<p><?php echo get_post_meta($post->ID, 'p_1', true) ?></p>
				<div class="project-slider-wrap" style="background-image: url(<?php bloginfo('template_url'); ?>/img/project-slider-bg-460x310.png)">
					<div class="nav-prev-project"></div>
					<div class="nav-next-project"></div>

					<?php $slide1 = get_post_meta($post->ID, 'slide1', true); $ia1 = wp_get_attachment_image_src($slide1, 'full');
						$slide2 = get_post_meta($post->ID, 'slide2', true); $ia2 = wp_get_attachment_image_src($slide2, 'full');
						$slide3 = get_post_meta($post->ID, 'slide3', true); $ia3 = wp_get_attachment_image_src($slide3, 'full');							
					?>

					<div class="project-slider clearfix">
						<div class="item"><img src="<?php echo $ia1[0]; ?>"></div>
						<div class="item"><img src="<?php echo $ia2[0]; ?>"></div>
						<div class="item"><img src="<?php echo $ia3[0]; ?>"></div>
					</div>
				</div>
			</div>

			<div class="project-content__right">
				<p><?php echo get_post_meta($post->ID, 'p_2', true) ?></p>				
				
				<p><?php echo get_post_meta($post->ID, 'p_3', true) ?></p>
				<p><?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</p>
				<?php if( get_field('play_market') ): ?>
					<div class="social-box clearfix">
						<div class="social-box__title"><p>Ссылки на проект:</p></div>
						<div class="social-box__icon-box">
							<!-- <a href="<?php echo get_post_meta($post->ID, 'vk_link', true) ?>" target="_blank"><i class="social-item-vk"></i></a>
							<a href="<?php echo get_post_meta($post->ID, 'facebook_link', true) ?>" target="_blank"><i class="social-item-fb"></i></a>
							<a href="<?php echo get_post_meta($post->ID, 'ok_link', true) ?>" target="_blank"><i class="social-item-od"></i></a> -->
							
								<a href="http://<?php the_field('play_market'); ?>" target="_blank"><i class="play-market"></i></a>
							<?php endif; ?>
						</div>
					</div>
				
			</div>
			
		</div>		
		<div class="float-form">

		</div>
	</div>
		

	
				
 
				
	
	

<?php get_footer(); ?>