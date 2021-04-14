<?php

 class AdminCreateNewsModel extends CI_Model
{
     public function add_news($data)
    {

        $target_dir = "assets/uploads/";
        $target_file = $target_dir . time().basename($_FILES["file"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $imgName = time().basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            

        $n_title = $data['n_title'];
        $short_des = $data['short_des'];
        $description = $data['description'];
        $author = $data['author'];
        $category = $data['category'];


        $values = array('n_title' => $n_title, 'short_des' => $short_des, 'description' => $description, 'author' => $author, 'category' => $category, 'file' =>$imgName ) ;
    
        $this->db->insert('news', $values);

        
    }

   
}
