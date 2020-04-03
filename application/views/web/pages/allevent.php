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
          							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 h4">
                  					<div class="mu-latest-course-single">
                    						<figure class="mu-latest-course-img">
                      						<a href="./uploads/events/<?php echo$event['Image'];?>" target="_blank"><img src="./uploads/events/<?php echo$event['Image'];?>" alt="img" style="width:100%; height:200px;"></a>
                  							<figcaption class="mu-latest-course-imgcaption text-uppercase text-danger" style="font-size: 13px">
                    								<b><?php echo$event['Event_Name'];?></b>
                  							</figcaption>
                							</figure>
                    						<div class="mu-latest-course-single-content">
                      						<p><?php echo$event['Event_Description'];?></p>
                      						
                      							<?php if($event['New_Status']=="1"){?>
                      								<img src="./uploads/new-star.gif" alt="img" style="width:13%; " class="pull-left">
                                      <button class="pull-right btn-warning" href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/eventDetails/<?php echo $event['Id']?>')" style="font-size: 15px">
                                      <i class="fa fa-eye" style="padding-top: 5px;padding-bottom: 5px;"></i> Read More
                                      </button>
                    								<?php }else{?>
                                      <button class="pull-right btn-warning" href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/eventDetails/<?php echo $event['Id']?>')" style="font-size: 15px">
                    									<i class="fa fa-eye" style="padding-top: 5px;padding-bottom: 5px;"></i> Read More
                                      </button>
                    								<?php }?>
                      							
                      						<div class="mu-latest-course-single-contbottom" style="font-size: 15px">
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