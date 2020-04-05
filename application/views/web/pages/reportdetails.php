<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
   	<div class="container">
     	<div class="row">
       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         		<div class="mu-course-content-area">
            		<div class="row">
              			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              				<div class="mu-course-container mu-course-details">
			                  <div class="row">
			                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			                    	<a href="#"><img src="./uploads/reportpublication/<?php echo$reportDetails->Image;?>" alt="img" width="200" align="left"></a>
			                    </div>
		                    	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			                      <div class="mu-latest-course-single">
			                        <div class="mu-latest-course-single-content">
			                          <h4><?php echo$reportDetails->Name;?></h4>
			                          <blockquote>
			                            <p><?php echo$reportDetails->Description;?></p>
			                          </blockquote>
			                          	<a href="./uploads/reportpublication/<?php echo$reportDetails->References_Link;?>" target="_blank">
			                          		<img src="./uploads/pdf.png" alt="img" width="100" align="left">Click to Download from here
			                          	</a>
			                          </div>
			                        </div>
			                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.e-bhutan.com%2Findex.php%3FbaseController%2Floadpagemenu%2Freportpublication%2F<?=$shareType?>&layout=button&size=large&appId=222395278982640&width=77&height=28" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			                      </div> 
			                    </div>                                   
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