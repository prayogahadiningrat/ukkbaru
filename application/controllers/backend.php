<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('pesawat');
		$this->load->helper('url');
	}

	function tampil(){
		$data['rute'] = $this->pesawat->tampil_data()->result();
		$this->load->view('offers', $data);
	}

	function v_input(){
		$this->load->view('v_input');
	}

	function index() {
		$data['rute'] = $this->pesawat->tampil_data()->result();
		$this->load->view('index', $data);
	}

	function tambah_aksi() {
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$date = $this->input->post('depart');
		$price = $this->input->post('prices');

		$data = array(
				'rute_from' => $from,
				'rute_to' => $to,
				'depart_at' => $date,
				'price' => $price
		);
		$this->pesawat->input_data($data, 'rute');
		redirect('backend/index');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->pesawat->hapus_record($where, 'rute');
		redirect('backend/tampil');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->pesawat->edit_datarute($where, 'rute')->result();
		$this->load->view('v_edit', $data);
	}

	function update_rute(){
		
		$ruteid = $this->input->post('ruteid');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$data = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'price' => $price,
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->pesawat->update_datarute($where, $data, 'rute');
		redirect('backend/tampil');

	}
	function tambah(){
		$ruteid = $this->input->post('ruteid');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$transportid = $this->input->post('transportid');
		$data = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'price' => $price,
			'transportid' => $transportid
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->pesawat->tambah_data($where, $data, 'rute');
		redirect('backend/tampil');	

	}

}

?>