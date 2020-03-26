<section id="" style="background:#cb913f">	
    <div class="container">
	 	<div class="mu-title page-header">
          	<h2>Admin & Accounts</h2>              
        </div>
        <div class="mu-from-blog-content">
        	<div class="row">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<?php   foreach($staffList as $i=> $st): if($st['Department']=="Admin & Accounts"){?>
							<div class="col-lg-3 col-md-3 col-sm-3 pager">
							  	<article class="mu-blog-single-item btn-danger">
									<figure class="mu-blog-single-img">
									 <a href="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" target="_blank">
									 	<br />
				                  		<img class="img-thumbnail" src="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" style="width:77%; height:235px;object-fit: cover;"> 
					                  	</a>
									  <figcaption class="mu-blog-caption">
										<b><a href="#"><?php echo$st['Full_Name'];?></a></b>
									  </figcaption>                      
									</figure>
									<div class="">
									  <p><i class="fa fa-user-secret"></i>  Designation: <?php echo$st['Designation'];?></p>
									  <p><i class="fa fa-envelope"></i> Email: <?php echo$st['Email_Id'];?></p>							  
									</div>
							  	</article>
							</div>
			            <?php } endforeach;  ?>
					</div>
				</div>
			</div>
        </div>
        <div class="mu-title page-header">
          	<h2>Soil Survey Unit</h2>              
        </div>
        <div class="mu-from-blog-content">
        	<div class="row">
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<?php   foreach($staffList as $i=> $st): if($st['Department']=="Soil Survey Unit"){?>
							<div class="col-lg-3 col-md-3 col-sm-3 pager">
							  	<article class="mu-blog-single-item btn-danger">
									<figure class="mu-blog-single-img"><br />
									 <a href="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" target="_blank">
				                  		<img class="img-thumbnail" src="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" style="width:77%; height:235px;object-fit: cover;"> 
					                  	</a>
									  <figcaption class="mu-blog-caption">
										<b><a href="#"><?php echo$st['Full_Name'];?></a></b>
									  </figcaption>                      
									</figure>
									<div class="">
									  <p><i class="fa fa-user-secret"></i>  Designation: <?php echo$st['Designation'];?></p>
									  <p><i class="fa fa-envelope"></i> Email: <?php echo$st['Email_Id'];?></p>								  
									</div>
							  	</article>
							</div>
			            <?php } endforeach;  ?>
					</div>
				</div>
			</div>
        </div>
        <div class="mu-title page-header">
          	<h2>Soil Microbiology Unit</h2>              
        </div>
        <div class="mu-from-blog-content">
        	<div class="row">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<?php   foreach($staffList as $i=> $st): if($st['Department']=="Soil Microbiology Unit"){?>
							<div class="col-lg-3 col-md-3 col-sm-3 pager">
							  	<article class="mu-blog-single-item btn-danger">
									<figure class="mu-blog-single-img"><br />
									 <a href="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" target="_blank">
				                  		<img class="img-thumbnail" src="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" style="width:77%; height:235px;object-fit: cover;"> 
					                  	</a>
									  <figcaption class="mu-blog-caption">
										<b><a href="#"><?php echo$st['Full_Name'];?></a></b>
									  </figcaption>                      
									</figure>
									<div class="">
									  <p><i class="fa fa-user-secret"></i>  Designation: <?php echo$st['Designation'];?></p>
									  <p><i class="fa fa-envelope"></i> Email: <?php echo$st['Email_Id'];?></p>								  
									</div>
							  	</article>
							</div>
			            <?php } endforeach;  ?>
					</div>
				</div>
			</div>
        </div>
        <div class="mu-title page-header">
          	<h2>Soil Fertility Unit</h2>              
        </div>
        <div class="mu-from-blog-content">
        	<div class="row">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<?php   foreach($staffList as $i=> $st): if($st['Department']=="Soil Fertility Unit"){?>
							<div class="col-lg-3 col-md-3 col-sm-3 pager">
							  	<article class="mu-blog-single-item btn-danger">
									<figure class="mu-blog-single-img"><br />
									 <a href="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" target="_blank">
				                  		<img class="img-thumbnail" src="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" style="width:77%; height:235px;object-fit: cover;"> 
					                  	</a>
									  <figcaption class="mu-blog-caption">
										<b><a href="#"><?php echo$st['Full_Name'];?></a></b>
									  </figcaption>                      
									</figure>
									<div class="">
									  <p><i class="fa fa-user-secret"></i>  Designation: <?php echo$st['Designation'];?></p>
									  <p><i class="fa fa-envelope"></i> Email: <?php echo$st['Email_Id'];?></p>								  
									</div>
							  	</article>
							</div>
			            <?php } endforeach;  ?>
					</div>
				</div>
			</div>
        </div>
        <div class="mu-title page-header">
          	<h2>Land Management Unit</h2>              
        </div>
        <div class="mu-from-blog-content">
        	<div class="row">
			   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<?php   foreach($staffList as $i=> $st): if($st['Department']=="Land Management Unit"){?>
							<div class="col-lg-3 col-md-3 col-sm-3 pager">
							  	<article class="mu-blog-single-item btn-danger">
									<figure class="mu-blog-single-img"><br />
									 <a href="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" target="_blank">
				                  		<img  class="img-thumbnail" src="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" style="width:77%; height:235px;object-fit: cover;"> 
					                  	</a>
									  <figcaption class="mu-blog-caption">
										<b><a href="#"><?php echo$st['Full_Name'];?></a></b>
									  </figcaption>                      
									</figure>
									<div class="">
									  <p><i class="fa fa-user-secret"></i>  Designation: <?php echo$st['Designation'];?></p>
									  <p><i class="fa fa-envelope"></i> Email: <?php echo$st['Email_Id'];?></p>							  
									</div>
							  	</article>
							</div>
			            <?php } endforeach;  ?>
					</div>
				</div>
			</div>
        </div>
    	<div class="mu-title page-header">
          	<h2>Soil & Plant Analytical Lab Unit</h2>              
        </div>
        <div class="mu-from-blog-content">
        	<div class="row">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<?php   foreach($staffList as $i=> $st): if($st['Department']=="Soil & Plant Analytical Lab Unit"){?>
							<div class="col-lg-3 col-md-3 col-sm-3 pager">
							  	<article class="mu-blog-single-item btn-danger">
									<figure class="mu-blog-single-img"><br/>
									 <a href="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" target="_blank">
				                  		<img class="img-thumbnail" src="<?php echo base_url();?>uploads/staff/<?php echo$st['Image_Path'];?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" style="width:77%; height:235px;object-fit: cover;"> 
					                  	</a>
									  <figcaption class="mu-blog-caption">
										<b><a href="#"><?php echo$st['Full_Name'];?></a></b>
									  </figcaption>                      
									</figure>
									<div class="">
									  <p><i class="fa fa-user-secret"></i>  Designation: <?php echo$st['Designation'];?></p>
									  <p><i class="fa fa-envelope"></i> Email: <?php echo$st['Email_Id'];?></p>								  
									</div>
							  	</article>
							</div>
			            <?php } endforeach;  ?>
					</div>
				</div>
			</div>
        </div>
    </div>
</section>
