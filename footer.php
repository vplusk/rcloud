<div class="footer clearfix">
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