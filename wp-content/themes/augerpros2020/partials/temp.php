<?php get_header(); ?>

<section id="home-splash">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h1><?php the_field('splash_header_text'); ?></h1>
				<h2><?php the_field('splash_header_paragraph'); ?> </h2>
			</div>
		</div>
	</div>
</section>

<section id="thank-you-page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>