<?php
include("connection.php");
//delete code
if(isset($_POST['delete'])){
$Nama = $_POST['delete'];
$dquery = "DELETE FROM `3dinamik` WHERE ID = ?";
$stmt = $con->prepare($dquery);
$stmt->bind_param('s',$Nama);
if ($stmt->execute()){
$_SESSION['msg'] = "Records have been deleted";
}
$stmt->close();
$con->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>