<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/include/cssFile.php'); ?> 
<body> 
	<?php $this->load->view('web/include/header.php');
  	$this->load->view('web/include/nevagation.php'); ?> 
  	<div id="mainpublicContent">
  		<?php $this->load->view('web/include/slider.php');?> 
  		<?php $this->load->view('web/include/newsAndAnnouncement.php');?> 
  	</div>
	<?php $this->load->view('web/include/footer.php'); ?>
</body> 
