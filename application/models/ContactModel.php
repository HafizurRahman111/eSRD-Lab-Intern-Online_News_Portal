
   <!-----------------------------------  eSRD News ------------------------------->
                <!----------------  Md. Hafizur Rahman ---------------->

    <!----------------------  Contact Us Model Page ---------------------->


<?php


 class ContactModel extends CI_Model 
{

    public function add_message_contact($data)
    {
        $c_name = $data['c_name'];
        $c_email = $data['c_email'];
        $c_message = $data['c_message'];

        $values = array('c_name' => $c_name, 'c_email' => $c_email, 'c_message' => $c_message ) ;
    
        $this->db->insert('contact', $values);

        
    }

	
}


