<?php

	class Civitas extends CI_Controller
	{	
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_guru');
        	$this->m_pengunjung->count_visitor();
		}

		function index()
		{
			$y['title'] = 'Peserta Didik';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 2]);
			$this->load->view('v_murid');
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
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 2]);
			$this->load->view('v_alumni');
			$this->load->view('v_footer');
		}

	}
?>
