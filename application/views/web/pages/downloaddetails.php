<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mu-course-content-area">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <?php   foreach($downloadPageList as $i=> $link):?>
                        <div class="mu-course-container mu-course-details">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="mu-latest-course-single">
                                <div class="mu-latest-course-single-content">
                                  <h4><?=$link['Name']?></h4>
                                  <blockquote>
                                    <?php if($link['Link_Type']=="Share From Google Drive"){?>
                                      <a href="<?=$link['Link_Address']?> " target="_blank">
                                      <img src="./uploads/pdf.png" alt="img" width="100" align="left">Click to Download from here
                                      asdf
                                    </a>
                                    <?php }else{?>
                                      <a href="./uploads/downloadAttachments/<?=$link['Link_Address']?> " target="_blank">
                                        <img src="./uploads/pdf.png" alt="img" width="100" align="left">Click to Download from here afdasdadadasdasd
                                      </a>
                                    <?php }?>
                                    
                                  </blockquote>
                                    
                                  </div>
                                </div>
                              </div> 
                            </div>                                   
                          </div>
                          <br />
                        <?php endforeach;  ?>
                      
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