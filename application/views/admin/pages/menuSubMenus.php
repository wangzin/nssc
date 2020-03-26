<section class="content-header">
  <h1>
    Home
    <small>Updating Menu & Submenus</small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <blockquote>From here you can able to add edit and delete menu and sub menu details. First table is for menu and second for sub menu details. Click on add button from the respective section to add. To edit and delete, you will find the button for respective detils in tables</blockquote>
    </div>
    <div class="box-body">
      <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'menuFormId'));?>
        <section class="content">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title"><b>Main menu table</b></h3>
                  <span class="pull-right"><button type="button" onclick="addnewmenu('mainmenu')" class="btn btn-primary"><i class="fa fa-plus"></i>Add New Menu</button></span>
                </div>
                <div class="box-body">
                  <table id="menutable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl No#</th>
                      <th>Menu name</th>
                      <th>Has Sub-menu ?</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach($menulist as $i=> $menu):
                        ?>
                          <tr>
                            <td><?=$i+1?></td>
                            <td>
                              <?php echo $menu['MenuName'];?>
                            </td>
                            <td>
                              <?php if($menu['Submenustatus']=="Y"){?>
                                Yes 
                              <?php }else { ?> 
                                No
                              <?php } ;?>
                            </td>
                            <td>
                              <button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $menu['Id']?>','menu')"><i class="fa fa-edit"></i>Edit</button>
                              <?php
                              if($menu['Submenustatus']=='N'){
                              ?>
                                <button type="button" class="btn btn-danger btn-block" onclick="deltemenu('<?php echo $menu['Id']?>','menu','<?php echo $menu['MenuName'] ?>','<?php echo $menu['Page_Image'] ?>')"><i class="fa fa-times"></i>Delete</button>
                              <?php } ?>
                            </td>
                          </tr>
                        <?php   
                      endforeach; 
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title"><b>Sub menu table</b></h3>
                  <span class="pull-right"><button type="button" onclick="addnewmenu('submenu')" class="btn btn-primary"><i class="fa fa-plus"></i>Add New Sub-Menu</button></span>
                </div>
                <div class="box-body">
                  <table id="submenutable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl No#</th>
                      <th>Menu name</th>
                      <th>Sub menu name</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach($submenulist as $i=> $menu):
                        ?>
                          <tr>
                            <td><?=$i+1?></td>
                            <td>
                              <?php echo $this->db->get_where('t_menu_master', array('Id'=>$menu['MenuId']))->row()->MenuName;?>
                            </td>
                            <td>
                              <?php echo $menu['SubMenuName'];?>
                            </td>
                            <td>
                              <button type="button" class="btn btn-info btn-block" onclick="editdetials('<?php echo $menu['Id']?>','submenu')"><i class="fa fa-edit"></i>Edit</button>
                              <button type="button" class="btn btn-danger btn-block" onclick="deltemenu('<?php echo $menu['Id']?>','submenu','<?php echo $menu['SubMenuName'] ?>','<?php echo $menu['Page_Image'] ?>')"><i class="fa fa-times"></i>Delete</button>
                            </td>
                          </tr>
                        <?php   
                      endforeach; 
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </form>
    </div>
  </div>
