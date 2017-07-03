<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
	public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // controller supplier
function insert_supplier($form){
    return $this->db->insert('shop_supplier', $form);
  }
function get_supplier(){
	$sql = "SELECT * FROM shop_supplier";
	return $this->db->query($sql)->result();
}
function get_supplier_update($id){
	$sql = "SELECT * FROM shop_supplier where id_supplier = ?";
	return $this->db->query($sql,$id)->result();
}
function update_supplier($data,$id){
 $this->db->where('id_supplier',$id);
    return $this->db->update('shop_supplier', $data);	
}
function delete_supplier($id)
{
   $this->db->where('id_supplier', $id);
   return $this->db->delete('shop_supplier');
}
function get_category(){
	$sql = "SELECT * FROM shop_kategori";
	return $this->db->query($sql)->result();
}
function get_brand(){
	$sql = "SELECT * FROM shop_merk";
	return $this->db->query($sql)->result();
}
// end controller supplier








// controller product
function insert_product($form){
 return $this->db->insert('shop_produk', $form);
}
function get_product(){
	$sql = "SELECT * FROM shop_produk inner join shop_kategori on shop_produk.id_kategori = shop_kategori.id_kategori inner join shop_media on shop_produk.id_produk = shop_media.id_produk";
	return $this->db->query($sql)->result();
}
function get_product_update($id){
	$sql = "SELECT * FROM shop_produk where id_produk = ?";
	return $this->db->query($sql,$id)->result();
}
function update_product($data,$id){
 $this->db->where('id_produk',$id);
    return $this->db->update('shop_produk', $data);	
}
function delete_product($id)
{
   $this->db->where('id_produk', $id);
   return $this->db->delete('shop_produk');
}
function tambahspek($id, $a){
  return $this->db->insert('shop_spek', array(
    'id_produk' => $id,
    'nama_spek' => $a));
}
function tambahfoto($form){
  return $this->db->insert('shop_media', $form);
}
function getid(){
  $sql = 'SELECT id_produk FROM shop_produk ORDER BY id_produk DESC LIMIT 1';
  return $this->db->query($sql)->row()->id_produk;

}
// end controller product












 //controller kategori
function insert_kategori($form){
    return $this->db->insert('shop_kategori', $form);
  }
function get_kategori(){
  $sql = "SELECT * FROM shop_kategori";
  return $this->db->query($sql)->result();
}
function get_kategori_update($id){
  $sql = "SELECT * FROM shop_kategori where id_kategori = ?";
  return $this->db->query($sql,$id)->result();
}
function update_kategori($data,$id){
 $this->db->where('id_kategori',$id);
    return $this->db->update('shop_kategori', $data); 
}
function delete_kategori($id)
{
   $this->db->where('id_kategori', $id);
   return $this->db->delete('shop_kategori');
}
  //end controller kategori











//controller merk
function insert_merk($form){
    return $this->db->insert('shop_merk', $form);
  }
function get_merk(){
  $sql = "SELECT * FROM shop_merk";
  return $this->db->query($sql)->result();
}
function get_merk_update($id){
  $sql = "SELECT * FROM shop_merk where id_merk = ?";
  return $this->db->query($sql,$id)->result();
}
function update_merk($data,$id){
 $this->db->where('id_merk',$id);
    return $this->db->update('shop_merk', $data); 
}
function delete_merk($id)
{
   $this->db->where('id_merk', $id);
   return $this->db->delete('shop_merk');
}
  //end controller merk

}

/* End of file model_login_admin.php */
/* Location: ./application/models/model_login_admin.php */
