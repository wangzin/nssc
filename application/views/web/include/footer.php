<style type="text/css">
  .content-desktop{display: block;}
  .content-mobile{display: none}
  @media screen and (max-width: 768px){
    .content-desktop{display: none;}
    .content-mobile{display: block}
  }
  .carousel-caption {
  background: rgba(black, 0.3);
  padding: 15px;
  margin: 0;
  font-size: 19px;
  margin-bottom: 40px;
}
.carousel-progress {
  position: absolute;
  bottom: 0;
  left: 0;
  background: rgba(black, 0.3);
  display: block;
  width: 100%;
  height: 5px;
}
</style>
<footer id="mu-footer">
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">            
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="content-desktop">
                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnssc.gov.bt%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="330" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>  
              </div>
              <div class="content-mobile">  
                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnssc.gov.bt%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280px" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>  
              </div>
                       
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="margin-left: -30px">
              <div class="carousel slide carousel-swipe" id="carousel" data-ride="carousel" data-interval="10000">
                <ol class="carousel-indicators">
                  <?php   foreach($youtubeList as $i => $you): 
                    if($i==0){?>
                      <li class="active" data-target="#carousel" data-slide-to="<?=$i?>"></li>
                    <?php }else{?>
                      <li data-target="#carousel" data-slide-to="<?=$i?>"></li>
                  <?php } endforeach;  ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <?php foreach($youtubeList as $i=> $you): 
                    if($i==0){?>
                      <div class="item active">
                        <div class="content-desktop">
                          <?=$you['Link_Address']?>
                        </div>  
                        <div class="content-mobile">   
                         <?=$you['Link_Address']?>
                        </div>
                      </div>
                    <?php }else{?>
                      <div class="item">
                        <div class="content-desktop">
                          <?=$you['Link_Address']?>
                        </div>  
                        <div class="content-mobile">   
                         <?=$you['Link_Address']?>
                        </div>
                      </div>
                    <?php } endforeach;  ?>
                </div><a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Prev</span></a><a class="right carousel-control" href="#carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">next</span></a>
              </div>

              
            </div>
       
            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                   <p><?=$sitedetails->Site_Location_Address;?></p>
                    <p>Phone# <?=$sitedetails->Site_Contact;?> </p>
                    <p>Fax# <?=$sitedetails->Site_Fax;?></p>
                    <p>Email# <?=$sitedetails->Site_Email;?></p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="#" rel="nofollow">e-Bhutan</a></p>
          <a class="nav-link active" target="_blank" href="<?=base_url()?>index.php?AdminController/logout">
              <button type="button" class="btn btn-primary btn-xs pull-left">
                <i class="fa fa-sign-in"></i>&nbsp;&nbsp;Admin Log In
              </button>
            </a>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/jquery.min.js"></script>  
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/bootstrap.js"></script>   
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/slick.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/jquery.counterup.js"></script>  
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/waypoints.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/jquery.mixitup.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assest/website/js/custom.js"></script> 
  <script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
  <script src="<?php echo base_url();?>assest/jquery.form.js"></script>
  <script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
  <script type="text/javascript">
  var content = $("#message_details").text().trim();
  $("#message_details").text(content.substr(0, 100) + '...');
   $(document).ready(function(){
      $(window).scrollTop(0);
  });

  $(document).ready(function(){
    $(window).scrollTop(0);
});

    function loadpage(pagetype){
      $.blockUI
        ({ 
          css: 
          { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
          } 
        });
      $("#mainpublicContent").load('<?php echo base_url();?>index.php?baseController/loadpage/'+pagetype);
      setTimeout($.unblockUI, 1000); 
    }
    function loadeventspage(url){
    $.blockUI
        ({ 
          css: 
          { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
          } 
        });
      $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
    }
    function loadpagemenu(url){
      $.blockUI
        ({ 
          css: 
          { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff' 
          } 
        });
      $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
    }
    
	 $(".carousel-swipe").each(function(){
  var swipe_obj = this;
  var mc = new Hammer(swipe_obj);
  mc.on("panleft panright panend panstart", function(event) {
    var obj_width = $(swipe_obj).width();
    xPos = event.deltaX;
    moveRight = xPos > 0;
    moveLeft  = !moveRight;
    prevClass = "right prev";
    nextClass = "next left";
    var percent =(1 - (xPos < 0 ? (xPos * (0-1)) / obj_width : xPos / obj_width)).toFixed(5);
    percent = percent < 0 ? 0 : percent;
    console.log(percent);
    $(swipe_obj).find(".item.active").css({"left": xPos+"px", "opacity": percent, "z-index": "9999"});
    if (moveLeft) {
      $(swipe_obj).find(".item").removeClass(prevClass);
      $(swipe_obj).find(".item.active").next().addClass(nextClass);
    } else {
      $(swipe_obj).find(".item").removeClass(nextClass);
      $(swipe_obj).find(".item.active").prev().addClass(prevClass);
    }
    if (event.type == "panend") {
      $(swipe_obj).find(".item").removeClass(nextClass + " " + prevClass);
      clickTo = moveLeft ? "[data-slide=next]" : "[data-slide=prev]";
      $(swipe_obj).find(clickTo).click();
      $(swipe_obj).find(".item").animate({left: "0", "z-index": '', opacity: 1}, 700);
    }
  });
});
</script>