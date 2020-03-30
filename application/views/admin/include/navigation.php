<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview" id="dashboardId">
        <a href="<?php echo base_url();?>index.php?adminController/dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview" id="contact">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/contactAndOthers/','contact')">
          <i class="fa fa-laptop"></i>
          <span>Website General Setting</span>
        </a>
      </li>
      <li id="menusub">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/menuSubMenus/','menusub')">
          <i class="fa fa-navicon"></i>
          <span>Menus and Sub menus</span>
        </a>
      </li>
      
      <li id="sliders">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/slider/','sliders')">
          <i class="fa fa-imdb"></i>
          <span>Manage Slider</span>
        </a>
      </li>
     
      <li id="events">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/otherpagedetails/','soilINfo')">
          <i class="fa fa-empire"></i>
          <span>Soil Management Info</span>
        </a>
      </li>
      <li id="events">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/newsandOthers/','events')">
          <i class="fa fa-empire"></i>
          <span>New and Announcement</span>
        </a>
      </li>
      
      <li id="gallery">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/gallery/','gallery')">
          <i class="fa fa-image"></i>
          <span>Gallery</span>
        </a>
      </li> 
      <li id="booking">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/aboutus/','aboutus')">
          <i class="fa fa-home"></i>
          <span>About Us</span>
        </a>
      </li> 
      <li id="booking">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/publication/','aboutus')">
          <i class="fa fa-area-chart"></i>
          <span>Publication & Reports</span>
        </a>
      </li> 
      <li id="sliders">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/othersitelink/','othersitelink')">
          <i class="fa fa-link"></i>
          <span>Other site link</span>
        </a>
      </li>
      <li id="sliders">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/Youtube/','othersitelink')">
          <i class="fa fa-youtube"></i>
          <span>You tube links</span>
        </a>
      </li>
      <li id="sliders">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/download/','download')">
          <i class="fa fa-download"></i>
          <span>Downloads</span>
        </a>
      </li>
      <li id="sliders">
        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/tender/','tender')">
          <i class="fa fa-download"></i>
          <span>Tender</span>
        </a>
      </li>
    </ul>
  </section>
</aside>