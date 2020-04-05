<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
	public function index(){
		/*$json  = file_get_contents('http://ipinfo.io/json');
		$json  = json_decode($json ,true);
		$country   = $json['country'];
		$region_name    = $json['region'];
		$city           = $json['city'];
		$ipaddr      = $json['ip'];
		$dataToSave['Ip_Addr']=$ipaddr;
        $dataToSave['Country']=$country;
        $dataToSave['Region']=$region_name;
        $dataToSave['View_Type']='Index';
        $dataToSave['View_Date']=date('Y-m-d');
        $isIppresent=$this->websitesDetailsModel->getIpDetails('Index',$ipaddr);
        if($isIppresent=="" && $ipaddr!=""){
        	$this->websitesDetailsModel->do_insert('t_viewer_dtls', $dataToSave); 
        }else{
        	//die('else'.$ipaddr);
        	$condition=array('Ip_Addr'=>$ipaddr, 'View_Type'=>'Index');
            $data['View_Date']=date('Y-m-d');
            $this->websitesDetailsModel->updatetable('t_viewer_dtls',$condition,$data);
        }        
		$page_data['ipadress']=$ipaddr;
		$page_data['country']=$country;
		$page_data['region_name']=$region_name;*/
        $page_data['sitedetails'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites'); 
       /* $page_data['totalViewer'] = $this->websitesDetailsModel->gettotalviewerDetails('Index','all');
        $page_data['totalViewertotay'] = $this->websitesDetailsModel->gettotalviewerDetails('Index','today');*/
        $page_data['menulist'] = $this->websitesDetailsModel->getDetails('t_menu_master','allRows');
        $page_data['submenulist'] = $this->websitesDetailsModel->getDetails('t_sub_menu_master','allRows');
        $page_data['slider'] = $this->websitesDetailsModel->getDetails('t_slider_details','allRows');
        $page_data['eventList'] = $this->websitesDetailsModel->getEventList('8'); 
        $page_data['linkList'] = $this->websitesDetailsModel->getDetails('t_link_dtls','othersitelink','3');
        $page_data['aboutUsDetails'] = $this->websitesDetailsModel->getDetails('t_about_us','websites');
        $page_data['reportList'] = $this->websitesDetailsModel->getDetails('t_publication_report_dtls','allRows');
        $page_data['otherpageList'] = $this->websitesDetailsModel->getotehrpageDetails('t_other_page_dtls','Soil Management Info');
        $page_data['tenderList'] = $this->websitesDetailsModel->getotehrpageDetails('t_other_page_dtls','Tender');
        $page_data['youtubeList'] = $this->websitesDetailsModel->getYouTubeList();

        
		$this->load->view('web/index',$page_data);
	}
	function loadpage($pagetype="",$param2="",$param3=""){
        $page_data['linkList'] = $this->websitesDetailsModel->getDetails('t_link_dtls','othersitelink','3');
        $page_data['aboutUsDetails'] = $this->websitesDetailsModel->getDetails('t_about_us','websites');
            $page_data['reportList'] = $this->websitesDetailsModel->getDetails('t_publication_report_dtls','allRows');
        $page_data['tenderList'] = $this->websitesDetailsModel->getotehrpageDetails('t_other_page_dtls','Tender');
		if($pagetype=="contact"){
            $page_data['messagetype'] = 'messagentread';
         	$page_data['sitedetails'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
            $page_data['aboutUsDetails'] = $this->websitesDetailsModel->getDetails('t_about_us','websites');
            $page_data['reportList'] = $this->websitesDetailsModel->getDetails('t_publication_report_dtls','allRows');
            $this->load->view('web/pages/contact', $page_data);
        }
        if($pagetype=="eventDetails"){
    	 	/*$json  = file_get_contents('http://ip-api.com/json');
			$json  = json_decode($json ,true);
			$country_code	= $json['countryCode'];
			$country   = $json['country'];
			$region_code    = $json['region'];
			$region_name    = $json['regionName'];
			$city           = $json['city'];
			$ipaddr      = $json['query'];
			$dataToSave['Ip_Addr']=$ipaddr;
	        $dataToSave['Country']=$country;
	        $dataToSave['Region']=$region_name;
	        $dataToSave['View_Type']='eventDetails-'.$param2;
	        $dataToSave['View_Date']=date('Y-m-d');
	        $isIppresent=$this->websitesDetailsModel->getIpDetails('eventDetails-'.$param2,$ipaddr);
	        if($isIppresent=="" && $ipaddr!=""){
	        	$this->websitesDetailsModel->do_insert('t_viewer_dtls', $dataToSave); 
	        }
	        else{
	        	$condition=array('Ip_Addr'=>$ipaddr, 'View_Type'=>'eventDetails-'.$param2);
	        	$data['View_Date']=date('Y-m-d');
            	$this->websitesDetailsModel->updatetable('t_viewer_dtls',$condition,$data);
	        }
	        $page_data['totalViewer'] = $this->websitesDetailsModel->gettotalviewerDetails('eventDetails-'.$param2,'all');
        	$page_data['totalViewertotay'] = $this->websitesDetailsModel->gettotalviewerDetails('eventDetails-'.$param2,'today');*/
        	$this->websitesDetailsModel->updateViewer($param2); 
        	$page_data['eventDetails'] = $this->db->get_where('t_event_dtls',array('Id'=>$param2))->row();
            $page_data['eventDetailsImages'] = $this->db->get_where('t_event_images',array('Event_Id'=>$param2))->result_array();
            $page_data['pageType']= $param2;
            $page_data['eventList'] = $this->websitesDetailsModel->getEventList('ALL');
            if($param2=="allevent"){
                $this->load->view('web/pages/allevent', $page_data);
            }
            else{
                $this->load->view('web/pages/eventDetails', $page_data);
            }
            
        }
        
     	
        
        
        
        
        
        
        

         
        
	}
	function loadpagemenu($param1="",$param2="",$param3=""){
        $page_data['sitedetails'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
        $page_data['menulist'] = $this->websitesDetailsModel->getDetails('t_menu_master','allRows');
        $page_data['submenulist'] = $this->websitesDetailsModel->getDetails('t_sub_menu_master','allRows');
        $page_data['slider'] = $this->websitesDetailsModel->getDetails('t_slider_details','allRows');
        $page_data['eventList'] = $this->websitesDetailsModel->getEventList('8'); 
        $page_data['linkList'] = $this->websitesDetailsModel->getDetails('t_link_dtls','othersitelink','3');
        $page_data['aboutUsDetails'] = $this->websitesDetailsModel->getDetails('t_about_us','websites');
        $page_data['reportList'] = $this->websitesDetailsModel->getDetails('t_publication_report_dtls','allRows');
        $page_data['otherpageList'] = $this->websitesDetailsModel->getotehrpageDetails('t_other_page_dtls','Soil Management Info');
        $page_data['tenderList'] = $this->websitesDetailsModel->getotehrpageDetails('t_other_page_dtls','Tender');
        $page_data['youtubeList'] = $this->websitesDetailsModel->getYouTubeList();

		if($param1=="menulinkdetails"){
			$table="";
         	if($param3=="submenu"){
                $table='t_sub_menu_master';
            }
            if($param3=="menu"){
                $table='t_menu_master';
            }
            $page_data['pageType']= $param2;
            /*
            $json  = file_get_contents('http://ip-api.com/json');
			$json  = json_decode($json ,true);
			$country_code	= $json['countryCode'];
			$country   = $json['country'];
			$region_code    = $json['region'];
			$region_name    = $json['regionName'];
			$city           = $json['city'];
			$ipaddr      = $json['query'];
			$dataToSave['Ip_Addr']=$ipaddr;
	        $dataToSave['Country']=$country;
	        $dataToSave['Region']=$region_name;
	        $dataToSave['View_Type']=$param3.'-'.$param2;
	        $dataToSave['View_Date']=date('Y-m-d');
	        $isIppresent=$this->websitesDetailsModel->getIpDetails($param3.'-'.$param2,$ipaddr);
	        if($isIppresent=="" && $ipaddr!=""){
	        	$this->websitesDetailsModel->do_insert('t_viewer_dtls', $dataToSave); 
	        }
	        else{
	        	$condition=array('Ip_Addr'=>$ipaddr, 'View_Type'=>$param3.'-'.$param2);
	        	$data['View_Date']=date('Y-m-d');
            	$this->websitesDetailsModel->updatetable('t_viewer_dtls',$condition,$data);
	        }
	        $page_data['totalViewer'] = $this->websitesDetailsModel->gettotalviewerDetails($param3.'-'.$param2,'all');
        	$page_data['totalViewertotay'] = $this->websitesDetailsModel->gettotalviewerDetails($param3.'-'.$param2,'today');*/
        	$this->websitesDetailsModel->updatemenuViewer($table,$param2); 
            $page_data['pageType'] = $param1;
            $page_data['currentPageDetails']=  $this->websitesDetailsModel->getfromtable($table,'condition1','Id/'.$param2);
            $page_data['PageType']="menuDetails";
		}

        if($param1=="otehrdetails"){
             $page_data['pageType']= $param2;
            $this->websitesDetailsModel->updatemenuViewer('t_other_page_dtls',$param2); 
            $page_data['currentPageDetails']=  $this->websitesDetailsModel->getfromtable('t_other_page_dtls','condition1','Id/'.$param2);
            $page_data['PageType']="otherPageDetails";
        }
        if($param1=="downloadpage"){
            $page_data['downloadPageList'] = $this->websitesDetailsModel->getDetails('t_download_dtls','allRows');
            $page_data['PageType']="downloaddetails";
            
        }
        if($param1=="aboutus"){
            $page_data['sitedetails'] = $this->websitesDetailsModel->getDetails('t_website_dtls','websites');
            $page_data['PageType']="aboutus";
        }
        if($param1=="staffDetails"){
            $page_data['staffList'] = $this->websitesDetailsModel->getDetails('t_staff_dtls','allRows');
            $page_data['PageType']="staffDetails";
        }
        if($param1=="gallery"){
            $page_data['galleryList'] = $this->websitesDetailsModel->getDetails('t_gallery_dtls','allRows');
            $page_data['PageType']="gallery";
        }
        if($param1=="Brochures" || $param1=="Sustainable" || $param1=="technialrepo"){
            $page_data['shareType'] = $param1;
            $page_data['BrochuresList'] = $this->websitesDetailsModel->getBrochuresList($param1);
            $page_data['PageType']="brochursDetails";
        }
        if($param1=="directormessage"){
            $page_data['aboutUsDetails'] = $this->websitesDetailsModel->getDetails('t_about_us','websites');
            $page_data['PageType']="messagedetails";
        }
        if($param1=="loadalllink"){
            $page_data['AllinkList'] = $this->websitesDetailsModel->getDetails('t_link_dtls','allRows');
            $page_data['PageType']="loadalllink";
        }
       /* if($param1=="viewallreport"){
            $page_data['reportList'] = $this->websitesDetailsModel->getDetails('t_publication_report_dtls','allRows');
            $page_data['PageType']="loadalllink";
        }*/
        
        if($param1=="reportpublication"){
            $page_data['reportDetails'] = $this->db->get_where('t_publication_report_dtls',array('Id'=>$param2))->row();
            $page_data['reportList'] = $this->websitesDetailsModel->getDetails('t_publication_report_dtls','allRows');
            $page_data['PageType']="reportdetails";
            $page_data['shareType'] = $param2;
        }
        $this->load->view('web/pages/loadpageincontainer', $page_data);
	}
	function sendMessage(){
		if($this->input->post('Sender_Name')!=""){
			$data['Sender_Name']=$this->input->post('Sender_Name');
	        $data['Sender_Email']=$this->input->post('Sender_Email');
	        $data['Sender_Contact']=$this->input->post('Sender_Contact');
	        $data['Subject']=$this->input->post('Subject');
	        $data['Message']=$this->input->post('Message');
	        $data['Action_Date']=date('Y-m-d');
	        $this->websitesDetailsModel->do_insert('t_message_dtls', $data);    
	        if($this->db->affected_rows()>0){
	            $page_data['message']='Your message has been send to the agent. Thank you for visiting us';
	        }
	        else{
	            $page_data['message']='Not able to send your message.pease try again';
	        } 
	        $this->load->view('web/pages/acknowledgement', $page_data); 
		}
	}
	
}
