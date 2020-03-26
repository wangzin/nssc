<section class="content-header">
  	<h1>
	    Home
	    <small>Gallery</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Manage Gallery</h3>
	      <span><button class="btn btn-primary fa-pull-right" onclick="addslider()" type="button"> <i class="fa fa-plus"></i> Add New Images</button></span>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered table-striped">
			            <thead>
			              <tr>
			                <th>Sl No#</th>
			                <th>Description</th>
			                <th>Image</th>
			                <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($galleyList as $i=> $sli): ?>
			                <tr>
			                  <td><?=$i+1?></td>
			                  <td> <?php echo $sli['Description'];?> </td>
			                  <td> <a href="<?php echo base_url();?>uploads/gallery/<?php echo$sli['Name'];?>" target="_blank"><img src="<?php echo base_url();?>uploads/gallery/<?php echo$sli['Name'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100" align="left"></a>
			                  </td>
			                  <td>
			                  	 <button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $sli['Id']?>','<?php echo $sli['Description']?>','<?php echo$sli['Name'];?>')"><i class="fa fa-edit"></i>Edit</button>
			                  	 <button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $sli['Id']?>','<?php echo $sli['Name']?>')"><i class="fa fa-times"></i>Delete</button>
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
        		<h4 class="modal-title"><span id="addmodeltitle"></span></h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addsliderformId', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<span id="loadimage"></span>
				                	<br />
				                  	<label>Images</label>
				                  	<input type="file" id="Slider_Image" onclick="remove_err('Slider_Images_err')" name="Slider_Image" class="form-control" onchange="checkfilesize(this,'Slider_Image','Slider_Images_err','savebtnss')">
				                  	<span id="Slider_Images_err" class="text-danger"></span>
				                </div>
				                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                	<label>Image Description</label>
				                	<textarea name="Slider_Description" id="Slider_Description" class="form-control" onclick="remove_err('Slider_Description_err')"></textarea>
				                	<span id="Slider_Description_err" class="text-danger"></span>
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="actiontype" id="actiontype">
				                	<input type="hidden" name="currentimage" id="currentimage">
				                	<input type="hidden" name="galleryId" id="galleryId">
				                	<button class="btn btn-success" type="button" id="savebtnss" onclick="addsliderDetails()"> <span id="btntitle"></span></button>
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
				                  	Are you sure you want to delete selected detail ?
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="deleteId" id="deleteId">
				                	<input type="hidden" name="deleteimageId" id="deleteimageId">
				                	<input type="hidden" name="actiontype" value="delete">
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
		$('#actiontype').val('addgalery');
		$('#addmodeltitle').html('Add New Image');
		$('#btntitle').html('<i class="fa fa-save"></i> Add Details');
		$('#addslider').modal('show');
	}
	function editdetials(id,name,image){
  		$('#galleryId').val(id);
  		$('#Slider_Description').val(name);
  		$('#currentimage').val(image);
  		$('#actiontype').val('editgalery');
		$('#addmodeltitle').html('Edit Details');
		$('#btntitle').html('<i class="fa fa-edit"></i> Update Details');
  		var imagepath="<?php echo base_url();?>uploads/gallery/"+image;
  		$('#loadimage').html('<img src="'+imagepath+'" alt="no imaged" width="100%" align="left">');
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
	      var url='<?php echo base_url();?>index.php?adminController/loadPage/gallery/';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addsliderformId").serialize()}; 
	      $("#addsliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#addslider').modal('hide');
  		}
  	}
  	function validateaddform(){
  		var retval=true;
  		if($('#Slider_Description').val()==""){
  			$('#Slider_Description_err').html('Please mention description');
  			retval=false;
  		}
  		if($('#actiontype').val()=="addgalery" && $('#Slider_Image').val()==""){
  			$('#Slider_Images_err').html('Pleae choose image');
  			retval=false;
  		}
  		return retval;  
  	}
  	
  	
  	function showdeleteslider(id,image){
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
         	var url='<?php echo base_url();?>index.php?adminController/loadPage/gallery/';
	      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deletesliderformId").serialize()}; 
	      $("#deletesliderformId").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	      $('#deleteSlider').modal('hide');
  	}
</script>