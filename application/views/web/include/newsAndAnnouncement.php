<section id="mu-course-content" style="margin-top: -80px;margin-bottom: -100px; background:#cb913f">
   	<div class="container">
     	<div class="row">
       		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 text-center">
       				<h2><u>News and Announcement</u></h2> 
       				<hr />
       			</div>       			
       			<br />
         		<div class="mu-course-content-area">
            		<div class="row">
              			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 text-center">
              				<div class="mu-course-container">
                  				<div class="">
              						<?php
              						$closediv=false;
              						 if(sizeof($eventList)==1 || sizeof($eventList)==3 || sizeof($eventList)==5 || sizeof($eventList)==7 || sizeof($eventList)==9 || sizeof($eventList)==11 || sizeof($eventList)==13){
              						 	$closediv=true;
              						 } 
              						foreach($eventList as $i=> $event):  
      								if($i==0 || $i==2 || $i==4 || $i==6 || $i==8 || $i==10 || $i==12 || $i==14){ ?>
										<div class="row">
									<?php }?>
              							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 h4" style="padding-right: 5px; padding-left: 0px;">
	                    					<div class="mu-latest-course-single">
	                      						<figure class="mu-latest-course-img">
	                        						<a href="./uploads/events/<?php echo$event['Image'];?>" target="_blank"><img src="./uploads/events/<?php echo$event['Image'];?>" alt="img" style="width:100%; height:200px;"></a>
	                    							<figcaption class="mu-latest-course-imgcaption text-uppercase text-danger">
	                      								<b><?php echo$event['Event_Name'];?></b>
	                    							</figcaption>
	                  							</figure>
	                      						<div class="mu-latest-course-single-content">
	                        						<p><?php echo$event['Event_Description'];?></p>
	                        						<button class="mu-read-more-btn btn-block btn-warning" href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/eventDetails/<?php echo $event['Id']?>')">
	                        							<?php if($event['New_Status']=="1"){?>
	                        								<img src="./uploads/new-star.gif" alt="img" style="width:10%; " class="pull-left">
	                        								<i class="fa fa-eye"></i> Read More
                        								<?php }else{?>
                        									<i class="fa fa-eye" style="padding-top: 5px;padding-bottom: 5px;"></i> Read More
                        								<?php }?>
	                        							</button>
	                        						<div class="mu-latest-course-single-contbottom">
	                          							<a class="mu-course-details" href="#"><i class="fa fa-bar-chart"></i> Total View: <b><?php echo$event['Total_View'];?></b></a>
	                          							<span class="text-danger pull-right"><i class="fa fa-clock-o"></i> Posted On: <b><?php echo$event['Posted_Date'];?></b></span>
	                        						</div>
	                      						</div>
	                    					</div> 
	                  					</div>
			            			<?php if($i==1 || $i==3 || $i==5 || $i==7 || $i==9 || $i==11 || $i==13){?>
										</div>
						            <?php }  endforeach; if($closediv){ ?>
						           	</div>
									<?php }?>	
                  				</div>
                  			</div>
                  			<div class="row">
		              			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              				<button class="pull-right btn-danger" style="margin-top:-35px"> <i class="fa fa-eye"></i> View all News</button>	
		              			</div>
		              		</div>
                  		</div>
                  		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 h4">
							<aside class="mu-sidebar">
			                   <div class="mu-single-sidebar">
				                    <div class="tag-cloud">
				                    	<span class="input-group-addon"><b>From Program Director’s Desk</b></span>
			                    	 	<div id="message_details">
				                          <p><?=$aboutUsDetails->Description?></p>
				                        </div>
				                    	<button class="mu-read-more-btn btn-block btn-warning text-center" href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/directormessage/')"> <i class="fa fa-eye"></i> Read More</button>
				                    	<hr />
				                    </div>
				                    <br /><br />
				                    <div class="tag-cloud">
				                    	<span class="input-group-addon"><b>Publication</b></span>
				                    	<?php foreach($reportList as $i=> $repo): if($repo['Type']=="Publication"){?>
				                        <div class="media" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/reportpublication/<?php echo $repo['Id']?>')">
				                          <div class="mu-latest-course-single-content"> 
				                          	<a href="#">
					                          	<img class="img-thumbnail" src="./uploads/reportpublication/<?php echo$repo['Image'];?>" alt="img" width="100%" style="height:160px">
					                            <p><?php echo$repo['Name'];?></p>
				                            </a>
				                            <span class="fa fa-clock-o pull-right"><?php echo$repo['Created_On'];?></span>
				                          </div>
				                        </div>
				                       <?php } endforeach;  ?>
				                       <hr />

				                       <span class="input-group-addon"><b>Report</b></span>
				                       <br/>
				                    	<?php foreach($reportList as $i=> $repo): if($repo['Type']=="Report"){?>
				                         <div class="media" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/reportpublication/<?php echo $repo['Id']?>')">
				                          <div class="mu-latest-course-single-content"> 
				                          	<a href="#">
					                          	<img class="img-thumbnail" src="./uploads/reportpublication/<?php echo$repo['Image'];?>" alt="img" width="100%" style="height:163px">
					                            <p><?php echo$repo['Name'];?></p>
				                            </a>
				                            <span class="fa fa-clock-o pull-right"><?php echo$repo['Created_On'];?></span>
				                          </div>
				                        </div>
				                       <?php } endforeach;  ?>
				                        <hr />
				                    </div>
				                    <br /><br />
				                    <!-- <div class="tag-cloud">
				                    	<span class="input-group-addon"><b>Tender Anncouncements</b></span>
				                    	<hr />
				                    </div>
				                    <br /><br /> -->
				                    <div class="tag-cloud">
				                    	<span class="input-group-addon"><b>Other Links</b></span>
				                    	<hr />
				                    	<?php   foreach($linkList as $i=> $link): 
				                    		if($link['Link_Type']=="othersitelink"){?>
			                    			<span class="fa fa-angle-double-right"></span>  <a href="<?=$link['Link_Address']?>" target="_blank"><?=$link['Link_Name']?></a><br />
			                    		<?php } endforeach;  ?>
				                    </div>
			                   </div>
			               	</aside>
			             </div>
                  	</div>
              	</div>
          	</div>
     	 </div>
  	</div>
</section>
