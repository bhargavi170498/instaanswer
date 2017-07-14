<!DOCTYPE Html>
<html>
<head>

</head>

<body class="container">
    <?php
        require 'user_navbar1.php';
    ?>
        <form class="" method="post" action="">
            <div class="row">
                <div class="form-group col-lg-3 " align="right">
                        <label for="inputEmail" class=" control-label">Question title*
                </div>
                <div class="col-lg-9">
                    <input type="text" name="ques_title" class="form-control" placeholder="Enter title">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3 " align="right">
                        <label for="inputEmail" class=" control-label">Question Description :
                </div>
                <div class="col-lg-9">
                    <textarea rows="5" cols="100" name="ques_desc">Enter Question Description</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3 " align="right">
                        <label for="inputEmail" class=" control-label">Question title*
                </div>
                <div class="col-lg-9">
                    <input type="text" name="ques_title" class="form-control" placeholder="Enter title">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3 " align="right">
                        <label for="inputEmail" class=" control-label">Attachment [jpg/png] :
                </div>
                <div class="col-lg-9">
                    <input type="file" name="ques_img" class="form-control" placeholder="Enter title">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3 " align="right">
                        <label for="inputEmail" class=" control-label">Question Category :
                </div>
                <div class="col-lg-9">
                    <select class="form-control" id="select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2" align="center">
                            <button type="reset" class="btn btn-danger col-lg-2">
                                Cancel</button>
                            <button type="submit" class="btn btn-primary col-lg-2">
                                Submit</button>
                        </div>
                    </div>
        </form>
</body>
</html>