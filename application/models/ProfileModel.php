
  <!----------------------  Profile Model Page ---------------------->

<?php

 class ProfileModel extends CI_Model
{

     public function add_msg($data)
    {
        
        $uid = $this->session->userid;
        $un =   $this->session->userdata('uname') ;
        
      
        $ctext = $data['chat_text'];


        $data = array('sender_id' => $uid, 'sender_uname' => $un, 'receiver_id' => $mid, 'chat_text' => $ctext );

        $user_id = $this->db->insert_id();

        $insert_data = $this->add_msginfo($data);

       
         if ($insert_data) 
        {
            return $user_id;
        }

        return false;

    }


     public function add_msginfo($data)
    {
        //get the data from controller and insert into the table 'chat'

        return $this->db->insert('chat', $data);

    }

 
     public function get_message_history ($mid)
    {
        $this->db->select('*');
        $this->db->from('chat');

        $this->db->where('sender_id', $mid);  // Also mention table name here
      
        $query = $this->db->get();

        if($query->num_rows() > 0)
        return $query->row();

    }


     public function edit($data)
    {
        $uid = $this->session->userid;

        $name = $data['name'];
        $phone = $data['phone'];
      
        $data = array('name' => $name, 'phone' => $phone );

        $this->db->where('user_id', $uid);
        $this->db->update('user_infos', $data);

        $user_id = $this->db->insert_id();
        $insert_data = $this->update_userinfo($data);

       
         if ($insert_data) 
         {
             return $user_id;
         }
 
         return false;
 



     

    }


    public function update_userinfo($data)
    {

        
        //get the data from controller and insert into the table 'user_infos'

    

        return $this->db->update('user_infos', $data) ;

    }



    public function change_pass($data)
    {
        $op = $data['old_pass'];

        $old_pass = md5($this->input->post($op));
        


        $np = $data['new_pass'];

        $new_pass = md5($this->input->post(np));


        $confirm_pass = $data['confirm_pass'];
       
        $data = array( 'password' => $new_pass   );
        $user_id = $this->db->insert_id();
        $insert_data = $this->update_pass($data);

       

         if ($insert_data) 
        {
            return $user_id;
        }

        return false;

    }


     public function update_pass($data)
    {

        $uid = $this->session->userid;

       

        $this->db->where('user_id', $uid);
        $this->db->where('password', $old_pass);

        $result = $this->db->get('user_infos');


        //get the data from controller and insert into the table 'user_infos'


        return $this->db->update('user_infos', $data) ;

    }



   

    
}
