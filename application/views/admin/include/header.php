
<header class="main-header">
    <a href="<?php echo base_url();?>index.php?adminController/dashboard" class="logo">
      <span class="logo-mini"><?php echo $sitedetails->Site_Name;?></span>
      <span class="logo-lg"><b><?php echo $sitedetails->Site_Name;?></b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo sizeof($comments);?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><a href="#"  onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/messages/<?php echo $this->session->userdata('userId');?>')">You have <?php echo sizeof($comments);?> messages </a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>uploads/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('Full_Name');?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url();?>uploads/user.png" onerror="this.src='<?php echo base_url();?>uploads/user.png'" class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->userdata('Full_Name');?>
                </p>
              </li>               
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/profile/<?php echo $this->session->userdata('userId');?>')" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#modal-logout">Sign out</a>
                </div>
              </li>
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/password/<?php echo $this->session->userdata('userId');?>')">Change Password</a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="modal fade" id="modal-logout">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Sign Out</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to logout ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <a href="<?php echo base_url();?>index.php?adminController/logout"> <button type="button"  class="btn btn-primary">Yes</button></a>
        </div>
      </div>
    </div>
  </div>
