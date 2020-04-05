<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class websitesDetailsModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
    function getDetails($table="",$type="",$limit=""){
    	if($type=="websites"){
    		return $this->db->get($table)->row(); 
    	}
    	if($type=="allRows"){
    		return $this->db->get($table)->result_array();
    	}
        if($type=="othersitelink"){
             $que ="SELECT * FROM ".$table." WHERE Link_Type='".$type."' ORDER BY Posted_Date DESC LIMIT ".$limit;
             //die($que);
             return $this->db->query($que)->result_array();
        }
    }
    function do_insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    function updatetable($table="",$tableId="",$tabledata=""){
        $this->db->where($tableId);
        $this->db->update($table, $tabledata);
    }
    function getfromtable($param1='',$param2='',$param3='',$param4='',$param5=''){
        if($param2=='allrows'){
            return $this->db->get($param1)->result_array();
        }
        if($param2=='row'){ 
            return $this->db->get($param1)->row();
        }
        if($param2=='allrowbyStatus'){
            return $this->db->get_where($param1, array('Status'=>'Y'))->result_array();
        }
        if($param2=='condition1'){
            $str1= explode('/', $param3);
            return $this->db->get_where($param1, array($str1[0]=>$str1[1]))->row();
        }
        if($param2=='allrowscondition1'){ 
            $str1= explode('/', $param3);
            return $this->db->get_where($param1, array($str1[0]=>$str1[1]))->result_array();
        } 
        if($param2=='allrowscondition2'){
            $str1= explode('/', $param3);
            $str2= explode('/', $param4);
            return $this->db->get_where($param1, array($str1[0]=>$str1[1], $str2[0]=>$str2[1]))->result_array();
        }
    }
    function gettotalviewerDetails($type="",$vietype=""){
        if($vietype=="all"){
            $query =$this->db->query("SELECT COUNT(*) total FROM t_viewer_dtls WHERE View_Type='".$type."'")->row();
        }
        else{
            $query =$this->db->query("SELECT COUNT(*) total FROM t_viewer_dtls WHERE View_Type='".$type."' AND View_Date=CURRENT_DATE")->row();
        }
        return $query->total;
    }
    function getIpDetails($type="",$Ipaddr=""){
        return $this->db->get_where('t_viewer_dtls', array('Ip_Addr'=>$Ipaddr,'View_Type'=>$type))->row();
    }
    function getEventList($type=""){
        //die($type);
        if($type=="ALL"){
             $query =$this->db->query("SELECT e.`Id`,e.`Event_Name`,e.`Posted_Date`,e.`Event_Type`,e.`Event_Description`,i.`Image`,e.`Total_View`,e.`New_Status` FROM `t_event_dtls` e INNER JOIN `t_event_images` i ON e.`Id`=i.`Event_Id` GROUP BY e.`Id` ORDER BY e.`Posted_Date` DESC ")->result_array(); 
           
        }
        else{
           $query =$this->db->query("SELECT e.`Id`,e.`Event_Name`,e.`Posted_Date`,e.`Event_Type`,e.`Event_Description`,i.`Image`,e.`Total_View`,e.`New_Status` FROM `t_event_dtls` e INNER JOIN `t_event_images` i ON e.`Id`=i.`Event_Id` GROUP BY e.`Id` ORDER BY e.`Posted_Date` DESC LIMIT ".$type)->result_array();
        }
        return $query;
    }
    function updateViewer($tableId=""){
        $query="UPDATE `t_event_dtls` SET `Total_View` =IF(Total_View IS NULL,1,Total_View+1) WHERE Id='".$tableId."'";
            $this->db->query($query);
    }
    function updatemenuViewer($table="",$tableId=""){
        $query="UPDATE ".$table." SET `Total_View` =IF(Total_View IS NULL,1,Total_View+1) WHERE Id='".$tableId."'";
            $this->db->query($query);
    }
    function getYouTubeList(){
        $query =$this->db->query("SELECT * FROM `t_link_dtls` l WHERE l.`Link_Type`='Youtube'")->result_array(); 
        return $query;
    }
    function getBrochuresList($type=""){
        if($type=="technialrepo"){
            $query =$this->db->query("SELECT * FROM `t_publication_report_dtls` l WHERE l.`Type`like 'Technical%'")->result_array(); 
            
        }
        else{
            $query =$this->db->query("SELECT * FROM `t_publication_report_dtls` l WHERE l.`Type`='".$type."'")->result_array(); 
        }
        
        return $query;
    }
    function getotehrpageDetails($table="",$condition=""){
        $query =$this->db->query("SELECT * FROM ".$table."  WHERE Type='".$condition."'")->result_array(); 
        return $query;
    }
    
    
}
?>