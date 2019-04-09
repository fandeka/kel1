<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casis extends CI_Controller {
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
            $data['status_casis'] = 'active';
            $data = array();
            $this->load->model("casis_model");
            $data["casis_rikes"] = $this->casis_model->get_casis_filter_by_flag_del();
            $this->load->view("casis/index",$data);
        }
    }

   

    public function add_casis(){
        if(_is_user_login($this)){
            $data['status_casis'] = 'active';
            $data["error"] = "";
            if($_POST){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('no_casis', 'No Casis', 'trim|required');
                $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
                $this->form_validation->set_rules('tempat_lahir', 'Nama', 'trim|required');
                $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
                $this->form_validation->set_rules('program', 'Program', 'trim|required');
                $this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
                $this->form_validation->set_rules('ipk', 'IPK', 'trim|required');
                $this->form_validation->set_rules('panda', 'Panda', 'trim|required');
                $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');

                if ($this->form_validation->run() == FALSE) 
        		{
        		  
                $error_array = $this->form_validation->error_string();
                $error_json = json_encode(strip_tags($error_array));
                $error_clean = str_replace(['"', '"'], '', $error_json);
                    
		        $data["msg"] =  $error_clean;
                    
        		}else{


                        $file_name="";
                        $config['upload_path'] = './uploads/foto_casis/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $this->load->library('upload', $config);

                        if($_FILES["foto_casis"]["size"] > 0)
                                if ( ! $this->upload->do_upload('foto_casis')){
                                    $error = array('error' => $this->upload->display_errors());
                        
                                    $this->load->view('upload_form', $error);
                                }else{
                                    $file_data = $this->upload->data();
                                    $file_name = $file_data["file_name"];
                                    
                                }     
                            $no_casis = $this->input->post("no_casis");
                            $nama = $this->input->post("nama");
                            $jenis_kelamin = $this->input->post("jenis_kelamin");
                            $tempat_lahir = $this->input->post("tempat_lahir");
                            $tanggal_lahir = $this->input->post("tanggal_lahir");
                            $program = $this->input->post("program");
                            $universitas = $this->input->post("universitas");
                            $ipk = $this->input->post("ipk");
                            $panda = $this->input->post("panda");
                            $kelas = $this->input->post("kelas");
            
                        
                            $this->load->model("common_model");
                            $this->common_model->data_insert("casis",
                                array(
                                "no_casis" => $no_casis,
                                "nama"=>$nama,
                                "j_kel" => $jenis_kelamin,
                                "tempat_lahir"=>$tempat_lahir,
                                "tanggal_lahir"=>date("Y-m-d", strtotime($tanggal_lahir)),
                                "program"=>$program,
                                "universitas"=>$universitas,
                                "ipk"=>$ipk,
                                "panda"=>$panda,
                                "kelas"=>$kelas,
                                "foto"=>$file_name,
                                'flag_del' => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")
                                ));

                            
			    $data["sukses"] =  "data berhasil disimpan";
                        
                }
            }
            
            $this->load->view("casis/add_casis",$data);
        }
    }
 


 public function edit_casis($casis_id){
        if(_is_user_login($this)){
            $data = array();
            $this->load->model("casis_model");
            $data["casis"] = $this->casis_model->get_casis_type();
            $casis = $this->casis_model->get_casis_by_id($id);
            $data["casis"] = $casis;
            if($_POST){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('no_casis', 'No Casis', 'trim|required');
                $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
                $this->form_validation->set_rules('tempat_lahir', 'Nama', 'trim|required');
                $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
                $this->form_validation->set_rules('program', 'Program', 'trim|required');
                $this->form_validation->set_rules('universitas', 'Universitas', 'trim|required');
                $this->form_validation->set_rules('ipk', 'IPK', 'trim|required');
                $this->form_validation->set_rules('panda', 'Panda', 'trim|required');
                $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');

                if ($this->form_validation->run() == FALSE) 
                {
                  
                $error_array = $this->form_validation->error_string();
                $error_json = json_encode(strip_tags($error_array));
                $error_clean = str_replace(['"', '"'], '', $error_json);
                    
                $data["msg"] =  $error_clean;
                    
                }else{


                        $file_name="";
                        $config['upload_path'] = './uploads/foto_casis/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $this->load->library('upload', $config);

                        if($_FILES["foto_casis"]["size"] > 0)
                                if ( ! $this->upload->do_upload('foto_casis')){
                                    $error = array('error' => $this->upload->display_errors());
                        
                                    $this->load->view('upload_form', $error);
                                }else{
                                    $file_data = $this->upload->data();
                                    $file_name = $file_data["file_name"];
                                    
                                }     
                            $no_casis = $this->input->post("no_casis");
                            $nama = $this->input->post("nama");
                            $jenis_kelamin = $this->input->post("jenis_kelamin");
                            $tempat_lahir = $this->input->post("tempat_lahir");
                            $tanggal_lahir = $this->input->post("tanggal_lahir");
                            $program = $this->input->post("program");
                            $universitas = $this->input->post("universitas");
                            $ipk = $this->input->post("ipk");
                            $panda = $this->input->post("panda");
                            $kelas = $this->input->post("kelas");
            
                        
                            $this->load->model("common_model");
                            $this->common_model->data_insert("casis",
                                array(
                                "no_casis" => $no_casis,
                                "nama"=>$nama,
                                "j_kel" => $jenis_kelamin,
                                "tempat_lahir"=>$tempat_lahir,
                                "tanggal_lahir"=>date("Y-m-d", strtotime($tanggal_lahir)),
                                "program"=>$program,
                                "universitas"=>$universitas,
                                "ipk"=>$ipk,
                                "panda"=>$panda,
                                "kelas"=>$kelas,
                                "foto"=>$file_name,
                                'flag_del' => 1,
                                "created_by"=>_get_current_user_id($this),
                                "date_created"=>date("Y-m-d H:i:sa")
                                ));

                            
                $data["sukses"] =  "data berhasil disimpan";
                        
                }
            }
            
            $this->load->view("casis/add_casis",$data);
        }
    }
 
public function delete_casis($id){
        $data = array();
            $this->load->model("casis_model");
            $casis  = $this->casis_model->get_casis_filter_by_flag_del($id);

           if($casis){
                $this->db->query("update casis set flag_del = 0 where id = '".$id."'");
                redirect("casis");
           }
    }
  
}