<?php

class Modelmenu extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('t_menu');
    }

    public function find($id)
    {
        $result = $this->db->where('id_menu', $id)
            ->limit(1)
            ->get('t_menu');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    function ambildata($table)
    {
        return $this->db->get('t_menu');
    }

    function tambahdata($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function ambilid($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function ubahdata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapusdata($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // public function t_datamenu() // untuk menampilkan data menu
    // {
    //     $this->db->select('*');
    //     $this->db->from('t_menu');
    //     $this->db->order_by('id_menu', 'DESC');
    //     return $this->db->get();
    // }

    public function id_menu() // untuk create id
    {
        $this->db->select('Right(t_menu.id_menu,4) as kode ', false);
        $this->db->order_by('id_menu', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('t_menu');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodeid = "M-" . $kodemax;
        return $kodeid;
    }

    // public function tambah_menu($data) // tambah menu
    // {
    //     $this->db->insert('t_menu', $data);
    // }

    // public function hapus_menu($where, $table) // hapus data
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
}
