<!-- 
/*
|--------------------------------------------------------------------------
| Membuat form Validasi
|-------------------------------------------------------------------------- 
*/
-->
<?php 

class Form extends CI_Controller{
    /*
    |--------------------------------------------------------------------------
    | Memanggil library form_validation 
    |-------------------------------------------------------------------------- 
    | Di function construct berikut kita panggil library dari form_validation
    */
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('V_form');
	}

	function aksi(){
        /*
        |--------------------------------------------------------------------------
        | Menentuka form yang akan diberi validasi 
        |-------------------------------------------------------------------------- 
        | Di function aksi berikut kita akan menentukan form mana saja yang akan 
        | diberi validasi, di sini saya membuat form validation pada form input 
        | nama, email, dan konfir_email. Fungsi set_rules sendiri berfungsi untuk
        | menetapkan peraturan dari form input. format penulisannya pada parameter
        | pertama di berikan nama form input yang ingin divalidasi, paramater kedua
        | memberikan kata yang akan dicetak atau dimunculkan pada saat validasi 
        | berlangsung, dan untuk parameter ketiga isikan peraturan form, kalau
        | disini required yang artinya form input wajib diisi.
        */
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
    
        if($this->form_validation->run() != false){
            /*
            |--------------------------------------------------------------------------
            | Jika data yang diinput benar 
            |-------------------------------------------------------------------------- 
            | Maka akan tampil tulisan Form validasi oke
            */
            echo "Form validation oke";
        }else{ 
            /*
            |--------------------------------------------------------------------------
            | Menampilkan validasi form
            |-------------------------------------------------------------------------- 
            | Jika pengisian form salah, maka akan tampil validasi dari form
            */
            $this->load->view('V_form');
        }
    }
}