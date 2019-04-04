<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {
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
            $data['status_tim'] = 'active';
            $data = array();
            $this->load->model("tim_model");
            $data["tim_rikkes"] = $this->tim_model->get_tim_filter_by_flag_del();
            $this->load->view("tim/index",$data);
            
        }
    }

    public function add_tim(){
        if(_is_user_login($this)){
            $data['status_tim'] = 'active';
            $data["error"] = "";
            if($_POST){
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
                $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
                $this->form_validation->set_rules('pangkat', 'Pangkat', 'trim|required');
                $this->form_validation->set_rules('nrp', 'NRP', 'trim|required');
                $this->form_validation->set_rules('korps', 'Korps', 'trim|required');
                $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
                $this->form_validation->set_rules('kesatuan', 'Kesatuan', 'trim|required');
                $this->form_validation->set_rules('matra', 'Matra', 'trim|required');
                $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
                $this->form_validation->set_rules('email', 'email', 'trim|required');

                if ($this->form_validation->run() == FALSE) 
        		{
        		  
                $error_array = $this->form_validation->error_string();
                $error_json = json_encode(strip_tags($error_array));
                $error_clean = str_replace(['"', '"'], '', $error_json);
                    
		        $data["msg"] =  $error_clean;
                    
        		}else{


                        $file_name="";
                        $config['upload_path'] = './uploads/foto_tim/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $this->load->library('upload', $config);

                        if($_FILES["foto_tim"]["size"] > 0)
                                if (!$this->upload->do_upload('foto_tim')){
                                    $error = array('error' => $this->upload->display_errors());
                        
                                    $this->load->view('upload_form', $error);
                                }else{
                                    $file_data = $this->upload->data();
                                    $file_name = $file_data["file_name"];
                                    
                                }     
                        
                            $nama = $this->input->post("nama");
                            $tanggal_lahir = $this->input->post("tanggal_lahir");
                            $pangkat = $this->input->post("pangkat");
                            $nrp = $this->input->post("nrp");
                            $korps = $this->input->post("korps");
                            $jabatan = $this->input->post("jabatan");
                            $kesatuan = $this->input->post("kesatuan");
                            $matra = $this->input->post("matra");
                            $alamat = $this->input->post("alamat");
                            $email = $this->input->post("email");
            
                        
                            $this->load->model("common_model");
                            $this->common_model->data_insert("tim",
                                array(
                                "nama"=>$nama,
                                "tanggal_lahir"=>date("Y-m-d", strtotime($tanggal_lahir)),
                                "pangkat"=>$pangkat,
                                "nrp"=>$nrp,
                                "korps"=>$korps,
                                "jabatan"=>$jabatan,
                                "kesatuan"=>$kesatuan,
                                "matra"=>$matra,
                                "alamat"=>$alamat,
                                "email"=>$email,
                                "foto"=>$file_name,
                                'flag_del' => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")
                                ));

                            
			    $data["sukses"] =  "data berhasil disimpan";
                        
                }
            }
            
            $this->load->view("tim/add_tim",$data);
        }
    }
    
  
}