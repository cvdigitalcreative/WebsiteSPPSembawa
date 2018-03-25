<?php
	
	/**
	* 
	*/
	class Ppdb extends CI_Controller
	{
		
		// function __construct(argument)
		// {
			
		// }

		function index()
		{
			$y['title'] = 'Pendaftaran Peserta Didik Baru (PPDB)';
			$this->load->view('v_header',$y);
			$this->load->view('v_sidebar',["side" => 3]);
			$this->load->view('v_ppdb.php');
			$this->load->view('v_footer');
		}
	}
?>