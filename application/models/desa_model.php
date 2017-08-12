<?php class Desa_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

/*
	function get_data(){
		$sql   = "SELECT * FROM desa WHERE 1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
*/

	function test(){
		$data['id'] = NULL;
		$data['nama'] = "Desa Baru";
		$data['status'] = 1;
		echo('start here');
		$this->db->insert('desa',$data);
		echo "===";
		echo $this->db->insert_id();
		echo "~~";
	}

function list_data(){
		$sql   = "SELECT DISTINCT d.desa as nama_desa,c.nama_kepala_desa, c.nama_kecamatan FROM tweb_wil_clusterdesa d LEFT JOIN config c ON d.desa = c.desa WHERE d.desa<>'' ";

		
			//$sql .=" AND WHERE 1";
		

		//$sql .= $this->search_sql();
		//$sql .= $this->filter_sql();

		$query = $this->db->query($sql);
		$data  = $query->result_array();

		$i=0;
		while($i<count($data)){
			$data[$i]['no']=$i+1;
			$i++;
		}
		return $data;
	}

	function insert(){
		$data = $_POST;
		//$desa['id'] = NULL;
		$desa['desa'] = $data['nama_desa'];
		$desa['id_kepala'] = 0;
		$desa['id_kades'] = 0;
		$desa['dusun'] = $data['nama_desa'];

		$this->db->insert('tweb_wil_clusterdesa',penetration($desa));

		
		//$id_desa_new = $this->db->insert_id();
		
		//untuk table: config
		
		$data['id'] = NULL; // Hanya ada satu row data desa
		//default value for logo
		$data['logo'] = '';
		$data['path'] = '';
		$data['desa'] = $data['nama_desa'];
		$data['g_analytic'] = '';
		// Data lokasi peta default. Diperlukan untuk menampilkan widget peta lokasi
		$data['lat'] = '-8.488005310891758';
		$data['lng'] = '116.0406072534065';
		$data['zoom'] = '19';
		$data['map_tipe'] = 'roadmap';
		unset($data['old_logo']);
		$outp = $this->db->insert('config',$data);
		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;


		
		
	}


}
