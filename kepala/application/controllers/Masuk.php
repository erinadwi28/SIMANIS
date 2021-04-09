<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_kepala', 'm_kepala');
    }

    public function index()
    {
        if ($this->session->userdata('role_kepala')) {
            redirect('dashboard');
        }
        $this->load->view('header_masuk');
        $this->load->view('masuk');
        $this->load->view('footer_masuk');
    }

    public function aksi_login()
    {

        $captcha_response = trim($this->input->post('g-recaptcha-response'));

        if ($captcha_response != '') {
            $keySecret = '6LcWJXwaAAAAALSGVUhbSwhMmYZJLJP4YGQlPy3A';

            $check = array(
                'secret' => $keySecret,
                'response' => $this->input->post('g-recaptcha-response')
            );

            $startProcess = curl_init();

            curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

            curl_setopt($startProcess, CURLOPT_POST, true);

            curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

            curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

            $receiveData = curl_exec($startProcess);

            $finalResponse = json_decode($receiveData, true);

            if ($finalResponse['success']) {

                $email = $this->input->post('email');
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
                $status_delete = '0';

                $kepala = $this->m_kepala->cek_email($email, $status_delete);

                if ($kepala) {
                    //kepala ada
                    if ($kata_sandi_hash === $kepala['kata_sandi']) {
                        //kata sandi benar

                        $data = [
                            'email' => $kepala['email'],
                            'id_kepala' => $kepala['id_kepala'],
                            'role_kepala' => $kepala['role_kepala'],
                        ];

                        $this->session->set_userdata($data);

                        redirect('dashboard');
                    } else {
                        //kata sandi salah
                        $this->session->set_flashdata('error', '<b>Kata Sandi</bIsi> salah');
                        redirect('masuk');
                    }
                } else {
                    //gagal login
                    $this->session->set_flashdata('error', '<b>Email</b> tidak terdaftar sebagai KEPALA');
                    redirect('masuk');
                }
            } else {
                $this->session->set_flashdata('error', '<b>Isi captcha</b> dengan benar');
                redirect('masuk');
            }
        } else {
            $this->session->set_flashdata('error', '<b>Isi captcha</b> terlebih dahulu');
            redirect('masuk');
        }
    }

    public function logout()
    {
        //untuk membersihkan session dan mengembalikannya ke halaman login
        $this->session->unset_userdata('role_kepala');

        $this->session->set_flashdata('success', 'Berhasil <b>Logout</b>');
        redirect('masuk');
    }
}
