<?php
class Penilaian_model extends CI_Model{

    function get_penilaian_filter_by_flag_del(){
        $this->db->select();
        $this->db->from('casis');
        $this->db->where('flag_del',1);
        //$this->db->where_not_in('user_id',_get_current_user_id($this)); // digunakan jika ada roll
        $q = $this->db->get();
        return $q->result();
    }

public function get_penilaian_by_id($id){
        $q = $this->db->query("select * from casis where id = '".$id."' limit 1");
        return $q->row();
    }


 public function get_penilaian_type(){
        $q = $this->db->query("select * from casis");
        return $q->result();
    }

    function get_casis_rinci_filter_by_flag_del($id){
        $q = $this->db->query("select * from casis where flag_del = 1 and id = '".$id."'");
        return $q->row();
    }

     public function get_imt_by_casis($no_casis){
        $q = $this->db->query("select * from tinggi_berat where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }


     public function get_tensi_by_casis($no_casis){
        $q = $this->db->query("select * from tensi where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_interne_by_casis($no_casis){
        $q = $this->db->query("select * from interne where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_ekg_by_casis($no_casis){
        $q = $this->db->query("select * from ekg where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_ergo_by_casis($no_casis){
        $q = $this->db->query("select * from ergo where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_spiro_by_casis($no_casis){
        $q = $this->db->query("select * from spiro where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_kulit_by_casis($no_casis){
        $q = $this->db->query("select * from kulit where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_rontgen_by_casis($no_casis){
        $q = $this->db->query("select * from rontgen where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_bedah_by_casis($no_casis){
        $q = $this->db->query("select * from bedah where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_lab_by_casis($no_casis){
        $q = $this->db->query("select * from lab where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_usg_by_casis($no_casis){
        $q = $this->db->query("select * from usg where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_atas_by_casis($no_casis){
        $q = $this->db->query("select * from atas where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_bawah_by_casis($no_casis){
        $q = $this->db->query("select * from bawah where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_tht_by_casis($no_casis){
        $q = $this->db->query("select * from tht where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_mata_by_casis($no_casis){
        $q = $this->db->query("select * from mata where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_gigi_by_casis($no_casis){
        $q = $this->db->query("select * from gigi where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_jiwa_by_casis($no_casis){
        $q = $this->db->query("select * from jiwa where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }


    public function get_nilai_bobot($nilai_u){
        $q = $this->db->query("select * from nilai_bobot where nb_huruf='".$nilai_u."'order by id desc limit 1");
        return $q->row();
    }

    public function get_hasil_nilai_by_casis($no_casis){
        $q = $this->db->query("select * from hasil_nilai where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

    public function get_sponsor_by_casis($no_casis){
        $q = $this->db->query("select * from casis where no_casis='".$no_casis."' and flag_del = 1 order by id desc limit 1");
        return $q->row();
    }

}
?>