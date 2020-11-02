<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['gbr'] = $this->Model_wisata->readGbrWst();
		$this->load->view('static/header1');
		$this->load->view('web/index', $data);
		$this->load->view('static/footer1');
	}

	public function gunung(){
		$this->form_validation->set_rules('cari', 'Cari', 'required|trim');

		if($this->form_validation->run() == true){
			$search = $this->input->post('cari');
			$data['a'] = $this->Model_wisata->readWisata('gunung', $search);
			$this->load->view('static/header1');
			$this->load->view('web/gunung', $data);
			$this->load->view('static/footer1');

			if(empty($data['a'])){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><h4><b>Gagal !</b></h4> Tidak ada data/tempat dengan nama <b>'.$search.'</b>. Coba cari pada kategori lain.</div>');
				redirect(base_url('home/gunung'));
			}
		} else {
			$search = '';
			$data['a'] = $this->Model_wisata->readWisata('gunung', $search);
			$this->load->view('static/header1');
			$this->load->view('web/gunung', $data);
			$this->load->view('static/footer1');
		}
	}

	public function pantai(){
		$this->form_validation->set_rules('cari', 'Cari', 'required|trim');

		if($this->form_validation->run() == true) {
			$search = $this->input->post('cari');
			$data['b'] = $this->Model_wisata->readWisata('pantai', $search);
			if(empty($data['b'])){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><h4><b>Gagal !</b></h4> Tidak ada data/tempat dengan nama <b>'.$search.'</b>. Coba cari pada kategori lain.</div>');
				redirect(base_url('home/pantai'));
			}
			$this->load->view('static/header1');
			$this->load->view('web/pantai', $data);
			$this->load->view('static/footer1');

		} else {
			$search = '';
			$data['b'] = $this->Model_wisata->readWisata('pantai', $search);
			$this->load->view('static/header1');
			$this->load->view('web/pantai', $data);
			$this->load->view('static/footer1');
		}
	}

	public function pulau(){
		$this->form_validation->set_rules('cari', 'Cari', 'required|trim');

		if($this->form_validation->run() == true){
			$search = $this->input->post('cari');
			$data['c'] = $this->Model_wisata->readWisata('pulau', $search);
			$this->load->view('static/header1');
			$this->load->view('web/pulau', $data);
			$this->load->view('static/footer1');

			if(empty($data['c'])){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><h4><b>Gagal !</b></h4> Tidak ada data/tempat dengan nama <b>'.$search.'</b>. Coba cari pada kategori lain.</div>');
				redirect(base_url('home/pulau'));
			}
		} else {
			$search = '';
			$data['c'] = $this->Model_wisata->readWisata('pulau', $search);
			$this->load->view('static/header1');
			$this->load->view('web/pulau', $data);
			$this->load->view('static/footer1');
		}
	}

	// Method Kirim Email
	public function email(){
		$this->load->model('Model_pesan');

		$data['nama']  = htmlspecialchars($this->input->post('nama', true));
		$data['email'] = htmlspecialchars($this->input->post('email', true));
		$data['tlpn']  = htmlspecialchars($this->input->post('tlpn', true));
		$data['pesan'] = htmlspecialchars($this->input->post('pesan', true));

		if(!empty($data)){
			$this->Model_pesan->email($data);

			// $this->email->from($data['email'], $data['nama']);
			// $this->email->to('imanuelnauw@gmail.com');
			// $this->email->subject('Pengunjung Sorong Wisata');
			// $this->email->message($data['pesan']);
			// $this->email->send();
		}

	}
}
