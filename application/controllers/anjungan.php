<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

class anjungan extends CI_Controller{

	function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('user_model');
		$grup	= $this->user_model->sesi_grup($_SESSION['sesi']);
		if($grup!=1 AND $grup!=2 AND $grup!=5) redirect('siteman');
		$this->load->model('header_model');
		$this->load->model('anjungan_model');
		$this->modul_ini = 14;
	}

	function clear(){
		unset($_SESSION['cari']);
		unset($_SESSION['filter']);
		redirect('lapor');
	}

	function index($p=1,$o=0){
		if($_SESSION['grup'] == 1 OR $_SESSION['grup'] == 2){



			$data['p']        = $p;
			$data['o']    	  = $o;

			if(isset($_SESSION['cari']))
				$data['cari'] = $_SESSION['cari'];
			else $data['cari'] = '';

			if(isset($_SESSION['filter']))
				$data['filter'] = $_SESSION['filter'];
			else $data['filter'] = '';

			if(isset($_POST['per_page']))
				$_SESSION['per_page']=$_POST['per_page'];
			$data['per_page'] = $_SESSION['per_page'];

			$data['paging']  = $this->anjungan_model->paging($p,$o);
			$data['main']    = $this->anjungan_model->list_data($o, $data['paging']->offset, $data['paging']->per_page,2);
			$data['keyword'] = $this->anjungan_model->autocomplete();

			$header = $this->header_model->get_data();
			$nav['act']=0;
			$header['modul_ini'] = $this->modul_ini;
			//echo "before:";
			//debug
			//var_dump($data['main']);
			//echo "end of debug";
			$this->load->view('header', $header);
			$this->load->view('anjungan/nav',$nav);
			$this->load->view('anjungan/table',$data);
			$this->load->view('footer');
		} elseif($_SESSION['grup'] == 5){
			redirect('anjungan/form');
		}
	}

	function form($p=1,$o=0,$id=''){
		//USER: PENDUDUK

		//$data['p'] = $p;
		//$data['o'] = $o;

		if($id){
			$data['anjungan']        = $this->anjungan_model->get_anjungan($id);
			$data['form_action'] = site_url("anjungan/update/$id/$p/$o");
		}
		else{
			$data['anjungan']        = null;
			$data['form_action'] = site_url("anjungan/insert");
		}

		//$data['list_kategori']     = $this->web_komentar_model->list_kategori(1);

		$header = $this->header_model->get_data();
		$nav['act']=6;
		$this->load->view('header', $header);
		$this->load->view('web/spacer');
		//$this->load->view('web/nav',$nav);
		$this->load->view('anjungan/form',$data);
		$this->load->view('footer');
	}

	//debug only
	function show_no_tiket($no=''){
		$header = $this->header_model->get_data();
		$this->load->view('header',$header);
		$this->load->view('web/spacer');
		//$this->load->view('web/nav',$nav);
		$data['no_tiket'] = $no;

		$this->load->view('anjungan/show_no_tiket',$data);
		$this->load->view('footer');	
	}

	function search(){
		$cari = $this->input->post('cari');
		if($cari!='')
			$_SESSION['cari']=$cari;
		else unset($_SESSION['cari']);
		redirect('lapor');
	}

	function filter(){
		$filter = $this->input->post('filter');
		if($filter!=0)
			$_SESSION['filter']=$filter;
		else unset($_SESSION['filter']);
		redirect('lapor');
	}

	function insert(){
		$no = $this->anjungan_model->get_last_no_tiket();
		$this->anjungan_model->insert();
		redirect('anjungan/show_no_tiket/'.$no);
	}

	function update($id='',$p=1,$o=0){
		$this->web_komentar_model->update($id);
		redirect("lapor/index/$p/$o");
	}

	function delete($p=1,$o=0,$id=''){
		$this->web_komentar_model->delete($id);
		redirect("lapor/index/$p/$o");
	}

	function delete_all($p=1,$o=0){
		$this->web_komentar_model->delete_all();
		redirect("lapor/index/$p/$o");
	}
	
	function tlanjut_lock($id=''){
		$this->anjungan_model->tlanjut($id,1);
		redirect("anjungan/index/$p/$o");
	}

	function tlanjut_unlock($id=''){
		$this->anjungan_model->tlanjut($id,0);
		redirect("anjungan/index/$p/$o");
	}
}
