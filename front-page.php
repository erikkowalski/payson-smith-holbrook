<?php while (have_posts()) : the_post(); ?>
<?php // get_template_part('templates/page', 'header'); ?>
<div id="carousel-home" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home" data-slide-to="1"></li>
        <li data-target="#carousel-home" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php the_field('home_slider_image_one'); ?>" alt="slide one">
            <div class="carousel-caption">

            </div>
        </div>
        <!--<div class="item">
            <img src="..." alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div> -->

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
