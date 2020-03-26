<section id="" style="background:#cb913f">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="">           
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="mu-about-us-left">
                  <div class="mu-title">
                    <h2><?=$aboutUsDetails->Title?></h2>              
                  </div>
                  <p><?=$aboutUsDetails->Description?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 page-header">
            	<!-- <p class="">You browsing our site from <b><?=$country;?></b> (<b><?=$region_name;?></b>).<br /> 
        	(Total Unique Visitors including you: <b><?=$totalViewer;?></b>) <br />
        	(Total Unique Visitors Today including you: <b><?=$totalViewertotay;?></b>)</p> -->
              <div class="mu-contact-right">
                <br />
                <?php echo $sitedetails->Site_Location_Map;?>
              </div>               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>