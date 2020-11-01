
<?php 

require_once 'db.php';

session_start();

if(isset($_SESSION["user_login"])) {
    header("location: index.php");
}

if(isset($_REQUEST["login"])) {
  
 $username = strip_tags($_REQUEST['username']);
 $password = strip_tags($_REQUEST['password']);


 if(empty($username)) {
    echo "Please enter username";
}
else if(empty($password)) {
    echo "Please enter password";
}
else {
    try {
        $stmt =$conn->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->execute(array(":username"=>$username));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0 ) {
            if($username==$row["username"]){
                if(password_verify($password, $row["password"])) {
                    $_SESSION["user_login"] = $row["id"];
                    echo "Successful login";
                    header("refresh:2; index.php");
                }
                else {
                    echo "Wrong password";
                }
            }
            else {
                echo "Wrong username";
            }
        }
        else {
            echo "Wrong username";
        }
    }
    catch(PDOException $e) {
        $e->getMessage();
    }
}

}


?>



<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
    <h3  class="#01579b light-blue-text darken-4 ">Login</h3>
  

    <form action="login.php"   method="POST"> 
    
    
    Username: 
        <input type="text" name="username"> 

   
    Password:

        <input type="password" name="password">   
   
       <button name="login" class="btn"> Submit </button> 

    </form>
    </div>
</body>
</html>