</section>
<div class="modal modal-default" id="addmenu">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">New Details</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('##' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Name: <span class="text-danger">*</span></label>
                  <input type="text" id="MenuName" onclick="remove_err('MenuName_err')" name="MenuName" onchange="checkname(this.value)" class="form-control">
                  <span id="MenuName_err" class="text-danger"></span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div id="selectsubmenustatus">
                    <label>Has Submenu? <span class="text-danger">*</span></label>
                    <select name="submenuoption" onclick="remove_err('submenuoption_err')" id="submenuoption" class="form-control" onchange="selectoption(this.value)">
                      <option value="">Select</option>
                      <option value="Y">Yes</option>
                      <option value="N">No</option>
                    </select>
                    <span id="submenuoption_err" class="text-danger"></span>
                  </div>
                  <div id="selectName" style="display: none">
                      <label>Select Menu:<span class="text-danger">*</span></label>
                      <select name="selectmainmenu" onclick="remove_err('selectmainmenu_err')" id="selectmainmenu" class="form-control" onchange="selectoption(this.value)">
                      <option value="">Select</option>
                      <?php 
                        foreach($menulist as $i=> $menu):
                      ?>
                      <option value="<?=$menu['Id']?>"><?=$menu['MenuName']?></option>
                      <?php 
                        endforeach;
                      ?>
                    </select>
                    <span id="selectmainmenu_err" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div class="form-group" id="SubmenuName" style="display: none">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Submenu Name:<span class="text-danger">*</span></label>
                  <input type="text" id="subMenuName" onclick="remove_err('subMenuName_err')" name="subMenuName" class="form-control">
                  <span id="subMenuName_err" class="text-danger"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <label>Page Image:<span class="text-danger">*</span></label>
                  <input type="file" id="pageimage" onclick="remove_err('pageimage_err')" name="pageimage" class="form-control"  onchange="checkfilesize(this,'pageimage','pageimage_err','savebtn')">
                  <span id="pageimage_err" class="text-danger"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  
                  <label>Details:<span class="text-danger">*</span></label>
                  <textarea class="form-control summernote" onclick="remove_err('addedmenudetais_err')" name="addedmenudetais" id="addedmenudetais">  
                  </textarea>
                  <span id="addedmenudetais_err" class="text-danger"></span>
                </div>
              </div>
            </div>
          </div>
          <input type="hidden" name="menutype" id="menutype">
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">
          <i class="fa fa-times"></i> Close</button>
        <button type="button" id="savebtn" class="btn btn-primary" onclick="saveDetails()"> <i class="fa fa-save"></i>Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-danger" id="deletemenu">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Confirmation</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('##' , array('class' => 'form-horizontal validatable','id'=>'deleteformId', 'enctype' => 'multipart/form-data'));?>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label>Are you sure you want to delete <span id="menuNameId"></span> ? </label>
              <input type="hidden" name="deletemenuId" id="deletemenuId">
              <input type="hidden" name="deletemenutypeId" id="deletemenutypeId">
              <input type="hidden" name="imageId" id="imageId">
              
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          <i class="fa fa-times"></i> No</button>
        <button type="button" id="savebtn" class="btn btn-primary" onclick="deletemenu()"> <i class="fa fa-check"></i>Yes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.summernote').summernote({
      height:300
  });
  $(function () {
      $('#menutable').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      $('#submenutable').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      
    });
  function addnewmenu(type){
    if('submenu'==type){
      $('#selectName').show();
      $('#selectsubmenustatus').hide();
    }
    else{
      $('#selectName').hide();
      $('#selectsubmenustatus').show();
    }
    $('#menutype').val(type);
    $('#addmenu').modal('show');
  }
  
  function selectoption(val){
    if(val=="Y"){
      $('#SubmenuName').show();
    }
    else{
      $('#SubmenuName').hide();
    }
  }
  function saveDetails(){
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
      
        var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/addmenuSubmenu/';
        var options = {target:'#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
        $("#addformId").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
        $('#addmenu').modal('hide');
    }
  }
  function validate(){
    var retuval=true;
    if($('#MenuName').val()==""){
      $('#MenuName_err').html('Please provide name'); 
      retuval=false;
    }
    if($('#submenuoption').val()=="" && $('#menutype').val()=="mainmenu"){
      $('#submenuoption_err').html('Please select one option'); 
      retuval=false;
    }
    if($('#selectmainmenu').val()=="" && $('#menutype').val()=="submenu"){
      $('#selectmainmenu_err').html('Please select one option'); 
      retuval=false;
    }
    if($('#submenuoption').val()=="Y" && $('#subMenuName').val()==""){
      $('#subMenuName_err').html('Please provide name of submenu'); 
      retuval=false;
    }
    
    /*if($('#pageimage').val()==""){
      $('#pageimage_err').html('Please choose page image'); 
      retuval=false;
    }*/
    if($('#addedmenudetais').val().trim()==""){
      $('#addedmenudetais_err').html('Please mention details of the page'); 
      retuval=false;
    }
    return retuval;
  }
  function checkname(valu){
    var url = '<?php echo base_url();?>index.php?adminController/checkName/'+valu+'/'+$('#menutype').val();
    $.ajax({  
      type: "GET",
      url : url,
      success : function(data){
        if(data.trim() !='false'){
          $('#MenuName_err').html(data);
          $('#savebtn').prop('disabled',true);
        }
        else{
          $('#MenuName_err').html('');
          $('#savebtn').prop('disabled',false);
        }
      },
      error : function(jqXHR, textStatus, errorThrown) {  
        alert(textStatus+'in error:'+errorThrown+":"+jqXHR);  
      }
    });
  }
  function deltemenu(id,type,name,imageId){
    $('#deletemenu').modal('show');
    $('#menuNameId').html(name);
    $('#deletemenutypeId').val(type);
    $('#deletemenuId').val(id);
    $('#imageId').val(imageId);

  }
  function deletemenu(){
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
    var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/deletemenusubmenu/';
    var options = {target:'#mainContentdiv',url:url,type:'POST',data: $("#deleteformId").serialize()}; 
    $("#deleteformId").ajaxSubmit(options);
    setTimeout($.unblockUI, 600); 
    $('#deletemenu').modal('hide');
  }
  function editdetials(id,type){
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
    var url='<?php echo base_url();?>index.php?adminController/loadPage/editmenusubmenu/'+id+'/'+type;
    $("#mainContentdiv").load(url);
    setTimeout($.unblockUI, 600); 
  }
</script>