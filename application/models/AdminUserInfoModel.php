<?php

 class AdminUserInfoModel extends CI_Model
{

   
     
      public function get_details_user($id)
      {
          $this->db->select('*');
          $this->db->from('user_infos');
  
          $this->db->where('user_id', $id);  // Also mention table name here
        
          $query = $this->db->get();
  
          if($query->num_rows() > 0)
          return $query->row();
      }


      function fetch_data($query)
      {
          $this->db->select("*");
          $this->db->from("user_infos");
    
         if($query != '')
        {
          $this->db->like('user_id', $query);
          $this->db->or_like('name', $query);
          $this->db->or_like('uname', $query);
          $this->db->or_like('phone', $query);
          $this->db->or_like('email', $query);
          $this->db->or_like('address', $query);
          $this->db->or_like('udate', $query);
      
         }
         
            $this->db->order_by('user_id', 'DESC');
            $this->db->limit(5 , 0);
    
            return $this->db->get();
    
       }

     
     
    
      
  
   
    
}
