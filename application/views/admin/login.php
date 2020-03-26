<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$sitedetails->Site_Name;?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?php echo base_url();?>uploads/logo/<?=$sitedetails->Site_Logo_Initial;?>" type="image/x-icon" />  
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b><?=$sitedetails->Site_Name;?></b></a>
  </div>
  <div class="login-box-body">
    <div id="loginsection">
      <p class="login-box-msg">Sign in to start your session</p>
       <?php echo form_open('?adminController/login' , array('class' =>'form-horizontal','id' => 'loginform'));?>
        <?php if($message!=''){?>
          <div class="form-group" id="mismatcherr">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="text-danger"> <?php echo $message;?></span>
              </div>
          </div>
        <?php }?>
        <span id="messagetodisplay"></span>
        <div class="form-group has-feedback">
          <input type="email" name="email" onclick="remove_err('email_err')" id="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <span id="email_err" class="text-danger"></span>
        </div>        
        <div class="form-group has-feedback">
          <input type="password" id="password" onclick="remove_err('password_err')" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <span id="password_err" class="text-danger"></span>
        </div>
        <div class="row">
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <button type="button" onclick="signIn()" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
        </div>
      </form>
      <a href="#" onclick="loadforgotpassword()">I forgot my password</a><br>
    </div>
    <div id="forgotpass" style="display: none">
       <?php echo form_open('#' , array('class' =>'form-horizontal','id' => 'forgotpassword'));?>
         <p class="login-box-msg">Forgot password</p>
          <p><b>Note:</b>In order to reset your password, you need to know the email address which you are using as user name. System will generate random password and send to your email.</p>
          <div class="form-group has-feedback">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label>Your Registered email</label>
              <input type="email" name="emailtoresetpassword" onclick="remove_err('emailtoresetpassword_err')" id="emailtoresetpassword" class="form-control" placeholder="Email">
              <span id="emailtoresetpassword_err" class="text-danger"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <button type="button" onclick="getOtp()" class="btn btn-primary btn-block btn-flat">Get Password</button>
            </div>
          </div>
       </form>
    </div>
  </div>
</div>
<script src="<?php echo base_url();?>assest/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script>
  function signIn(){
    if(validate()){
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
       $('#loginform').submit();
        setTimeout($.unblockUI, 600);
    }
  }
  function validate(){
    var retval=true;
    if($('#email').val()==""){
      $('#email_err').html('Please provide your email');
      retval=false;
    }
    if($('#password').val()==""){
       $('#password_err').html('Your password is required'); 
       retval=false;
    }
    return retval;
  }
  function remove_err(err_Id){
    $('#'+err_Id).html('');
  }
  function loadforgotpassword(){
    $('#loginsection').hide();
    $('#forgotpass').show()
  }
  function getOtp(){
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
    var url = '<?php echo base_url();?>index.php?adminController/getOtp/'+$('#emailtoresetpassword').val();
    $.ajax({  
      type: "GET",
      url : url,
      success : function(data){
        if(data.trim() =='success'){
          $('#messagetodisplay').html('System has reset your password. Please visit your email to get new password');
          $('#loginsection').show();
          $('#forgotpass').hide();
          $('#mismatcherr').hide();
        }
        else{
          $('#loginsection').hide();
          $('#forgotpass').show()
          $('#emailtoresetpassword_err').html(data);
        }
      },
      error : function(jqXHR, textStatus, errorThrown) {  
      alert(textStatus+'in error:'+errorThrown+":"+jqXHR);  
      }
    });
    setTimeout($.unblockUI, 6000);
  }
</script>
</body>
</html>
