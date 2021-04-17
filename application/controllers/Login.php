<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel', 'login');
		  $this->load->model('SessionModel', 'sesMod');
    }
    public function index()
    {
        if ($this->session->logged_in) {
            redirect(base_url() . 'welcome');
        }
        $data['page_title'] = "Login";
        $data['page'] = "user/login";
        $this->load->view('_Layout/home/master.php', $data);
    }
    public function doLogin()
    {
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $check_login = $this->login->checkLogin($email, $password);
        if ($check_login) {
            $this->session->set_userdata('logged_in', true);
            redirect(base_url());
        } else {
            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url() . 'login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'login');
    }
}
