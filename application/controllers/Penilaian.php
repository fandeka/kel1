<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
    }
	public function index()
	{ 
		if(_is_user_login($this)){
            $data['status_penilaian'] = 'active';
            $data = array();
            $this->load->model("penilaian_model");
            $data["penilaian_rikkes"] = $this->penilaian_model->get_penilaian_filter_by_flag_del();
            // $this->load->view("tim/index",$data);
            $this->load->view("penilaian/index",$data);
        }
    }
    
    function add_penilaian(){
            if(_is_user_login($this)){
                $data['status_penilaian'] = 'active';
                $this->load->view("penilaian/add_penilaian",$data);
            }
        }
    function add_nilai($id){
            if(_is_user_login($this)){
                $data['status_penilaian'] = 'active';

                $this->load->model("casis_model");
                $data['casis_rinci']  = $this->casis_model->get_casis_rinci_filter_by_flag_del($id);
                $no_casis = $data['casis_rinci']->no_casis;
                $this->load->model("penilaian_model");

                $data['data_imt'] = $this->penilaian_model->get_imt_by_casis($no_casis);



                
                $this->load->view("penilaian/add_nilai",$data);
            }
        }
        
    function hitung_nilai($id){
        if(_is_user_login($this)){
            if($_POST){

                    var_dump($id); exit();
            }

        }

    }

    function cek_imt(){
        if(_is_user_login($this)){
            if($_POST){

                   $tinggi = $this->input->post('tinggi');
                   $berat = $this->input->post('berat');

                   $imt = $berat / ((0.01*$tinggi) * (0.01*$tinggi)) ;

                   if ($imt < 14.9) {

                        $status = 'K2';
                   } elseif ($imt <= 18.4) {
                        $status = 'K1';
                   } elseif ($imt <= 19.9) {
                        $status = 'C';
                   } elseif ($imt < 25) {
                        $status = 'B';
                   }elseif ($imt < 27) {
                        $status = 'C';
                   }elseif ($imt < 30) {
                        $status = 'K1';
                   } else {
                        $status = 'K2';
                   }

                   $data = array();
                   $data = array( 'imt' => $imt, 
                                  'status' => $status );
                   echo json_encode($data);
                   
            }

        }

    }

    function simpan_imt(){
        if(_is_user_login($this)){
            if($_POST){

                   $tb = $this->input->post('tinggi');
                   $bb = $this->input->post('berat');
                   $imt = $this->input->post('imt');
                   $u_imt = $this->input->post('u_imt');
                   $ket_imt = $this->input->post('ket_imt');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("tinggi_berat",
                                array(
                                "tb"=>$tb,
                                "bb"=>$bb,
                                "imt"=>$imt,
                                "u_imt"=>$u_imt,
                                "ket_imt"=>$ket_imt,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }

    function simpan_nadi(){
        if(_is_user_login($this)){
            if($_POST){

                   $tensi = $this->input->post('tensi');
                   $nadi = $this->input->post('nadi');
                   $nb_nadi = $this->input->post('nb_nadi');
                   $u_nadi = $this->input->post('u_nadi');
                   $ket_nadi = $this->input->post('ket_nadi');
                   $no_casis = $this->input->post('no_casis');


                   $this->load->model("common_model");
                   $this->common_model->data_insert("tensi",
                                array(
                                "tensi"=>$tensi,
                                "nadi"=>$nadi,
                                "nb_nadi"=>$nb_nadi,
                                "u_nadi"=>$u_nadi,
                                "ket_nadi"=>$ket_nadi,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }

    
    function simpan_interne(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_interne = $this->input->post('nb_interne');
                   $u_interne = $this->input->post('u_interne');
                   $ket_interne = $this->input->post('ket_interne');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("interne",
                                array(
                                "nb_interne"=>$nb_interne,
                                "u_interne"=>$u_interne,
                                "ket_interne"=>$ket_interne,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_ekg(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_ekg = $this->input->post('nb_ekg');
                   $u_ekg = $this->input->post('u_ekg');
                   $ket_ekg = $this->input->post('ket_ekg');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("ekg",
                                array(
                                "nb_ekg"=>$nb_ekg,
                                "u_ekg"=>$u_ekg,
                                "ket_ekg"=>$ket_ekg,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_ergo(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_ergo = $this->input->post('nb_ergo');
                   $u_ergo = $this->input->post('u_ergo');
                   $ket_ergo = $this->input->post('ket_ergo');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("ergo",
                                array(
                                "nb_ergo"=>$nb_ergo,
                                "u_ergo"=>$u_ergo,
                                "ket_ergo"=>$ket_ergo,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }

    function simpan_spiro(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_spiro = $this->input->post('nb_spiro');
                   $u_spiro = $this->input->post('u_spiro');
                   $ket_spiro = $this->input->post('ket_spiro');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("spiro",
                                array(
                                "nb_spiro"=>$nb_spiro,
                                "u_spiro"=>$u_spiro,
                                "ket_spiro"=>$ket_spiro,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_kulit(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_kulit = $this->input->post('nb_kulit');
                   $u_kulit = $this->input->post('u_kulit');
                   $ket_kulit = $this->input->post('ket_kulit');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("kulit",
                                array(
                                "nb_kulit"=>$nb_kulit,
                                "u_kulit"=>$u_kulit,
                                "ket_kulit"=>$ket_kulit,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_rontgen(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_rontgen = $this->input->post('nb_rontgen');
                   $u_rontgen = $this->input->post('u_rontgen');
                   $ket_rontgen = $this->input->post('ket_rontgen');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("rontgen",
                                array(
                                "nb_rontgen"=>$nb_rontgen,
                                "u_rontgen"=>$u_rontgen,
                                "ket_rontgen"=>$ket_rontgen,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_lab(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_lab = $this->input->post('nb_lab');
                   $u_lab = $this->input->post('u_lab');
                   $ket_lab = $this->input->post('ket_lab');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("lab",
                                array(
                                "nb_lab"=>$nb_lab,
                                "u_lab"=>$u_lab,
                                "ket_lab"=>$ket_lab,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_bedah(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_bedah = $this->input->post('nb_bedah');
                   $u_bedah = $this->input->post('u_bedah');
                   $ket_bedah = $this->input->post('ket_bedah');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("bedah",
                                array(
                                "nb_bedah"=>$nb_bedah,
                                "u_bedah"=>$u_bedah,
                                "ket_bedah"=>$ket_bedah,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_usg(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_usg = $this->input->post('nb_usg');
                   $u_usg = $this->input->post('u_usg');
                   $ket_usg = $this->input->post('ket_usg');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("usg",
                                array(
                                "nb_usg"=>$nb_usg,
                                "u_usg"=>$u_usg,
                                "ket_usg"=>$ket_usg,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_atas(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_atas = $this->input->post('nb_atas');
                   $a_atas = $this->input->post('a_atas');
                   $ket_atas = $this->input->post('ket_atas');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("atas",
                                array(
                                "nb_atas"=>$nb_atas,
                                "a_atas"=>$a_atas,
                                "ket_atas"=>$ket_atas,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_bawah(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_bawah = $this->input->post('nb_bawah');
                   $b_bawah = $this->input->post('b_bawah');
                   $ket_bawah = $this->input->post('ket_bawah');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("bawah",
                                array(
                                "nb_bawah"=>$nb_bawah,
                                "b_bawah"=>$b_bawah,
                                "ket_bawah"=>$ket_bawah,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_tht(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_tht = $this->input->post('nb_tht');
                   $t_tht = $this->input->post('t_tht');
                   $ket_tht = $this->input->post('ket_tht');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("tht",
                                array(
                                "nb_tht"=>$nb_tht,
                                "t_tht"=>$t_tht,
                                "ket_tht"=>$ket_tht,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_mata(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_mata = $this->input->post('nb_mata');
                   $l_mata = $this->input->post('l_mata');
                   $ket_mata = $this->input->post('ket_mata');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("mata",
                                array(
                                "nb_mata"=>$nb_mata,
                                "l_mata"=>$l_mata,
                                "ket_mata"=>$ket_mata,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_gigi(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_gigi = $this->input->post('nb_gigi');
                   $g_gigi = $this->input->post('g_gigi');
                   $ket_gigi = $this->input->post('ket_gigi');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("gigi",
                                array(
                                "nb_gigi"=>$nb_gigi,
                                "g_gigi"=>$g_gigi,
                                "ket_gigi"=>$ket_gigi,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
    function simpan_jiwa(){
        if(_is_user_login($this)){
            if($_POST){

                   $nb_jiwa = $this->input->post('nb_jiwa');
                   $j_jiwa = $this->input->post('j_jiwa');
                   $ket_jiwa = $this->input->post('ket_jiwa');
                   $no_casis = $this->input->post('no_casis');

                   $this->load->model("common_model");
                   $this->common_model->data_insert("jiwa",
                                array(
                                "nb_jiwa"=>$nb_jiwa,
                                "j_jiwa"=>$j_jiwa,
                                "ket_jiwa"=>$ket_jiwa,
                                "no_casis"=>$no_casis,
                                "flag_del" => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")));


                   $data = array();
                   $data = array( 'sukses'=>'sukses' );
                   echo json_encode($data);

            }
        }
    }
}