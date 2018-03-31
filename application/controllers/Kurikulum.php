<?php
	/**
	* 
	*/
	class Kurikulum extends CI_Controller
	{
		
		function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_portfolio');
		$this->load->model('m_jejak_pendapat');
        $this->m_pengunjung->count_visitor();
	}

		function index()
		{
			$y['title'] = 'Kalender Akademik';
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(8);
		$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
		$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 4]);
			$this->load->view('v_k_akademik.php',$x);
			$this->load->view('v_footer');
		}
		
		function Dapodik()
		{
			$y['title'] = 'Dapodik';
			$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(8);
		$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
		$x['total'] = $this->m_pengunjung->get_all_pengunjung();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 4]);
			$this->load->view('v_dapodik.php',$x);
			$this->load->view('v_footer');
		}
		
				
	}
?>