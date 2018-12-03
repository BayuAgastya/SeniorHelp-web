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

<section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Services</h2>
        <p class="separator">Please select services that you need</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <?php foreach ($services as $service){ ?>  
        <div class="col-md-6 col-lg-3">
            <a href="<?php echo base_url('costumer/service_add/' .$service->id_service); ?>" style="text-decoration: none;">
            <div class="feature-block">
              <img src="<?php echo base_url() ?>assets/img/svg/paint-palette.svg" alt="img" class="img-fluid">
              <h4><?php echo $service->service ?></h4>
              <p><?php echo $service->describe ?></p>
            </div>
            </a>
        </div>
        <?php } ?>
      </div>
    </div>
</section>
</div>