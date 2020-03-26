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
                    <?php foreach($eventDetailsImages as $i=> $img): 
                      if($i==0){?>
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
                    </div>                                   
                  </div>
                </div>
              </div>


              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <aside class="mu-sidebar">
                     <div class="mu-single-sidebar">
                        <div class="tag-cloud">
                          <span class="input-group-addon"><b>From Program Director’s Desk</b></span>
                          <div id="message_details_event">
                              <p><?=$aboutUsDetails->Description?></p>
                            </div>
                          <button class="mu-read-more-btn btn-block btn-warning text-center" href="#" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/directormessage/')"> <i class="fa fa-eye"></i> Read More</button>
                          <hr />
                        </div>
                        <br /><br />
                           <span class="input-group-addon"><b>Report</b></span>
                           <br/>
                          <?php foreach($reportList as $i=> $repo): if($repo['Type']=="Report"){?>
                             <div class="media" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/reportpublication/<?php echo $repo['Id']?>')">
                              <div class="mu-latest-course-single-content"> 
                                <a href="#">
                                  <img class="img-thumbnail" src="./uploads/reportpublication/<?php echo$repo['Image'];?>" alt="img" width="100%" style="height:150px">
                                  <p><?php echo$repo['Name'];?></p>
                                </a>
                                <span class="fa fa-clock-o pull-right"><?php echo$repo['Created_On'];?></span>
                              </div>
                            </div>
                           <?php } endforeach;  ?>
                            <hr />
                        </div>
                     </div>
                  </aside>
               </div>

              <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <aside class="mu-sidebar">
                   <div class="mu-single-sidebar">
                    <h3>Also Visit</h3>
                    <div class="mu-sidebar-popular-courses">
                       <?php foreach($eventList as $i=> $event): ?>
                        <div class="media" onclick="loadeventspage('<?php echo base_url()?>index.php?baseController/loadpage/eventDetails/<?php echo $event['Id']?>')">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="./uploads/events/<?php echo$event['Image'];?>" alt="img">
                            </a>
                          </div>
                          <div class="media-body"> 
                            <h4 class="media-heading"><a href="#"><?php echo$event['Event_Name'];?></a></h4>  
                            <span class="popular-course-price"><?php echo$event['Posted_Date'];?></span>
                          </div>
                        </div>
                       <?php  endforeach;  ?>
                    </div>
                  </div>
                </aside>
             </div> -->
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <script type="text/javascript">
  var content = $("#message_details_event").text().trim();
  $("#message_details_event").text(content.substr(0, 100) + '...');

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

