<?php
	/**
	* 
	*/
	class Sarana extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_files');
			$this->load->model('m_pengunjung');
			$this->load->model('m_portfolio');
			$this->m_pengunjung->count_visitor();
		}

		function index()
		{
			$y['title'] = 'Sapras Sekolah';
			$key = 3;
			$x['data']=$this->m_files->get_file_by_name($key);
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_sapras_sekolah.php',$x);
			$this->load->view('v_footer');
		}
		
		function tuk()
		{
			$y['title'] = 'TUK';
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(8);
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_tuk.php',$x);
			$this->load->view('v_footer');
		}
		
		function gedung()
		{
			$y['title'] = 'Gedung';
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(8);
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_gedung.php',$x);
			$this->load->view('v_footer');
		}

		function laboratorium()
		{
			$y['title'] = 'Laboratorium';
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(8);
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_laboratorium.php',$x);
			$this->load->view('v_footer');
		}

		function lahan_praktikum()
		{
			$y['title'] = 'Lahan Praktikum';
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(8);
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_lahan_praktikum.php',$x);
			$this->load->view('v_footer');
		}				
	}
?>