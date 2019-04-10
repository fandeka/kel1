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

    function cek_imt($id){
        if(_is_user_login($this)){
            if($_POST){

                    var_dump($id); exit();
            }

        }

    }


  


}