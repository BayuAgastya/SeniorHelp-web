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
        <li class="menu-active"><a href="#">Log in</a></li>
      </ul>
    </nav>
  </div>
</header>

<section id="contact" class="padd-section wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>Login</h2>
      <p class="separator">To access our system, please enter your username and password</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-4">
        <form action="<?php echo base_url('main/login_action'); ?>" method="post" class="form">
            <div class="form-group">
              <input type="text" name="username" class="form-control" id="name" placeholder="Username" data-rule="minlen:4" data-msg="Please enter a valid username" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="name" placeholder="Password" data-rule="minlen:4" data-msg="Please enter a valid password" />
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Login</button></div>
          </form>
          <br>
          <center>
            <p class="separator">Don't have account? <a class="" href="<?php echo base_url('register') ?>">Click Here</a></p>
          </center>
      </div>
    </div>
  </div>
</section>