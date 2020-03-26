<section class="content-header">
  <h1>
    Home
    <small>Edit Menu and Sub-menu</small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Updating <?=$type?></h3>
    </div>
    <div class="box-body">
      <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'updateform'));?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <img class="img-responsive" src="<?php echo base_url();?>uploads/menuImages/<?=$menuDetails->Page_Image;?>" width="300px"alt="User profile picture">
                <input type="hidden" name="existImage" value="<?=$menuDetails->Page_Image;?>">
                <label>Choose image image to change:</label>
                <input type="file" name="imagetochange" id="images" class="form-control" onchange="checkfilesize(this,'images','images_err','updatebtn')">
                <span id="images_err" class="text-danger"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Name:</label>
                <?php $menusubmenuName=""; if($type=='menu'){
                  $menusubmenuName=$menuDetails->MenuName;
                }else{
                  $menusubmenuName=$menuDetails->SubMenuName;
                }?>
                <input type="text" id="menuName" name="menuName" value="<?=$menusubmenuName;?>" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <textarea class="form-control summernote" onclick="remove_err('addedmenudetais_err')" name="addedmenudetais" id="addedmenudetais">  
                  <?=$menuDetails->Details;?>
                  </textarea>
              </div>
            </div>
            
            <input type="hidden" name="menuId" value="<?=$menuDetails->Id;?>">
            <input type="hidden" name="menutype" value="<?=$type;?>">
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <button id="updatebtn" type="button" onclick="update('updatemenusub','updateform')" class="btn btn-primary"><span class="fa fa-edit"></span> Update</button>
              </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</section>
<script>
 $('.summernote').summernote({
      height:300
  });
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
  var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#updateform").serialize()}; 
  $("#updateform").ajaxSubmit(options);
  setTimeout($.unblockUI, 600); 
}

</script>
