<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mu-course-content-area">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <article class="">
                        <figure class="">
                          <?php if($currentPageDetails->Page_Image!=""){?>
                           <img src="<?php echo base_url();?>uploads/menuImages/<?=$currentPageDetails->Page_Image;?>" alt="" style="object-fit: cover; width: 100%">
                          <?php }?>
                          <figcaption class="mu-blog-caption">
                            <?php $menusubmenuName=""; if($type=='menu'){
                              $menusubmenuName=$currentPageDetails->MenuName;
                            }else{
                              $menusubmenuName=$currentPageDetails->SubMenuName;
                            }?>
                            <h3><a href="#"><?=$menusubmenuName;?></a></h3>
                          </figcaption>
                        </figure>
                        <hr/>
                        <div class="mu-blog-meta">
                          <a href="#"><?=$currentPageDetails->Added_Date;?></a>
                          <span class="pull-right">
                            <i class="fa fa-eye"></i>Total unique viewed: <?=$currentPageDetails->Total_View;?>
                          </span>
                        </div>
                        <div class="mu-blog-description">
                          <p><?=$currentPageDetails->Details;?></p>
                        </div>
                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.e-bhutan.com%2Findex.php%3FbaseController%2Floadpagemenu%2Fmenulinkdetails%2F<?=$pageType?>%2Fsubmenu&layout=button&size=large&appId=222395278982640&width=77&height=28" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                      </article>
                      
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
