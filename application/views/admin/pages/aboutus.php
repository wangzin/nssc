<section class="content-header">
  <h1>
    Home
    <small>Customize About Us</small>
  </h1>
</section>
<section class="content">
  	<div class="box box-primary">
    	<div class="box-header with-border">
      		<h3 class="box-title">Updating About us Information</h3>
    	</div>
	    <div class="box-body">
	      	<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'aboutUsform'));?>
	      		<div class="row">
		          	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		          		<div class="form-group">
			              	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		              		 	<label>Title:</label>
              					<input type="text" id="Title" name="Title" value="<?=$aboutUsDetails->Title;?>" class="form-control">
			              	</div>
			              	
			          	</div>
			          	<!-- <div class="form-group">
			          		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			              		<a href="<?php echo base_url();?>uploads/<?=$aboutUsDetails->Image;?>" target="_blank">
			                  		<img src="<?php echo base_url();?>uploads/<?=$aboutUsDetails->Image;?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100" align="left"> 
			                  	</a>
			                  	<br /><br />
			              		<label>Page Image:<span class="text-danger">*</span></label>
		                  		<input type="file" id="pageimage" onclick="remove_err('pageimage_err')" name="pageimage" class="form-control"  onchange="checkfilesize(this,'pageimage','pageimage_err','udpatebtn')">
		                  		<span id="pageimage_err" class="text-danger"></span>
			              	</div>
			          	</div> -->
                   <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Details:</label>
                        <textarea id="Description" name="Description" class="form-control summernote">
                            <?=$aboutUsDetails->Description;?>
                          </textarea>
                      </div>
                  </div>
			          	<div class="form-group">
			          		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		              		 	<label>From Program Director’s Desk:</label>
              					<textarea id="DirectorMsg" name="DirectorMsg" class="form-control summernote">
			                    	<?=$aboutUsDetails->DirectorMsg;?>
			                  	</textarea>
			              	</div>
			          	</div>
                 
			          	<input type="hidden" name="actiontype" value="general">
	          			<input type="hidden" name="currentaboutimage" id="currentaboutimage" value="<?=$aboutUsDetails->Image;?>">
			          	<div class="form-group">
			          		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			          			<button class="btn btn-primary" onclick="UpdateAbout()" id="udpatebtn" type="button"> <i class="fa fa-update"></i> Update Details</button>
			          		</div>
			          	</div>
	          		</div>
	          	</div>
          	</form>
          	<hr />
          	<div class="box box-primary">
			    <div class="box-header with-border">
			      <h3 class="box-title">Staff Details</h3>
			      <span><button class="btn btn-primary fa-pull-right" onclick="addstaff()" type="button"> <i class="fa fa-plus"></i> Add More</button></span>
			    </div>
			    <div class="box-body">
			    	<div class="row">
			          	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
			          		<table id="sliderDetails" class="table table-bordered table-striped">
					            <thead>
					              <tr>
					                <th>Sl No#</th>
					                <th>Department</th>
					                <th>Name</th>
					                <th>Image</th>
					                <th>Designation</th>
					                <th>Email</th>
					                <th>Action</th>
					              </tr>
					            </thead>
					            <tbody>
				            	 	<?php foreach($staffList as $i=> $staff): ?>
					                <tr>
					                  <td><?=$i+1?></td>
					                  <td> <?php echo $staff['Department'];?> </td>
					                  <td> <?php echo $staff['Full_Name'];?> </td>
					                  <td>  	
					                  	<a href="<?php echo base_url();?>uploads/staff/<?php echo$staff['Image_Path'];?>" target="_blank">
					                  		<img src="<?php echo base_url();?>uploads/staff/<?php echo$staff['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100" align="left"> 
					                  	</a>
				                  	  </td>
					                  <td> <?php echo $staff['Designation'];?> </td>
					                  <td> <?php echo $staff['Email_Id'];?> </td>
					                  <td>
				                  	 	<button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $staff['Id']?>','<?php echo $staff['Department']?>','<?php echo $staff['Full_Name']?>','<?php echo $staff['Designation'];?>','<?php echo $staff['Email_Id'];?>','<?php echo$staff['Image_Path'];?>')"><i class="fa fa-edit"></i>Edit</button>
				                  	 	<button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $staff['Full_Name']?>','<?php echo $staff['Id']?>','<?php echo$staff['Image_Path'];?>')"><i class="fa fa-times"></i>Delete</button>
					                  </td>
					              	</tr>
					               	<?php endforeach; ?>
					            </tbody>
					        </table>
			          	</div>
		          	</div>
			    </div>
			</div>
      	</div>
  	</div>
