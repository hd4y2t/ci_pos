<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['dmenu'] = $this->modelmenu->tampil_data()->result();
        $this->load->view('index', $data);
    }

    public function t_cart($id) //untuk masukin pesanan ke keranjang
    {
        $menu = $this->modelmenu->find($id);

        $data = array(
            'id'      => $menu->id_menu,
            'qty'     => 1,
            'price'   => $menu->harga,
            'name'    => $menu->nama_menu
        );

        $this->cart->insert($data);
        redirect('home');
    }

    public function d_cart() //detail keranjang
    {
        $this->load->view('index');
    }

    public function p_menu() // proses pesan menu
    {
        $is_processed = $this->modeltransaksi->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('proses_pesanan');
        } else {
            echo "Maaf, Pesanan anda gagal diproses";
        }
    }
}
