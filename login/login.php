<?php
//Memulakan sesi
session_start();
//Memasukkan Connections.php untuk sambung ke database dan server 
include("connection.php");
//Memasukkan Funcations.php supaya boleh mengunakan function
include("funcations.php");

//kalau server meminta post 
//maksud melihat kalau server meminta post
if($_SERVER['REQUEST_METHOD'] == "POST" )
{
//Sesuatu dihantar
$user_name = $_POST['user_name'];
$password = $_POST['password'];
}
//kalau nama dan password tidak kosang 
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
    
//membaca daripada database, user-name limit adalah 1
$query = "select * from users where user_name = '$user_name' limit 1";
$results =mysqli_query($con, $query);
if($results)
{
     if($results && mysqli_num_rows($results) > 0)
    {
     $user_data = mysqli_fetch_assoc($results);

     if($user_data['password'] === $password)
     {
      $_SESSION['user_id'] = $user_data['user_id'];
      header("Location: index.php");
      die;
     }
    }
}
//tulis wrong username or password
echo("Wrong Username or Password");
}


?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>


</head>

<body>
    <style type="text/CSS">
     #box{
     text-align: center;
     margin: 5px 500px;
     background-color:rgb(248, 28, 157, 0.904);
     
     
     }
     #text{
     height: 25px;
     border-radius: 5px;
     padding: 4px;
     border: solid thin #aaa;
     }
     body{
     margin: 0;
     padding: 0;
     background-image: url("Images/Capture.PNG");
    
     }
     div.Tittle{
     padding: auto;
     font-size: 20px;
     margin: 5px;
     font-weight: bold;
     }
     div.Name{
     font-size: 30px;
     padding: auto;
     font-weight: bold;
     }
     #button{
     padding: 10px;
     width: 100px;
     border: solid thin #aaa;
     border-radius: 5px;
     background-color: black;
     color: yellow;
     }
     .Name-Log{
     font-size: 20px;
     font-weight: bold;
     }
    

     
    </style>

<div id="box">
    <form method="post">
 <div class="Name">E-SPBT</div>
 <div class="Name-Log">Login Page</div>
<div class="Tittle">Email or Username</div>
<form method="post">
<input id = "text"type="text" name="user_name"><br><br>
<div class="Tittle">Password</div>
<input id = "text"type="password" name="password"><br><br>
<input id = "button" type="submit" value="Login"><br><br>
<a href="signup.php">Sign-up</a><br><br>
</form>

</div>


</body>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>




</html>