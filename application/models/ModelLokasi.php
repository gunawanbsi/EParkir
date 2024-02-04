<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLokasi extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('lokasi', $data);
    }
    public function cekData()
    {
        return $this->db->get('lokasi');
    }
    public function getLokasiWhere($where = null)
    {
        return $this->db->get_where('lokasi', $where);
    }
    public function updateLokasi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapusLokasi($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detailLokasi($id){
        $result = $this->db->where('id', $id)->get('lokasi');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('lokasi');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
