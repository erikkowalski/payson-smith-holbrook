<footer class="content-info" role="contentinfo">
  <section class="row footer-top">
		 <div class="col-md-4 footer-logo">
			  <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/psh-full.png" alt="">
		 </div>
		<nav class="">
			 <?php if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation',  'menu_class' => 'nav navbar-nav col-md-8']);
				endif; ?>
		</nav>
	 </section>

	 <section class="footer-bottom">
		<div class="col-md-4">
			 <?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
	 </section>
</footer>
