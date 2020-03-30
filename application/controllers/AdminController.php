<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller {
    public function logout(){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?adminController/login', 'refresh');
    }
    function login(){ 
        $page_data['sitedetails'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
        if($this->input->post('email')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('t_user_master', array(
            'Email_Id' => $this->input->post('email')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if(password_verify($this->input->post('password'), $row['Password'])){
                    $this->session->set_userdata('Full_Name', $row['Full_Name']);
                    $this->session->set_userdata('userId', $row['Id']);
                    $this->session->set_userdata('roleId', $row['Role_Id']);
                    $this->session->set_userdata('UserName', $row['Email_Id']);
                    redirect(base_url().'index.php?adminController/dashboard', 'refresh');
                    return TRUE;
                }
                else{
                    $page_data['message'] = '<div class="alert alert-danger">Password mismatch! </div>';
                    $this->load->view('admin/login',$page_data );
                    return FALSE;
                }
            } 
            else{
                $page_data['message'] = '<div class="alert alert-danger">Your email and password mismatch. please try agin or use forgot password if you are not sure with current password</div>';
                $this->load->view('admin/login',$page_data );
                return FALSE;
            }
        } 
        else{
            $page_data['message'] = '';
            $this->load->view('admin/login',$page_data );
        }
    }
    function dashboard(){
        $page_data['formSubmit']="";
        $page_data['sitedetails'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
        $page_data['comments'] = $this->AdminModel->getpublicMessages();
        $page_data['message']="";
        if ($this->session->userdata('UserName') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('admin/dashboard', $page_data);
        }
    }
    function loadPage($param1="",$param2="",$param3=""){
        if($param1=="messages"){
            $page_data['messagetype'] = 'messagentread';
             $page_data['comments'] = $this->AdminModel->getpublicMessages();
            $this->load->view('admin/pages/messages', $page_data);
        } 
        if($param1=="messagesAll"){
            $page_data['messagetype'] = 'messageAll';
            $page_data['comments'] = $this->AdminModel->getAllpublicMessages();
            $this->load->view('admin/pages/messages', $page_data);
        }
        if($param1=="getmessageDetails"){
            $page_data['messagetype'] = 'messageread';
            $data['Visited_Satus']="Y";
            $this->AdminModel->updateReadMessage($param2,$data);
            $page_data['comments'] = $this->AdminModel->getMessageDetails($param2);
            $this->load->view('admin/pages/messagesDetails', $page_data);
        }
        if($param1=='profile' || $param1=='password'){
            $page_data['userDetails']= $this->AdminModel->getuserDetails($param2); 
            $page_data['pagetype']=$param1;
            $this->load->view('admin/pages/profile_password', $page_data);
        }

        if($param1=="contactAndOthers"){
            $page_data['generalinfo'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
            $this->load->view('admin/pages/contactAndOthers', $page_data);
        }
        if($param1=="guidelines"){
            $page_data['type']= $param2;
            $page_data['generalinfo'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
            $this->load->view('admin/pages/guidelines', $page_data);
        }
        if($param1=="menuSubMenus"){
            $page_data['menulist'] = $this->AdminModel->getAlltablerow('t_menu_master'); 
            $page_data['submenulist'] = $this->AdminModel->getAlltablerow('t_sub_menu_master'); 
            $this->load->view('admin/pages/menuSubMenus', $page_data);
        }
        if($param1=="editmenusubmenu"){
            $table="";
            if($param3=="submenu"){
                $table='t_sub_menu_master';
            }
            if($param3=="menu"){
                $table='t_menu_master';
            }
            $page_data['type']= $param3;
            $page_data['menuDetails']=  $this->AdminModel->getfromtable($table,'condition1','Id/'.$param2);
            $this->load->view('admin/pages/editmenuSubMenus', $page_data);
        }
        
        if($param1=="slider"){
            $page_data['slider'] = $this->db->get('t_slider_details')->result_array(); 
            $this->load->view('admin/pages/slider', $page_data);
        }

        if($param1=="newsandOthers"){
            $page_data['eventList'] = $this->db->get('t_event_dtls')->result_array(); 
            $this->load->view('admin/event/event', $page_data);
        }
        if($param1=="editEvents"){
            $page_data['eventdeails'] = $this->db->get_where('t_event_dtls',array('Id'=>$param2))->row();
            $page_data['eventimagesList'] = $this->db->get_where('t_event_images',array('Event_Id'=>$param2))->result_array();; 
            $this->load->view('admin/event/editEvents', $page_data);
        }
        if($param1=="othersitelink" || $param1=="Youtube"){
            if($param2=="addlink"){
                $data['Link_Name']=$this->input->post('Event_Name');
                $data['Link_Address']=$this->input->post('Event_Description'); 
                $data['Link_Type']=$this->input->post('Event_Type'); 
                $data['Posted_Date']=date('Y-m-d');
                if($this->input->post('actiontype')=="add"){
                    $this->AdminModel->do_insert('t_link_dtls', $data);
                }
                else{
                    $this->db->where('Id', $this->input->post('editId'));
                    $this->db->update('t_link_dtls`', $data);
                }
            }
            if($param2=="deletelink"){
                $this->db->where('Id', $param3);
                $this->db->delete('t_link_dtls');
            }
            $page_data['linkList'] = $this->db->get('t_link_dtls')->result_array();
            $this->load->view('admin/pages/'.$param1, $page_data);
        }
        if($param1=="aboutus"){
            $add_update_data['Full_Name']=$this->input->post('Full_Name'); 
            $add_update_data['Designation']=$this->input->post('Designation'); 
            $add_update_data['Email_Id']=$this->input->post('Email_Id');
            $add_update_data['Department']=$this->input->post('Department');
            if(!empty($_FILES["passImage"]["name"])){
                if($this->input->post('currentimage')!=""){
                    $fle="./uploads/staff/".$this->input->post('currentimage');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                move_uploaded_file($_FILES['passImage']['tmp_name'],'./uploads/staff/'.$_FILES["passImage"]["name"]);
                $add_update_data['Image_Path']=$_FILES["passImage"]["name"];
            }
            if($this->input->post('actiontype')=="add"){
                $this->AdminModel->do_insert('t_staff_dtls', $add_update_data);  
            }
            if($this->input->post('actiontype')=="editdetails"){
                $this->db->where('Id', $this->input->post('recordid'));
                $this->db->update('t_staff_dtls', $add_update_data);
            }
            if($this->input->post('actiontype')=="delete"){
                $fle="./uploads/staff/".$this->input->post('imageId');
                if (file_exists($fle)){
                    unlink($fle);
                }
                $this->db->where('Id',$this->input->post('deletemenuId'));
                $this->db->delete('t_staff_dtls');
            }
            if($this->input->post('actiontype')=="general"){
                $update_data['Title']=$this->input->post('Title'); 
                $update_data['Description']=$this->input->post('Description'); 
                $update_data['DirectorMsg']=$this->input->post('DirectorMsg'); 
                
                if(!empty($_FILES["pageimage"]["name"])){
                    if($this->input->post('currentaboutimage')!=""){
                        $fle="./uploads/".$this->input->post('currentaboutimage');
                        if (file_exists($fle)){
                            unlink($fle);
                        }
                    }
                    move_uploaded_file($_FILES['pageimage']['tmp_name'],'./uploads/'.$_FILES["pageimage"]["name"]);
                    $update_data['Image']=$_FILES["pageimage"]["name"];
                }
                $this->db->where('Id',1);
                $this->db->update('t_about_us', $update_data);
            }
            $page_data['aboutUsDetails'] = $this->db->get_where('t_about_us',array('Id'=>'1'))->row();
            $page_data['staffList'] = $this->db->get('t_staff_dtls')->result_array(); 
            $this->load->view('admin/pages/aboutus', $page_data);
        }
        if($param1=="gallery"){
            $add_update_data['Description']=$this->input->post('Slider_Description');
            if(!empty($_FILES["Slider_Image"]["name"])){
                if($this->input->post('currentimage')!=""){
                    $fle="./uploads/gallery/".$this->input->post('currentimage');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                move_uploaded_file($_FILES['Slider_Image']['tmp_name'],'./uploads/gallery/'.$_FILES["Slider_Image"]["name"]);
                $add_update_data['Name']=$_FILES["Slider_Image"]["name"];
            }
            if($this->input->post('actiontype')=="addgalery"){
                $this->AdminModel->do_insert('t_gallery_dtls', $add_update_data);  
            }
            if($this->input->post('actiontype')=="editgalery"){
                $this->db->where('Id',$this->input->post('galleryId'));
                $this->db->update('t_gallery_dtls', $add_update_data);
            }
            if($this->input->post('actiontype')=="delete"){
                if($this->input->post('deleteimageId')!=""){
                    $fle="./uploads/gallery/".$this->input->post('deleteimageId');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                $this->db->where('Id',$this->input->post('deleteId'));
                $this->db->delete('t_gallery_dtls');
            }
            
            $page_data['galleyList'] = $this->db->get('t_gallery_dtls')->result_array(); 
            $this->load->view('admin/pages/gallery', $page_data);
        }
        if($param1=="publication"){
            $add_update_data['Name']=$this->input->post('Name'); 
            $add_update_data['Type']=$this->input->post('Type'); 
            $add_update_data['Description']=$this->input->post('Description');
            $add_update_data['Created_On']=date('Y-m-d');
            if(!empty($_FILES["Image"]["name"])){
                if($this->input->post('currentimageid')!=""){
                    $fle="./uploads/reportpublication/".$this->input->post('currentimageid');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/reportpublication/'.$_FILES["Image"]["name"]);
                $add_update_data['Image']=$_FILES["Image"]["name"];
            }
            if(!empty($_FILES["References_Link"]["name"])){
                if($this->input->post('currentattachmentid')!=""){
                    $fle="./uploads/reportpublication/".$this->input->post('currentattachmentid');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                move_uploaded_file($_FILES['References_Link']['tmp_name'],'./uploads/reportpublication/'.$_FILES["References_Link"]["name"]);
                $add_update_data['References_Link']=$_FILES["References_Link"]["name"];
            }
            if($this->input->post('actiontype')=="add"){
                $this->AdminModel->do_insert('t_publication_report_dtls', $add_update_data);  
            }
            if($this->input->post('actiontype')=="editdetails"){
                $this->db->where('Id',$this->input->post('recordid'));
                $this->db->update('t_publication_report_dtls', $add_update_data);
            }
            if($this->input->post('actiontype')=="delete"){
                if($this->input->post('imageId')!=""){
                    $fle="./uploads/reportpublication/".$this->input->post('imageId');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                if($this->input->post('attachmentdelId')!=""){
                    $fle="./uploads/reportpublication/".$this->input->post('attachmentdelId');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                $this->db->where('Id',$this->input->post('deletemenuId'));
                $this->db->delete('t_publication_report_dtls');
            }
            $page_data['reportList'] = $this->db->get('t_publication_report_dtls')->result_array();
            $this->load->view('admin/pages/publication', $page_data);
        }
        
        if($param1=="otherpagedetails" || "tender"){
            $add_update_data['Name']=$this->input->post('Name'); 
            $add_update_data['Type']=$this->input->post('Type'); 
            $add_update_data['Description']=$this->input->post('Description');
            $add_update_data['Created_On']=date('Y-m-d');
            if(!empty($_FILES["Image"]["name"])){
                if($this->input->post('currentimageid')!=""){
                    $fle="./uploads/otherPageImages/".$this->input->post('currentimageid');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                move_uploaded_file($_FILES['Image']['tmp_name'],'./uploads/otherPageImages/'.$_FILES["Image"]["name"]);
                $add_update_data['Image']=$_FILES["Image"]["name"];
            }
            if(!empty($_FILES["References_Link"]["name"])){
                if($this->input->post('currentattachmentid')!=""){
                    $fle="./uploads/otherpagereferences/".$this->input->post('currentattachmentid');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                move_uploaded_file($_FILES['References_Link']['tmp_name'],'./uploads/otherpagereferences/'.$_FILES["References_Link"]["name"]);
                $add_update_data['References_Link']=$_FILES["References_Link"]["name"];
            }
            if($this->input->post('actiontype')=="add"){
                $this->AdminModel->do_insert('t_other_page_dtls', $add_update_data);  
            }
            if($this->input->post('actiontype')=="editdetails"){
                $this->db->where('Id',$this->input->post('recordid'));
                $this->db->update('t_other_page_dtls', $add_update_data);
            }
            if($this->input->post('actiontype')=="delete"){
                if($this->input->post('imageId')!=""){
                    $fle="./uploads/otherPageImages/".$this->input->post('imageId');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                if($this->input->post('attachmentdelId')!=""){
                    $fle="./uploads/otherpagereferences/".$this->input->post('attachmentdelId');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                $this->db->where('Id',$this->input->post('deleteId'));
                $this->db->delete('t_other_page_dtls');
            }
            $page_data['otherpageList'] = $this->db->get('t_other_page_dtls')->result_array();
            $this->load->view('admin/pages/otherpagedetails', $page_data);
        }
        if($param1=="editotherpage"){
            $page_data['pagedeails'] = $this->db->get_where('t_other_page_dtls',array('Id'=>$param2))->row();
            $this->load->view('admin/pages/editotherpagedetails', $page_data);
        }
        
        if($param1=="download"){
            $data['Name']=$this->input->post('Event_Name');
            $data['Link_Type']=$this->input->post('Link_Type'); 
            if($this->input->post('Link_Type')=="Attached File"){
                move_uploaded_file($_FILES['References_Link']['tmp_name'],'./uploads/downloadAttachments/'.$_FILES["References_Link"]["name"]);
                $data['Link_Address']=$_FILES["References_Link"]["name"];
            }
            else{
                $data['Link_Address']=$this->input->post('Link_Address');
            }
            $data['Posted_Date']=date('Y-m-d');
            if($this->input->post('actiontype')=="add"){
                $this->AdminModel->do_insert('t_download_dtls', $data);  
            }
            if($this->input->post('actiontype')=="delete"){
                if($this->input->post('imageId')!=""){
                    $fle="./uploads/downloadAttachments/".$this->input->post('imageId');
                    if (file_exists($fle)){
                        unlink($fle);
                    }
                }
                $this->db->where('Id',$this->input->post('deleteId'));
                $this->db->delete('t_download_dtls');
            }
            $page_data['downloadList'] = $this->db->get('t_download_dtls')->result_array();
            $this->load->view('admin/pages/downloads', $page_data);
        }
        
    }



    function UpdateInfo($param1=""){
        $page_data['formSubmit']="";
        $page_data['message']="";
        $page_data['messagefail']="";
        if($param1=='profile'){
            $data['Full_Name']=$this->input->post('FullName');
            $this->db->where('Id', $this->input->post('UserId'));
            $this->db->update('t_user_master`', $data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Your profile is updated. Please logout and login back if changes are not reflected';
            }
            else{
                $page_data['messagefail']='No changes are found to be updated.';
            } 
            $this->load->view('admin/pages/acknowledgement', $page_data);           
        }
        if($param1=='password'){
            $data['Password']=password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT);
            $this->db->where('Id', $this->input->post('UserId'));
            $this->db->update('t_user_master`', $data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Password details are updated. Please logout and login back';
            }
            else{
                $page_data['messagefail']='Not able to update your password.pease try again';
            } 
            $this->load->view('admin/pages/acknowledgement', $page_data); 
        }

        if($param1=='general'){
            $data['Site_Contact']=$this->input->post('Contact_Number');
            $data['Site_Email']=$this->input->post('Contact_Email');
            $data['Site_Location_Address']=$this->input->post('Contact_Location_Address');
            $data['Site_Location_Map']=$this->input->post('Contact_Location_Map');
            $data['Site_Face_Book']=$this->input->post('Contact_Face_Book');
            $data['Site_Twitter']=$this->input->post('Contact_Twitter');
            $data['Site_Instagram']=$this->input->post('Contact_Instegram');
            $data['Site_Name']=$this->input->post('Site_Name'); 
            $data['Site_Fax']=$this->input->post('Site_Fax'); 
            $data['Site_Marquee']=$this->input->post('Site_Marquee'); 
            if(!empty($_FILES["Logo_Ini_Link"]["name"])){
                $fle="../uploads/logo/".$this->input->post('currentlogoinivalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Logo_Ini_Link']['tmp_name'],'./uploads/logo/'.$_FILES["Logo_Ini_Link"]["name"]);
                $data['Site_Logo_Initial']=$_FILES["Logo_Ini_Link"]["name"];
            }
            if(!empty($_FILES["Logo_Link"]["name"])){
                $fle="../uploads/logo/".$this->input->post('currentlogovalue');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Logo_Link']['tmp_name'],'./uploads/logo/'.$_FILES["Logo_Link"]["name"]);
                $data['Site_Logo']=$_FILES["Logo_Link"]["name"];
            }
            $this->AdminModel->updatewebsitedDetails('1',$data);
            if($this->db->affected_rows()>0){
                $page_data['message']='Your Information is updated. Please check and confirm once. Thank you';
            }
            else{
                $page_data['messagefail']='No changes are found to be updated.';
            } 
            $this->load->view('admin/pages/acknowledgement', $page_data);           
        }

        if($param1=="addmenuSubmenu"){            
            $data['Details']=$this->input->post('addedmenudetais'); 
            if(!empty($_FILES["pageimage"]["name"])){
                move_uploaded_file($_FILES['pageimage']['tmp_name'],'./uploads/menuImages/'.$_FILES["pageimage"]["name"]);
                $data['Page_Image']=$_FILES["pageimage"]["name"];
                $data1['Page_Image']=$_FILES["pageimage"]["name"];
            }
            
            $data['Added_Date']=date('Y-m-d');
            if($this->input->post('menutype')=="mainmenu"){
                $data['MenuName']=$this->input->post('MenuName');
                $data['Submenustatus']=$this->input->post('submenuoption'); 
                $id=$this->AdminModel->do_insert('t_menu_master', $data);
                if($this->input->post('submenuoption')=="Y"){
                   $data1['SubMenuName']=$this->input->post('subMenuName');
                   $data1['Details']=$this->input->post('addedmenudetais');      
                   $data1['MenuId']=$id; 
                   $this->AdminModel->do_insert('t_sub_menu_master', $data1);    
                }
            }
            else{
                $data1['Added_Date']=date('Y-m-d');
                $data1['SubMenuName']=$this->input->post('MenuName');
                $data1['Details']=$this->input->post('addedmenudetais');      
                $data1['MenuId']=$this->input->post('selectmainmenu'); 
                $this->AdminModel->do_insert('t_sub_menu_master', $data1);
                $datamain['Submenustatus']="Y";
                $this->db->where('Id', $this->input->post('selectmainmenu'));
                $this->db->update('t_menu_master`', $datamain); 
            }
            $page_data['menulist'] = $this->AdminModel->getAlltablerow('t_menu_master'); 
            $page_data['submenulist'] = $this->AdminModel->getAlltablerow('t_sub_menu_master');
            $this->load->view('admin/pages/menuSubMenus', $page_data);
        }
        if($param1=="deletemenusubmenu"){
            $fle="./uploads/menuImages/".$this->input->post('imageId');
            if (file_exists($fle)){
                unlink($fle);
            }
            if($this->input->post('deletemenutypeId')=="menu"){
                $this->AdminModel->deletefromtable('t_menu_master',$this->input->post('deletemenuId'));
            }
            else{
                $updatemainmenu=$this->AdminModel->getfromtable('t_sub_menu_master','condition1','Id/'.$this->input->post('deletemenuId'))->MenuId;
                $this->AdminModel->deletefromtable('t_sub_menu_master',$this->input->post('deletemenuId'));
                if($updatemainmenu!=""){
                    $updatemainmenu1=$this->AdminModel->getfromtable('t_sub_menu_master','condition1','MenuId/'.$updatemainmenu);
                    if($updatemainmenu1==""){
                        $datamain['Submenustatus']="N";
                        $this->AdminModel->updatetable('t_menu_master',$updatemainmenu,$datamain);
                    }
                }
            }
            $page_data['menulist'] = $this->AdminModel->getAlltablerow('t_menu_master'); 
            $page_data['submenulist'] = $this->AdminModel->getAlltablerow('t_sub_menu_master');
            $this->load->view('admin/pages/menuSubMenus', $page_data);
        }
        if($param1=='updatemenusub'){
            if(!empty($_FILES["imagetochange"]["name"])){
                $fle="./uploads/menuImages/".$this->input->post('existImage');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['imagetochange']['tmp_name'],'./uploads/menuImages/'.$_FILES["imagetochange"]["name"]);
                $datamain['Page_Image']=$_FILES["imagetochange"]["name"];
            }
            if($this->input->post('menutype')=="menu"){
                $datamain['Details']=$this->input->post('addedmenudetais'); 
                $datamain['MenuName']=$this->input->post('menuName');
                $this->AdminModel->updatetable('t_menu_master',$this->input->post('menuId'),$datamain);
            }
            else{
                $datamain['Details']=$this->input->post('addedmenudetais'); 
                $datamain['SubMenuName']=$this->input->post('menuName');
                $this->AdminModel->updatetable('t_sub_menu_master',$this->input->post('menuId'),$datamain);
            }
            $page_data['menulist'] = $this->AdminModel->getAlltablerow('t_menu_master'); 
            $page_data['submenulist'] = $this->AdminModel->getAlltablerow('t_sub_menu_master');
            $this->load->view('admin/pages/menuSubMenus', $page_data);
        }
        if($param1=="addSlider"){
            if(!empty($_FILES["Slider_Image"]["name"])){
                move_uploaded_file($_FILES['Slider_Image']['tmp_name'],'./uploads/slider/'.$_FILES["Slider_Image"]["name"]);
                $data['Slider_Image']=$_FILES["Slider_Image"]["name"];
            }
            $data['Slider_Name']=$this->input->post('Slider_Name');      
            $data['Slider_Description']=$this->input->post('Slider_Description'); 
            $this->CommonModel->do_insert('t_slider_details', $data); 
            $page_data['slider'] = $this->db->get('t_slider_details')->result_array(); 
            $this->load->view('admin/pages/slider', $page_data);
        }
        if($param1=="editSlider"){
            if(!empty($_FILES["Slider_Image_edit"]["name"])){
                $fle="./uploads/slider/".$this->input->post('existing_slider_img');
                if (file_exists($fle)){
                    unlink($fle);
                }
                move_uploaded_file($_FILES['Slider_Image_edit']['tmp_name'],'./uploads/slider/'.$_FILES["Slider_Image_edit"]["name"]);
                $data['Slider_Image']=$_FILES["Slider_Image_edit"]["name"];
            }
            $data['Slider_Name']=$this->input->post('Slider_Name_edit');      
            $data['Slider_Description']=$this->input->post('Slider_Description_edit');
            $this->db->where('Id', $this->input->post('updateId'));
            $this->db->update('t_slider_details`', $data); 
            $page_data['slider'] = $this->db->get('t_slider_details')->result_array(); 
            $this->load->view('admin/pages/slider', $page_data);
        }
        if($param1=="deleteSlider"){
            $fle="./uploads/slider/".$this->input->post('deleteimageId');
            if (file_exists($fle)){
                unlink($fle);
            }
            $this->AdminModel->deletefromtable('t_slider_details',$this->input->post('deleteId'));
            $page_data['slider'] = $this->db->get('t_slider_details')->result_array(); 
            $this->load->view('admin/pages/slider', $page_data);
        }
        if($param1=="addEvents"){
            $data['Event_Type']=$this->input->post('Event_Type');   
            $data['Event_Name']=$this->input->post('Event_Name');    
            $data['Event_Description']=$this->input->post('Event_Description');
            $data['Event_Details']=$this->input->post('Event_Details');
            $data['New_Status']=$this->input->post('Post_Type');
            
            $data['Posted_Date']=date('Y-m-d');
            $eventId=$this->AdminModel->do_insert('t_event_dtls', $data); 
            if($eventId!=""){
                for($i=0;$i<=$this->input->post('docCount');$i++){
                    if(!empty($_FILES["Image".$i]["name"])){
                        move_uploaded_file($_FILES['Image'.$i]['tmp_name'],'./uploads/events/'.$_FILES["Image".$i]["name"]);
                        $duciment['Event_Id']=$eventId;
                        $duciment['Image']=$_FILES["Image".$i]["name"];
                        $duciment['ImgDescription']=$this->input->post('ImgDescription'.$i);
                        $this->AdminModel->do_insert('t_event_images', $duciment); 
                    }
                }
            }
            $page_data['eventList'] = $this->db->get('t_event_dtls')->result_array(); 
            $this->load->view('admin/event/event', $page_data);
        }
        if($param1=="deletEvent"){
            $fle="".$this->input->post('deleteimageId');
            if (file_exists($fle)){
                unlink($fle);
            }
            $this->db->where('Id', $this->input->post('deleteId'));
            $this->db->delete('t_event_dtls');
            $eventImages = $this->db->get_where('t_event_images',array('Event_Id'=>$this->input->post('deleteId')))->result_array();
            foreach ($eventImages as $key => $value) {
                unlink("./uploads/events/".$value['Image']);
            }
            $this->db->where('Event_Id', $this->input->post('deleteId'));
            $this->db->delete('t_event_images');

            $page_data['eventList'] = $this->db->get('t_event_dtls')->result_array(); 
            $this->load->view('admin/event/event', $page_data);

        }
        if($param1=="updateeventDetails"){
            $data['Event_Name']=$this->input->post('Event_Name');      
            $data['Event_Description']=$this->input->post('Event_Description');
            $data['Event_Details']=$this->input->post('Event_Details');
            $data['New_Status']=$this->input->post('Post_Type');
            $this->db->where('Id', $this->input->post('eventId'));
            $this->db->update('t_event_dtls`', $data); 
            for($i=0;$i<=$this->input->post('docCount');$i++){
                if((!empty($_FILES["Image".$i]["name"]) || $this->input->post('deleteimg'.$i)=="checked") && $this->input->post('filenameTodelete'.$i)!=""){
                    $fle="./uploads/events/".$this->input->post('filenameTodelete'.$i);
                    if (file_exists($fle)){
                        unlink($fle);
                        $this->db->where('Image',$this->input->post('filenameTodelete'.$i));
                        $this->db->delete('t_event_images');
                    }
                }
                if(!empty($_FILES["Image".$i]["name"])){
                    move_uploaded_file($_FILES['Image'.$i]['tmp_name'],'./uploads/events/'.$_FILES["Image".$i]["name"]);
                    $duciment['Event_Id']=$this->input->post('eventId');
                    $duciment['Image']=$_FILES["Image".$i]["name"];
                    $duciment['ImgDescription']=$this->input->post('ImgDescription'.$i);
                    $this->CommonModel->do_insert('t_event_images', $duciment); 
                }
            }
            $page_data['eventList'] = $this->db->get('t_event_dtls')->result_array(); 
            $this->load->view('admin/event/event', $page_data);
        }
    }
    function checkName($param1="",$param2=""){
        $result="";
        header('Content-Type: text/plain');
        $result=$this->AdminModel->checknameIntale($param1,$param2);
        echo ($result);
    }
}

