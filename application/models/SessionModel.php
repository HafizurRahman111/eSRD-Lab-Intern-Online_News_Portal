

 <!----------------------  Session Model Page for Activity ---------------------->

<?php

 class SessionModel extends CI_Model
{
     public function add_session($data)
    {
        //get the data from controller and insert into the table

        $rq = $this->db->get_where('user_session', $data);
        $lid = 0;
        
        if($rq->num_rows()==0) {
            $this->db->insert('user_session', $data);
            $lid = $this->db->insert_id();
        } else {
            $dt = $rq->result_array();
            $lid = $dt[0]['sid'];
        }
        
        return $lid; 
    }

     public function add_activity($data)
    {
        //get the data from controller and insert into the table
        return $this->db->insert('user_activity', $data);
    }
    
}
