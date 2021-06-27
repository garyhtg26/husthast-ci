<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Husthast';
	   
		$this->load->view('templates/header_home',$data);
        $this->load->view('index');
        $this->load->view('templates/footer_home');
	}
}
