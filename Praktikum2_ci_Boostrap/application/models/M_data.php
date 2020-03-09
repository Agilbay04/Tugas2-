<!-- 
/*
|--------------------------------------------------------------------------
| Menampilkan data dari table user di database malasngoding
|-------------------------------------------------------------------------- 
*/
 -->
<?php 

class M_data extends CI_Model{
	/*
	|--------------------------------------------------------------------------
	| Fungsi ambil_data() 
	|-------------------------------------------------------------------------- 
	| Fungsi ini berfungsi untuk mengambil data dari table user di database 
	| malasngoding. Untuk syntax return sendiri berfungsi untuk mengembalikan
	| data yang di tangkap controller yang memanggil fungsi ambil_data()
	*/
	function ambil_data(){
		return $this->db->get('user');
	}
}

?>