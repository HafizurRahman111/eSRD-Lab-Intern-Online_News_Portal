<?php

class NewsStoreModel extends CI_Model
{
     public function add_news($data)
    {
        $n_title = $data['n_title'];
        $short_des = $data['short_des'];
        $description = $data['description'];
        $author = $data['author'];
        $category = $data['category'];


        $values = array('n_title' => $n_title, 'short_des' => $short_des, 'description' => $description, 'author' => $author, 'category' => $category ) ;
    
        $this->db->insert('news', $values);

        
    }

   
   
}
