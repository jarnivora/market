<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
}

	public function index()
	{
		$object=array(
			'data' => array(
			'getdata' => $this->model_admin->get_supplier(),
			'getdata2' => $this->model_admin->get_category(),
			'getdata3' => $this->model_admin->get_brand(),
				),
			);	
		$this->load->view('admin/add_product',$object);
	}
	function save(){
		if ($_POST) {
			$this->form_validation->set_rules('nama_produk', '', 'required');
			$this->form_validation->set_rules('cat', '', 'required');
			$this->form_validation->set_rules('jual', '', 'required');
			$this->form_validation->set_rules('sup', '', 'required');
			$this->form_validation->set_rules('beli', '', 'required');
			$this->form_validation->set_rules('diskon', '', 'required');
			$this->form_validation->set_rules('ukuran', '', 'required');
			$this->form_validation->set_rules('berat', '', 'required');
			$this->form_validation->set_rules('stok', '', 'required');
			$this->form_validation->set_rules('merk', '', 'required');
			$this->form_validation->set_rules('tax', '', 'required');
			$this->form_validation->set_rules('mytext[]', '', 'required');
			// $this->form_validation->set_rules('foto', '', 'required');
			$this->form_validation->set_rules('desc', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect('admin/add_product');
 
			} 
			else{
			$data_item_foto = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'id_kategori' => $this->input->post('cat'),
			'hrgjual_produk' => $this->input->post('jual'),
			'id_supplier' => $this->input->post('sup'),
			'hrgbeli_produk' => $this->input->post('beli'),
			'diskon_produk' => $this->input->post('diskon'),
			'size_produk' => $this->input->post('ukuran'),
			'berat_produk' => $this->input->post('berat'),
			'jumlah_stok' => $this->input->post('stok'),
			'id_merk' => $this->input->post('merk'),
			'pajak' => $this->input->post('tax'),
			'desk_produk' => $this->input->post('desc'),
			);
			

			if(!empty($_FILES['mytext2']['name'])){
            $filesCount = count($_FILES['mytext2']['name']);
            foreach($_FILES as $key => $value)
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['mytext2']['name'] = $value['name'][$i];
                $_FILES['mytext2']['type'] = $value['type'][$i];
                $_FILES['mytext2']['tmp_name'] = $value['tmp_name'][$i];
                $_FILES['mytext2']['error'] = $value['error'][$i];
                $_FILES['mytext2']['size'] = $value['size'][$i];

                $uploadPath = 'foto_produk/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';

                $this->upload->initialize($config);

                if($this->upload->do_upload('mytext2')){
                    $fileData = $this->upload->data();
                    $id_produk = $this->model_admin->getid() + 1;
                    $uploadData = array (
                    	'gambar_produk' => $fileData['file_name'],
                    	'id_produk' => $id_produk,
                    	'path' => 'foto_produk/'
                    	); 
                }
            
            if(!empty($uploadData)){
                $this->model_admin->tambahfoto($uploadData);
            }else{
            echo "Upload Gagal";
			echo $this->upload->display_errors();
			die;
            }
		}
		$this->model_admin->insert_product($data_item_foto);
			$id=$this->db->insert_id();
			$form=$this->input->post('mytext');
				foreach ($form as $a) {
					$this->model_admin->tambahspek($id, $a);
			}
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		// redirect('admin/add_product','refresh');
			} // end of verify 
		}
	
	}
}
}