<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserSession extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SessionModel', 'addsession');
    }

    public function settime()
    {
        $id = $this->session->ses_id;
        $page_url = $this->session->page_url;
        $active_time = $this->input->post('timeOnSite');
        $this->db->where('id', $id);
        $this->db->where('pageurl', $page_url);
        $this->db->get('user_activity');
        $this->db->set('active_time', "active_time+'$active_time'", FALSE);
        $this->db->where('id', $id);
        $this->db->where('pageurl', $page_url);
        $this->db->update('user_activity');

    }
}
