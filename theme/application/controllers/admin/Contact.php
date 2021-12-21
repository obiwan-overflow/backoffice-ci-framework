<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
	public function index(){
		$data = array();
		$data['title'] 	= "ติดต่อเรา";

		$this->load->model('model_contact'); 
		$data['lists']	= $this->model_contact->getLists();

		$this->load->Template('admin/contact/index',$data);
	}
	public function view($id){
		$data = array();
		$data['title'] 	= "รายละเอียด";

		$this->load->model('model_contact');
		$resultdata = $this->model_contact->getDetail($id);

		$data['fullname'] 	= $resultdata['0']->fullname;
		$data['text'] 		= $resultdata['0']->text;

		$this->load->Template('admin/contact/view',$data);
	}
	public function del($id){
		$this->model_contact->delete($id);
		redirect('admin/contact');
	}
}
