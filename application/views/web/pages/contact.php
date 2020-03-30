  <section id="mu-contact" style="margin-top: -70px; background:#cb913f">
    <div class="container">
        <div class="row" style="margin-top: -60px;">
            <div class="col-md-12">
                <div class="mu-contact-area mu-course-content-area">
                    
                    <div class="mu-contact-content">           
                        <div class="row">
                            <div class="col-md-9">
                              <div class="mu-title">
                        <p><h3><b>Contact us At</b></h3></p>
                    <hr>
                    </div>
                    <p><?=$sitedetails->Site_Location_Address;?></p>
                    <p>Phone# <?=$sitedetails->Site_Contact;?> </p>
                    <p>Fax# <?=$sitedetails->Site_Fax;?></p>
                    <p>Email# <?=$sitedetails->Site_Email;?></p>
                                <div class="mu-contact-left">
                                    <form class="contactform" id="contactForm"> 
                                        <p class="comment-form-author">
                                          <label for="author">Name <span class="required">*</span></label>
                                          <input type="text" onclick="removeerr('name_err')" name="Sender_Name" id="name">
                                          <span id="name_err" class=""></span>
                                        </p>
                                        <p class="comment-form-email">
                                          <label for="email">Email <span class="required">*</span></label>
                                          <input type="email" onclick="removeerr('email_err')" name="Sender_Email" id="email">
                                          <span id="email_err" class=""></span>
                                        </p>
                                        <p class="comment-form-email">
                                          <label for="email">Phone <span class="required">*</span></label>
                                          <input type="text" onclick="removeerr('Phone_err')" value="" name="Sender_Contact" id="Phone">
                                          <span id="Phone_err" class=""></span>
                                        </p>
                                        <p class="comment-form-url">
                                          <label for="subject">Subject</label>
                                          <input type="text" name="Subject" id="subject" >  
                                        </p>
                                        <p class="comment-form-comment">
                                          <label for="comment">Message <span class="required">*</span></label>
                                          <textarea onclick="removeerr('comment_err')" rows="8" cols="45" name="Message" id="comment"></textarea>
                                          <span id="comment_err" class=""></span>
                                        </p>                
                                        <p class="form-submit">
                                          <input type="button" onclick="sendmessage()" value="Send Message" class="mu-post-btn" name="submit">
                                        </p>        
                                    </form>
                                </div>
                                <div class="mu-contact-right">
                                    <?php echo $sitedetails->Site_Location_Map;?>
                                </div>
                            </div>
                            <?php $this->load->view('web/include/sidebar.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <script type="text/javascript">
     function sendmessage(){
        if(vlidateform()){
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
          var url='<?php echo base_url();?>index.php?baseController/sendMessage/';
          var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#contactForm").serialize()}; 
          $("#contactForm").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
        }
     }
     function vlidateform(){
        var returtye=true;
        if($('#name').val()==""){
            $('#name_err').html('Plese mention your name');
            $('#name').focus();
            returtye=false;
        }
        if($('#email').val()==""){
            $('#email_err').html('Plese mention your email');
            $('#email').focus();
            returtye=false;
        }
        if($('#Phone').val()==""){
            $('#Phone_err').html('Plese mention your phone');
            $('#Phone').focus();
            returtye=false;
        }
        if($('#comment').val()==""){
            $('#comment_err').html('Plese mention your message');
            $('#comment').focus();
            returtye=false;
        }
        return returtye;
     }
     function removeerr(errId){
      $('#'+errId).html('');
    }
    var content = $("#message_details").text().trim();
  $("#message_details").text(content.substr(0, 100) + '...');
   $(document).ready(function(){
      $(window).scrollTop(0);
  });
 </script>