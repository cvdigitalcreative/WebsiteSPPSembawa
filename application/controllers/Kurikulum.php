<?php
	/**
	* 
	*/
	class Kurikulum extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		function index()
		{
			$y['title'] = 'Kalender Akademik';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 4]);
			$this->load->view('v_k_akademik.php');
			$this->load->view('v_footer');
		}
		
		function jadwal()
		{
			$y['title'] = 'Jadwal';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 4]);
			$this->load->view('v_jadwal.php');
			$this->load->view('v_footer');
		}
		
		function jadwal_piket()
		{
			$y['title'] = 'Jadwal Piket Kelas';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 4]);
			$this->load->view('v_piket_kelas.php');
			$this->load->view('v_footer');
		}				
	}
?>