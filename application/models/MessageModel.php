
 <!---------------- Message Model Page --------------->


<?php

 class MessageModel extends CI_Model
{

     public function add_msg($data)
    {
        
        $uid = $this->session->userid;
        $un =   $this->session->userdata('uname') ;
        
        $m = $data['msg_id'];
        $ctext = $data['chat_text'];

        $data = array('sender_id' => $uid, 'sender_uname' => $un,  'receiver_id' => $m,  'chat_text' => $ctext );

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


     public function gom ($mid)
    {
        $this->db->select('*');
        $this->db->from('chat');

        $this->db->where('sender_id', $mid);  // Also mention table name here
      
        $query = $this->db->get();

        if($query->num_rows() > 0)
        return $query->row();
    }


    function fetch_data($query)
    {
       
        $uid = $this->session->userid;

        $this->db->select("*");
        $this->db->from("chat");
        $this->db->where('receiver_id',$uid) ;

        $this->db->group_by('sender_id'); 
        $this->db->order_by('chat_time','DESC'); 
     
  
       if($query != '')
      {
        $this->db->like('sender_id', $query);
        $this->db->or_like('chat_text', $query);
        $this->db->or_like('chat_time', $query);
        $this->db->or_like('receiver_uname', $query);
        
    
       }
       
          $this->db->order_by('chat_id', 'DESC');
          $this->db->limit(5 , 0);
  
          return $this->db->get();
  
     }




}
