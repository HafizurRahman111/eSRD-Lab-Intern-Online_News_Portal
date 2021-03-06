
<!----------------------  Registration Model Page ---------------------->

<?php

 class RegisterModel extends CI_Model
{

     public function add_user($data)
    {
        $name = $data['name'];
        $uname = $data['uname'];
        $password = md5($this->input->post('password'));
        $gender = $data['gender'];
        $bdate = $data['bdate'];

        $phone = $data['phone'];
        $email = $data['email'];
        $address = $data['address'];

  
      
        $data = array('name' => $name, 'uname' => $uname, 'password' => $password, 'gender' => $gender, 'bdate' => $bdate, 'phone' => $phone, 'email' => $email,  'address' => $address );
        $user_id = $this->db->insert_id();
        $insert_data = $this->add_userinfo($data);

       

         if ($insert_data) 
        {
            return $user_id;
        }

        return false;

    }


     public function add_userinfo($data)
    {
        //get the data from controller and insert into the table 'user_infos'
        return $this->db->insert('user_infos', $data);

    }

     public function getUserData($uid) 
    {
        $run = $this->db->get_where('user_session', array('user_id'=>$uid));
        return $run->result();
    }

     public function getActivity($uid) 
    {
        $run = $this->db->query('SELECT title, SUM(number_times) num, SUM(active_time) sec FROM user_activity a INNER JOIN user_session s on a.id=s.sid WHERE user_id=? GROUP BY title', [$uid]);
        return $run->result();
    }
    
}
