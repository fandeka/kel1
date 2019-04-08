<?php
class casis_model extends CI_Model{

    function get_casis_filter_by_flag_del(){
        $this->db->select();
        $this->db->from('casis');
        $this->db->where('flag_del',1);
        //$this->db->where_not_in('user_id',_get_current_user_id($this)); // digunakan jika ada roll
        $q = $this->db->get();
        return $q->result();
    }

public function get_casis_by_id($id){
        $q = $this->db->query("select * from casis where id = '".$id."' limit 1");
        return $q->row();
    }


 public function get_casis_type(){
        $q = $this->db->query("select * from casis");
        return $q->result();
    }


}
?>