<?php while (have_posts()) : the_post(); ?>
<?php // get_template_part('templates/page', 'header'); ?>
<div id="carousel-home" class="carousel fade " data-ride="carousel">
    <!-- Indicators
    <ol class="carousel-indicators">
        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home" data-slide-to="1"></li>
        <li data-target="#carousel-home" data-slide-to="2"></li>
        <li data-target="#carousel-home" data-slide-to="3 "></li>
</ol>  -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php the_field('home_slider_image_one'); ?>" alt="slide one">
            <div class="carousel-caption">

            </div>
        </div>
       <div class="item">
            <img src="<?php the_field('home_slider_image_two'); ?>" alt="slide two">
        </div>
    <div class="item">
            <img src="<?php the_field('home_slider_image_three'); ?>" alt="slide three">
        </div>
           <div class="item">
            <img src="<?php the_field('home_slider_image_four'); ?>" alt="slide four">
        </div>


    </div>
    <nav class="hidden-xs slider-nav">
        <?php if (has_nav_menu('secondary_homepage_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_homepage_navigation',  'menu_class' => 'nav navbar-nav']);
        endif; ?>
    </nav>

</div>


<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<section class="news-feed">

<h2>Industry News</h2>

<?php //Display 3 random News Posts
$args = [
    'post_type' => 'psh_news',
    'posts_per_page' => 3,
    'orderby' => 'rand'
];

$testimonials = new WP_Query( $args );
?>
   <aside  class="row">
       <hr/>

    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
    <div class="col-md-4">
        <h3 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
        <div class="entry-content">
        <?php the_excerpt();?>
        </div>
    </div>
    <?php endwhile;?>
</aside>

</section>

