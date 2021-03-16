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
}
