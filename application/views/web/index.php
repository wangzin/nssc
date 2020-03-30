<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/include/cssFile.php'); ?> 
<body style="background:#734a26">
	<div class="container">
		<?php $this->load->view('web/include/header.php');
	  	$this->load->view('web/include/nevagation.php'); ?> 
	  	<div id="mainpublicContent">
	  		<?php $this->load->view('web/include/slider.php');?> 
	  		<?php $this->load->view('web/include/newsAndAnnouncement.php');?> 
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
<!-- <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '3f4d03a1-4c5e-4613-bfae-fd7405b651f3', f: true }); done = true; } }; })();
</script> -->


