<!-- service cards -->
<section id="service-cards" class="container-fluid">
<div class="container">
  <div class="row">
    <div class="service-card col-12 col-md-6 col-lg-3">
      <a href="<?php the_field('locations-service-card-link-1'); ?>">
        <div class="card h-100">
          <div class="card-body">
            <img src="<?php echo get_template_directory_uri(); ?>/images/clogged-drains.svg" alt="" />
            <h5 class="card-title">Leaking Pipes</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="service-card col-12 col-md-6 col-lg-3">
      <a href="<?php the_field('locations-service-card-link-2'); ?>">
        <div class="card h-100">
          <div class="card-body">
            <img src="<?php echo get_template_directory_uri(); ?>/images/plumbing-fixtures.svg" alt="" />
            <h5 class="card-title">Drain Cleaning</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="service-card col-12 col-md-6 col-lg-3">
      <a href="<?php the_field('locations-service-card-link-3'); ?>">
        <div class="card h-100">
          <div class="card-body">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sewer-camera.svg" alt="" />
            <h5 class="card-title">Slab Leaks</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="service-card col-12 col-md-6 col-lg-3">
      <a href="<?php the_field('locations-service-card-link-3'); ?>">
        <div class="card h-100">
          <div class="card-body">
            <img src="<?php echo get_template_directory_uri(); ?>/images/water-heaters.svg" alt="" />
            <h5 class="card-title">Water Heaters</h5>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
</section>
<!-- end service cards -->