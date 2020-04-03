

<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
    <div class="container">

      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mu-course-content-area">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <?php $linkname=""; $linkdesc="";  foreach($BrochuresList as $i=> $link): $linkname=$link['Name'];$linkdesc=$link['Description']; ?>
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
                      <!--   <meta property="og:url"           content="http://www.e-bhutan.com/index.php?baseController/loadpagemenu/Brochures/" />
                        <meta property="og:type"          content="website" />
                        <meta property="og:title"         content="<?=$linkname?>" />
                        <meta property="og:description"   content="<?=$linkdesc?>" />
                        <meta property="og:image"         content="http://www.e-bhutan.com/uploads/logo/logo.png" />
                        <meta property="og:image:alt"         content="http://www.e-bhutan.com/uploads/logo/logo.png" /> -->

                        <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.e-bhutan.com%2Findex.php%3FbaseController%2Floadpagemenu%2F<?=$pageType?>%2F&layout=button&size=large&width=77&height=28&appId" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                       <!--  <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script> -->


  <!-- Your share button code -->
  <!-- <div class="fb-share-button" 
    data-href="http://www.e-bhutan.com/index.php?baseController/loadpagemenu/<?=$pageType?>/" 
    data-layout="button_count">
    ddd:
  </div> -->
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
