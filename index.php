<?php 

require_once 'db.php';
/*
session_start();
if(!isset($_SESSION['user_login'])) {
    header("location: index.php");
}

$id = $_SESSION['user_login'];

$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id"=>$id));

$row=$stmt->fetch(PDO::FETCH_ASSOC);

*/


?>


<!DOCTYPE html>
<html>
<head>
<title>Blue Paradise</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="#90caf9 blue lighten-2" >

<nav class="nav-wrapper #29b6f6 light-blue lighten-1 z-depth-4" >
<img src="./img/back.png" height=65px; width=120px alt="">

<a href='#' class="brand-logo center">Blue Paradise </a>
<div class="right pr-5">
<a href="login.php" class="btn waves-effect  #81d4fa light-blue lighten-2 z-depth-2" name="login"> Sign in </a>
<a href="signup" class="btn waves-effect #01579b light-blue darken-4 z-depth-2" name="register"> Sign up </a>

</div>
</nav>

<div class="#bbdefb blue lighten-4">
  <img  class="back" src="./img/back.png" >


</div>

<div class="#90caf9 blue lighten-2">
<div class="container">
<div class="row center-align">

<h2 class=" slogan center-align #bbdefb  white-text "> Event Planner and Organiser </h2>
    <div class="col s12 m4">
      <div class="card  blue lighten-4">
        <div class="card-image  ">
          <img  class="img" src="img/wedding1.jpg">
        </div>
        <span class="card-title blue-text">Wedding Organising</span>
        <div class="card-content">
          <h6 class=" ">Just with few clicks organize the most beautiful day of your life</h6>
        </div>
        <div class="card-action #2196f3 blue">
          <a  class= "black-text " href="./views/weddings.php">Click for more</a>
        </div>
      </div>
    </div>


      <div class="col s12 m4">
      <div class="card  blue lighten-4 ">
        <div class="card-image">
          <img class="img" src="img/bday.jpg">
        </div>
        <span class="card-title blue-text">Birthday Parties</span>
        <div class="card-content">
          <h6>We offer different kinds of decorations for birthdays</h6>
        </div>
        <div class="card-action #2196f3 blue  ">
          <a class= "black-text"href="./views/birthdays.php">
          
          Click for more</a>
        </div>
      </div>
    </div>
  

      <div class="col s12 m4">
      <div class="card  blue lighten-4">
        <div class="card-image">
          <img class="img" src="img/catering.jpg">
        </div>
        <span class="card-title blue-text">Catering</span>
        <div class="card-content ">
          <h6>We offer catering services for all kinds of events</h6>
        </div>
        <div class="card-action #2196f3 blue" >
          <a  class= "black-text" href="./views/catering.php">Click for more</a>
        </div>
      
    </div>
  </div> 
  </div>


</div>
</div>
</body>
<footer class="page-footer  #29b6f6 light-blue lighten-1 z-depth-4 ">
           <div class="footer-copyright center-align #29b6f6 light-blue lighten-1 ">
            <div class="container">
               Copyright© 2020 Blue Paradise
            </div>
          </div>
        </footer>

</html>

<style>
.btn {
    margin-right: 25px;
}


.row {
    padding-top: 5%;
    
}

.back {
  width:75%;
  padding-top: 20px;
  height: 400px;
  padding-left: 25%;
  padding-bottom: 20px;
}

.container {
    width: 120%;
    height: 500% !important;
    
}

.img {
    height: 450px;
    padding-bottom:20px;
  
}

.card{ 
   margin-left:10%;

}

.card-title {
    font: 20px !important;
    font-weight: bold  !important;
    margin-top: 20px !important;
  
}



.slogan {
  padding-bottom: 20px !important;
  word-spacing: 25px;
  font-weight: 800;
}

.page-footer{
  margin-top: 5% !important;
}
</style>
</body>
</html>

