<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->Template('index');
	}
	public function about(){
		$this->load->Template('about');
	}
	public function contact(){
		$this->load->model('model_contact');

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$data = array(
				'fullname'	=> $_POST['fullname'],
				'text'		=> $_POST['text'],
				'dateadd'	=> date('Y-m-d H:i:s')
			);
			$add = $this->model_contact->addContact($data);
			if($add){
				redirect('home/contact');
			}
		}
		$this->load->Template('contact');
	}
}
