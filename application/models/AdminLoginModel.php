<?php

 class AdminLoginModel extends CI_Model
{
    public function a_checkLogin($a_email, $a_pass)
    {
        $this->db->where('a_email', $a_email);
        $this->db->where('a_pass', $a_pass);

        

        $admin_data = $this->db->get('admin_infos');


         if ( $admin_data->num_rows() == 1) 
        {
            $res = $admin_data->result_array();

            $user = array(
                'a_id' => $res[0]['a_id'],
                'a_name' => $res[0]['a_name'],
                'a_email' => $res[0]['a_email'],
                'a_pass' => $res[0]['a_pass'],
                'phone' => $res[0]['a_phone'],
                'a_reg' => $res[0]['a_reg'],
            );

            $this->session->sess_regenerate();
            $this->session->set_userdata($user);
            $this->session->logged_in = true;
            $this->session->userid = $res[0]['a_id'];
            return $admin_data->num_rows();
            
        }
    }
}
