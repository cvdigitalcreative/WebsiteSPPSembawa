<?php
	/**

	*/
	class Gallery extends Ci_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_galeri');
			$this->load->model('m_album');
			$this->load->model('m_pengunjung');
	        $this->m_pengunjung->count_visitor();
		}

		function index(){
			$y['title'] = 'Gallery Photo';
			$x['alb']=$this->m_album->get_all_album();
			$x['data']=$this->m_galeri->get_all_galeri();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 7]);
			$this->load->view('v_photo',$x);
			$this->load->view('v_footer');
		}

		function video(){
			$y['title'] = 'Gallery Video';
			$x['data']=$this->m_galeri->get_all_video();
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 7]);
			$this->load->view('v_video',$x);
			$this->load->view('v_footer');
		}
	}
?>