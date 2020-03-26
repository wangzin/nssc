<section class="content-header">
  <h1>
    Home
    <small>Website General Setting</small>
  </h1>
</section>
<section class="content">
  	<div class="box box-primary">
    	<div class="box-header with-border">
      		<h3 class="box-title">Updating General Information</h3>
    	</div>
	    <div class="box-body">
	      	<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'generalInformation'));?>
	      		<div class="row">
		          	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	          		 	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Site Name:</label>
              					<input type="text" id="Site_Name" name="Site_Name" value="<?=$generalinfo->Site_Name;?>" class="form-control">
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Contact Number:</label>
              					<input type="text" id="Contact_Number" name="Contact_Number" value="<?=$generalinfo->Site_Contact;?>" class="form-control">
			              	</div>
			          	</div>
			          	<!-- <div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Email Address:</label>
              					<input type="text" id="Contact_Email" name="Contact_Email" value="<?=$generalinfo->Site_Email;?>" class="form-control">
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Location Address:</label>
		              		 	<textarea name="Contact_Location_Address" id="Contact_Location_Address" class="form-control"><?=$generalinfo->Site_Location_Address;?></textarea>
			              	</div>
			          	</div> -->
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Face Book Link:</label>
              					<input type="text" id="Contact_Face_Book" name="Contact_Face_Book" value="<?=$generalinfo->Site_Face_Book;?>" class="form-control">
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Location Map Address: <a href="<?php echo base_url();?>index.php?adminController/loadPage/guidelines/map" target="_blank">Click here to get help ?</a></label>
		              		 	<textarea id="Contact_Location_Map" name="Contact_Location_Map" class="form-control">
		              		 		<?=$generalinfo->Site_Location_Map;?>
		              		 	</textarea>
			              	</div>
			          	</div>
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Instegram Link:</label>
              					<input type="text" id="Contact_Instegram" name="Contact_Instegram" value="<?=$generalinfo->Site_Instagram;?>" class="form-control">
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Twitter:</label>
              					<input type="text" id="Contact_Twitter" name="Contact_Twitter" value="<?=$generalinfo->Site_Twitter;?>" class="form-control">
			              	</div>
			          	</div>
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Fax Number:</label>
              					<input type="text" id="Site_Fax" name="Site_Fax" value="<?=$generalinfo->Site_Fax;?>" class="form-control">
			              	</div>
			              <!-- 	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Movable words:</label>
		              		 	<textarea id="Site_Marquee" name="Site_Marquee" class="form-control">
		              		 		<?=$generalinfo->Site_Marquee;?>
		              		 	</textarea>
			              	</div> -->
		              	</div>	
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			              		<div class="form-group">
					              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					              		<img src="<?php echo base_url();?>uploads/logo/<?=$generalinfo->Site_Logo_Initial;?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="30%" align="left">
              							
					              	</div>
				              	</div>
				              	<div class="form-group">
					              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              		<label>Logo Initial:</label>
					              		<input type="file" id="Logo_Ini_Link" name="Logo_Ini_Link">
		              					Choose image to chane
		              					<input type="hidden" name="currentlogoinivalue" value="<?=$generalinfo->Site_Logo_Initial;?>">
					              	</div>
				              	</div>
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			              		<div class="form-group">
					              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					              		<img src="<?php echo base_url();?>uploads/logo/<?=$generalinfo->Site_Logo;?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="30%" align="left">
					              	</div>
				              	</div>
				              	<div class="form-group">
					              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					              		<label>Header Image:</label>
		              					<input type="file" id="Logo_Link" name="Logo_Link" >
		              					Choose image to chane
		              					<input type="hidden" name="currentlogovalue" value="<?=$generalinfo->Site_Logo;?>">
					              	</div>
				              	</div>
		              		 	
			              	</div>
			          	</div>
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			              		<button type="button" onclick="update('general','generalInformation')" class="btn btn-primary"><span class="fa fa-edit"></span> Update Information</button>
			              	</div>
		              	</div>
		          	</div>
		      	</div>
			</form>
	  	</div>
  	</div>
</section>
<script type="text/javascript">
	 function update(type,formId){
      $.blockUI
        ({ 
          css: 
          { 
                border: 'none', 
                padding: '15px', 
                backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                opacity: .5, 
                color: '#fff' 
          } 
        });
      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/'+type;
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#"+formId).serialize()}; 
      $("#"+formId).ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
</script>