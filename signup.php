<?php 
require_once "db.php";

if(isset($_REQUEST['register'])) {

 $username = strip_tags($_REQUEST['username']);
 $email = strip_tags($_REQUEST['email']);
 $password = strip_tags($_REQUEST['password']);

 if(empty($username)) {
     echo "Please enter username";
 }
 else if(empty($email)) {
     echo "Please enter email";
 }
 else if(empty($password)) {
     echo "Please enter password";
 }
 else if(strlen($password) < 8) {
     echo "The password must be at least 8 characters long";
 } else
 {
     try {
         $stmt=$conn->prepare("SELECT username, email FROM users WHERE username=:username OR email=:email");
         $stmt->execute(array(':username'=>$username, ':email'=>$email));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);

         if($row["username"]==$username) {
             echo "Username already exists";
         }
         else if($row["email"]==$email) {
             echo "Email exists";
         }
         else {
             $new_pass = password_hash($password, PASSWORD_DEFAULT);
             $insert_stmt=$conn->prepare("INSERT INTO users (username,email,password) VALUES (:username,:email,:password)");
             if($insert_stmt->execute(array (':username'=>$username,
             
                                              ':email'=>$email,
                                              ':password'=>$new_pass))){
        echo "Registered succesfully";  
                                              }
         }
     }
     catch(PDOException $e) {
         echo $e->getMessage();
     }
 }

}




?>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container ">
    <h4 class="#01579b light-blue-text darken-4 ">Registration Form</h4>
  

    <form action="signup.php"   method="GET"> 
    
    
    Username: 
        <input type="text" name="username"> 

    Email:
        <input type="email" name="email">    
    Password:

        <input type="password" name="password">   
     Re-enter Password:

        <input type="password" name="Confpassword">  

       <button  name="register" class="btn"> Submit </button> 

    </form>
    </div>
</body>
</html>



