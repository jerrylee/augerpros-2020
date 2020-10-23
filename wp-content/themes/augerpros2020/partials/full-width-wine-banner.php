<!-- full width wine banner -->
      <section id="fullWidthWineBanner" class="container-fluid">
        <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-4">
              <h2><?php the_field('full_width_wine_banner_header'); ?></h2>
              <img src="<?php the_field('full_width_wine_banner_image'); ?>" class="img-fluid" />
            </div>
            <div class="col-md-12 col-lg-7 offset-lg-1">
              <div class="row list">
			    <?php the_field('full_width_wine_banner_text'); ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end Full width wine banner -->