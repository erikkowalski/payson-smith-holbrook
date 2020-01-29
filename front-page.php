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

<section class="hero-quote container">
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</section>

<section class="mid-page-image-container container-fluid">
<div class="row">
  <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    	<p class="mid-page-text">Payson Smith Holbrook, Inc. specializes in Acquisitions &amp; Dispositions, Agency Leasing, Project Management and Tenant Representation.  We at PSH work every day to develop the interpersonal relationships with our clients that result in a  deeper understanding of their present and future expectations. Whether your needs are the expansion into a new market, the disposition of non-productive assets or the oversight of a complex project, we are here to help navigate through the times. PSH is dedicated to committing our team to be a part of your team in consultative planning, build-to-suit design, market and demographic evaluation, true cost of occupancy analysis, project management, property management and lease administration. </p>

  </div>
</div>

</section>

<section class="discription container">

<h1 class="text-center service-header">Services Lines</h1>
</section>


<?php
if( have_rows('content_sections') ):
    while ( have_rows('content_sections') ) : the_row(); ?>

     <section class="services-lines-sections container" id="<?php the_sub_field('section_id');?>">

     <div class="row">
      <div class="col-sm-12">
        <img class="img-responsive" src="<?php the_sub_field('image') ?>" alt="">
      </div>
       <div class="col-sm-12">
         <h2><?php  the_sub_field('header');?></h2>
       </div>
       <div class="col-sm-12">
         <p><?php  the_sub_field('text_area');?></p>
       </div>
     </div>

     </section>





  <?php  endwhile;
            else :
            endif; ?>


