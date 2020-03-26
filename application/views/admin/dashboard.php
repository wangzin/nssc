<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('admin/include/css.php'); ?> 
    <body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
        	<?php $this->load->view('admin/include/header.php'); 
        	 $this->load->view('admin/include/navigation.php');?> 
		 	<div class="content-wrapper">
		 		<div id="mainContentdiv">
		 			<?php if($formSubmit!=""){?>
		 			<?php $this->load->view($page_name.'.php');?> 
			 		<?php }else{?>
			 			<section class="content-header">
			    	 	<h1>
						    Home
						    <small>Dashboard</small>
					  	</h1>
				    </section>
			     	<section class="content">
			     		<div class="row">
					        <section class="col-lg-8 connectedSortable">
				        	 	
					        	<div class="box box-success">
						            <div class="box-header">
						              <i class="fa fa-desktop"></i>
						              <h3 class="box-title">Guidelines</h3>
						            </div>
						            <div class="box-body chat" id="">
						            	<ul class="timeline">
								            <li class="time-label">
							                  	<span class="bg-red">
								                   From here you can able to customize your websited details and all others
							                  	</span>
								            </li>
							             	<li>
								              <i class="fa fa-user bg-aqua"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">You can edit your profile name, change password from respective link under your profile section.</h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-envelope-o bg-yellow"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">You will recieve messages from viewers at any time. To check, you need to click on message icon near profile menu at top</h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-laptop bg-blue"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">Change your site name, logo, logo initial, and contact detaials from <b>Website General Setting</b> link</h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-navicon bg-success"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">You can add, edit and delete menus and submenus. To do that, please click on  <b>Menus and Sub menus</b> link</h3>
								              </div>
								            </li>
								            
								        </ul>
						            </div>
						            <div class="box-footer">
						              
						            </div>
					          	</div>
					        </section>
					        <section class="col-lg-4 connectedSortable">
					        	<div class="box box-solid bg-green-gradient">
						            <div class="box-header">
						              <i class="fa fa-calendar"></i>
						              <h3 class="box-title">Calendar</h3>
						              <div class="pull-right box-tools">
						                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
						                </button>
						                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
						                </button>
						              </div>
						            </div>
						            <div class="box-body no-padding">
						              <div id="calendar" style="width: 100%">
						              	
						              </div>
						            </div>
						            <marquee>The application is build with Love by e-bhutan</marquee>
						          </div>
					        </section>
					    </div>
			     	</section>
			 		<?php }?>
				    
		     	</div>
			</div>
	        <?php $this->load->view('admin/include/footer.php'); ?> 
        </div> 
	</body>
</html> 

