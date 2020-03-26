<section id="mu-slider">
  <?php 
    foreach($slider as $i=> $slider):
  ?>
   <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="<?php echo base_url();?>uploads/slider/<?php echo$slider['Slider_Image'];?>" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content" style="margin-top: 315px">
        <h4><?php echo$slider['Slider_Name'];?></h4>
        <span></span>
        <p><?php echo$slider['Slider_Description'];?>.</p>
      </div>
    </div>
  <?php 
    endforeach; 
  ?>
</section>