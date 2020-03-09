<!-- 
/*
|--------------------------------------------------------------------------
| Membuat download file dengan Codeigniter 
|-------------------------------------------------------------------------- 
*/
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Mengextends class Downloads dengan CI_Controller 
|-------------------------------------------------------------------------- 
*/
class Download extends CI_Controller {
	/*
    |--------------------------------------------------------------------------
    | Memanggil helper Download di Codeigniter 
    |-------------------------------------------------------------------------- 
    */
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','Download'));				
	}

	/*
    |--------------------------------------------------------------------------
    | Menampilakan view dari V_download 
    |-------------------------------------------------------------------------- 
    */
	public function index(){		
		$this->load->view('V_download');
	}

	/*
    |--------------------------------------------------------------------------
    | Method lakukan_download() 
    |-------------------------------------------------------------------------- 
	| Berfungsi untuk ketika link download pada V_download ditekan, otomatis
	| file akan terunduh. Disini kita juga menentukan file yang akan di download
	| nanti entah itu file gambar, dokumen, dan lain-lain.
	*/
	public function lakukan_download(){				
		force_download('gambar/joker.jpg',NULL);
	}	

}