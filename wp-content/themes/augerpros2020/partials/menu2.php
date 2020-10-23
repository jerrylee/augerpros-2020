 <!-- --- Nav --- -->

      <nav class="header-nav navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/"
          ><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="AugerPros Plumbing" class="logo"
        /></a>
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-toggle="collapse"
          data-target="#main_nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--div class="navbar-collapse collapse" id="main_nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#"> About</a></li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
              >
                Plumbing Services
              </a>
              <ul class="dropdown-menu fade-up">
                <li><a class="dropdown-item" href="#"> Gas Lines</a></li>
                <li><a class="dropdown-item" href="#"> Sewer Lines </a></li>
                <li>
                  <a class="dropdown-item" href="#">Water Heater Services</a>
                </li>
                <li><a class="dropdown-item" href="#">Water Lines</a></li>
                <li><a class="dropdown-item" href="#">Slab Leaks</a></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Water Filtration Systems, Softeners and Descalers</a
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
              >
                Sewer and Drain Services
              </a>
              <ul class="dropdown-menu fade-up">
                <li><a class="dropdown-item" href="#">Clogged Drains</a></li>
                <li>
                  <a class="dropdown-item" href="#"> Commercial Drains </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Sewer Video Camera Inspections</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Sewer System Backups</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reviews</a>
            </li>
          </ul>

          <a class="contact-btn ml-auto" href="#">Contact Us</a>
        </div-->
        <!-- navbar-collapse.// -->
        <div class="navbar-collapse collapse" id="main_nav">
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </nav>
    </div>
      <!-- --- End Nav --- -->