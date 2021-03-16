<?php

class Modeltransaksi extends CI_Model
{

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_meja = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = array(
            'nama' => $nama_meja,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(
                date('H'),
                date('i'),
                date('s'),
                date('m'),
                date('d') + 1,
                date('Y')
            )),
        );

        $this->db->insert('t_transaksi', $invoice);
        $id_transaksi = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_transaksi' => $id_transaksi,
                'id_menu' => $item['id'],
                'nama_menu' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('t_pesanan', $data);
        }

        return true;
    }

    public function tampil_data()
    {
        $result = $this->db->get('t_transaksi');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
