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
            // $data = array();
            // $this->load->model("tim_model");
            // $data["tim_rikkes"] = $this->tim_model->get_users_filter_by_flag_del();
            // $this->load->view("tim/index",$data);
            $this->load->view("penilaian/index",$data);
        }
    }
    
public function add_penilaian(){
        if(_is_user_login($this)){
            $data['status_penilaian'] = 'active';
            $this->load->view("penilaian/add_nilai",$data);
        }
    }
public function add_nilai(){
        if(_is_user_login($this)){
            $data['status_penilaian'] = 'active';
            $this->load->view("penilaian/add_nilai",$data);
        }
    }
    
  
  


}