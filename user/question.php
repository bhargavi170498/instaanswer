<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    .f1
    {
        font-size:18px;


    }
    .c1
    {
        background-color:lightpink;
    }
    </style>
  </head>

  <body class="container">
      <?php
        include 'user_navbar.php';
      ?>
<div>
  <ul class="nav nav-tabs justify-content-end">
    <li class="nav-item">
    <a class="nav-link active" href="#">Recent Questions</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Recently Answered</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Unanswered Questions</a>
    </li>
  </ul>
<!--<ul class="nav nav-tabs justify-content-end">
<li class="nav-item">
    <a class="nav-link active" href="#">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">C</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">C++</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Java</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">PHP</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="#">VB.Net</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Angular</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Ionic</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Python</a>
  </li>
  
</ul>-->
</div>  
<div class="row"> 
<div class="list-group col-md-4">
 <a href="#" class="list-group-item list-group-item-action">C</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">C++</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">Java</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">PHP</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">VB.Net</a>
   <a href="#" class="list-group-item list-group-item-action">Angular</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">Ionic</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">Python</a>
</div>
 <div class="col-md-8">
<form method="post" action="">
<div class="card">
 <div class="card-block">
 
  <table class="table table-responsive">

  <tr>
 
    <td class="f1">Like 5<br><br>
    Ans 2
    </td> 
    <td>
 
  <a href="#" class="f1"> What is Polymorphism?</a></br></br>


<h3 class="c1">Topic</h3><input type="submit" name="ans" value="Ans" class="btn btn-primary">
  <!--<a href="ans.php" class="f1" >Ans</a>&nbsp&nbsp&nbsp&nbsp&nbsp <!--<input type="submit" name="like" value="Like" class="btn btn-primary">
  -->
  </td>
  <td align="right">
  <img src="image">
  </td>
  
  
</tr><tr>

    <td class="f1">Like 5<br><br>
    Ans 2
    </td> 
    <td>
 
  <a href="#" class="f1"> What is Polymorphism?</a></br></br>


<h3 class="c1">Topic</h3><input type="submit" name="ans" value="Ans" class="btn btn-primary">
  <!--<a href="ans.php" class="f1" >Ans</a>&nbsp&nbsp&nbsp&nbsp&nbsp <!--<input type="submit" name="like" value="Like" class="btn btn-primary">
  -->
  </td>
  <td align="right">
  <img src="image">
  </td>
  </tr><tr>
 
    <td class="f1">Like 5<br><br>
    Ans 2
    </td> 
    <td>
 
  <a href="#" class="f1"> What is Polymorphism?</a></br></br>


<h3 class="c1">Topic</h3><input type="submit" name="ans" value="Ans" class="btn btn-primary">
  <!--<a href="ans.php" class="f1" >Ans</a>&nbsp&nbsp&nbsp&nbsp&nbsp <!--<input type="submit" name="like" value="Like" class="btn btn-primary">
  -->
  </td>
  <td align="right">
  <img src="image">
  </td>
  </tr>
  </div>
  </table>

</div>
</form>
</div>
</div>
       <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>