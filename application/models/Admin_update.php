<?php
class Admin_update extends CI_Model {

function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      } 

   
   // Update Query For Selected Book status
   public function update_booking_status($id,$status)
   {
    $this->db->set('status', $status);
    $this->db->where('id', $id);
    $this->db->update('book');
  }
  
  
 }
?>
