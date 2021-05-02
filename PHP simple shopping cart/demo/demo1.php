<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="ffd.css">
  <title></title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">

<form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">@</span>
      </div> 
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
  <h4> freefromdoubt </h4>

</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2"  type="search" placeholder="what are u looking for?" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0 active" type="submit">Search</button>
     &nbsp;
     &nbsp;
     &nbsp;
     &nbsp;
     &nbsp;
     &nbsp;

       <a class="navbar-brand" href="file:///E:/freedomfromdoubt.html"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>

<a href="finalcart.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Your Cart</a>


  </form>
</nav>
<h5 text-allign:center>‘a relationship built on mutual trust and respect’</h5>    

<h3> Perfume </h3>
<br>
<form action="welcome1.php" type="get">


      <div class = "box">

         <img src = "davidoffmen.jpg">
<h4 class="pak">Add to Cart  <i class="fa fa-arrow-down" aria-hidden="true"></i>
</h4> 

<input type = "submit" value="PID1" name="PID1" class="btnaddaction btn btn-info">

        <p> DAVIDOFF<br>
Cool Water Eau de Toilette 
125 ml for Men <br>
₹3,450 </p>
<p class="pstar"> <i class="fa fa-heart fa-2x" aria-hidden="true"></i> 90 </p>
      </div>

</form>

<form action="welcome1.php" type="get">

  <div class = "box">
         <img src = "davidoffwomen.jpg">
<h4 class="pak">Add to Cart <i class="fa fa-arrow-down" aria-hidden="true"></i>
</h4> 
        <input type = "submit" value="PID2" name="PID2" class="btnaddaction btn  btn-info">
         <p> DAVIDOFF <br>
Cool Water Eau de Toilette 100 ml for Women <br>
₹3,840</p>
<p class="pstar"> <i class="fa fa-heart fa-2x" aria-hidden="true"></i> 80 </p>

      </div>

    </form>
<form action="welcome1.php" type="get">

       <div class = "box">
<img src="perfume.jpg">

<h4 class="pak">Add to Cart <i class="fa fa-arrow-down" aria-hidden="true"></i>
</h4> 
<input type = "submit" value="PID3" name="PID3" class="btnaddaction btn btn-info">

        <p> JAGUAR <br>
Classic Black Eau de Toilette 100 ml for Men <br>
₹1,980
</p>
<p class="pstar"> <i class="fa fa-heart fa-2x" aria-hidden="true"></i> 85 </p>
      </div>
</form>







<?php
if(!isset($_SESSION['PHPSESSID'])){
session_start();

$PID3='0';
$_SESSION['PID3']=$PID3;
}
?>

<?php
$PID2='0';
$_SESSION['PID2']=$PID2;

?>

<?php
$PID1='0';
$_SESSION['PID1']=$PID1;
?>





</body>
</html>