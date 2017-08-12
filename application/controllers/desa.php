<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Desa extends CI_Controller{

	function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('user_model');
		$grup	= $this->user_model->sesi_grup($_SESSION['sesi']);
		if($grup!=1 AND $grup!=2) redirect('siteman');
		$this->load->model('desa_model');
		$this->load->model('header_model');
		$this->modul_ini = 1;
	}

	function clear(){
		unset($_SESSION['cari']);
		unset($_SESSION['filter']);
		redirect('desa');
	}

	function index(){
		//echo ('start');
		/*
		if(isset($_SESSION['cari']))
			$data['cari'] = $_SESSION['cari'];
		else $data['cari'] = '';

		if(isset($_SESSION['filter']))
			$data['filter'] = $_SESSION['filter'];
		else $data['filter'] = '';
		*/
		$data['main'] = $this->desa_model->list_data();
		//$data['keyword'] = $this->desa_model->autocomplete();
		$header = $this->header_model->get_data();
		$header['modul_ini'] = $this->modul_ini;
		$nav['act']= 2;
		$this->load->view('header',$header);

		$this->load->view('home/nav',$nav);
		$this->load->view('home/list_desa',$data);
		$this->load->view('footer');
	}
/*
	function form($id=''){

		if($id){
			$data['pamong']          = $this->pamong_model->get_data($id);
			$data['form_action'] = site_url("pengurus/update/$id");
		}
		else{
			$data['pamong']          = null;
			$data['form_action'] = site_url("pengurus/insert");
		}

		$header = $this->header_model->get_data();
		$header['modul_ini'] = $this->modul_ini;
		$this->load->view('header',$header);

		$nav['act']= 1;
		$this->load->view('home/nav',$nav);
		$this->load->view('home/pengurus_form',$data);
		$this->load->view('footer');
	}
	*/

	function filter(){
		$filter = $this->input->post('filter');
		if($filter!="")
			$_SESSION['filter']=$filter;
		else unset($_SESSION['filter']);
		redirect('desa');
	}

	function search(){
		$cari = $this->input->post('cari');
		if($cari!='')
			$_SESSION['cari']=$cari;
		else unset($_SESSION['cari']);
		redirect('desa');
	}

	function insert(){
		$this->desa_model->insert();
		redirect('desa');
	}

	function update($id=''){
		$this->desa_model->update($id);
		redirect('desa');
	}

	function delete($id=''){
		$this->desa_model->delete($id);
		redirect('desa');
	}

	function delete_all(){
		$this->desa_model->delete_all();
		redirect('desa');
	}

	function ttd_on($id=''){
		$this->desa_model->ttd($id,1);
		redirect('pengurus');
	}

	
}
