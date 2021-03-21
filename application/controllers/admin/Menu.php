<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('modelmenu', 'm');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "CI-POS - Menu";
        $data['id'] = $this->m->id_menu();
        $this->load->view('admin/v_menu', $data);
    }

    function ambildata()
    {
        $dataMenu = $this->m->ambildata('t_menu')->result();
        echo json_encode($dataMenu);
    }

    function tambahdata()
    {
        $nama_menu = $this->input->post('nama_menu');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $img = $this->input->post('img');

        if ($nama_menu == '') {
            $result['pesan'] = "Nama menu harus di isi";
        } else if ($keterangan == '') {
            $result['pesan'] = "Keterangan menu harus di isi";
        } else if ($kategori == '') {
            $result['pesan'] = "Kategori menu harus di isi";
        } else if ($harga == '') {
            $result['pesan'] = "Harga menu harus di isi";
        } else if ($stok == '') {
            $result['pesan'] = "Stok menu harus di isi";
        } else if ($img == '') {
            $result['pesan'] = "Img menu harus di isi";
        } else {
            $result['pesan'] = "";

            $data = array(
                'id_menu'       => $this->modelmenu->id_menu(),
                'nama_menu'     => $nama_menu,
                'keterangan'    => $keterangan,
                'kategori'      => $kategori,
                'harga'         => $harga,
                'stok'          => $stok,
                'img'           => $img,
            );

            $this->m->tambahdata($data, 't_menu');
        }

        echo json_encode($result);
    }

    function ambilid()
    {
        $id = $this->input->post('id_menu');
        $where = array('id_menu' => $id);
        $datamenu = $this->m->ambilid('t_menu', $where)->result();

        echo json_encode($datamenu);
    }

    function ubahdata()
    {
        $id_menu = $this->input->post('id_menu');
        $nama_menu = $this->input->post('nama_menu');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $img = $this->input->post('img');

        if ($nama_menu == '') {
            $result['pesan'] = "Nama menu harus di isi";
        } else if ($keterangan == '') {
            $result['pesan'] = "Keterangan menu harus di isi";
        } else if ($kategori == '') {
            $result['pesan'] = "Kategori menu harus di isi";
        } else if ($harga == '') {
            $result['pesan'] = "Harga menu harus di isi";
        } else if ($stok == '') {
            $result['pesan'] = "Stok menu harus di isi";
        } else if ($img == '') {
            $result['pesan'] = "Img menu harus di isi";
        } else {
            $result['pesan'] = "";

            $where = array('id_menu' => $id_menu);

            $data = array(
                'nama_menu'     => $nama_menu,
                'keterangan'    => $keterangan,
                'kategori'      => $kategori,
                'harga'         => $harga,
                'stok'          => $stok,
                'img'           => $img,
            );

            $this->m->ubahdata($where, $data, 't_menu');
        }

        echo json_encode($result);
    }

    function hapusdata()
    {
        $id_menu = $this->input->post('id_menu');
        $where = array('id_menu' => $id_menu);
        $this->m->hapusdata($where, 't_menu');
    }

    // public function index()
    // {

    //     $data['data'] = $this->modelmenu->t_datamenu()->result();
    //     $data['id'] = $this->modelmenu->id_menu();
    //     $this->load->view('admin/v_menu', $data);
    // }

    // public function t_menu()
    // {
    //     $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required', ['required' => 'Nama Menu harus di isi']);
    //     $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan harus di isi']);
    //     $this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori harus di isi']);
    //     $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga harus di isi']);
    //     $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok harus di isi']);
    //     $this->form_validation->set_rules('img', 'Img', 'required', ['required' => 'Image harus di isi']);
    //     if ($this->form_validation->run() == FALSE) {
    //         $data['data'] = $this->modelmenu->t_datamenu()->result();
    //         $data['id'] = $this->modelmenu->id_menu();
    //         $this->load->view('admin/v_menu', $data);
    //     } else {
    //         $nama_menu = $this->input->post('nama_menu');
    //         $keterangan = $this->input->post('keterangan');
    //         $kategori = $this->input->post('kategori');
    //         $harga = $this->input->post('harga');
    //         $stok = $this->input->post('stok');
    //         $img = $this->input->post('img');

    //         $data_menu = array(
    //             'id_menu' => $this->modelmenu->id_menu(),
    //             'nama_menu' => $nama_menu,
    //             'keterangan' => $keterangan,
    //             'kategori' => $kategori,
    //             'harga' => $harga,
    //             'stok' => $stok,
    //             'img' => $img
    //         );

    //         $this->modelmenu->tambah_menu($data_menu);
    //         redirect('admin/menu');
    //     }
    // }

    // public function h_menu($id_menu)
    // {

    //     $where = array('id_menu' => $id_menu);
    //     $this->modelmenu->hapus_menu($where, 't_menu');
    //     redirect('admin/menu');
    // }
}
