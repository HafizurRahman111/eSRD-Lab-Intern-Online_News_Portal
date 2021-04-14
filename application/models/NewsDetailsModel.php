
   <!----------------------  News Deatils Single Model Page ---------------------->


<?php


  class NewsDetailsModel extends CI_Model
{
    
     public function get_details_news($id)
    {
        $this->db->select('*');
        $this->db->from('news');

        $this->db->where('n_id', $id);  
      
        $query = $this->db->get();

        if($query->num_rows() > 0)
        return $query->row();

    }




    public function add_comment($data)
    {
        
        $uid = $this->session->userid;
        $un =   $this->session->userdata('uname') ;
        
        
        $id = $data['comid'];

      //  $id= $this->input->get('id');
     
        $comment = $data['news_comment'];

        $data = array('news_id' => $id, 'news_comment' =>  $comment,  'user_id' => $uid,  'username' => $un );

        $user_id = $this->db->insert_id();

        $insert_data = $this->add_commentinfo($data);

       
         if ($insert_data) 
        {
            return $user_id;
        }

        return false;

    }


     public function add_commentinfo($data)
    {
        //get the data from controller and insert into the table 'chat'

        return $this->db->insert('news_comment', $data);

    }


   



   
   
    
}