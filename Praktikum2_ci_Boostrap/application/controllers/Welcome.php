<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	/*
	|--------------------------------------------------------------------------
	| Mengaktifkan helper lewat controller
	|-------------------------------------------------------------------------- 
	| Fungsi ini berfungsi untuk mengaktifkan helper dari controllers
	*/
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}

	/*
	|--------------------------------------------------------------------------
	| Menampilkan view welcome
	|-------------------------------------------------------------------------- 
	| Fungsi ini berfungsi untuk menampilkan atau memanggil view Welcome
	*/
	public function index(){
		$this->load->view('Welcome');
	}
}