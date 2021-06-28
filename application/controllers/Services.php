<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('index');
        $this->load->view('templates/footer');
	}
    public function advertising()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/advertising');
        $this->load->view('templates/footer');
	}
    public function digitalmarketing()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/digitalmarketing');
        $this->load->view('templates/footer');
	}
    public function event()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/event');
        $this->load->view('templates/footer');
	}
    public function merchandising()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/merchandising');
        $this->load->view('templates/footer');
	}
    public function multimedia()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/multimedia');
        $this->load->view('templates/footer');
	}
    public function procurment()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/procurment');
        $this->load->view('templates/footer');
	}
    public function sosmed()
	{
		$data['title'] = 'Husthast';

		$this->load->view('templates/header',$data);
        $this->load->view('services/sosmed');
        $this->load->view('templates/footer');
	}
}
