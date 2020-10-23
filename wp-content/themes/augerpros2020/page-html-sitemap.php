<?php 
/**
 * The template for displaying the sitemap page
 * Template Name: Sitemap
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>
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
			<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<h1><?php the_field('page_title'); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<hr />
		<div class="row-fluid">
			<h2 id="sitemap-pages">Pages</h2>
				<ul>
				<?php 
				wp_list_pages( array( 
					'exclude' => '',
				    'title_li' => '',
				  )
				);
				?>
				</ul>

				<h2 id="sitemap-posts">Posts</h2>
				<ul>
				<?php 
				$postsArgs = array(
					'post_type' => 'post',
					 'posts_per_page'=>'-1',
					// 'post__not_in' => array(), 
					 );
				$postsLoop = new WP_Query( $postsArgs );
				while ( $postsLoop->have_posts() ) {
				 $postsLoop->the_post();
				?>
					<li <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php } wp_reset_query(); ?>
				</ul>
		</div>
	</div>
</section>
<?php get_footer(); ?>