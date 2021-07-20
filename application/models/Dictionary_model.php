<?php
class Dictionary_Model extends CI_Model{

   
    function save_search($keyword){
        $data =array(
            'th_userIP'=> $_SERVER['REMOTE_ADDR'],
            'th_keyword' => $keyword,
        );
        $this->db->trans_start();
        $this->db->insert('trackHistory',$data);
        $this->db->trans_complete();
        if( $this->db->trans_status() == FALSE){
            
            return false;
        }
        //print_r( $data);exit;
        return true;
    }
    
    public function fetch_logs(){
        $data = $this->db->query("SELECT * FROM trackHistory");
        return $data->result();
    }
        
}

