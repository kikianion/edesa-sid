<?php
class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
	}

	function index(){
		if (isset($_SESSION['siteman']) AND $_SESSION['siteman'] == 1){
			$this->load->model('user_model');
			$grup	= $this->user_model->sesi_grup($_SESSION['sesi']);
			switch($grup){
				case 1: redirect('hom_desa'); break; //superadmin
				case 2: redirect('hom_desa'); break; //admin desa
				case 3: redirect('web'); break;
				case 4: redirect('web'); break;
				case 5: redirect('hom_desa'); break; //penduduk
				default: {
					if ($this->config->item("offline_mode")===TRUE) {
						redirect('siteman');

					} else {
						redirect('hom_desa'); //default
					}
				}
			}

		// Jika offline_mode aktif, tidak perlu menampilkan halaman website
		} else if ($this->config->item("offline_mode")===TRUE) {
			redirect('siteman');

		} else {
			redirect('siteman');
		}

	}
}
