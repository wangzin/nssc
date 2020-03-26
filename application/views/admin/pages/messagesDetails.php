<section class="content-header">
  <h1>
    Home
    <small>Message Details</small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">View Message</h3>
    </div>
    <div class="box-body">
    	<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Sender Name:</label>
              	<input type="text" id="FullName" name="FullName" value="<?=$comments->Sender_Name;?>" class="form-control" readonly />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Sender Email:</label>
              	<input type="text" id="Sender_Email" name="Sender_Email" value="<?=$comments->Sender_Email;?>" class="form-control" readonly />
              </div>
            </div>
         	<div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Sender Contact:</label>
              	<input type="text" id="Sender_Contact" name="Sender_Contact" value="<?=$comments->Sender_Contact;?>" class="form-control" readonly />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Send Date:</label>
              	<input type="text" id="Action_Date" name="Action_Date" value="<?=$comments->Action_Date;?>" class="form-control" readonly />
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Subject:</label>
              	<input type="text" id="Subject" name="Subject" value="<?=$comments->Subject;?>" class="form-control" readonly />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Messsage:</label>
                <textarea id="Message" name="Message" class="form-control" readonly><?=$comments->Message;?></textarea>
              </div>
            </div>
          </div>
    </div>
</div>
</section>