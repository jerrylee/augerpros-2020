<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Header -->
    <header>
      <div class="container-fluid">
        <div class="row top-bar">
          <div class="top-bar__menu col-12 col-sm-6">
            <ul class="top-bar__menu--links">
              <li class="top-bar__menu--link"><a href="#">Videos</a></li>
              <li class="top-bar__menu--link"><a href="http://216.194.173.241/~augerdev/blog/">Blog</a></li>
              <li class="top-bar__menu--link"><a href="http://216.194.173.241/~augerdev/contact-us/">Contact Us</a></li>
              <li class="top-bar__menu--link"><a href="#">Coupons</a></li>
            </ul>
          </div>

          <div class="top-bar__cta col-12 col-sm-6">
            <div class="top-bar__cta--text">
              <span class="cta"> Schedule Your Service! </span>
              <span class="cta-phone">214-206-6580</span>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part('partials/menu'); ?>
      <?php if(is_front_page()){?>      <!-- Banner -->
      <!-- Info Bar -->
      <section class="info-bar">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <p class="text-center">
                At AugerPros Plumbing, the health and safety of our customers is
                our top priority, not only during these concerning times with
                the spread of the COVID-19, but always. Our team is prepared to
                continue doing business as usual while following the CDC
                guidelines to navigate this situation as safely as possible for
                customers and employees.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Info Bar -->
      <section class="banner">
        <div class="container-fluid">
          <div class="row">
            <div class="col p-0">
              <img
                class="img-fluid"
                src="<?php echo get_template_directory_uri(); ?>/images/newsite-van-banner.jpg"
                alt="AugerPros Plumbing"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- End Banner -->
<?php } ?>
    </header>
    <!-- End Header -->
