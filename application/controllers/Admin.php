<?php  
   class Admin extends CI_Controller  
   {  
      public function index()  
      {  
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['h']=$this->select->select();  
         //return the data in view  
         $this->load->view('select_view', $data);  
      }  

        public function savingdata()  {  
        $status = $this->input->post('status');
        $bookid = $this->input->post('id');
        // echo 'status'.$status;
        // die();
        $this->load->model('Admin_update');
        $this->Admin_update->update_booking_status($bookid,$status);
        
        //send mail
        $from_email = "no-replay@test.in"; 
         
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'BOOKING CONFORMATION'); 
         $this->email->to($assignmanger);
         // $this->email->cc('ishwar@iotenterprise.in');
         // $this->email->bcc('nikita.kumawat@customshape.in');
         $this->email->subject('Booking Status Changed'); 
         $this->email->message('Hi '.$user_name.' Your Seat is '.$status.''); 
         
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
        
        redirect('Admin/index');
   }
   }  
?> 