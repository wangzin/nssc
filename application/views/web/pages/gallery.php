<section id="mu-gallery" style="margin-top: -70px; background:#cb913f">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <div class="mu-title">
            <h2>Some Moments</h2>
          </div>
          <div class="mu-gallery-content">
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <?php   foreach($galleryList as $i=> $gallery): ?>
                  <li class="col-md-4 col-sm-6 col-xs-12 lab">
                    <div class="mu-single-gallery">                  
                      <div class="mu-single-gallery-item">
                        <div class="mu-single-gallery-img">
                          <a href="#"><img alt="img" src="./uploads/gallery/<?php echo$gallery['Name'];?>"></a>
                        </div>
                        <div class="mu-single-gallery-info">
                          <div class="mu-single-gallery-info-inner">
                            <h4><?php echo$gallery['Description'];?></h4>
                            <a href="./uploads/gallery/<?php echo$gallery['Name'];?>" data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                          </div>
                        </div>                  
                      </div>
                    </div>
                  </li>
                <?php  endforeach;  ?>
              </ul>            
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>
 </section>

