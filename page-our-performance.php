<iframe id="iframeWidget" scrolling="no" overflow="hidden" style="HEIGHT:450px; WIDTH: 100%" src="https://batchgeo.com/map/a886653cfddb03d11de79a99abb3a408" frameborder="0" allowtransparency=""></iframe>
	<section class="company container">


	<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="content">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
	<?php endwhile; ?>


		<img class="pull-left" src="<?php bloginfo('template_directory'); ?>/dist/images/3d-map.jpeg" alt="3D Map">
		<h3>OVER 8 MILLION SQUARE FEET LEASED IN THE PAST FIVE YEARS</h3>
		<p>Navigating the every changing world of commercial real estate is difficult and complicated – but the professionals at Payson Smith Holbrook Inc. are here to help you</p>
		<p>After ten years, PSH has developed an amazing team of brokers, agents, consultants, managers and maintenance personnel who help small-, medium-, and large-sized business move the economy forward every single day. We've done it all and made sure everything went smoothly in the process.</p>
		<div class="new-build">
			<img class="pull-left" src="<?php bloginfo('template_directory'); ?>/dist/images/crane.jpeg" alt="new construction">
			<h3>New-Build Construction</h3>
			<ul>
				<li>Demo</li>
				<li>Blueprints</li>
				<li>Plumbing</li>
				<li>Build</li>
			</ul>
		</div>
		<p>Sometimes, no space completely matches your vision. No problem. Look into a new-build solution. Whether this means demoing the entire property, or merely a deep clean, Payson Smith Holbrook Inc. has the connections and resources to make your vision come to life.</p>
</section>
