<?php
//memulakan sesi
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
//mencipta satu variable untuk periksa post input user name
$user_name = $_POST['user_name'];

//mencipta satu variable untuk periksa post input password
$password = $_POST['password'];
}
//kalau variable user_name dan password tidak kosong jadi memulakan code
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
//mencipta variable untuk user id
// variable user id mengunakan function randomNum untuk mencipta
    $user_id = randomNum(20);
//simpan data yang dihantar
$query ="insert into users (user_id,user_name,password) value ('$user_id','$user_name','$password')";

mysqli_query($con, $query);
//pergi ke login website
header("Location: login.php");
//berhenti
die;
}
else
{
// tulis (Please enter some valid informatian) jika tidak berjaya
echo("Please enter some valid informatian");
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
     margin: 10px 500px;
     background-color: rgba(240, 250, 104, 0.767);
     
     }
     #text{
     height: 25px;
     border-radius: 5px;
     padding: 4px;
     border: solid thin #aaa;
     }
     body{
        background-color:rgb(175, 230, 173);
background-image: url("Images/B.png");
background-position: 1000px 300px;
background-repeat: no-repeat;
background-size: 30%;
font-family: Arial, Helvetica, sans-serif;
padding: 0;
margin: 0;
background-attachment: fixed;
     }
     div.Tittle{
     padding: auto;
     font-size: 20px;
     margin: 5px;
     }
     div.Name{
     font-size: 30px;
     padding: auto;

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

     }
     a.Link{
     color: red;
     text-decoration: none;
     
     }
    </style>

 <div id="box">
    <form method="post">

 <div class="Name">E-SPBT</div>
 <div class="Name-Log">Sign-Up Page</div>
 <div class="Tittle">Email or Username</div>
 <form method="post">
 <input id = "text"type="text" name="user_name"><br><br>
 <div class="Tittle">Password</div>
 <input id = "text"type="password" name="password"><br><br>
 <input id = "button" type="submit" value="Sign Up"><br><br>
 <a class = "Link"href="login.php">Return To Log In page</a><br><br>
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