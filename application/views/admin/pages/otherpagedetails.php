<section class="content-header">
  	<h1>
	    Home
	    <small>Page Details</small>
  	</h1>
</section>
<section class="content">
	<div class="callout callout-info">
        <h4>Tip!</h4>
        <ol>
        	<li><b>Add New Pages if you have by clicking on </b>Add New button</li>
        	<li>You can edit and delete them at any time</li>
        </ol>
  	</div>
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Manage other pages </h3>
	      <span><button class="btn btn-primary fa-pull-right" onclick="addnewpage()" type="button"> <i class="fa fa-plus"></i> Add New</button></span>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered table-striped">
			            <thead>
			              <tr>
			                <th>Sl No#</th>
			                <th>Name</th>
			                <th>Page Type</th>
			                <!-- <th>Description</th> -->
			                <th>Image</th>
			                <th>Attachment</th>
			                <th>Last Update Date</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($otherpageList as $i=> $page): ?>
			                <tr>
			                  	<td><?=$i+1?></td>
			                  	<td> <?php echo $page['Name'];?> </td>
			                  	<td> <?php echo $page['Type'];?> </td>
			                  	<!-- <td> <?php echo $page['Description'];?> </td> -->
		                 		<td>  	
				                  	<a href="<?php echo base_url();?>uploads/otherPageImages/<?php echo$page['Image'];?>" target="_blank">
				                  		<img src="<?php echo base_url();?>uploads/otherPageImages/<?php echo$page['Image'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100" align="left"> 
				                  	</a>
		                  	  	</td>
		                  	  	<td> 
		                  	  		<a href="<?php echo base_url();?>uploads/otherpagereferences/<?php echo$page['References_Link'];?>" target="_blank">
		                  	  			<?php echo $page['References_Link'];?> 
		                  	  		</a>
	                  	  		</td>
			                  <td> <?php echo $page['Created_On'];?> </td>
			                  <td>
			                  	 <button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $page['Id']?>')"><i class="fa fa-edit"></i>Edit</button>
			                  	 <button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $page['Name']?>','<?php echo $page['Id']?>','<?php echo $page['References_Link']?>','<?php echo $page['Image']?>')"><i class="fa fa-times"></i>Delete</button>
			                  </td>
			              	</tr>
			               	<?php endforeach; ?>
			            </tbody>
			        </table>
			    </div>
			</div>
		</div>
	</div>
</section>
<div class="modal modal-default" id="addpagemodelId">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">New Details</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addsliderformId', 'enctype' => 'multipart/form-data'));?>
      				<input type="hidden" name="actiontype" id="actiontype">
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Page Type: <span class="text-danger">*</span></label>
				                  	<select id="Event_Type" onclick="remove_err('Event_Type_err')" name="Type" class="form-control">
				                  		<option value="">Select</option>
				                  		<option value="Soil Management Info">Soil Management Info</option>
				                  		<option value="Tender">Tender</option>
				                  		<option value="Others">Others</option>
				                  	</select>
				                  	<span id="Event_Type_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Name: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Event_Name" onclick="remove_err('Event_Name_err')" name="Name" class="form-control">
				                  	<span id="Event_Name_err" class="text-danger"></span>
				                </div> 
				            </div>
				            
			             	<div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                  	<label>Details: <span class="text-danger">*</span></label>
				                  	<textarea id="Event_Details" onclick="remove_err('Event_Details_err')" name="Description" class="form-control summernote"></textarea>
				                  	<span id="Event_Details_err" class="text-danger"></span>
				                </div>
				            </div>
				            
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Images</label>
				                  	<input type="file" id="images" onchange="checkfilesize(this,'images','images_err','addBtn')" onclick="remove_err('images_err')" name="Image" class="form-control">
				                  	<span id="images_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Attachment</label>
				                  	<input type="file" id="References_Link" name="References_Link" class="form-control">
				                </div>
				            </div>
				           
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<button class="btn btn-success" id="addBtn" type="button" onclick="addpageDetails()"> <i class="fa fa-save"></i> Add Details</button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
      		</div>
      	</div>
  	</div>
</div>

<div class="modal modal-default" id="deleteSlider">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Delete Slider</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'deletesliderformId', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                  	Are you sure you want to delete <b><span id="sliderName"></span></b>?
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="deleteId" id="deleteId">
				                	<input type="hidden" name="actiontype" id="actiontypedel">
				                	<input type="hidden" name="imageId" id="imageId">
				                	<input type="hidden" name="attachmentdelId" id="attachmentdelId">
				                	<button class="btn btn-success" type="button" onclick="deleteslider()"> <i class="fa fa-times"></i>Delete</button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
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
	function addnewpage(){
		$('#actiontype').val('add');
		$('#addpagemodelId').modal('show');
	}
	
 	function addpageDetails(){
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
	      var url='<?php echo base_url();?>index.php?adminController/loadPage/otherpagedetails/';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addsliderformId").serialize()}; 
	      $("#addsliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#addpagemodelId').modal('hide');
  		}
  	}
  	function validateaddform(){
  		var retval=true;
  		if($('#Event_Type').val()==""){
  			$('#Event_Type_err').html('Please select page type');
  			retval=false;
  		}
  		if($('#Event_Name').val()==""){
  			$('#Event_Name_err').html('page name is required');
  			retval=false;
  		}
  		
  		if($('#Event_Description').val()==""){
  			$('#Event_Description_err').html('Description is required');
  			retval=false;
  		}
  		
  		return retval;  
  	}
  	function editdetials(id){
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
      	var url='<?php echo base_url();?>index.php?adminController/loadPage/editotherpage/'+id;
	    $("#mainContentdiv").load(url);
	     setTimeout($.unblockUI, 1000);
  	}
  	function showdeleteslider(name,id,attachmentId,imageId){
  		$('#deleteId').val(id);
  		$('#sliderName').html(name);
  		$('#actiontypedel').val('delete');
  		$('#attachmentdelId').val(attachmentId);
  		$('#imageId').val(imageId);
  		$('#deleteSlider').modal('show');
  	}
  	function deleteslider(){
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
	      var url='<?php echo base_url();?>index.php?adminController/loadPage/otherpagedetails/';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deletesliderformId").serialize()}; 
	      $("#deletesliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#deleteSlider').modal('hide');
  	}
  	
 
</script>
  	
