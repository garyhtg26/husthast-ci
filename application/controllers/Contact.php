<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
	}
}
