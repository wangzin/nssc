<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 h4" style="margin-left: -20px">
	<aside class="mu-sidebar" style=" background: white;">
       <div class="mu-single-sidebar">
            <div class="tag-cloud">
            	<span class="input-group-addon"><b>From Program Director’s Desk</b></span>
        	 	<div id="message_details" style="font-size: 15px; font-style: oblique;">
                  <p><?=$aboutUsDetails->Description?></p>
                </div>
            	<a class="mu-read-more-btn btn-block btn-warning text-center" href="<?php echo base_url()?>index.php?baseController/loadpagemenu/directormessage/" style="font-size: 12px"> <i class="fa fa-eye"></i> Read More</a>
            	<hr />
            </div>
            <br /><br />
            <div class="tag-cloud">
            	<span class="input-group-addon"><b>Publication</b></span>
            	<?php foreach($reportList as $i=> $repo): if($repo['Type']=="Publication"){?>
                <div class="media">
                  <div class="mu-latest-course-single-content"> 
                  	<a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/reportpublication/<?php echo $repo['Id']?>">
                      	<img class="img-thumbnail" src="./uploads/reportpublication/<?php echo$repo['Image'];?>" alt="img" width="100%" style="height:160px">
                        <p><?php echo$repo['Name'];?></p>
                    </a>
                    <span class="fa fa-clock-o pull-right"><?php echo$repo['Created_On'];?></span>
                  </div>
                </div>
               <?php } endforeach;  ?>
               <!-- <a class="mu-read-more-btn btn-block btn-warning text-center" href="<?php echo base_url()?>index.php?baseController/loadpagemenu/Publication/" style="font-size: 12px"> <i class="fa fa-eye"></i> View All Publication</a> -->
               <hr />

               <span class="input-group-addon"><b>Report</b></span>
            	<?php foreach($reportList as $i=> $repo): if($repo['Type']=="Report"){?>
                 <div class="media">
                  <div class="mu-latest-course-single-content"> 
                  	<a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/reportpublication/<?php echo $repo['Id']?>">
                      	<img class="img-thumbnail" src="./uploads/reportpublication/<?php echo$repo['Image'];?>" alt="img" width="100%" style="height:150px">
                        <p><?php echo$repo['Name'];?></p>
                    </a>
                    <span class="fa fa-clock-o pull-right"><?php echo$repo['Created_On'];?></span>
                  </div>
                </div>
               <?php } endforeach;  ?>
               <!-- <a class="mu-read-more-btn btn-block btn-warning text-center" href="<?php echo base_url()?>index.php?baseController/loadpagemenu/viewallreport/" style="font-size: 12px"> <i class="fa fa-eye"></i> View All Report</a> -->
                <hr />
            </div>
            <br /><br />
            <div class="tag-cloud">
            	<span class="input-group-addon"><b>Tender Anncouncements</b></span>
            	<?php   foreach($tenderList as $i=> $link): ?>
        			<a href="#<?php echo base_url()?>index.php?baseController/loadpagemenu/otehrdetails/<?php echo $link['Id']?>/submenu"><?=$link['Name']?></a><br />
        		<?php endforeach;  ?>
            </div>
            <br /><br />
            <div class="tag-cloud">
            	<span class="input-group-addon"><b>Other Links</b></span>
            	<hr />
            	<?php   foreach($linkList as $i=> $link): 
            		if($link['Link_Type']=="othersitelink"){?>
        			<a href="<?=$link['Link_Address']?>" target="_blank"><span class="fa fa-angle-double-right"></span>  <?=$link['Link_Name']?></a><br />
        		<?php } endforeach;  ?>
            <a class="mu-read-more-btn btn-block btn-warning text-center" href="<?php echo base_url()?>index.php?baseController/loadpagemenu/loadalllink/" style="font-size: 12px"> <i class="fa fa-eye"></i> View All Links</a>
            </div>
       </div>
   	</aside>
 </div>

 <script type="text/javascript">
  
  
 </script>