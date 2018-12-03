<header id="header" class="header header-hide">
  <div class="container">
    <div id="logo" class="pull-left">
      <h1><a href="<?php echo base_url() ?>" class="scrollto"><span>Senior</span>HELP</a></h1>
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="<?php echo base_url('costumer') ?>#hero">Home</a></li>
        <li class="menu-active"><a href="<?php echo base_url('costumer/service'); ?>">Service</a></li>
        <li><a href="<?php echo base_url('costumer') ?>#about-us">About</a></li>
        <li><a href="<?php echo base_url('costumer') ?>#contact">Contact</a></li>
        <li class="menu-has-children"><a><?php echo $this->session->userdata('name'); ?></a>
          <ul>
            <li><a href="#">My Profile</a></li>
            <li><a href="<?php echo base_url('costumer/request_list') ?>">My Service Request</a></li>
            <li><a href="<?php echo base_url('costumer/logout') ?>">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>

<section id="contact" class="padd-section wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo $services['service']; ?></h2>
      <p class="separator"><?php echo $services['describe']; ?></p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8">
        <form action="<?php echo base_url('costumer/add_request'); ?>" method="post" class="form">
          <div class="form-group">
            <input type="hidden" name="id_service" value="<?php echo $services['id_service']; ?>">
            <input type="date" name="required_date" class="form-control" id="name" placeholder="Your Name" data-rule="required" data-msg="Please enter date" value="<?php echo date('Y-m-d'); ?>" />
            <div class="validation"></div><br>
          <div class="form-group">
            <textarea class="form-control" name="notes" rows="5" placeholder="Add Notes"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>
      </div>
    </div>
  </div>
</section>