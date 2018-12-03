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
      <h2>Request List</h2>
      <p class="separator">Table of all your request</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 col-lg-6">
        <table class="table text-center" valign="middle">
          <tr>
            <th>Service</th>
            <th>Notes</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php foreach($requests as $request){ ?>
          <tr>
            <td><?php echo $request->service ?></td>
            <td><?php echo $request->notes ?></td>
            <?php 
              if($request->status == 0){
                echo '
                <td><font color=red>Waiting</font></td>
                <td><a class="btn btn-danger" href='.base_url('costumer/delete_request/'.$request->id_request).'>Delete</a></td>';
              }elseif($request->status == 1){
                echo '<td><font color=yellow>Progress</font></td>
                <td></td>';
              }else{
                echo '<td><font color=green>Success</font></td>
                <td><a class="btn btn-success" href='.base_url('costumer/review/'.$request->id_request).'>Review</a></td>';
              } 
            ?>
            <td></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</section>