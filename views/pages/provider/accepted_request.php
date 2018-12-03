<div class="wrapper">
	<div class="sidebar" data-background-color="black" data-active-color="sucess">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url('provider') ?>" class="simple-text">
                    SeniorHELP
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('provider') ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Request List</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('provider/accepted_request') ?>">
                        <i class="ti-user"></i>
                        <p>Accepted Request</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Request List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification"><?php echo $count_notifications; ?></p>
									<p> New Requests</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <?php foreach($notifications as $notification){ ?>
                                <li><a href="<?php echo base_url('provider') ?>"><?php echo $notification->name.' - '.$notification->service; ?></a></li>
                                 <?php } ?>
                                <li><a href="<?php echo base_url('provider') ?>">See More..</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="<?php echo base_url('provider/logout'); ?>">
								<i class="ti-settings"></i>
								<p>Log Out</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">In Progress Request</h4>
                                <p class="category">Here is all in progress request</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Service</th>
                                        <th>Notes</th>
                                    	<th>Date Request</th>
                                    	<th>Name</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;foreach($requests as $request){ ?>
                                            <tr>
                                            	<td><?php echo $i; ?></td>
                                            	<td><?php echo $request->service; ?></td>
                                            	<td><?php echo $request->notes; ?></td>
                                            	<td><?php echo $request->required_date; ?></td>
                                            	<td><?php echo $request->name; ?></td>
                                                <td><a href="<?php echo base_url('provider/complete_request/'.$request->id_request); ?>" class="btn btn-sm btn-success btn-icon"><i class="fa ti-check"></i></a></td>
                                            </tr>
                                    <?php $i++;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php 
                    if($cek==1){
                    ?>

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Completed Request</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Service</th>
                                        <th>Notes</th>
                                        <th>Date Request</th>
                                        <th>Name</th>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;foreach($completes as $request){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $request->service; ?></td>
                                                <td><?php echo $request->notes; ?></td>
                                                <td><?php echo $request->required_date; ?></td>
                                                <td><?php echo $request->name; ?></td>
                                            </tr>
                                    <?php $i++;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>