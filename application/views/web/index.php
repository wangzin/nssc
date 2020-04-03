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
	  	<!-- <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.ngn.bt%2Findex.php%3Fweb%2Fsub_page%2F22%2F51&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
		<?php $this->load->view('web/include/footer.php'); ?>
	</div>
	<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

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


