

   <!----------------------  News Category Model Page ---------------------->

<?php


  class NewsCategoryModel extends CI_Model
 {
    
   
    public function get_category_news($newscategory)
    {
        
        $this->db->select('*');
        $this->db->from('news');

        $this->db->where('category', $newscategory);  // Also mention table name here
      
        $query = $this->db->get();

        if($query->num_rows() > 0)
        return $query->row();
    }
   
   
    
}