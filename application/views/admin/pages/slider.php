<section class="content-header">
  	<h1>
	    Home
	    <small>Sliders</small>
  	</h1>
</section>
<section class="content">
	<div class="callout callout-info">
        <h4>Tip!</h4>
        <ol>
        	<li><b>Add New Slider</b> button below will allow you to add more Sliders</li>
        	<li>You can edit and delete them at any time</li>
        </ol>
  	</div>
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Manage Sliders</h3>
	      <span><button class="btn btn-primary fa-pull-right" onclick="addslider()" type="button"> <i class="fa fa-plus"></i> Add New Slider</button></span>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered table-striped">
			            <thead>
			              <tr>
			                <th>Sl No#</th>
			                <th>Slider Name</th>
			                <th>Description Date</th>
			                <th>Image</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($slider as $i=> $sli): ?>
			                <tr>
			                  <td><?=$i+1?></td>
			                  <td> <?php echo $sli['Slider_Name'];?> </td>
			                  <td> <?php echo $sli['Slider_Description'];?> </td>
			                  <td> <a href="<?php echo base_url();?>uploads/slider/<?php echo$sli['Slider_Image'];?>" target="_blank"><img src="<?php echo base_url();?>uploads/slider/<?php echo$sli['Slider_Image'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100" align="left"></a>
			                  </td>
			                  <td>
			                  	 <button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $sli['Id']?>','<?php echo $sli['Slider_Name']?>','<?php echo $sli['Slider_Description']?>','<?php echo base_url();?>uploads/slider/<?php echo$sli['Slider_Image'];?>','<?php echo$sli['Slider_Image'];?>')"><i class="fa fa-edit"></i>Edit</button>
			                  	 <button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $sli['Slider_Name']?>','<?php echo $sli['Id']?>','<?php echo$sli['Slider_Image'];?>')"><i class="fa fa-times"></i>Delete</button>
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
<div class="modal modal-default" id="addslider">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">New Slider</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('../index.php?adminController/formsubmit/addtourDetails/' , array('class' => 'form-horizontal validatable','id'=>'addsliderformId', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Slider Name: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Slider_Name" onclick="remove_err('Slider_Name_err')" name="Slider_Name" class="form-control">
				                  	<span id="Slider_Name_err" class="text-danger"></span>
				                </div>
				                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                	<label>Image Description</label>
				                	<textarea name="Slider_Description" id="Slider_Description" class="form-control" onclick="remove_err('Slider_Description_err')"></textarea>
				                	<span id="Slider_Description_err" class="text-danger"></span>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                  	<label>Images</label>
				                  	<input type="file" id="Slider_Image" onclick="remove_err('Slider_Images_err')" name="Slider_Image" class="form-control" onchange="checkfilesize(this,'Slider_Image','Slider_Images_err','savebtnss')">
				                  	<span id="Slider_Images_err" class="text-danger"></span>
				                </div>
				            </div>
				           
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<button class="btn btn-success" type="button" id="savebtnss" onclick="addsliderDetails()"> <i class="fa fa-save"></i> Add Details</button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
      		</div>
      	</div>
  	</div>
</div>
<div class="modal modal-default" id="editSlider">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Edit Slider</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('../index.php?adminController/formsubmit/addtourDetails/' , array('class' => 'form-horizontal validatable','id'=>'editsliderformId', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Slider Name: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Slider_Name_edit"  name="Slider_Name_edit" class="form-control">
				                </div>
				                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                	<label>Image Description</label>
				                	<textarea name="Slider_Description_edit" id="Slider_Description_edit" class="form-control"></textarea>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Current Image</label><br />
				                	<span id="loadimage"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Choose Images to change</label>
				                  	<input type="hidden" name="existing_slider_img" id="existing_slider_img">	
				                  	<input type="file" id="Slider_Image_edit" name="Slider_Image_edit" class="form-control" onchange="checkfilesize(this,'Slider_Image_edit','edit_Slider_Images_err','updatebtn')">
				                  	<span id="edit_Slider_Images_err" class="text-danger"></span>
				                </div>
				            </div>
				           
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="updateId" id="updateId">
				                	<button class="btn btn-success" id="updatebtn" type="button" onclick="editsliderDetails()"> <i class="fa fa-save"></i> Edit Details</button>
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
				                	<input type="hidden" name="deleteimageId" id="deleteimageId">
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
	function addslider(){
		$('#addslider').modal('show');
	}
 	function addsliderDetails(){
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
	      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/addSlider';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addsliderformId").serialize()}; 
	      $("#addsliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#addslider').modal('hide');
  		}
  	}
  	function validateaddform(){
  		var retval=true;
  		if($('#Slider_Name').val()==""){
  			$('#Slider_Name_err').html('Slider name is required');
  			retval=false;
  		}
  		if($('#Slider_Description').val()==""){
  			$('#Slider_Description_err').html('Please mention slider description');
  			retval=false;
  		}
  		if($('#Slider_Image').val()==""){
  			$('#Slider_Images_err').html('Pleae choose slider image');
  			retval=false;
  		}
  		return retval;  
  	}
  	function editdetials(id,name,desc,image,imageId){
  		$('#updateId').val(id);
  		$('#Slider_Name_edit').val(name);
  		$('#Slider_Description_edit').val(desc);
  		$('#existing_slider_img').val(imageId);
  		$('#loadimage').html('<img src="'+image+'" alt="no imaged" width="100%" align="left">');
  		$('#editSlider').modal('show');
  	}
  	function editsliderDetails(){
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
	      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/editSlider';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editsliderformId").serialize()}; 
	      $("#editsliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#editSlider').modal('hide');
  	}
  	function showdeleteslider(name,id,image){
  		$('#deleteId').val(id);
  		$('#sliderName').html(name);
  		$('#deleteimageId').val(image);
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
	      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/deleteSlider';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deletesliderformId").serialize()}; 
	      $("#deletesliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#deleteSlider').modal('hide');
  	}
</script>