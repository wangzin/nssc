<section class="content-header">
  	<h1>
	    Home
	    <small>News & Announcement</small>
  	</h1>
</section>
<section class="content">
	<div class="callout callout-info">
        <h4>Tip!</h4>
        <ol>
        	<li><b>Add New Event, news and other information if you have by clicking on </b>Add New Event button</li>
        	<li>You can edit and delete them at any time</li>
        </ol>
  	</div>
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Manage Up-comming event, festivals and others</h3>
	      <span><button class="btn btn-primary fa-pull-right" onclick="addslider()" type="button"> <i class="fa fa-plus"></i> Add New Event</button></span>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered table-striped">
			            <thead>
			              <tr>
			                <th>Sl No#</th>
			                <th>Event Name</th>
			                <th>Description</th>
			                <th>Is Posted New</th>
			                <th>Posted Date</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($eventList as $i=> $event): ?>
			                <tr>
			                  <td><?=$i+1?></td>
			                  <td> <?php echo $event['Event_Name'];?> </td>
			                  <td> <?php echo $event['Event_Description'];?> </td>
			                  <td> 
			                  	<?php if($event['New_Status']=="1"){?>
			                  		<img src="./uploads/new-star.gif" alt="img" style="width:50%;">
			                  	<?php } ?> 
			                  </td>
			                  <td> <?php echo $event['Posted_Date'];?> </td>
			                  <td>
			                  	 <button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $event['Id']?>')"><i class="fa fa-edit"></i>Edit</button>
			                  	 <button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $event['Event_Name']?>','<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
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
        		<h4 class="modal-title">New Event Details</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addsliderformId', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<label>Event Type: <span class="text-danger">*</span></label>
				                  	<select id="Event_Type" onclick="remove_err('Event_Type_err')" name="Event_Type" class="form-control">
				                  		<option value="">Select</option>
				                  		<option value="News">News</option>
				                  		<option value="Announcement">Announcement</option>
				                  		<option value="Events">Events</option>
				                  		<option value="Others">Others</option>
				                  	</select>
				                  	<span id="Event_Type_err" class="text-danger"></span>
				                </div>
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<label>Event Name: <span class="text-danger">*</span></label>
				                  	<input type="text" id="Event_Name" onclick="remove_err('Event_Name_err')" name="Event_Name" class="form-control">
				                  	<span id="Event_Name_err" class="text-danger"></span>
				                </div> 
				            </div>
				            <div class="form-group">
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                	<label>Event Description (please mention less then 250 words)</label>
				                	<textarea name="Event_Description" id="Event_Description" class="form-control" onclick="remove_err('Event_Description_err')"></textarea>
				                	<span id="Event_Description_err" class="text-danger"></span>
				                </div>
				            </div>
			             	<div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                  	<label>Event Details: <span class="text-danger">*</span></label>
				                  	<textarea id="Event_Details" onclick="remove_err('Event_Details_err')" name="Event_Details" class="form-control summernote"></textarea>
				                  	<span id="Event_Details_err" class="text-danger"></span>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                  	<label>Event Type: <span class="text-danger">*</span></label>
				                  	<select id="Post_Type" onclick="remove_err('Post_Type_err')" name="Post_Type" class="form-control">
				                  		<option value="1">New</option>
				                  		<option value="0">Old</option>
				                  	</select>
				                  	<span id="Post_Type_err" class="text-danger"></span>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                  	<label>Images</label>
				                  	<input type="file" id="images" onchange="checkfilesize(this,'images','images_err','addBtn')" onclick="remove_err('images_err')" name="Image0" class="form-control">
				                  	<span id="images_err" class="text-danger"></span>
				                </div>
				               <!--  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                	<label>Image Description (please mention less then 250 words)</label>
				                	<textarea id="ImgDescription" name="ImgDescription0" class="form-control"></textarea>
				                </div> -->
				            </div>
				            <span id="addedImages"></span>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                	<span class="text-muted">You can able to add maximum of 5 images</span>
				                	<span class="text-danger" id="filecounterr"></span>
				                	<button class="btn btn-primary fa fa-pull-right" type="button" onclick="AddImages()">Add More Images</button>
				                	<button class="btn btn-dander fa fa-pull-right" type="button" onclick="deleteImage()">Delete Images</button>
				                </div>
				            </div>
				           
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="docCount" id="docCount">
				                	<button class="btn btn-success" id="addBtn" type="button" onclick="addsliderDetails()"> <i class="fa fa-save"></i> Add Details</button>
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
	function addslider(){
		$('#addslider').modal('show');
	}
	var initailcount=0;

  	function AddImages(){

  		if(initailcount<4){
  			initailcount=initailcount+1;
  			var fn ='checkfilesize(this,"images'+initailcount+'","images'+initailcount+'_err","addBtn")';
  			var fn1='remove_err("images'+initailcount+'_err")';
			$('#addedImages').append('<div class="form-group" id="imageadded_'+initailcount+'"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><label>Images</label><input type="file" id="images'+initailcount+'" onchange=\''+fn+'\' onclick=\''+fn1+'\' name="Image'+initailcount+'" class="form-control"><span id="images'+initailcount+'_err" class="text-danger"></span></div></div>');
  		}
  		else{
  			$('#filecounterr').html('You have added maximum images. you are not allow to add more then that');
  		}
  	}
  	function deleteImage(){
  		if(initailcount>0){
  			$('#imageadded_'+initailcount).remove();
  			initailcount=initailcount-1;
  			$('#filecounterr').html('');
  		}
  	}
 	function addsliderDetails(){
  		if(validateaddform()){
  			$('#docCount').val(initailcount);
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
	      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/addEvents';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addsliderformId").serialize()}; 
	      $("#addsliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#addslider').modal('hide');
  		}
  	}
  	function validateaddform(){
  		var retval=true;
  		if($('#Event_Type').val()==""){
  			$('#Event_Type_err').html('Please select event type');
  			retval=false;
  		}
  		if($('#Event_Name').val()==""){
  			$('#Event_Name_err').html('Event name is required');
  			retval=false;
  		}
  		
  		if($('#Event_Description').val()==""){
  			$('#Event_Description_err').html('Description is required');
  			retval=false;
  		}
  		if($('#images').val()==""){
  			$('#images_err').html('Pleae choose image');
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
      var url='<?php echo base_url();?>index.php?adminController/loadPage/editEvents/'+id;
      $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000);
      setTimeout($.unblockUI, 600); 
  	}
  	function showdeleteslider(name,id){
  		$('#deleteId').val(id);
  		$('#sliderName').html(name);
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
	      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/deletEvent';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deletesliderformId").serialize()}; 
	      $("#deletesliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#deleteSlider').modal('hide');
  	}
  	
 
</script>
  	
