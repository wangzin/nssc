<section class="content-header">
  <h1>
    Home
    <small>Page Details</small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Updating</h3>
    </div>
    <div class="box-body">
      <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'editeventFormId'));?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  	<label>Page Type: <span class="text-danger">*</span></label>
                  	<select id="Event_Type" onclick="remove_err('Event_Type_err')" name="Type" class="form-control">
                  		<option value="<?=$pagedeails->Type;?>"><?=$pagedeails->Type;?></option>
                  		<option value="Soil Management Info">Soil Management Info</option>
                  		<option value="Others">Others</option>
                  	</select>
                  	<span id="Event_Type_err" class="text-danger"></span>
                </div>
              	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                <label>Name: </label>
	                <input type="text" id="Event_Name" value="<?=$pagedeails->Name;?> " name="Name" class="form-control">
              	</div>
              	
            </div>
         	<div class="form-group">
             	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <label>Description</label>
	                <textarea name="Description" id="Event_Description" class="form-control summernote">
	                  <?=$pagedeails->Description;?> 
	                </textarea>
              	</div>
     		</div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  	<label>Images</label>
                  	<a href="<?php echo base_url();?>uploads/otherPageImages/<?=$pagedeails->Image;?> " target="_blank"><img src="<?php echo base_url();?>uploads/otherPageImages/<?=$pagedeails->Image;?>" alt="no imaged" class="margin-bottom" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="50%" align="left"></a>
                  	
              	 	<input type="hidden" name="currentimageid" id="currentimageid" value="<?=$pagedeails->Image;?>">
                  	<input type="file" id="images" onchange="checkfilesize(this,'images','images_err','addBtn')" onclick="remove_err('images_err')" name="Image" class="form-control">
                  	<span id="images_err" class="text-danger"></span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  	<label>Attachment</label><br />
                  	<a href="<?php echo base_url();?>uploads/otherpagereferences/<?=$pagedeails->References_Link;?> " target="_blank"><?=$pagedeails->References_Link;?></a>
                  	<br />
              	 	<input type="hidden" name="currentattachmentid" id="currentattachmentid" value="<?=$pagedeails->References_Link;?>">
                  	<input type="file" id="References_Link" name="References_Link" class="form-control">
                </div>
            </div>
           
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              	<input type="hidden" name="actiontype" id="actiontype" value="editdetails">
                <input type="hidden" name="recordid" id="recordid" value="<?=$pagedeails->Id;?> ">
             	<button type="button" onclick="updateEventForm()" class="btn btn-primary"><span class="fa fa-edit"></span> Update</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<script type="text/javascript">
  $('.summernote').summernote({
      height:250
    });
  
  function updateEventForm(){
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
    var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editeventFormId").serialize()}; 
    $("#editeventFormId").ajaxSubmit(options);
    setTimeout($.unblockUI, 1000); 
  }
</script>
