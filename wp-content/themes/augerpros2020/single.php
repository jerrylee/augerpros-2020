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
<section id="blog-page-content">
  <div class="container">
	  <?php if(have_posts()):while(have_posts()):the_post(); ?>
		  <h1><?php the_title(); ?></h1>
		  <div class="row">
			<div class="col-sm-8"><?php the_content(); ?></div>
		  </div><!--/row-fluid-->
		<hr />
	  <?php endwhile; endif; ?>
	</div>
</section>
<?php get_footer(); ?>