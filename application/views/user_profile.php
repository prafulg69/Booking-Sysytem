<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration-CI Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-12"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title" style="text-align: center;">MAKE YOUR RESERVATION</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/booking'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Your Destination" name="destination" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Check In" name="chickin" type="date" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Check Out" name="chickout" type="date" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Romes" name="rooms" type="number" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Adults" name="adults" type="number" value="">
                              </div>


                              <div class="form-group">
                                  <input class="form-control" placeholder="childrran" name="child" type="number" value="">
                              </div>

                               <div class="form-group" style="display: none;">
                                  <input class="form-control" placeholder="status" name="status" type="text" value="pending">
                              </div>


                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="Submit" >

                          </fieldset>
                      </form>
                      <center><br></b><a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>



