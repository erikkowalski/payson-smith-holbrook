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

<section class="discription container">
	<p>Payson Smith Holbrook, Inc. specializes in Acquisitions &amp; Dispositions, Agency Leasing, Project Management and Tenant Representation.  We at PSH work every day to develop the interpersonal relationships with our clients that result in a  deeper understanding of their present and future expectations. Whether your needs are the expansion into a new market, the disposition of non-productive assets or the oversight of a complex project, we are here to help navigate through the times. PSH is dedicated to committing our team to be a part of your team in consultative planning, build-to-suit design, market and demographic evaluation, true cost of occupancy analysis, project management, property management and lease administration. </p>
</section>

<section class="news-feed">

	<h2>See what’s happening in your market and around the world.</h2>

<?php //Display 3 random Costar News Posts
$costar_feed_args = [
    'post_type' => 'costar_news',
    'posts_per_page' => 3,
    'orderby' => 'rand'
];

$costar_feed = new WP_Query( $costar_feed_args );
?>
   <aside  class="row">

		<h3>National Commercial Real Estate News:</h3>

    <?php while ( $costar_feed->have_posts() ) : $costar_feed->the_post(); ?>
    <div class="col-md-4">
        <h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
        <div class="entry-content">
        <?php the_excerpt();?>
        </div>
    </div>
    <?php endwhile;
		wp_reset_postdata();
		?>
</aside>



<?php //Display 3 random Costar Boston News Posts
$costar_boston_args = [
	'post_type' => 'costar_boston',
	'posts_per_page' => 3,
	'orderby' => 'rand'
];

$costar_boston = new WP_Query( $costar_boston_args );
	?>
	<aside  class="row">
		<h3>Boston Commercial Real Estate News</h3>
		<?php while ( $costar_boston->have_posts() ) : $costar_boston->the_post(); ?>
		<div class="col-md-4">
			<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
			<div class="entry-content">
				<?php the_excerpt();?>
			</div>
		</div>
		<?php endwhile;?>
	</aside>



<?php //Display 3 random News Posts
$m_and_a_args = [
	'post_type' => 'm_and_a',
	'posts_per_page' => 3,
	'orderby' => 'rand'
];


$m_and_a = new WP_Query( $m_and_a_args ); ?>
	<aside  class="row">
		<h3>M&amp;A News: </h3>
		<?php while ( $m_and_a->have_posts() ) : $m_and_a->the_post(); ?>
		<div class="col-md-4">
			<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
			<div class="entry-content">
				<?php the_excerpt();?>
			</div>
		</div>
		<?php endwhile;?>
	</aside>

	<?php //Display 3 random News Posts
$business_args = [
	'post_type' => 'business',
	'posts_per_page' => 3,
	'orderby' => 'rand'
];


$business_news = new WP_Query( $business_args ); ?>
	<aside  class="row">
		<h3>Business News:</h3>
		<?php while ( $business_news->have_posts() ) : $business_news->the_post(); ?>
		<div class="col-md-4">
			<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
			<div class="entry-content">
				<?php the_excerpt();?>
			</div>
		</div>
		<?php endwhile;?>
	</aside>

	<?php //Display 3 random News Posts
$business_args = [
	'post_type' => 'economic',
	'posts_per_page' => 3,
	'orderby' => 'rand'
];


$business_news = new WP_Query( $business_args ); ?>
	<aside  class="row">
		<h3>Economic News:</h3>
		<?php while ( $business_news->have_posts() ) : $business_news->the_post(); ?>
		<div class="col-md-4">
			<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
			<div class="entry-content">
				<?php the_excerpt();?>
			</div>
		</div>
		<?php endwhile;?>
	</aside>

	<?php //Display 3 random News Posts
$business_args = [
	'post_type' => 'financial',
	'posts_per_page' => 3,
	'orderby' => 'rand'
];


$business_news = new WP_Query( $business_args ); ?>
	<aside  class="row">
		<h3>Financial News:</h3>
		<?php while ( $business_news->have_posts() ) : $business_news->the_post(); ?>
		<div class="col-md-4">
			<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
			<div class="entry-content">
				<?php the_excerpt();?>
			</div>
		</div>
		<?php endwhile;?>
	</aside>

</section>



