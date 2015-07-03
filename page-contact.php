
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<h1 class="tittle">Contact</h1>

<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="container">
<div class="col-md-5 info">
<?php the_field('info'); ?>
</div>
<div class="col-md-7 form">
<?php the_field('form'); ?>
</div>
</div>
