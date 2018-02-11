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
		redirect('insert/index');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->pesawat->hapus_record($where, 'rute');
		redirect('backend/index');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->pesawat->edit_datarute($where, 'rute')->result();
		$this->load->view('index', $data);
	}

	function update_rute(){
		$ruteid = $this->input->post('ruteid');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart_on = $this->input->post('depart');
		$price = $this->input->post('prices');
		$data = array(
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_at' => $depart_on,
			'price' => $price
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->pesawat->update_datarute($where, $data, 'rute');
		redirect('backend/tampil');
	}


}

?>