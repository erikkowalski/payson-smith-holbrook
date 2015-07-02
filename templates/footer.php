<footer class="content-info" role="contentinfo">
  <section class="clearfix footer-top">
		 <div class="col-xs-12 footer-logo">
			  <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/psh-full.png" alt="">
		 </div>
		 <div class="tagline">
			 <p>STRATEGY. COMMITMENT. FORESIGHT.</p>
			 <p><?php echo date(Y);?> &copy; Payson Smith Holbrook, Inc. </p>
			 <p>All rights reserved. </p>
		 </div>
		 <hr/>

		<hr/>
	 </section>

	 <section class="footer-bottom ">
		 <nav class="footer-nav clearfix">
			 <?php if (has_nav_menu('footer_navigation')) :
			wp_nav_menu(['theme_location' => 'footer_navigation',  'menu_class' => 'nav navbar-nav ']);
			endif; ?>
		 </nav>
		<div class="clearfix">
			 <?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
	 </section>
</footer>
