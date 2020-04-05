<style type="text/css">
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
<section id="mu-course-content" style="margin-top: -70px; background:#cb913f">
   <div class="container">
     <div class="row" style="margin-top: -60px;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="">
          <br/>
        <span class="h3"></span>
        </div>
        <br/>
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="carousel slide carousel-swipe" id="carousel" data-ride="carousel" data-interval="10000">
                  <ol class="carousel-indicators">
                    <?php foreach($eventDetailsImages as $i=> $img): 
                      if($i==0){?>
                        <li class="active" data-target="#carousel" data-slide-to="<?=$i?>"></li>
                      <?php }else{?>
                        <li data-target="#carousel" data-slide-to="<?=$i?>"></li>
                    <?php } endforeach;  ?>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <?php $image=""; foreach($eventDetailsImages as $i=> $img): 
                      if($i==0){ $image=$img['Image'];?>
                        <div class="item active">
                          <a href="./uploads/events/<?php echo$img['Image'];?>" target="_blank">
                            <img src="./uploads/events/<?php echo$img['Image'];?>" alt="img" style="object-fit: cover; width: 100%; height: 100%">
                            <div class="carousel-caption"><?php echo$img['ImgDescription'];?></div>
                          </a>
                        </div>
                      <?php }else{?>
                        <div class="item">
                          <a href="./uploads/events/<?php echo$img['Image'];?>" target="_blank">
                            <img src="./uploads/events/<?php echo$img['Image'];?>" alt="img" style="object-fit: cover; width: 100%; height: 500px">
                            <div class="carousel-caption"><?php echo$img['ImgDescription'];?></div>
                          </a>
                          
                        </div>
                      <?php } endforeach;  ?>
                  </div><a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Prev</span></a><a class="right carousel-control" href="#carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">next</span></a>
                </div>
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        
                        <article class="mu-blog-single-item">
                         <figcaption class="text-center pager text-uppercase text-danger">
                            <b><?=$eventDetails->Event_Name;?></b>
                        </figcaption>
                        <hr/>
                        <div class="mu-blog-meta">
                          <a href="#"><?=$eventDetails->Posted_Date;?></a>
                          <span class="pull-right">
                          	<i class="fa fa-eye"></i>Total viewed: <?=$eventDetails->Total_View;?>
                          </span>
                        </div>
                        <div class="mu-blog-description">
                          <p><?=$eventDetails->Event_Details;?></p>
                        </div>
                      </article>
                      <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.e-bhutan.com%2Findex.php%3FbaseController%2Floadpage%2FeventDetails%2F<?=$pageType?>&layout=button&size=large&appId=222395278982640&width=77&height=28" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>                                   
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
     function genericSocialShare(url){
     window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
     return true;
    }
</script>



 <script type="text/javascript">

   var content = $("#message_details").text().trim();
  $("#message_details").text(content.substr(0, 100) + '...');
   $(document).ready(function(){
      $(window).scrollTop(0);
  });
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

