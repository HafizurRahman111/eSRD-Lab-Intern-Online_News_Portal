
 <!----------------------  Log In Model Page ---------------------->


<?php


 class LoginModel extends CI_Model
{
     public function checkLogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('user_infos');


        $r = $this->db->get('user_session')->result_array();

        $r_activity = $this->db->get('user_activity')->result_array();




         if ($result->num_rows() == 1) 
        {
            $res = $result->result_array();
            $this->load->library('user_agent');


            $user = array(
                            'user_id' => $res[0]['user_id'],
                            'name' => $res[0]['name'],
                            'uname' => $res[0]['uname'],
                            'password' => $res[0]['password'],
                           
                            'email' => $res[0]['email'],
                            'address'=> $res[0]['address'],
                         

                       );


            $this->session->sess_regenerate();
            $this->session->set_userdata($user);
            $this->session->logged_in = true;
            $this->session->userid = $res[0]['user_id'];
            return $result->num_rows();

        }

    }
}
