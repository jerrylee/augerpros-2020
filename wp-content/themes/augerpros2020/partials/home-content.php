<section id="home-content">
	<div class="container">
		<div class="row-fluid">
			<?php
				if(have_posts()):while(have_posts()):the_post();
					the_content();
				endwhile; endif;
				?>
		</div>
	</div>
</section>	