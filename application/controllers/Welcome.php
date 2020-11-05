<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('train');
		$this->load->view('navbar');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function index1()

	{
		$tree['result']=$this->train->show();
		$this->load->view('show',$tree); 
	}
	public function insert(){

		$data = array(
			'tarin_id' => $this->input->post("tarin_id"),
			'note' => $this->input->post("note"),
		);
		$data1 = array(
			'station' => $this->input->post("station"),
			'outtime' => $this->input->post("outtime"),

		);
		$data2 = array(
			'To' => $this->input->post("To"),
			'out' => $this->input->post("out"),

		);
		$data3 = array(
			'tarinstation' => $this->input->post("tarinstation"),
			'ittime' => $this->input->post("ittime"),

		);
		$this->train->tee_insert($data);
		$this->train->insert1($data1);
		$this->train->insert2($data2);
		$this->train->insert3($data3);
		//redirect('Welcome/index1');
	}

}
