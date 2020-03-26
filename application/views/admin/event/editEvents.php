<section class="content-header">
  <h1>
    Home
    <small>Event</small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Updating Up-coming Events and Festivals</h3>
    </div>
    <div class="box-body">
      <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'editeventFormId'));?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Event Name: </label>
                <input type="text" id="Event_Name" value="<?=$eventdeails->Event_Name;?> " name="Event_Name" class="form-control">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Event Description (please mention less then 250 words)</label>
                <textarea name="Event_Description" id="Event_Description" class="form-control">
                  <?=$eventdeails->Event_Description;?> 
                </textarea>
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
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label>Event Details:</label>
                  <textarea id="Event_Details" name="Event_Details" class="form-control summernote">
                    <?=$eventdeails->Event_Details;?>
                  </textarea>
                  <span id="Event_Details_err" class="text-danger"></span>
              </div>
            </div>
           
            <div class="form-group">
              <?php foreach($eventimagesList as $i=> $sli): ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="<?php echo base_url();?>uploads/events/<?php echo$sli['Image'];?>" target="_blank"><img src="<?php echo base_url();?>uploads/events/<?php echo$sli['Image'];?>" alt="no imaged" class="margin-bottom" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="100%" align="left"></a>

                  <b>Check to delete this image:</b>
                  <input type="checkbox" name="deleteimg<?=$i?>" value="checked" class="margin-bottom">
                  <input type="hidden" name="filenameTodelete<?=$i?>" value="<?php echo$sli['Image'];?>">
                  <br />
                  <b>select image to change:</b>
                  <input type="file" name="Image<?=$i?>" class="form-control margin-bottom">

                  <!-- <textarea id="ImgDescription" name="ImgDescription<?=$i?>" class="form-control">
                    <?php echo$sli['ImgDescription'];?> -->
                  </textarea>
                </div>
              <?php endforeach; ?>
            </div>
            <span id="addedImages"></span>
            <?php if(sizeof($eventimagesList)<5){?>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="text-muted">You can able to add maximum of 5 images</span>
                <span class="text-danger" id="filecounterr"></span>
                <button class="btn btn-primary fa fa-pull-right" type="button" onclick="AddImages()">Add More Images</button>
                <button class="btn btn-dander fa fa-pull-right" type="button" onclick="deleteImage()">Delete Images</button>
              </div>
            </div>
            <?php } ?>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="hidden" name="docCount" id="docCount">
                <input type="hidden" name="eventId" id="eventId" value="<?=$eventdeails->Id;?> ">
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

  var initailcount=parseInt('<?=sizeof($eventimagesList)?>');
  function AddImages(){
    if(initailcount<5){
      
      var fn ='checkfilesize(this,"images'+initailcount+'","images'+initailcount+'_err","addBtn")';
      var fn1='remove_err("images'+initailcount+'_err")';
      $('#addedImages').append('<div class="form-group" id="imageadded_'+initailcount+'"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><label>Images</label><input type="file" id="images'+initailcount+'" onchange=\''+fn+'\' onclick=\''+fn1+'\' name="Image'+initailcount+'" class="form-control"><span id="images'+initailcount+'_err" class="text-danger"></span></div><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><label>Image Description</label><input type="text" id="ImgDescription'+initailcount+'" name="ImgDescription'+initailcount+'" class="form-control"></div></div>');
      initailcount=initailcount+1;
    }
    else{
      $('#filecounterr').html('You have added maximum images. you are not allow to add more then that');
    }
  }
  function deleteImage(){
    if(initailcount>parseInt('<?=sizeof($eventimagesList)?>')){
      initailcount=initailcount-1;
      $('#imageadded_'+initailcount).remove();
      $('#filecounterr').html('');
    }
  }
  function updateEventForm(){
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
    var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/updateeventDetails';
    var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#editeventFormId").serialize()}; 
    $("#editeventFormId").ajaxSubmit(options);
    setTimeout($.unblockUI, 600); 
  }
</script>
