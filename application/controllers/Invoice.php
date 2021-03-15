<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->modeltransaksi->tampil_data();
        $this->load->view('admin/invoice', $data);
    }
}
