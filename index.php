<?php 
require_once 'db.php';

session_start();
if(!isset($_SESSION['user_login'])) {
    header("location: index.php");
}

$id = $_SESSION['user_login'];

$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(array(":id"=>$id));

$row=$stmt->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html>
<head>
<title>Blue Paradise</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="#90caf9 blue lighten-2" >

<nav class="nav-wrapper #29b6f6 light-blue lighten-1 z-depth-4" >
<img src="./img/back.png" height=65px; width=110px alt="">

<a href='#' class="brand-logo center">Blue Paradise </a>
<div class="right pr-5">
<a href="#" class="btn waves-effect  #81d4fa light-blue lighten-2 z-depth-2" name="sign-in"> Sign in </a>
<a href="#" class="btn waves-effect #01579b light-blue darken-4 z-depth-2" name="sign-up"> Sign up </a>

</div>
</nav>

<div class="#bbdefb blue lighten-4">
  <img  class="back" src="./img/back.png" >
</div>

<div class="#90caf9 blue lighten-2">
<div class="container">
<div class="row center-align">
    <div class="col s12 m4">
      <div class="card #fce4ec pink lighten-5 ">
        <div class="card-image  ">
          <img  class="img" src="img/wedding1.jpg">
        </div>
        <span class="card-title blue-text">Wedding Organizing</span>
        <div class="card-content">
          <p>Just with few clicks organize the most beautiful day of your life.</p>
        </div>
        <div class="card-action #2196f3 blue">
          <a  class= "black-text" href="#">Click for more</a>
        </div>
      </div>
    </div>


      <div class="col s12 m4">
      <div class="card #fce4ec pink lighten-5 ">
        <div class="card-image">
          <img class="img" src="img/bday.jpg">
        </div>
        <span class="card-title blue-text">Birthday Parties</span>
        <div class="card-content">
          <p>We offer different kinds of decorations for birthdays.</p>
        </div>
        <div class="card-action #2196f3 blue  ">
          <a class= "black-text"href="#">
          
          Click for more</a>
        </div>
      </div>
    </div>
  

      <div class="col s12 m4">
      <div class="card  #fce4ec pink lighten-5">
        <div class="card-image">
          <img class="img" src="img/catering1.jpg">
        </div>
        <span class="card-title blue-text">Catering</span>
        <div class="card-content ">
          <p>We offer catering for all kinds of events, from ... to ....</p>
        </div>
        <div class="card-action #2196f3 blue" >
          <a  class= "black-text" href="#">Click for more</a>
        </div>
      
    </div>
  </div> 
  </div>


</div>
</div>
</body>
</html>

<style>
.btn {
    margin-right: 25px;
}


.row {
    padding-top: 2%;
    
}

.back {
  width:75%;
  padding-top: 20px;
  height: 400px;
  padding-left: 25%;
  padding-bottom: 2%;
}

.container {
    width: 100%;
    height: 500% !important;
}

.img {
    height: 450px;
  
}

.card{ 
   margin-left:10%;
}

.card-title {
    font: 20px !important;
    font-weight: bold  !important;
  
}

.card-content {
    font-weight: italic !important;
}

</style>
</body>
</html>

