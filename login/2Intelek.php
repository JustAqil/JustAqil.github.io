<!DOCTYPE html>
<html>
<head>
<title>2 INTELEK</title>
</head>

<style>
body{
  background-color:rgb(175, 230, 173);

background-position: 1000px 300px;
background-repeat: no-repeat;
background-size: 30%;
font-family: Arial, Helvetica, sans-serif;
padding: 0;
margin: 0;
background-attachment: fixed; 
}
header{
color: black;
font-weight: bold;
margin: auto;
background-color: rgb(5, 119, 24, 0.637);
display: inline-block;
width: 100%;
}
a{
color: black;
display: inline-block;
margin: 0px 50px;
text-decoration: none;
font-size: 30px;
}
h1{
display: inline-block;
margin: auto;

}
.modal{
display: none;
position: fixed;
z-index: 0;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgb(0,0,0);
background-color: rgba(0,0,0,0.4);

}
.modal-content{
margin: 10% auto;
padding: 10px;
border: 1px solid #888;
width: 80%;
background-color: white;
}
.close{
color:#aaa;
float: right;
font-size: 28px;
font-weight: bold;
}
.close:hover
.close:focus{
color: black;
text-decoration: none;
cursor: pointer;
}
section.box{
    text-align: center;
     margin: 20px 100px;
     
}
#text{
margin: 30px 60px;
border: solid thin #aaa;
height: 25px;
     border-radius: 5px;
}
.But{
border: none;
border-radius: 5px;
background-color:rgb(243, 240, 35, 0.904);
font-weight: bold;
color: black;
height: 80px;
width: 150px;
margin: 0px 5px;

}
th{
margin: auto;
color: black;
background-color: rgb(5, 119, 24, 0.637);

}
table{
color: black;

}
tr{
margin: 0px 200px;
font-weight: bold;

}
.ButDel{
background-color: red;
color: white;
border: none;
width: 100px;
height: 30px;
border-radius: 5px;
}
.ButDel:hover{
background-color: rgb(185, 23, 23);


}
.But:hover{
background-color: greenyellow;

}
</style>

<body>
<header>
<h1 class="Upper">2 INTELEK</h1>
<a href="index.php">Home</a>
<a href="Jumlah_Buku.php">Jumlah Buku</a>
<a href="Peminjaman.php">Peminjaman</a>
<a href="Pemulagan.php">Pemulangan</a>



</header>


</div>
<?php
session_start();
include("funcations.php");
include("connection.php");
$ID = randomNum(20);
if($_SERVER['REQUEST_METHOD'] == "POST" )
{
$NamaBuku = filter_input(INPUT_POST,'Nama');
  $Kelas = filter_input(INPUT_POST,'Kelas');
}
if (!empty($NamaBuku) && !empty($NamaBuku))
{
$sql = "INSERT INTO 2intelek (ID,Nama,Kelas) values ('$ID','$NamaBuku','$Kelas')";
if ($con->query($sql)){



}else{

echo "Error:".$sql."<br>".$con->error;
}
}
?>

<button class = "But" id="Btn">MURID BARU</button>


<div id="BookModal" class="modal">

  <div class="modal-content">

    <span class="close">&times;</span>

  
    <section class = "box">
    <h1>Nama Murid</h1>
    <form method="post">
    <input id="text" type="text" name="Nama"><br><br>
    <h1>Kelas</h1>
    <input id="text" type="text" name="Kelas"><br><br>
    <input id="button" type="submit" value="ADD"><br><br>
    </form>
    </section>
  </div>
</div>

<table>
  <thead>
        <tr>
<th>Nama Murid</th>
<th>Kelas</th>
<th>Delete</th>
          </tr>
         </thead>
         <tbody>
<form action="delete,2I.php" method="POST">
<?php

$sQuery = "SELECT ID,Nama,Kelas from 2intelek";
$result = $con->query($sQuery);
while ($row = $result ->fetch_assoc()): ?>
<tr>
  <td><?= $row['Nama'];?></td>
  <td><?= $row['Kelas'];?></td>
  <td style="width: 1%"> 
  <button type="submit" name="delete" value="<?= $row['ID']; ?>" class ="ButDel">Delete </button>
 </td>
 </tbody>
 </tr>
<?php endwhile; ?>



         </tbody>
    </table>

</form>
</table>
<script>


var modal = document.getElementById("BookModal");


var btn = document.getElementById("Btn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

</html>