<?php
	class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_portfolio');
        $this->m_pengunjung->count_visitor();
	}
	function index(){
		$kode = 8;
		$y['title'] = 'SMK Negeri SPP Sembawa';
		$x['headline']=$this->m_tulisan->get_post_home();
		$x['jadwal'] = $this->m_tulisan->get_kategori_jadwal();
		$x['kampusku'] = $this->m_tulisan->get_kategori_kampusku();
		$x['minggu'] = $this->m_tulisan->get_kategori_kegiatanminggu();
		$x['kerjasama'] = $this->m_tulisan->get_kategori_kerjasama();
		$x['pengumuman'] = $this->m_tulisan->get_kategori_pengumuman();
		$x['agenda'] = $this->m_tulisan->get_kategori_agenda();
		$x['kat']=$this->m_tulisan->get_kategori_for_blog();
		$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode($kode);
		$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
		$x['total'] = $this->m_pengunjung->get_all_pengunjung();
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 1]);
		$this->load->view('v_home',$x);
		$this->load->view('v_footer');
	}

	function profil()
	{
		$y['title'] = 'SMK Negeri SPP Palembang';
		$this->m_portfolio->count_views(9);
		$x['portofolio1']=$this->m_portfolio->get_portfolio_by_kode(8);
		$x['portofolio']=$this->m_portfolio->get_portfolio_by_kode(9);
		$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
		$x['total'] = $this->m_pengunjung->get_all_pengunjung();
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 1]);
		$this->load->view('v_profil',$x);
		$this->load->view('v_footer');
	}
}
