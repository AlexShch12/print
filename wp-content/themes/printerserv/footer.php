<div class="footer">
	<div class="cpy">
		<a href="/"><span>P</span>rinter <span>S</span>ervice</a>
		<p>&copy;Printer Service 2018-2019<br />
		Всі права захищені.<br />
		Email: <?php bloginfo('admin_email'); ?><br />
		Тел. 096-248-31-49
		</p>
	</div>
	<!--  
	<?php if(!dynamic_sidebar('footer')): ?>
		<div class="menu-foot">
			<h2>Категорії (footer.php)</h2>
			<ul>
				<?php wp_list_categories(array('title_li' => '')); ?>
			</ul>
		</div>
	<?php endif; ?>
	-->
	<div class="menu-foot">
		<h2>Посилання</h2>
			<?php wp_nav_menu(array(
				'theme_location' => 'menu',
				'container' => false,
				'menu_class' => '',
				'before' => '- '
			)); ?>
	</div>				
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
