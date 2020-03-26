<section class="content-header">
  <h1>
    Home
    <small>Message</small>
  </h1>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      Messages
      <span class="pull-right"><button type="button" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/messagesAll/<?php echo $this->session->userdata('userId');?>')" class="btn btn-primary"><i class="fa fa-eye"></i>View All</button></span>
    </div>
    <div class="box-body">
      <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'menuFormId'));?>
        <section class="content">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <table id="menutable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl No#</th>
                  <th>Sender Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Send on</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody >
                    <?php 
                    foreach($comments as $i=> $menu):
                    ?>
                      <tr>
                        <td><?=$i+1?></td>
                        <td><?php echo $menu['Sender_Name'];?></td>
                        <td><?php echo $menu['Sender_Email'];?></td>
                        <td><?php echo $menu['Subject'];?></td>
                        <td><?php echo $menu['Action_Date'];?></td>
                        <td><span><button class="btn btn-primary" onclick="viewMessage('<?php echo $menu['Id'];?>')" type="button"> <i class="fa fa-eye"> View</i></button></span></td>
                      </tr>
                    <?php   
                    endforeach; 
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </form>
    </div>
  </div>
</section>
<script type="text/javascript">
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
  function viewMessage(id){
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
    var url='<?php echo base_url();?>index.php?adminController/loadPage/getmessageDetails/'+id;
    $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000); 
  }
</script>
 
