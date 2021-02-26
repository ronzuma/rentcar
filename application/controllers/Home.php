<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_car');
	}
	
	public function index(){
		$data['car']=$this->M_car->armada();
		$this->load->view('home', $data);
	}
	
	public function order(){
		$jemput		= $this->input->post('jemput');
		$tujuan		= $this->input->post('tujuan');
		$name		= $this->input->post('name');
		$tel		= $this->input->post('tel');
		$ket_tujuan	= $this->input->post('ket_tujuan');
		$ket_jemput	= $this->input->post('ket_jemput');
		
		if ($tujuan=='Lainnya'){
			$to=$ket_tujuan;
		}else{
			$to=$tujuan;
		}
		
		if ($jemput=='Lainnya'){
			$from=$ket_jemput;
		}else{
			$from=$jemput;
		}
		
		$text="Nama: ".$name.". \r\n Telpon: ".$tel.". Lokasi Penjemputan: ".$from.". Tujuan: ".$to;
		
		$data=urlencode($text);
		
		redirect('https://wa.me/6287863666798?text='.$data);
	}
	
	public function gallery(){
		$this->load->view('gallery');
	}
	
	public function rent(){
		$data['car']=$this->M_car->armada();
		$this->load->view('rent', $data);
	}
}