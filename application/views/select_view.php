<!DOCTYPE html>
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
    padding: 29px 11px 0px 21px;
    text-decoration: none;
    font-size: 17px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 16px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

h3.login {
    color: white;
    padding: 0px 0 1px 20px;
}

.table {
    margin-left: -151px;
}
.addemployee {
    padding-left: 94px;
}

 .btn-primary {
    margin-left: 10px;
    margin-bottom: 10px;
    width: 10%;
    height: 44px;
    border-radius: 20px;
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #46a22e69;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>

<body>


<div class="main">
  <table class="table table-striped table-bordered">
     <tr>
      <td class="emp"><strong>Booking Id</strong></td>
      <td><strong>Destination</strong></td>
      <td><strong>Chick In</strong></td>
      <td><strong>Chick Out</strong></td>
      <td><strong>Rooms</strong></td>
      <td><strong>Adults</strong></td>
      <td><strong>child</strong></td>
      <td><strong>Status</strong></td>
      <td><strong>Action</strong></td>
    </tr> 

<?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->destination;?></td> 
            <td><?php echo $row->chickin;?></td> 
            <td><?php echo $row->chickout;?></td> 
            <td><?php echo $row->rooms;?></td> 
            <td><?php echo $row->adults;?></td> 
            <td><?php echo $row->child;?></td>  
              
        <td>
          <form role="form" method="post" action="<?php echo base_url('Admin/savingdata'); ?>">
          <input value="<?php echo $row->id;?>" type="text" name="status" hidden="true">
          <select class="form-control" name="status">
           <option name="status" value="pending" <?php if($row->status == "pending"){ echo "selected"; } ?>>Pending</option>
           <option name="status" value="rejected" <?php if($row->status == "rejected"){ echo "selected"; } ?>>Rejected</option>
           <option name="status" value="approve" <?php if($row->status == "approve"){ echo "selected"; } ?>>Approve</option>
         </select>
       </td>
         <td>
           <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="apply" >
         </form>
         </td>
      </tr>
         <?php }  ?> 
    </table>
  
</div>
   <center><br></b><a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a></center><!--for centered text-->
</body>
</html> 
