<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller
{

    public $viewFolder = "";
    public $theme = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "users_v";
        $this->theme = "front";

        $this->load->model('UsersModel');
        $this->load->library('form_validation');
        $this->load->helper('User_Helper');
    }

    public function index()
    {
        redirect(base_url());
    }

    public function profil()
    {
        if (!empty($this->uri->segment(2))) {
            $Data = new stdClass;
            $Data->UserInformation = $this->UsersModel->getUserProfile($this->uri->segment(2));
            if (!empty($Data->UserInformation))
                $this->load->view("{$this->theme}/{$this->viewFolder}/profil", $Data);
            else redirect(base_url());
        } else {
            redirect(base_url());
        }
    }

    public function login()
    {
        $this->load->view("{$this->theme}/{$this->viewFolder}/login");
    }

    public function register()
    {
        // Uyarı mesajları bir daha gözükmesin diye sildiriyoruz. Aksi takdir de bir daha gözüküyor.
        $this->session->unset_userdata('flashError');
        $this->session->unset_userdata('flashSucces');

        $this->form_validation->set_rules('Username', 'Kullanıcı adı', 'trim|required|regex_match[/^[A-Z-a-z0-9]+$/]|is_unique[users.Username]');
        $this->form_validation->set_rules('EMail', 'E-Posta', 'trim|required|valid_email|is_unique[users.Mail]');
        $this->form_validation->set_rules('Name', 'Ad', 'trim|required');
        $this->form_validation->set_rules('Surname', 'Soyad', 'trim|required');
        $this->form_validation->set_rules('Password', 'Şifre', 'min_length[6]|trim|required');
        $this->form_validation->set_message('regex_match', '<div class="alert alert-danger">%s harf kombinasyonuna uygun değil.</div>');
        $this->form_validation->set_message('min_length', '<div class="alert alert-danger">%s Çok Kısa!</div>');
        $this->form_validation->set_message('required', '<div class="alert alert-danger">%s alanı doldurulması gerekiyor.</div>');
        $this->form_validation->set_message('valid_email', '<div class="alert alert-danger">E-Posta adresi doğru tanımlanmamış.</div>');
        $this->form_validation->set_message('is_unique', '<div class="alert alert-danger">%s sistemde mevcut.</div>');

        //Form Kontrolü
        if ($this->form_validation->run()) {
            //Recaptcha Doğrulama Kontrolü
            $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            $userIp = $this->input->ip_address();
            $secret = $this->config->item('google_secret');
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);
            $status = json_decode($output, true);
            if ($status['success']) {

                $UserAdd = $this->UsersModel->doRegister(array(
                    'Username' => trim($this->input->post('Username')),
                    'Name' => trim($this->input->post('Name')),
                    'Surname' => trim($this->input->post('Surname')),
                    'Mail' => trim($this->input->post('EMail')),
                    'Password' => trim($this->input->post('Password')),
                ));
                if ($UserAdd) {
                    //Login Kodu
                    $this->session->set_flashdata('flashSucces', 'Üyelik Kaydı Başarılı Bir Biçimde Oluşturuldu! Yönlendiriliyorsunuz.');
                    $this->load->view("{$this->theme}/{$this->viewFolder}/register");

                } else {
                    $this->session->set_flashdata('flashError', 'Kayıt eklenemedi!');
                    $this->load->view("{$this->theme}/{$this->viewFolder}/register");
                }

            } else {
                $this->session->set_flashdata('flashError', 'Robot Doğrulaması Başarısız.');
                $this->load->view("{$this->theme}/{$this->viewFolder}/register");

            }
        } else {
            //Hata Mesajı Ekrana Yazdırıyoruz.
            $this->session->set_userdata('RegisterPost', array(
                'Username' => $this->input->post('Username'),
                'EMail' => $this->input->post('EMail'),
                'Name' => $this->input->post('Name'),
                'Surname' => $this->input->post('Surname')
            ));
            $this->load->view("{$this->theme}/{$this->viewFolder}/register");

        }
    }

}
