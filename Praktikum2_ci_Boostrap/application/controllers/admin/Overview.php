<!--  
/*
|--------------------------------------------------------------------------
| Membuat Controllers overview.php
|-------------------------------------------------------------------------- 
*/
-->
<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		/*
		|--------------------------------------------------------------------------
		| Load view/admin/overview.php
		|--------------------------------------------------------------------------
		| Syntak berikut berfungsi untuk meload view atau tamppilan dari overview 
		*/
        $this->load->view("admin/overview");
	}
}