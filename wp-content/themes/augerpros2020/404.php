<?php get_header(); ?>
<section id="page-headers" style="background:url('<?php the_field('page_headers'); ?>'); ?>">
	<div class="container">
		<div class="row-fluid">
			<div class="header-text">
				<h2><?php the_field('page_header_text'); ?></h2>
			</div>
		</div>
	</div>
</section>
<section id="contact-page-content">
	<div class="container">
		<div class="row-fluid">
			<h1>this page does not exist. 404</h1>
		</div>
	</div>
</section>
<?php get_footer(); ?>