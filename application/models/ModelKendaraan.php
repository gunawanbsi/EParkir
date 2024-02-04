<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKendaraan extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('kendaraan', $data);
    }
    public function cekData()
    {
        return $this->db->get('kendaraan');
    }
    public function getKendaraanWhere($where = null)
    {
        return $this->db->get_where('kendaraan', $where);
    }
    public function updateKendaraan($data = null, $where = null)
    {
        $this->db->update('kendaraan', $data, $where);
    }
    public function hapusKendaraan($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detailKendaraan($id){
        $result = $this->db->where('id', $id)->get('kendaraan');
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
        $this->db->from('kendaraan');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
