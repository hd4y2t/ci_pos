<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mauth');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required', [
            'required' => 'email harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            //validasi login
            $this->_login();
        }
    }
    private function _login()
    {
        $user = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $user])->row_array();

        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 2) {
                        redirect('kasir');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun anda belum aktif </div>');
                redirect('auth');
            }
        } else {
            //user tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> email tidak terdaftar </div>');
            redirect('auth');
        }
        // var_dump($user);
        // die;
    }


    public function register()
    {

        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]', [
            'required' => 'Email induk harus diisi!',
            'is_unique' => 'Email induk telah dipakai'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus harus diisi!'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'password harus di isi'
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Registrasi';
            $this->load->view('auth/register', $data);
        } else {
            $id = '';
            $email = htmlspecialchars($this->input->post('email', true));
            $nama = htmlspecialchars($this->input->post('nama', true));
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $role_id = 1;
            $is_active = 1;
            $data = array(
                'id_user' => $id,
                'email' => $email,
                'password' => $password,
                'nama' => $nama,
                'role_id' => $role_id,
                'is_active' => $is_active,
            );

            $this->Mauth->register($data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Selamat! akun anda telah terdaftar</div>'
            );
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil logout </div>');
        redirect('auth');
    }
}
