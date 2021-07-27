<?php
session_start();
$_SESSION;
include("connection.php");
 include("funcations.php");
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>

<head>

<title>Tingkatan 4</title>

</head>
<style>
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
h1{
  color: black;
margin: auto;
background-color:  rgb(5, 119, 24, 0.637);
;
display: inline-block;
width: 100%;
}
a.Block{
color: black;
padding: 40px 20px;
background-color: rgb(52, 97, 182);
display: inline-block;
width: 150px;
margin: 10px 50px;
font-weight: bold;
text-decoration: none;

}
section{
margin: 100px 300px;

}
.UPPER{
  color: black;
display: inline-block;
margin: 0px 50px;
text-decoration: none;
font-size: 30px;
}
#Box1{
  background-color:   rgb(235, 108, 108);

 text-align: center;
}
</style>
<body>
  <h1>Tingkatan 4 
<a class = "UPPER" href="index.php">Home</a>
<a class = "UPPER" href="Jumlah_Buku.php">Jumlah Buku</a>
<a class = "UPPER" href="Peminjaman.php">Peminjaman</a>
<a class = "UPPER" href="Pemulagan.php">Pemulangan</a>
</h1>

</div>
<section>
<a id = "Box1" class="Block" href="4DINAMIK.php">4 KREATIF</a>
<a id = "Box1" class="Block" href="4EFEKTIF.php">4 EFEKTIF</a>

</section>
</body>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


</html>