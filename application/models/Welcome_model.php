<?php
class Welcome_Model extends CI_Model{
    
    
    function getFlock(){
        $this->db->select('*');
        $this->db->from('flockMaster');
        return $this->db->get()->result();
    }
    function getFeed(){
        $this->db->select('*');
        $this->db->from('itemmaster');
        $this->db->group_by('cat');
        return $this->db->get()->result();
    }
    
    function getFlockById($id){
        $query=$this->db->query("SELECT * FROM flockMaster WHERE id='$id'");
        $res = $query->result();
        if(!empty($res)){
            return $res;
        }
        return 0;
    }
    
    function save_data($data){
        $this->db->trans_start();
        $this->db->insert('tabledata',$data);
        //echo $this->db->last_query();exit;
        $this->db->trans_complete();
        if( $this->db->trans_status() == FALSE){
            $status['status'] = FALSE;
            return $status;
        }
        $status['status'] = TRUE;
        //print_r( $data);exit;
        return $status;
    }
    function getCatItem($feed){
        $this->db->select('*');
        $this->db->from('itemmaster');
        $this->db->where('cat',$feed);
        //echo $this->db->last_query();exit;
        return $this->db->get()->result();
    }
    
 
    
}

