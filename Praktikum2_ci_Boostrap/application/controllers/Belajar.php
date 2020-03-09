<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Mengextends controllers Belajar dengan CI_Cntroller 
|-------------------------------------------------------------------------- 
| Nama class harus diawali huruf besar ketika kita mengextends controllers
| Belajar dengan CI_Controller Otomatis controllers Belajar menjadi turunan 
| dari CI_Controller, jadi semua sifat-sifat controller belajar sama dengan 
| CI_Controllers 
*/
class Belajar extends CI_Controller {
	
	/*
	|--------------------------------------------------------------------------
	| Mengextends controllers Belajar dengan CI_Cntroller 
	|-------------------------------------------------------------------------- 
	| Nama class harus diawali huruf besar ketika kita mengextends controllers
	| Belajar dengan CI_Controller Otomatis controllers Belajar menjadi turunan 
	| dari CI_Controller, jadi semua sifat-sifat controller belajar sama dengan 
	| CI_Controllers 
	*/
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
	}

	function user(){
		/*
		|--------------------------------------------------------------------------
		| Memanggil function ambil_data() 
		|-------------------------------------------------------------------------- 
		| Fungsi ini berfungsi untuk memanggil function ambil_data() pada model 
		| M_data.php, dan fungsi result() berguna menjadikannya array. Data yang 
		| dipanggil kemudian dimasukkan ke variabel $data yang nantinya akan 
		| diparsingkan ke view V_user.
		*/
		$data['user'] = $this->M_data->ambil_data()->result();
		
		/*
		|--------------------------------------------------------------------------
		| Menampilkan V_user 
		|-------------------------------------------------------------------------- 
		| Fungsi ini berfungsi untuk meload atau menampilkan view V_user agar tampil
		| nantinya saat di akses
		*/
		$this->load->view('V_user.php',$data);
	}

}