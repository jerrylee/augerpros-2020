<?php 
/*
 * Template Name: Location Pages
 * Description: Custom pages for locations. Each city will be a parent page, and each service in that city, will be a child page under the parent page. There is a menu for each location that dynamically loads based on the search query. 
*/
get_header(); ?>
<!--section id="locations-page-headers" 
style="background:url('<?php //the_field('location_page_header_image'); ?>') no-repeat; background-size:cover;">
	<div class="container">
		<div class="row-fluid">
			<div class="header-text">
				<h2><?php //the_field('page_header_text'); ?></h2>
			</div>
			.
		</div>
	</div>
</section-->
<?php get_template_part('partials/locations-professional'); ?>
<div class="container">
		<hr class="divider-red">
	</div>
<?php get_template_part('partials/locations-content'); ?>
<div class="content">
<?php get_template_part('partials/locations-cta-bar'); ?>
<?php get_template_part('partials/home-services'); ?>
<?php get_template_part('partials/locations-video'); ?>
<?php get_template_part('partials/locations-cta-info-cards'); ?>
<?php get_template_part('partials/locations-reliable'); ?>

<?php get_template_part('partials/locations-partners'); ?>
<?php get_template_part('partials/locations-testimonials'); ?>
</div><!--/content-->

<!--section id="contact-page-content">
	<div class="container">
		<div class="row-fluid">
			<?php //if(have_posts()):while(have_posts()):the_post(); ?>
				<h1><?php //the_field('page_title'); ?></h1>
				<?php //the_content(); ?>
			<?php //endwhile; endif; ?>
		</div>
	</div>
</section-->
<?php get_footer(); ?>