<?php
class LoginModel extends CI_Model
{
    public function checkLogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('user_credential');
        if ($result->num_rows() == 1) {
            $res = $result->result_array();
            $user = array(
                'user_id' => $res[0]['user_id'],
                'email' => $res[0]['email'],
                'uname' => $res[0]['uname'],
                'name' => $res[0]['name'],
            );
            $this->session->sess_regenerate();
            $this->session->set_userdata($user);
            $this->session->logged_in = true;
            $this->session->userid = $res[0]['user_id'];
            return $result->num_rows();
        }
    }
}
