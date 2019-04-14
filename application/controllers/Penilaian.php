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


                   $this->load->model("common_model");
                   $this->common_model->data_insert("tinggi_berat",
                                array(
                                "tb"=>$tb,
                                "bb"=>$bb,
                                "imt"=>$imt,
                                "u_imt"=>$u_imt,
                                "ket_imt"=>$ket_imt,
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