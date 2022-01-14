<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function index(){
		$this->load->view('regist');
	}

    public function registform()
   {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[12]');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }else{
           echo json_encode(['success'=>'Registration successfully.']);
        }
    }
	
}
