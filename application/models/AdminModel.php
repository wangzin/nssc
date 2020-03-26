<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
    function getpublicMessages(){
    	return $this->db->get_where('t_message_dtls', array('Visited_Satus' => 'N'))->result_array();
    }
    function getAllpublicMessages(){
    	return $this->db->get('t_message_dtls')->result_array();
    }
    function updateReadMessage($id="",$data=""){
    	$this->db->where('Id', $id);
        $this->db->update('t_message_dtls`', $data);
    }
    function getMessageDetails($param=""){
    	return $this->db->get_where('t_message_dtls', array('Id' => $param))->row();
    }
    function getuserDetails($param=""){
    	return $this->db->get_where('t_user_master',array('Id'=>$param))->row();
    }
    function updatewebsitedDetails($id="",$data=""){
    	$this->db->where('Site_Id', $id);
        $this->db->update('t_website_dtls`', $data);
    }
    function getAlltablerow($table=""){
        return $this->db->get($table)->result_array();
    }
    function updatetable($table="",$tableId="",$tabledata=""){
        $this->db->where('Id',$tableId );
        $this->db->update($table, $tabledata);
    }
    function deletefromtable($table="",$tableId=""){
        $this->db->where('Id',$tableId );
        $this->db->delete($table);
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
    function do_insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    function checknameIntale($param1="",$param2=""){
        $query ="";
        $name=str_replace("%20", " ", $param1);
        if(trim($param2)=="mainmenu"){
            $query =$this->db->get_where('t_menu_master', array('MenuName'=>trim($name)))->row();
        }
        else{
            $query =$this->db->get_where('t_sub_menu_master', array('SubMenuName'=>$param1))->row();
        }
        if($query!=null && $query!=""){
            return "This name is already mentioned. Please provice different name ";
        }
        else{
            return "false";
        }
    }
}
?>