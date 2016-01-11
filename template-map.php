<?php
/**
 * Template Name: Map Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<iframe class="visible-xs" id="iframeWidget" scrolling="no" overflow="hidden" style="HEIGHT:350px; WIDTH: 100%" src="https://batchgeo.com/map/a886653cfddb03d11de79a99abb3a408" frameborder="0" allowtransparency=""></iframe>

<iframe class="hidden-xs" id="iframeWidget" scrolling="no" overflow="hidden" style="HEIGHT:650px; WIDTH: 100%" src="https://batchgeo.com/map/a886653cfddb03d11de79a99abb3a408" frameborder="0" allowtransparency=""></iframe>

