<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Husthast';
	    $data['active'] = 'current-menu-item current-menu-ancestor';
		$this->load->view('templates/header',$data);
        $this->load->view('portofolio');
        $this->load->view('templates/footer');
	}
}
