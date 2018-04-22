<?php

	class Civitas extends CI_Controller
	{	
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_portfolio');
			$this->load->model('m_siswa');
			$this->load->model('m_guru');
			$this->load->model('m_files');
        	$this->m_pengunjung->count_visitor();
		}

		function index()
		{
			$y['title'] = 'Peserta Didik';
			$x['data'] = $this->m_siswa->get_all_siswa();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 2]);
			$this->load->view('v_murid',$x);
			$this->load->view('v_footer');
		}

		function guru()
		{
			$y['title'] = 'Guru dan Tenaga Kerja';
			$x['data'] = $this->m_guru->get_all_guru();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 2]);
			$this->load->view('v_guru',$x);
			$this->load->view('v_footer');
		}

		function alumni()
		{

			$y['title'] = 'Alumni';
			$x['data']=$this->m_files->get_file_by_name(5);
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 2]);
			$this->load->view('v_alumni',$x);
			$this->load->view('v_footer');
		}

		function form_alumni()
		{

			$y['title'] = 'Form Alumni';
			$kode = 8;
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode($kode);
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 2]);
			$this->load->view('v_forms_alumni',$x);
			$this->load->view('v_footer');
		}

	}
?>
