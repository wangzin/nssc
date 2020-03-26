<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
   <div class="container">
     <div class="row" style="margin-top: -20px;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <article class="mu-blog-single-item">
                  <figure class="mu-blog-single-img">
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
                </article>
              </div>                                   
            </div>
         </div>
       </div>
     </div>
   </div>
 </section>
