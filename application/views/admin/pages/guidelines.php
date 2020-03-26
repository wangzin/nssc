<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$generalinfo->Site_Name;?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?php echo base_url();?>uploads/logo/<?=$generalinfo->Site_Logo_Initial;?>" type="image/x-icon" />  
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper">
		    <section class="content-header">
		      <h1>
		        Guideline
		        <small><?=$type;?></small>
		      </h1>
		    </section>
	     	<section class="content">
		      	<div class="row">
			        <div class="col-md-12">
			          	<ul class="timeline">
				            <li class="time-label">
				                  <span class="bg-red">
				                    <?=$generalinfo->Site_Name;?>
				                  </span>
				            </li>
			            	<li>
			              		<i class="fa fa-level-up bg-blue"></i>
				              	<div class="timeline-item">
					                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
					                <h3 class="timeline-header"><a href="#">Guideline to add location map</a> sent you an email</h3>
					                <div class="timeline-body">
					                	<a class="btn btn-primary btn-xs" >Please follow bellow steps to update your location map</a>
					                	<ol>
					                		<li>Visit : <a href="https://www.google.com/maps" target="_blank">Google map</a> </li>
					                		<li>Search your location in the map if you have already registered your office location in google map. Other wise you need to register or submit your location to google map.</li>
					                		<li>After locating your location, then click on the share link.</li>
					                		<li>From there you need to select/choose Embaded a map. There you will find then iframe link.</li>
					                		<li>copy that link and past</li>

					                		<li>If you have not registered your location, then you can add your location. To add, you need to click on the menu bar from the same link, scroll down and find the link called <a href="https://www.google.com/maps/dir/27.4432,89.653248//@27.4518971,89.6596508,17z/data=!4m5!4m4!1m1!4e1!1m0!3e2!10m2!1e2!2e13" target="_blank"><b>Add a missing place</b></a></li>
					                		<li>From there you can submit your location</li>	
					                	</ol>
					                </div>
					                
				              	</div>
			            	</li>
			        	</ul>
			    	</div>
				</div>
			</section>
		</div>
		  
	</div>
</body>
<script src="<?php echo base_url();?>assest/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
</html>
