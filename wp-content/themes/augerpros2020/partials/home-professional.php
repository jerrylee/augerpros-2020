 <!-- professional -->
    <?php
		$file = get_field('image_in_header_section');
		$image = $file['sizes']['large'];		
	?>
	<section id="professional">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 left">
              <h3><?php the_field('home_h1_header'); ?></h3>
              <h2><?php the_field('home_h2_header'); ?></h2>
              <p class="text-highlight">
                <?php the_field('first_colored_paragraph'); ?>
              </p>
              <p>
                <?php the_field('large_paragraph_'); ?>
              </p>
            </div>
            <div class="col-lg-6 right">
              <img class="img-fluid" src="<?php echo $image; ?>" />
              <div>
                <div class="text-box">
                  <p><?php the_field('image_caption'); ?></p>
                </div>
                <div class="cta-box mx-auto">
                  <a href="#"><?php the_field('image_cta_button') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end professional -->