<header id="header" class="header header-hide">
  <div class="container">
    <div id="logo" class="pull-left">
      <h1><a href="<?php echo base_url() ?>" class="scrollto"><span>Senior</span>HELP</a></h1>
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li><a href="<?php echo base_url('login') ?>">Service</a></li>
        <li><a href="<?php echo base_url() ?>#about-us">About</a></li>
        <li><a href="<?php echo base_url() ?>#newsletter">Newsletter</a></li>
        <li><a href="<?php echo base_url() ?>#contact">Contact</a></li>
        <li class="menu-active"><a href="<?php echo base_url('login') ?>">Log in</a></li>
      </ul>
    </nav>
  </div>
</header>

<section id="contact" class="padd-section wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>Register</h2>
      <p class="separator">By having SeniorHELP account, you can request any service from our system</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8">
        <form action="<?php echo base_url('main/register_action'); ?>" method="post" class="form">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" name="username" class="form-control" id="name" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter a valid username" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="name" placeholder="Your Password" data-rule="minlen:4" data-msg="Please enter a valid password" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="Please enter your true address" placeholder="Address"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Register</button></div>
        </form>
      </div>
    </div>
  </div>
</section>