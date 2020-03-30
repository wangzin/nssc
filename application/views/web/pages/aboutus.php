<!-- <section id="" style="background:#cb913f">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="">           
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
               <div class="mu-about-us-left">
                  <div class="mu-title">
                    <h2><?=$aboutUsDetails->Title?></h2>              
                  </div>
                  <p><?=$aboutUsDetails->Description?></p>
                </div>
                <div class="mu-contact-right">
                  <br />
                  <?php echo $sitedetails->Site_Location_Map;?>
                </div> 
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-left: -20px">
                <aside class="mu-sidebar">
                 <div class="mu-single-sidebar">
                    <div class="tag-cloud">
                      <span class="input-group-addon"><b>From Program Director’s Desk</b></span>
                      <div id="message_details_event">
                          <p><?=$aboutUsDetails->Description?></p>
                        </div>
                      <button class="mu-read-more-btn btn-block btn-warning text-center" href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/directormessage/')"> <i class="fa fa-eye"></i> Read More</button>
                      <hr />
                    </div>
                    <br /><br />
                       <span class="input-group-addon"><b>Report</b></span>
                       <br/>
                      <?php foreach($reportList as $i=> $repo): if($repo['Type']=="Report"){?>
                         <div class="media" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/reportpublication/<?php echo $repo['Id']?>')">
                          <div class="mu-latest-course-single-content"> 
                            <a href="#">
                              <img class="img-thumbnail" src="./uploads/reportpublication/<?php echo$repo['Image'];?>" alt="img" width="100%" style="height:150px">
                              <p><?php echo$repo['Name'];?></p>
                            </a>
                            <span class="fa fa-clock-o pull-right"><?php echo$repo['Created_On'];?></span>
                          </div>
                        </div>
                       <?php } endforeach;  ?>
                        <hr />
                    </div>
                 </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  var content = $("#message_details_event").text().trim();
  $("#message_details_event").text(content.substr(0, 100) + '...');
   $(document).ready(function(){
      $(window).scrollTop(0);
  });
  
 </script> -->

 <section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mu-course-content-area">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="mu-about-us-left">
                          <div class="mu-title">
                            <h2><?=$aboutUsDetails->Title?></h2>              
                          </div>
                          <p><?=$aboutUsDetails->Description?></p>
                        </div>
                        <div class="mu-contact-right">
                          <br />
                          <?php echo $sitedetails->Site_Location_Map;?>
                        </div> 
                      </div>
                      <?php $this->load->view('web/include/sidebar.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  var content = $("#message_details").text().trim();
  $("#message_details").text(content.substr(0, 100) + '...');
   $(document).ready(function(){
      $(window).scrollTop(0);
  });
  </script>
