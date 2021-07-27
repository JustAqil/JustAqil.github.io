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

<title>Home</title>

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
  background-color: rgb(5, 119, 24, 0.637);
color: black;
margin: auto;

}
#Block{
color: black;
padding: 40px 10px;
display: inline-block;
width: 150px;
border-radius: 15px;
margin: 0px 15px;
text-align: center;
background-color: rgb(235, 108, 108);
font-weight: bold;
}
section{
margin: 100px 300px;

}
#Side{
margin: 10px;
color: white;

}
section.Bottom{
margin: 30px 215px;
padding: 0px;

}
#B-BLOCK{
padding: 40px 15px;
margin: 0px 10px;
display: inline-block;
color: black;
width: 105px;
height: 20px;
border-radius: 15px;
background-color: yellow;
font-weight: bold;
}
a{
text-decoration: none;

}
.LOGOUT:hover{
background-color: red;
padding: 0px, 100px
}
.NAV:hover{
background-color: blue;
padding: 0px, 100px

}


</style>
<body>
  <h1>E-SPBT 
  <a class = "LOGOUT"id = "Side"href="logout.php">Log Out</a>
  </h1>  




</div>
<section>
<a class = "JumB" id="Block" href="Jumlah_Buku.php">Jumlah Buku</a>
<a class = "PIM" id="Block" href="Peminjaman.php">Peminjaman</a>
<a class = "PUM" id="Block" href="Pemulangan.php">Pemulangan</a>
</section>
<section class="Bottom">
<a class = "Ting1" id="B-BLOCK" href="Tingkatan1.php">Tingkatan 1</a>
<a class = "Ting2" id="B-BLOCK" href="Tingkatan2.php">Tingkatan 2</a>
<a class = "Ting3" id="B-BLOCK" href="Tingkatan3.php">Tingkatan 3</a>
<a class = "Ting4" id="B-BLOCK" href="Tingkatan4.php">Tingkatan 4</a>
<a class = "Ting5" id="B-BLOCK" href="Tingkatan5.php">Tingkatan 5</a>
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