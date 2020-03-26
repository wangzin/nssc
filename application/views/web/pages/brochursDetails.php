<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
   	<div class="container">
     	<div class="row">
       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         		<div class="mu-course-content-area">
            		<div class="row">
              			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              				<?php   foreach($BrochuresList as $i=> $link):?>
              					<div class="mu-course-container mu-course-details">
				                  <div class="row">
			                    	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				                      <div class="mu-latest-course-single">
				                        <div class="mu-latest-course-single-content">
				                          <h4><?=$link['Name']?></h4>
				                          <blockquote>
				                            <p><?=$link['Description']?></p>
				                            <a href="./uploads/reportpublication/<?=$link['References_Link']?> " target="_blank">
				                          		<img src="./uploads/pdf.png" alt="img" width="100" align="left">Click to Download from here
				                          	</a>
				                          </blockquote>
				                          	
				                          </div>
				                        </div>
				                      </div> 
				                    </div>                                   
			                  	</div>
                    			<br />
                    		<?php endforeach;  ?>
              				
			                </div>
              			</div>
          			</div>
      			</div>
  			</div>
		</div>
	</div>
</section>