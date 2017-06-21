<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_products extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
}
	public function index()
	{
		$object=array(
			'data' => array(
			'getdata' => $this->model_admin->get_product(),
				),
			);	
		$this->load->view('admin/manage_products',$object);
	}
	function update_products($id){
	 if ($id == TRUE) {
      $object = array(
        'data' => array(
          'getUserWhere' => $this->model_admin->get_product_update($id),
          'getdata' => $this->model_admin->get_supplier(),
			'getdata2' => $this->model_admin->get_category(),
			'getdata3' => $this->model_admin->get_brand(),
        ),
      );
      $this->load->view('admin/update_products',$object);
    	}
	}
	function edit(){
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
			// $this->form_validation->set_rules('foto', '', 'required');
			$this->form_validation->set_rules('desc', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect('admin/add_product');
 
			} 
			else{
		$img_config = array(
                                'upload_path' => 'foto_produk/',
                                'allowed_types' => 'jpg|png',
                                'max_size' => '1000000',
                                'overwrite' => FALSE,
                            );
		$this->upload->initialize($img_config);
		if (!$this->upload->do_upload('foto')) {
			echo "Upload Gagal";
			echo $this->upload->display_errors();
		}else{
			$data = array(
               'upload_data' => $this->upload->data() ,
            );
            $id = $this->input->post('id');
			$data_item_foto = array(
			'gambar_produk' => $data['upload_data']['file_name'],
			'path' => 'foto_produk/',
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
			'spek_produk' => $this->input->post('spek'),
			);
			$this->model_admin->update_product($data_item_foto,$id);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/manage_products','refresh');
			} // end of verify 
		}
	
	}
}
function delete($id){
		$this->model_admin->delete_product($id);
	$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');	
      redirect('admin/manage_products','refresh');
	}	

}
