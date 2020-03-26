<section class="content-header">
    <h1>
      Home
      <small>Link Details</small>
    </h1>
</section>
<section class="content">
  <div class="callout callout-info">
        <h4>Tip!</h4>
        <ol>
          <li><b>Add New Links if you have by clicking on </b>Add New Link button</li>
          <li>You can also delete them at any time</li>
        </ol>
    </div>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Manage Links</h3>
        <span><button class="btn btn-primary fa-pull-right" onclick="addslider()" type="button"> <i class="fa fa-plus"></i> Add New Link</button></span>
      </div>
      <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table id="sliderDetails" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Link</th>
                      <th>Posted Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($linkList as $i=> $link): if($link['Link_Type']=="Youtube"){ ?>
                      <tr>
                        <td> <?php echo $link['Link_Address'];?> </td>
                        <td> <?php echo $link['Posted_Date'];?> </td>
                        <td>
                           <button type="button" class="btn btn-danger btn-block" onclick="showdeleteslider('<?php echo $link['Link_Name']?>','<?php echo $link['Id']?>')"><i class="fa fa-times"></i>Delete</button>
                        </td>
                      </tr>
                      <?php } endforeach; ?>
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
            <h4 class="modal-title"><span id="titleOfmodal"></span> </h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addlinkformId', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <label>Type: <span class="text-danger">*</span></label>
                            <select id="Event_Type" onclick="remove_err('Event_Type_err')" name="Event_Type" class="form-control">
                              <option value="Youtube">Youtube Link</option>
                              <!-- <option value="">Select</option>
                              
                              <option value="othersitelink">Other Website Link</option> -->
                            </select>
                            <span id="Event_Type_err" class="text-danger"></span>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Link Name: <span class="text-danger">*</span></label>
                            <input type="text" id="Event_Name" onclick="remove_err('Event_Name_err')" name="Event_Name" class="form-control">
                            <span id="Event_Name_err" class="text-danger"></span>
                        </div>  -->
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Link (Url)</label> Note: You need to copy the <b> Embed Video </b> from share link of you tube vedio.
                          <textarea name="Event_Description" id="Event_Description" class="form-control" onclick="remove_err('Event_Description_err')"></textarea>
                          <span id="Event_Description_err" class="text-danger"></span>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <input type="hidden" name="editId" id="editId">
                          <input type="hidden" name="actiontype" id="actiontype">
                          <button class="btn btn-success" id="addBtn" type="button" onclick="addlinkDetails()"> <span id="btntype"></span> </button>
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
            <h4 class="modal-title">Delete</h4>
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
    $('#titleOfmodal').html('New Link Details');
    $('#actiontype').val('add');
    $('#btntype').html('<i class="fa fa-save"></i> Add Details');
    $('#addslider').modal('show');
  }
  function editdetials(id,name,address,type){
    $('#titleOfmodal').html('Edit Link Details');
    $('#actiontype').val('edit');
    $('#editId').val(id);
    $('#Event_Name').val(name);
    $('#Event_Description').val(address);
    $('#Event_Type').val(type);
    $('#btntype').html('<i class="fa fa-edit"></i> Update Details');
    $('#addslider').modal('show');
      /*$.blockUI
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
      setTimeout($.unblockUI, 600); */
    }
  var initailcount=0;

    function AddImages(){

      if(initailcount<4){
        initailcount=initailcount+1;
        var fn ='checkfilesize(this,"images'+initailcount+'","images'+initailcount+'_err","addBtn")';
        var fn1='remove_err("images'+initailcount+'_err")';
      $('#addedImages').append('<div class="form-group" id="imageadded_'+initailcount+'"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><label>Images</label><input type="file" id="images'+initailcount+'" onchange=\''+fn+'\' onclick=\''+fn1+'\' name="Image'+initailcount+'" class="form-control"><span id="images'+initailcount+'_err" class="text-danger"></span></div><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><label>Image Description</label><input type="text" id="ImgDescription'+initailcount+'" name="ImgDescription'+initailcount+'" class="form-control"></div></div>');
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
  function addlinkDetails(){
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
        var url='<?php echo base_url();?>index.php?adminController/loadPage/Youtube/addlink';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addlinkformId").serialize()}; 
        $("#addlinkformId").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
        $('#addslider').modal('hide');
      }
    }
    function validateaddform(){
      var retval=true;
      if($('#Event_Type').val()==""){
        $('#Event_Type_err').html('Please select link type');
        retval=false;
      }
      if($('#Event_Name').val()==""){
        $('#Event_Name_err').html('link name is required');
        retval=false;
      }
      if($('#Event_Description').val()==""){
        $('#Event_Description_err').html('link (Url) is required');
        retval=false;
      }
      
      return retval;  
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
          var url='<?php echo base_url();?>index.php?adminController/loadPage/Youtube/deletelink/'+$('#deleteId').val();
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#deletesliderformId").serialize()}; 
        $("#deletesliderformId").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
        $('#deleteSlider').modal('hide');
    }
    
 
</script>
    
