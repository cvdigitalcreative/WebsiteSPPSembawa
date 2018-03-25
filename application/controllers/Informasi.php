<?php
	/**
	* 
	*/
	class Informasi extends CI_Controller
	{
		
	function __construct()
	{
			parent::__construct();
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_files');
        	$this->m_pengunjung->count_visitor();		
    }

	function informasi_publik_berkala()
	{
		$y['title'] = 'Informasi Publik Berkala';
		$x['data']=$this->m_files->get_all_files();
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 6]);
		$this->load->view('v_i_p_berkala',$x);
		$this->load->view('v_footer');
	}

	function informasi_publik_setiap_saat()
	{
		$y['title'] = 'Informasi Publik Setiap Saat';
		$x['data']=$this->m_files->get_all_files();
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 6]);
		$this->load->view('v_i_p_setiap_saat',$x);
		$this->load->view('v_footer');
	}

	function serta_merta()
	{
		$y['title'] = 'Serta Merta';
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 6]);
		$this->load->view('v_guru');
		$this->load->view('v_footer');
	}
	
	function setiap_saat()
	{
		$y['title'] = 'Setiap Saat';
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 6]);
		$this->load->view('v_guru');
		$this->load->view('v_footer');
	}

	function form_permintaan()
	{
		$y['title'] = 'Form Permintaan Informasi Publik';
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 6]);
		$this->load->view('v_guru');
		$this->load->view('v_footer');
	}

	function laporan_kegiatan()
	{
		$y['title'] = 'Laporan Kegiatan';
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 6]);
		$this->load->view('v_guru');
		$this->load->view('v_footer');
	}

	function hubungi_kami(){
		$y['title'] = 'Hubungi Kami';
		$this->load->view('v_header',$y);
		$this->load->view('v_sidebar',["side" => 8]);
		$this->load->view('v_hubungi_kami');
		$this->load->view('v_footer');
	}

 	function search()
		{
			$x['title'] = 'Artikel';
			$keyword=str_replace("'", "", $this->input->post('xfilter',TRUE));
			$x['data']=$this->m_tulisan->search_tulisan($keyword);
			$x['populer']=$this->m_tulisan->get_tulisan_populer();
			$x['terbaru']=$this->m_tulisan->get_tulisan_terbaru();
			$x['kat']=$this->m_tulisan->get_kategori_for_blog();
			$this->load->view('v_header',$x);
			$this->load->view('v_artikel',$x);
			$this->load->view('v_footer');


		}
}
?>