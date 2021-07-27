<?php

function check_login($con)
{

if (isset($_SESSION['user_id']))
{



    $id = $_SESSION['user_id'];
    $query = "select * from users where user_id = '$id' limit 1";

    $results = mysqli_query($con,$query);
    if($results && mysqli_num_rows($results) > 0)
 {
  $user_data = mysqli_fetch_assoc($results);
  return $user_data;

 }
}
//redirect to login
header("Location: login.php");
die;
}
function randomNum($length)
{
 $text = "";

 if($length < 5)
 {
   $length = 5;

 }
 $len = rand(4,$length);
 
 for ($i=0; $i < $len; $i++){

    $text .=rand(0,9);
 }
return $text;
function filterTable($query)
{
   include("connection.php");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
}
?>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>