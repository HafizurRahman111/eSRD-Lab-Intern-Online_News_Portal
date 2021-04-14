

  <!----------------------  Live Search News Model Page ---------------------->

<?php

 class LiveSearchModel extends CI_Model
{
   
   function fetch_data($query)
  {
      $this->db->select("*");
      $this->db->from("news");

     if($query != '')
    {
      $this->db->like('n_title', $query);
      $this->db->or_like('author', $query);
      $this->db->or_like('category', $query);
      $this->db->or_like('date_pub', $query);
  
     }
     
        $this->db->order_by('n_id', 'DESC');
        $this->db->limit(5 , 0);

        return $this->db->get();

   }

 }

?>

