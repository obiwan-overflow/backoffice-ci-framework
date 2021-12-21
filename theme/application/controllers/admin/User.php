<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){
		$data = array();
		$data['success'] = '';
	    $data['error'] = '';

	    if ($this->session->has_userdata('success')) {
	      $data['success'] = $this->session->success;
	      $this->session->unset_userdata('success');
	    }
	    if ($this->session->has_userdata('error')) {
	      $data['error'] = $this->session->error;
	      $this->session->unset_userdata('error');
	    }
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$result = $this->model_admin->login($this->input->post('username'),md5($this->input->post('password')));
			if($result!=false){
				$this->session->set_userdata('admin_id', $result->id);
				redirect('admin/home');
			}else {
		        $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการเข้าสู่ระบบแอดมิน');
		        redirect('admin/user/login');
	      	}
		}
		$this->load->view('admin/login',$data);
	}
	public function logout(){
		$this->session->unset_userdata('admin_id');
		$this->load->view('admin/login');
	}
}
