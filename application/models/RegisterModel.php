<?php
class RegisterModel extends CI_Model
{
    public function add_user($data)
    {
        $name = $data['name'];
        $uname = $data['uname'];
        $email = $data['email'];
        $designation = $data['designation'];
        $bdate = $data['bdate'];
        $address = $data['address'];
        $phone = $data['phone'];
        $gender = $data['gender'];
        $utype = $data['utype'];
        $district = $data['district'];
        $studentid = $data['studentid'];
        $password = sha1($data['password']);
        $values = array('name' => $name, 'uname' => $uname, 'email' => $email, 'password' => $password, 
                    'date_time' => date('Y-m-d H:i:s'));
        $this->db->insert('user_credential', $values);

        $user_id = $this->db->insert_id();
        $data = array('user_id' => $user_id, 'name' => $name, 'uname' => $uname, 'designation' => $designation, 'bdate' => $bdate, 'address' => $address, 'phone' => $phone, 'gender' => $gender, 'utype' => $utype, 'district' => $district, 'studentid' => $studentid);
        $insert_data = $this->add_userinfo($data);
        if ($insert_data) {
            return $user_id;
        }
        return false;
    }
    public function add_userinfo($data)
    {
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('user_infos', $data);
    }
    public function getUserData($uid) {
        $run = $this->db->get_where('user_session', array('user_id'=>$uid));
        return $run->result();
    }
    public function getActivity($uid) {
        $run = $this->db->query('SELECT title, SUM(number_times) num, SUM(active_time) sec FROM user_activity a INNER JOIN user_session s on a.id=s.sid WHERE user_id=? GROUP BY title', [$uid]);
        return $run->result();
    }
}
