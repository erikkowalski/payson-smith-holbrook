<?php
/**
 * Template Name: Company Template
 */
?>
<section class="company">

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
	<div class="content">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
<?php endwhile; ?>

</section>
