<?php
	/**
	* 
	*/
	class Sarana extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		function index()
		{
			$y['title'] = 'Sapras Sekolah';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_sapras_sekolah.php');
			$this->load->view('v_footer');
		}
		
		function tuk()
		{
			$y['title'] = 'TUK';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_tuk.php');
			$this->load->view('v_footer');
		}
		
		function gedung()
		{
			$y['title'] = 'Gedung';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_gedung.php');
			$this->load->view('v_footer');
		}

		function laboratorium()
		{
			$y['title'] = 'Laboratorium';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_laboratorium.php');
			$this->load->view('v_footer');
		}

		function lahan_praktikum()
		{
			$y['title'] = 'Lahan Praktikum';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 5]);
			$this->load->view('v_lahan_praktikum.php');
			$this->load->view('v_footer');
		}				
	}
?>