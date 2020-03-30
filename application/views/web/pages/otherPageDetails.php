<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
   <div class="container">
     <div class="row" style="margin-top: -60px;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="">
          <br/>
        <span class="h3"></span>
        </div>
        <br/>
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <?php if($currentPageDetails->Image!=""){?>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <a href="#"><img src="./uploads/otherPageImages/<?php echo$currentPageDetails->Image;?>" alt="img" width="200" align="left"></a>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <div class="mu-latest-course-single">
                            <div class="mu-latest-course-single-content">
                              <h4><?php echo$currentPageDetails->Name;?></h4>
                              <blockquote>
                                <p><?php echo$currentPageDetails->Description;?></p>
                              </blockquote>
                                <?php if($currentPageDetails->References_Link!=""){?>
                                  <a href="./uploads/otherpagereferences/<?php echo$currentPageDetails->References_Link;?>" target="_blank">
                                    <img src="./uploads/pdf.png" alt="img" width="100" align="left">Click to Download from here for further information
                                  </a>
                                <?php }?>
                              </div>
                            </div>
                          </div> 
                        </div>
                    <?php }else{?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">                        
                        <article class="mu-blog-single-item">
                         <figcaption class="text-center pager text-uppercase text-danger">
                            <b><?=$currentPageDetails->Name;?></b>
                        </figcaption>
                        <hr/>
                        <div class="mu-blog-meta">
                          <a href="#"><?=$currentPageDetails->Created_On;?></a>
                          <span class="pull-right">
                            <i class="fa fa-eye"></i>Total viewed: <?=$currentPageDetails->Total_View;?>
                          </span>
                        </div>
                        <div class="mu-blog-description">
                          <p><?=$currentPageDetails->Description;?></p>
                        </div>
                        <?php if($currentPageDetails->References_Link!=""){?>
                          <a href="./uploads/otherpagereferences/<?php echo$currentPageDetails->References_Link;?>" target="_blank">
                            <img src="./uploads/pdf.png" alt="img" width="100" align="left">Click to Download from here for further information
                          </a>
                        <?php }?>
                        
                      </article>
                      <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=small&width=96&height=20&appId" width="96" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div> 
                    <?php }?>
                                                      
                  </div>
                </div>
              </div>
              <?php $this->load->view('web/include/sidebar.php'); ?>
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

