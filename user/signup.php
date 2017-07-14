<!DOCTYPE html>

<html >
<head>
    
</head>
<body class="container" style="background-image: url('../images/');">
    <?php
        include 'user_navbar.php';
    ?>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <form class="container" action="" method="post">
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="mailid" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="uname" class="form-control" id="inputEmail" placeholder="First Name Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">
                            Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">
                            Mobile No</label>
                        <div class="col-lg-10">
                            <input type="text" name="mobile" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-8 control-label">
                            Profile Picture</label>
                        <div class="col-lg-10">
                            <input type="file" name="profile_pic" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">
                            Gender</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="optionsRadios1" value="male" checked="">
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="female" id="optionsRadios2" value="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="select" class="col-lg-2 control-label">
                            Selects</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-warning">
                                Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                Submit</button>
                        </div>
                    </div>
            </form>
        </div>
</body>
</html>
