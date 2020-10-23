 <!-- professional -->  
	<section id="professional">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 left">
              <h3><?php the_field('locations_h1_header'); ?></h3>
              <h2><?php the_field('locations_h2_header'); ?></h2>
              <p class="text-highlight">
                <?php the_field('locations_first_colored_paragraph'); ?>
              </p>
              <p>
                <?php the_field('locations_large_paragraph'); ?>
              </p>
            </div>
            <div class="col-lg-6 right">
              <img class="img-fluid" src="<?php the_field('locations_image_in_header_section'); ?>" />
              <div>
                <div class="text-box">
                  <p><?php the_field('locations_image_caption'); ?></p>
                </div>
                <div class="cta-box mx-auto">
                  <a href="#"><?php the_field('locations_image_cta_button') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end professional -->