
<html> 
<head>
    
</head>
<body class="container">
<?php
    
    require 'user_navbar1.php';
?>
<form method="post" action="user_disp_code.php">
<div class="jumbotron">
    <h1><center>Your Profile</center></h1>
</div>
<div class="row">
    <div class="col-md-5">
        <img src="../images/34.jpg"  height="150px" width="150px" class="img-responsive img-circle" alt="">
    </div>
    <div class="col-md-7">
        <div class="col-md-2" align="right">
            <label><font color="blue"><i><b>Id :</font></label><br><br>
            <label><font>Uname :</font></label><br><br>
            <label><font>Mobile :</font></label><br><br>
            <label><font>Address :</font></label><br><br>
            <label><font>Gender :</font></label><br><br>
        </div>
        <div clas="col-md-10">
        <label>zeel91297@gmail.com</label><br> <br>
        <label>Zeel Modi</label><br><br>
        8460816553</label><br><br>
        Female</label><br><br>
       
         <!-- Button trigger modal -->
        </div>
    </div>
        <br><br>
        <input type="submit" name="btnup" value="Edit Profile" class="btn btn-success"> 
<button type="button" class="btn btn-primary btn-danger" data-toggle="modal" data-target="#myModal">Change Password</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
        <input type="password" class="form-control"  name="txtold" placeholder="Enter Old Password">
        <input type="password" class="form-control" name="txtnew" placeholder="Enter New Password">
        <input type="password" class="form-control" name="txtnewch" placeholder="Change password">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="btnch" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <input type="submit" name="btnout" value="Log Out" class="btn btn-warning">
    </div>
</div>
</form>
</html>