<section class="content-header">
  <h1>
    Home
    <small><?=$pagetype?></small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Updating <?=$pagetype?></h3>
    </div>
    <div class="box-body">
      <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'updateform'));?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <?php if($pagetype=="profile"){?>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>Name:</label>
                <input type="text" id="FullName" onclick="remove_err('fullnameErr')" name="FullName" value="<?=$userDetails->Full_Name;?>" class="form-control">
                <span class="text-danger" id="fullnameErr"></span>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <button type="button" onclick="update('profile','updateform')" class="btn btn-primary"><span class="fa fa-edit"></span> Update</button>
          </div>
          <?php } if($pagetype=="password"){?>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>New Password:</label>
                <input type="text" id="newpassword" name="newpassword" value="" onclick="remove_err('passwordErr')" class="form-control">
                <span class="text-danger" id="passwordErr"></span>
              </div>
              
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <button type="button" onclick="update('password','updateform')" class="btn btn-primary"><span class="fa fa-edit"></span> Update</button>
              </div>
            </div>
           <?php }?>
           <input type="hidden" name="UserId" value="<?=$userDetails->Id;?>">
        </div>
      </form>
    </div>
  </div>
</section>
<script>
  function update(type,formId){
    if(validate(type)){
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
      
  }
    function validate(type){
      var valdateval=true;
      if(type=="profile" && $('#FullName').val()==""){
        $('#fullnameErr').html('Plese provide your name');
        valdateval=false;
      }
      if(type=="password" && $('#newpassword').val()==""){
        $('#passwordErr').html('Plese provide your new password');
        valdateval=false;
      }
      return valdateval;

    }

</script>
