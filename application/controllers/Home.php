<?php
	class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['headline']=$this->m_tulisan->get_post_home();
		$x['jadwal'] = $this->m_tulisan->get_kategori_jadwal();
		$x['kampusku'] = $this->m_tulisan->get_kategori_kampusku();
		$x['minggu'] = $this->m_tulisan->get_kategori_kegiatanminggu();
		$x['kerjasama'] = $this->m_tulisan->get_kategori_kerjasama();
		$x['pengumuman'] = $this->m_tulisan->get_kategori_pengumuman();
		$x['agenda'] = $this->m_tulisan->get_kategori_agenda();
		$x['kat']=$this->m_tulisan->get_kategori_for_blog();
		$this->load->view('v_home',$x);
	}
}
