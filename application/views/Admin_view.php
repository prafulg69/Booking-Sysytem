<?php
$user_id=$this->session->userdata('user_id');
$user_email=$this->session->userdata('user_email');
$assignmanger=$this->session->userdata('assignmanger');
if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 226px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 29px 11px 0px 36px;
    text-decoration: none;
    font-size: 17px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 235px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}


.form-group {
    margin-bottom: 15px;
    padding-left: 124px;
    width: 508px;
}

.col-md-6 {
    width: 50%;
    margin-left: -13px;
    margin-bottom: 16px;
}

input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
    width: 20%;
    margin-left: 133px;
}

h3.login {
    color: white;
    padding: 0px 0 1px 20px;
    margin-top: -2px;
}

h2.leave {
    padding-left: 198px;
}

.container {
    padding-left: 116px;
    margin-bottom: 10px;
}

.main {
    font-size: 18px;
}

.user {
    display: inline-block;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    margin-left: 38px;
    margin-top: 10px;
}

.one {
  background-image: url('/assets/images/img_avatar.png');
}

.header-name {
    width: 25%;
    height: 115px;
    border-radius: 43px;
    background-color: #ff000040;
    margin: 5px;
    float: left;
}

.header-name1 {
    width: 23%;
    height: 115px;
    border-radius: 43px;
    background-color: #fff7005c;
    margin: 5px;
    float: left;
}

.header-name2 {
    width: 29%;
    height: auto;
    border-radius: 43px;
    background-color: #3300ff61;
    margin: 14px;
    float: left;
}

.header-name3 {
    width: 35%;
    height: auto;
    background-color: #ff8d0061;
    margin: 14px;
    float: left;
}

.header-name4 {
    width: 28%;
    height: auto;
    background-color: #3300ff61;
    margin: 14px;
    float: left;
}
h4.leave {
    padding: 22px;
    text-align: center;
}

h4.birth {
    padding: 22px;
    text-align: center;
    color: #ff0047bf;
    font-weight: 800;
}

h1.countl {
    text-align: center;
     margin-top: -15px;
}

h3.countl {
   margin-top: -9px;
   text-align: center;
}

h4.username {
    color: white;
    margin-left: 77px;
    margin-bottom: -6px;
}

.dot {
    height: 16px;
    width: 16px;
    background-color: green;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: -33px;
    margin-left: -109px;
}


input#image_file {
    margin-top: -7px;
    margin-left: 13px;
}

input.btn.btn-lg.btn-success.btn-block {
    margin-left: 15px;
    width: 87px;
    margin-top: 5px;
    height: 32px;
}


.custom-file-input {
    display: inline-block;
    position: relative;
    margin-top: 119px;
    color: #533e00;
  }
  .custom-file-input input {
    visibility: hidden;
    width: 100px;
  }
  .custom-file-input:before {
    content: 'Choose File';
    display: block;
    background: -webkit-linear-gradient( -180deg, #ffdc73, #febf01);
    background: -o-linear-gradient( -180deg, #ffdc73, #febf01);
    background: -moz-linear-gradient( -180deg, #ffdc73, #febf01);
    background: linear-gradient( -180deg, #ffdc73, #febf01);
    border: 3px solid #dca602;
    border-radius: 10px;
    padding: 5px 0px;
    outline: none;
    white-space: nowrap;
    cursor: pointer;
    text-shadow: 1px 1px rgba(255,255,255,0.7);
    font-weight: bold;
    text-align: center;
    font-size: 10pt;
    position: absolute;
    left: 0;
    right: 0;
  }
  .custom-file-input:hover:before {
    border-color: #febf01;
  }
    .custom-file-input:active:before {
    background: #febf01;
  }
  .file-blue:before {
    content: 'Browse File';
    background: -webkit-linear-gradient( -180deg, #99dff5, #02b0e6);
    background: -o-linear-gradient( -180deg, #99dff5, #02b0e6);
    background: -moz-linear-gradient( -180deg, #99dff5, #02b0e6);
    background: linear-gradient( -180deg, #99dff5, #02b0e6);
    border-color: #57cff4;
    color: #FFF;
    text-shadow: 1px 1px rgba(000,000,000,0.5);
  }
  .file-blue:hover:before {
    border-color: #02b0e6;
  }
  .file-blue:active:before {
    background: #02b0e6;
  }
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

<script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/blink.js"></script>        

<script>
    $(document).ready(function () {
    $(".sparrow").blink();
    $(".sparrow").css("color", "#ff0047bf");
    });
</script>

</head>
<body>

<div class="sidenav">

  <h3 class="login">Admin</h2>
   <a href="#">Dashboard</a>
   <a href="<?php echo base_url('Admin'); ?>">User Booking</a>
</div>

<div class="main">
   
<div class="header-name"> 
<h4 class="leave">WELCOME TO BOOKING SYSTEM</h4>
</div>


</div>

</body>
</html> 