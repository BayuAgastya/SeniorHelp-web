<header id="header" class="header header-hide">
  <div class="container">
    <div id="logo" class="pull-left">
      <h1><a href="<?php echo base_url() ?>" class="scrollto"><span>Senior</span>HELP</a></h1>
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="<?php echo base_url('costumer') ?>#hero">Home</a></li>
        <li><a href="<?php echo base_url('costumer/service'); ?>">Service</a></li>
        <li><a href="<?php echo base_url('costumer') ?>#about-us">About</a></li>
        <li><a href="<?php echo base_url('costumer') ?>#contact">Contact</a></li>
        <li class="menu-active" class="menu-has-children"><a><?php echo $this->session->userdata('name'); ?></a>
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
      <h2>Services Review</h2>
      <p class="separator">Thank you for your kindness, please fill this form</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8">
        <form action="<?php echo base_url('costumer/review_action'); ?>" method="post" class="form">
          <div class="form-group">
            <select name="person" class="form-control">
                <?php 
                  for($i=1;$i<=5;$i++){
                    if($i<2){
                      echo '<option value='.$i.'>'.$i.' Star</option>';
                    }else{
                      echo '<option value='.$i.'>'.$i.' Stars</option>';
                    }
                  }
                ?>
            </select>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="comment" rows="5" data-rule="required" data-msg="Please enter your true address" placeholder="Address"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>
      </div>
    </div>
  </div>
</section>