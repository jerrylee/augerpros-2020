<?php get_header(); ?>
<section id="page-headers" style="background:url('<?php //the_field('page_headers'); ?>'); ?>">
	<div class="container">
		<div class="row-fluid">
			<div class="header-text">
				<h2><?php //the_field('page_header_text'); ?></h2>
			</div>
		</div>
	</div>
</section>
<section id="contact-page-content">
	<div class="container">
	  <?php if(have_posts()):while(have_posts()):the_post(); ?>
		<div class="row-fluid">
		<a href="<?php the_permalink(); ?>">
		  <h1><?php the_title(); ?></h1>
		  <div class="row">
			<div class="col-sm-4">
			  <?php if ( has_post_thumbnail() ) {
    			echo the_post_thumbnail();
				} ?>
			</div>
			<div class="col-sm-8"><?php the_excerpt(); ?></div>
		  </div>      
		</a>
		</div><!--/row-fliud-->
		<hr />
	  <?php endwhile; endif; ?>
	</div>
</section>
<?php get_footer(); ?>