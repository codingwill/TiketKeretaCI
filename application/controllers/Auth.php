<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('Auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // var_dump($user);
        // die;
        // jika usernya ada
        if ($user) {
            //jika user active
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nik' => $user['nik'],
                        'nama' => $user['name'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // bedain ini kalo admin nanti masuknya ke dashboar admin
                    if ($user['role_id'] == 1) {
                        $this->session->set_userdata($data);
                        redirect('Admin/Dashboard');
                    } else if ($user['role_id'] == 2) {
                        $this->session->set_userdata($data);
                        redirect('User/Dashboard');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger text-white font-weight-bold" role="alert">
						Wrong password!</div>'
                    );
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger text-white font-weight-bold" role="alert">
					This email has not been activated!</div>'
                );
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger text-white font-weight-bold" role="alert">
				Email is not registered!</div>'
            );
            redirect('Auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|min_length[16]', [
            'min_length' => 'NIK terlalu pendek! (harus 16 digit)',
            'max_length' => 'NIK terlalu panjang! (harus 16 digit)'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Kata sandi salah!',
            'min_length' => 'Kata sandi terlalu pendek! (min-5)'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('Auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            //$this->db->insert('user', $data);
            //$this->Model->registration($data);
            return $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
				Selamat! Akun Anda telah berhasil didaftarkan. Silahkan melakukan login.</div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
			Anda berhasil logout!</div>'
        );
        redirect('auth');
    }
}
