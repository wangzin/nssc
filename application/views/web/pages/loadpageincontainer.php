<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/include/cssFile.php'); ?> 
<body style="background:#734a26">
	<div class="container">
		<?php $this->load->view('web/include/header.php');
	  	$this->load->view('web/include/nevagation.php'); ?> 
	  	<div id="mainpublicContent">
	  		<?php $this->load->view('web/pages/'.$PageType.'.php');?> 
	  	</div>
		<?php $this->load->view('web/include/footer.php'); ?>
	</div>
</body> 
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5e7dbefd35bcbb0c9aaaed48/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
</script>