</section>
<div class="modal modal-default" id="addstaffDetails">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title"><span id="medelheaderspan"></span></h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Department: <span class="text-danger">*</span></label>
				                  	<select id="Department" onclick="remove_err('Department_err')" name="Department" class="form-control">
				                  		<option value="">Select</option>
				                  		<option value="Admin & Accounts">Admin & Accounts</option>
				                  		<option value="Soil Survey Unit">Soil Survey Unit</option>
				                  		<option value="Soil Microbiology Unit">Soil Microbiology Unit</option>
				                  		<option value="Soil Fertility Unit">Soil Fertility Unit</option>
				                  		<option value="Land Management Unit">Land Management Unit</option>
				                  		<option value="Soil & Plant Analytical Lab Unit">Soil & Plant Analytical Lab Unit</option>
				                  	</select>
				                  	<span id="Department_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Full Name: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Full_Name" onclick="remove_err('Full_Name_err')" name="Full_Name" class="form-control">
				                  	<span id="Full_Name_err" class="text-danger"></span>
				                </div> 
				            </div>
				            <div class="form-group">
				            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Designation: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Designation" onclick="remove_err('Designation_err')" name="Designation" class="form-control">
				                  	<span id="Designation_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Email: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Email_Id" onclick="remove_err('Email_Id_err')" name="Email_Id" class="form-control">
				                  	<span id="Email_Id_err" class="text-danger"></span>
				                </div>				            	
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                  	<label>Images</label>
				                  	<input type="file" id="images" onchange="checkfilesize(this,'images','images_err','addBtn')" onclick="remove_err('images_err')" name="passImage" class="form-control">
				                  	<span id="images_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                	<span id="imageappend"></span>
				                </div>
				                
				            </div>
				           
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="actiontype" id="actiontype">
				                	<input type="hidden" name="currentimage" id="currentimage">
				                	<input type="hidden" name="recordid" id="recordid">
				                	<button class="btn btn-success" id="addBtn" type="button" onclick="addDetails()"> <span id="btnspan"></span> </button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
      		</div>
      	</div>
  	</div>
</div>
<div class="modal modal-danger" id="deletemenu">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Confirmation</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('##' , array('class' => 'form-horizontal validatable','id'=>'deleteformId', 'enctype' => 'multipart/form-data'));?>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label>Are you sure you want to delete <span id="menuNameId"></span> ? </label>
              <input type="hidden" name="deletemenuId" id="deletemenuId">
              <input type="hidden" name="imageId" id="imageId">
              <input type="hidden" name="actiontype" value="delete">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">
          <i class="fa fa-times"></i> No</button>
        <button type="button" id="savebtn" class="btn btn-primary" onclick="deletemenu()"> <i class="fa fa-check"></i>Yes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('.summernote').summernote({
      height:250
    });
  $(function () {
      $('#sliderDetails').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
    });
  function UpdateAbout(){
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
  	var url='<?php echo base_url();?>index.php?adminController/loadPage/aboutus';
  	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#aboutUsform").serialize()}; 
  	$("#aboutUsform").ajaxSubmit(options);
  	setTimeout($.unblockUI, 600); 
  }
  function addstaff(){
  	$('#actiontype').val('add');
  	$('#medelheaderspan').html('New Staff Details');
  	$('#btnspan').html('<i class="fa fa-save"></i> Add Details');
  	$('#addstaffDetails').modal('show');
  }
  function editdetials(id,department,name,designation,email,image){
  	var imgurl='<?php echo base_url();?>uploads/staff/'+image;
  	$('#actiontype').val('editdetails');
  	$('#recordid').val(id);
  	$('#Department').val(department);
  	$('#Full_Name').val(name);
  	$('#Designation').val(designation);
  	$('#Email_Id').val(email);
  	$('#currentimage').val(image);
  	$('#imageappend').html('<img src="'+imgurl+'" alt="No Image" onerror="this.src="<?php echo base_url();?>uploads/user.png" width="100" align="left">');  	
  	$('#medelheaderspan').html('Edit Staff Details');
  	$('#btnspan').html('<i class="fa fa-edit"></i> Update Details');
  	$('#addstaffDetails').modal('show');
  }
  function addDetails(){
  	if(validateaddform()){
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
      	var url='<?php echo base_url();?>index.php?adminController/loadPage/aboutus';
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
      	$("#addformId").ajaxSubmit(options);
      	setTimeout($.unblockUI, 600); 
      	$('#addstaffDetails').modal('hide');
	}
  }
  function validateaddform(){
  	var retrtype=true;
  	if($('#Department').val()==""){
  		$('#Department_err').html('Please select department');
  		retrtype=false;
  	}
  	if($('#Full_Name').val()==""){
  		$('#Full_Name_err').html('Please mention name of person');
  		retrtype=false;
  	}
  	if($('#Designation').val()==""){
  		$('#Designation_err').html('Please mention his/her designation');
  		retrtype=false;
  	}
  	if($('#Email_Id').val()==""){
  		$('#Email_Id_err').html('Please mention his/her email');
  		retrtype=false;
  	}
  	return retrtype;
  }
  function showdeleteslider(name,id,imageId){
  	$('#menuNameId').html(name);
  	$('#deletemenuId').val(id);
  	$('#imageId').val(imageId);
  	$('#deletemenu').modal('show');
  }
  function deletemenu(){
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
  	var url='<?php echo base_url();?>index.php?adminController/loadPage/aboutus';
  	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deleteformId").serialize()}; 
  	$("#deleteformId").ajaxSubmit(options);
  	setTimeout($.unblockUI, 600); 
  	$('#deletemenu').modal('hide');
  }
</script>	