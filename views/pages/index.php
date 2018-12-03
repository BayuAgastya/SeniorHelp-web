<header id="header" class="header header-hide">
  <div class="container">
    <div id="logo" class="pull-left">
      <h1><a href="<?php echo base_url() ?>" class="scrollto"><span>Senior</span>HELP</a></h1>
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="#hero">Home</a></li>
        <li><a href="<?php echo base_url('login'); ?>">Service</a></li>
        <li><a href="#about-us">About</a></li>
        <li><a href="#newsletter">Newsletter</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="<?php echo base_url('login'); ?>">Log in</a></li>
      </ul>
    </nav>
  </div>
</header>
<section id="hero" class="wow fadeIn">
  <div class="hero-container">
    <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
    <img src="<?php echo base_url() ?>assets/img/hero-img.png" alt="Hero Imgs">
    <a href="<?php echo base_url('service') ?>" class="btn-get-started scrollto">Request Now</a>
  </div>
</section><!-- #hero -->

<section id="about-us" class="about-us padd-section wow fadeInUp">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 col-lg-3">
        <img src="<?php echo base_url() ?>assets/img/about-img.png" alt="About">
    </div>
      <div class="col-md-7 col-lg-5">
        <div class="about-content">
          <h1><span>SeniorHELP</span>System Information</h1>
          <p>
          Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <ul class="list-unstyled">
            <li><i class="fa fa-angle-right"></i>Creative Design</li>
            <li><i class="fa fa-angle-right"></i>Retina Ready</li>
            <li><i class="fa fa-angle-right"></i>Easy to Use</li>
            <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
            <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="newsletter" class="newsletter text-center wow fadeInUp">
  <div class="overlay padd-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-6">
          <form class="form-inline" method="POST" action="#">
            <input type="email" class="form-control " placeholder="Email Adress" name="email">
            <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>
          </form>
        </div>
      </div>
      <ul class="list-unstyled">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</section>

  <!--==========================
    Contact Section
  ============================-->
<section id="contact" class="padd-section wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact</h2>
      <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-4">
        <div class="info">
          <div>
            <i class="fa fa-map-marker"></i>
            <p>A108 Adam Street<br>New York, NY 535022</p>
          </div>
          <div class="email">
            <i class="fa fa-envelope"></i>
            <p>info@example.com</p>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <p>+1 5589 55488 55s</p>
          </div>
        </div>
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>