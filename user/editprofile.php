
<html>
<head>
    
    
</head>
<body class="container">
<?php
    require 'user_navbar1.php';
?>
<form method="post" class="container" action="user_edit_code.php" enctype="multipart/form-data">
<div class="jumbotron">
    <h1><center>View Profile</center></h1>
</div>
<div class="row form-group">
    <div class="col-md-5">
        <img src='../images/44.jpg' class="img-responsive img-circle" height="500px" width="400px"/>
        <input type="file" name="f1">
        <?php
           /* echo $row["profile_pic"]; 
            if($row["profile_pic"]=="images/dboy.jpg" || $row["profile_pic"]=="images/dgirl.jpg")
            {
            
            }
            else
            {
                echo '<input type="submit" class="btn btn-danger" name="btndel" value="Delete Pic">';
            }*/
        ?>
        
    </div>
    <div class="col-md-7">
        ID:<input type="text" name="txtid" value='zeel91297@gmail.com' class="form-control">
        NAME:<input type="text"  name="txtname" value='Zeel Modi' class="form-control">
        Mobile:<input type="text" name="txtmobi"  value='8460816553' class="form-control">
                
        Gender:<input type="radio" name="gen" value="male" <?php /*if($row["gender"]=="male"){ echo "checked";}*/?>>Male
        <input type="radio" name="gen" value="female"<?php /*if($row["gender"]=="female"){ echo "checked";}*/?> checked>Female
        <br><input type="submit" name="btnup" value="Save" class="btn btn-success">
    </div>
</div>
</form>
</html>