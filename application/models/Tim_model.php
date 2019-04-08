<?php
class Tim_model extends CI_Model{

    function get_tim_filter_by_flag_del(){
        $this->db->select();
        $this->db->from('tim');
        $this->db->where('flag_del',1);
        //$this->db->where_not_in('user_id',_get_current_user_id($this)); // digunakan jika ada roll
        $q = $this->db->get();
        return $q->result();
    }


    function get_tim_rinci_filter_by_flag_del($id){
        $q = $this->db->query("select * from tim where flag_del = 1 and id = '".$id."'");
        return $q->row();
    }

}
?>