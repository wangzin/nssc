<section id="mu-menu" class="">
    <nav class="navbar navbar-default" role="navigation" style="background:#6f4725f5">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>">
            <span  class="img-thumbnail" style="margin-top: -15px; margin-left: -15px"> <img src="<?php echo base_url();?>uploads/logo/<?=$sitedetails->Site_Logo_Initial;?>" style="width:50px" alt=""> </span><span style=" color: white;"><?=$sitedetails->Site_Name;?></span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <b><ul id="top-menu" class="nav navbar-nav navbar-right main-nav" style="margin-right: 15px">
            <li class=""><a href="<?=base_url()?>" style=" color: white;"> <i class="fa fa-home"></i>&nbsp;Home</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" color: white;">About Us<span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li>
                     <!-- <a href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/aboutus/')"><?=$aboutUsDetails->Title?></a> -->
                     <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/aboutus/"><?=$aboutUsDetails->Title?></a>
                  </li> 
                  <li>
                     <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/staffDetails/">Who is Who</a>
                     <!-- <a href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/staffDetails/')">Who is Who</a> -->
                  </li> 
                   <li>
                    <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/gallery/" >Gallery</a></li>
                </ul>
              </li>
            <?php 
              foreach($menulist as $i=> $menulist):
                if($menulist['Submenustatus']=="Y"){
            ?> 
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" color: white;"><?php echo $menulist['MenuName']; ?><span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                <?php 
                  foreach($submenulist as $i=> $sub):
                    if($sub['MenuId']==$menulist['Id']){
                ?>
                  <li>
                     <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/menulinkdetails/<?php echo $sub['Id']?>/submenu"><?php echo $sub['SubMenuName'] ?></a>
                     <!-- <a href="#" onclick="loadpagemenu('<?php echo base_url()?>index.php?baseController/loadpagemenu/menulinkdetails/<?php echo $sub['Id']?>/submenu')"><?php echo $sub['SubMenuName'] ?></a> -->
                  </li>  
                  <?php }  
                      endforeach; 
                  ?> 
              </ul>
            </li> 
            <?php } else{ if($menulist['Details']!=""){?>
              <li>
                 <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/menulinkdetails/<?php echo $menulist['Id']?>/menu">
                    <?php echo $menulist['MenuName']; ?>
                </a>
              </li>
            <?php } }
                endforeach; 
            ?>  
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" color: white;">Publications<span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li>
                     <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/Sustainable/">Technical Report</a>
                  </li> 
                  <li>
                     <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/Brochures/">Brochures</a>
                  </li> 
                  <li>
                     <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/technialrepo/">Technical Report</a>
                  </li> 
                </ul>
              </li>   
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" color: white;">Soil Manangement Info<span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <?php 
                    foreach($otherpageList as $i=> $other):
                  ?>
                    <li>
                       <a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/otehrdetails/<?php echo $other['Id']?>/submenu"><?php echo $other['Name'] ?></a>
                    </li>  
                    <?php  
                        endforeach; 
                    ?> 
                </ul>
            </li> 
            <li><a href="<?php echo base_url()?>index.php?baseController/loadpagemenu/downloadpage"  style=" color: white;">Downloads</a></li>
            <li><a href="#" onclick="loadpage('contact')" style=" color: white;">Contact</a></li>
          </ul>   
          </b>                  
        </div>    
      </div>     
    </nav>
  </section>

   <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("mu-menu");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("fixed-top");
  } else {
    header.classList.remove("fixed-top");
  }
}
</script>