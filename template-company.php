<?php
/**
 * Template Name: Company Template
 */
?>

<div class="company-header">
	<img class="img-responsive" src="<?php the_field('company_header_img') ?>" alt="Header Image">
</div>
<section class="company">
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
	<div class="content">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
<?php endwhile; ?>

</section>
