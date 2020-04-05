<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mu-course-content-area">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <?php   foreach($AllinkList as $i=> $link): if($link['Link_Name']!=""){?>
                        <div class="mu-course-container mu-course-details">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="mu-latest-course-single">
                                <div class="mu-latest-course-single-content">
                                  <blockquote>
                                    <a href="<?=$link['Link_Address']?>" target="_blank"><i class="fa fa-hand-o-right"></i> <?=$link['Link_Name']?></a>
                                  </blockquote>
                                  </div>
                                </div>
                              </div> 
                            </div>                                   
                          </div>
                          <br />
                        <?php } endforeach;  ?>
                      
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