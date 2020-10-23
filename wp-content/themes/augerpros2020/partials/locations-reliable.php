<!-- reliable -->
      <section id="reliable">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 left">
                <?php if(get_field('locations_reliable_section_image')): ?>
                    <img src="<?php the_field('locations_reliable_section_image'); ?>" alt="<?php the_field('city'); ?> image" />
                <?php endif; ?>
              <div>
                <div class="text-box">
                  <p>
                    <?php the_field('locations_reliable_section__caption'); ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 right">
              <h3><?php the_field('locations_reliable_section_header'); ?></h3>
              <p>
                <?php the_field('locations_reliable_section_paragraph'); ?>
              </p>

              <p class="text-highlight">
                Call (214) 206-6580 today for efficient repairs and courteous,
                friendly service from AugerPros Plumbing.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end reliable -->