<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("register.php");
}

public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'role'=>$this->input->post('role'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}


public function booking(){

       $book=array(
      'destination'=>$this->input->post('destination'),
      'chickin'=>$this->input->post('chickin'),
      'chickout'=>$this->input->post('chickout'),
      'rooms'=>$this->input->post('rooms'),
      'child'=>$this->input->post('child'),
      'status'=>$this->input->post('status'),
      'adults'=>$this->input->post('adults')
        );
      $this->user_model->booking_user($book);
      redirect('user/login_view');
}


public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
    $this->session->set_userdata($data);
    //'show data'.print_r($data);
      
    if($data['role'] == 'admin')
      {
        $this->load->view('Admin_view.php');
      }
       else if($data)
      {
         $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }




}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
