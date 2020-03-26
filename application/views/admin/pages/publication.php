<section class="content-header">
  <h1>
    Home
    <small>Publication & Reports</small>
  </h1>
</section>
<section class="content">
  	<div class="box box-primary">
    	<div class="box-header with-border">
      		<h3 class="box-title">Updating Publication & Reports</h3>
    	</div>
	    <div class="box-body">
	    	<div class="box-header with-border">
		      	<span><button class="btn btn-primary fa-pull-right" onclick="addstaff()" type="button"> <i class="fa fa-plus"></i> Add More</button></span>
		    </div>
		    <div class="box-body">
		    	<div class="row">
		          	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
		          		<table id="sliderDetails" class="table table-bordered table-striped">
				            <thead>
				              <tr>
				                <th>Sl No#</th>
				                <th>Type</th>
				                <th>Name</th>
				                <th>Image</th>
				                <th>Attachment</th>
				                <th>Description</th>
				                <th>Created On</th>
				                <th>Action</th>
				              </tr>
				            </thead>
				            <tbody>
			            	 	<?php foreach($reportList as $i=> $pub): ?>
				                <tr>
				                  <td><?=$i+1?></td>
				                  <td> <?php echo $pub['Type'];?> </td>
				                  <td> <?php echo $pub['Name'];?> </td>
				                  <td>  	
				                  	<a href="<?php echo base_url();?>uploads/reportpublication/<?php echo$pub['Image'];?>" target="_blank">
				                  		<img src="<?php echo base_url();?>uploads/reportpublication/<?php echo$pub['Image'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100" align="left"> 
				                  	</a>
			                  	  </td>
			                  	  <td> <?php echo $pub['References_Link'];?> </td>
				                  <td> <?php echo $pub['Description'];?> </td>
				                  <td> <?php echo $pub['Created_On'];?> </td>
				                  <td>
			                  	 	<button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $pub['Id']?>','<?php echo $pub['Type']?>','<?php echo $pub['Name']?>','<?php echo $pub['Image'];?>','<?php echo $pub['Description'];?>','<?php echo$pub['References_Link'];?>')"><i class="fa fa-edit"></i>Edit</button>
			                  	 	<button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $pub['Id']?>','<?php echo $pub['Name']?>','<?php echo$pub['Image'];?>','<?php echo$pub['References_Link'];?>')"><i class="fa fa-times"></i>Delete</button>
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
				                  	<select id="Department" onclick="remove_err('Department_err')" name="Type" class="form-control">
				                  		<option value="">Select</option>
				                  		<option value="Publication">Publication</option>
				                  		<option value="Report">Report</option>
				                  		<option value="Brochures">Brochures</option>
				                  		<option value="Sustainable">Sustainable</option>
				                  		<option value="Technical Soil Survey Report">Technical Soil Survey Report</option>
				                  		<option value="Technical Soil Fertility Report">Technical Soil Fertility Report</option>
				                  		<option value="Technical General Report">Technical General Report</option>
				                  	</select>
				                  	<span id="Department_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Name: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Full_Name" onclick="remove_err('Full_Name_err')" name="Name" class="form-control">
				                  	<span id="Full_Name_err" class="text-danger"></span>
				                </div> 
				            </div>
				            <div class="form-group">
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                	<label>Description: <span class="text-danger">*</span></label>
				                	<textarea id="Designation" onclick="remove_err('Designation_err')" name="Description" class="form-control"></textarea>
				                  	<span id="Designation_err" class="text-danger"></span>
				                </div>
				                			            	
				            </div>
				            <div class="form-group">
				            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<span id="currentimage"></span><br />
				                	<label>Images</label>
				                  	<input type="file" id="images" onchange="checkfilesize(this,'images','images_err','addBtn')" onclick="remove_err('images_err')" name="Image" class="form-control">
				                  	<span id="images_err" class="text-danger"></span>
				                	
				                </div>	
				                <div class="col-xs-12 -sm-12 col-md-6 col-lg-6">
				                	<span id="currentatcoltachment"></span><br />
				                  	<label>Arrachment:</label>
				                  	<input type="file" id="References_Link" onclick="remove_err('attachment_err')" name="References_Link" class="form-control">
				                  	<span id="attachment_err" class="text-danger"></span>
				                </div>
				                <span id="createddate"></span>
				            </div>				           
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="actiontype" id="actiontype">
				                	<input type="hidden" name="currentimageid" id="currentimageid">
				                	<input type="hidden" name="currentattachmentid" id="currentattachmentid">
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
              <input type="hidden" name="attachmentdelId" id="attachmentdelId">
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
	function addstaff(){
	  	$('#actiontype').val('add');
	  	$('#medelheaderspan').html('New Details');
	  	$('#btnspan').html('<i class="fa fa-save"></i> Add Details');
	  	$('#addstaffDetails').modal('show');
  	}
  	function editdetials(id,type,name,image,description,attachment){
	  	var imgurl='<?php echo base_url();?>uploads/reportpublication/'+image;
	  	$('#actiontype').val('editdetails');
	  	$('#recordid').val(id);
	  	$('#Department').val(type);
	  	$('#Full_Name').val(name);
	  	$('#Designation').val(description);
	  	$('#currentimageid').val(image);
	  	$('#currentattachmentid').val(attachment);
	  	$('#currentatcoltachment').html(attachment);
	  	$('#currentimage').html('<img src="'+imgurl+'" alt="No Image" onerror="this.src="<?php echo base_url();?>uploads/user.png" width="100" align="left">');  	
	  	$('#medelheaderspan').html('Edit Details');
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
	      	var url='<?php echo base_url();?>index.php?adminController/loadPage/publication';
	      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
	      	$("#addformId").ajaxSubmit(options);
	      	setTimeout($.unblockUI, 600); 
	      	$('#addstaffDetails').modal('hide');
		}
  	}
  	function validateaddform(){
	  	var retrtype=true;
	  	if($('#Department').val()==""){
	  		$('#Department_err').html('Please select type');
	  		retrtype=false;
	  	}
	  	if($('#Full_Name').val()==""){
	  		$('#Full_Name_err').html('Please mention name/title');
	  		retrtype=false;
	  	}
	  	if($('#Designation').val()==""){
	  		$('#Designation_err').html('Please mention its description');
	  		retrtype=false;
	  	}
	  	return retrtype;
  	}
  	function showdeleteslider(id,name,imageId,attachment){
  		$('#deletemenuId').val(id);
	  	$('#menuNameId').html(name);
	  	$('#imageId').val(imageId);
	  	$('#attachmentdelId').val(attachment);
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
  	var url='<?php echo base_url();?>index.php?adminController/loadPage/publication';
  	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deleteformId").serialize()}; 
  	$("#deleteformId").ajaxSubmit(options);
  	setTimeout($.unblockUI, 600); 
  	$('#deletemenu').modal('hide');
  }
</script>