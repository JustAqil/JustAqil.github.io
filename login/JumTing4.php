<!DOCTYPE html>
<html>
<head>
<title>Buku Tingkatan 4</title>
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
margin: auto;
background-color: rgb(5, 119, 24, 0.637);
display: inline-block;
width: 100%;
}
a{
color: black;
font-weight: bold;
display: inline-block;
margin: 0px 71px;
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
color: black;
font-weight: bold;
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
font-weight: bold;
}
tr{
margin: 0px 200px;


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
<h1 class="Upper">Buku Tingkatan 4</h1>
<a href="index.php">Home</a>
<a href="Peminjaman.php">Peminjaman</a>
<a href="Pemulangan.php">Pemulangan</a>


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
  $JudulB = filter_input(INPUT_POST,'Judul_Buku');
  $Harga = filter_input(INPUT_POST,'Harga');
 
}
if (!empty($NamaBuku) && !empty($NamaBuku))
{
$sql = "INSERT INTO `jumlah_bukuting4`(`ID`, `Nama`, `Tingkatan`, `Judul_Buku`, `Harga`) values ('$ID','$NamaBuku','$Kelas','$JudulB','$Harga')";
if ($con->query($sql)){



}else{

echo "Error:".$sql."<br>".$con->error;
}
}
?>

<button class = "But" id="Btn">BUKU BARU</button>


<div id="BookModal" class="modal">

  <div class="modal-content">

    <span class="close">&times;</span>

  
    <section class = "box">
    <h1>Nama Buku</h1>
    <form method="post">
    <input id="text" type="text" name="Nama"><br><br>
    <h1>Kelas</h1>
    <input id="text" type="text" name="Kelas"><br><br>
    Judul Buku
    <input id="text" type="text" name="Judul_Buku"><br><br>
    Harga
    <input id="text" type="text" name="Harga"><br><br>
    <input id="button" type="submit" value="ADD"><br><br>
    </form>
    </section>
  </div>
</div>

<table>
  <thead>
        <tr>
<th>Nama Buku</th>
<th>Tingkatan</th>
<th>Judul Buku</th>
<th>Harga</th>
<th>Delete</th>
          </tr>
         </thead>
         <tbody>
<form action="deleteTingg4.php" method="POST">
<?php

$sQuery = "SELECT `ID`, `Nama`, `Tingkatan`, `Judul_Buku`, `Harga` FROM `jumlah_bukuting4`";
$result = $con->query($sQuery);
while ($row = $result ->fetch_assoc()): ?>
<tr>
  <td><?= $row['Nama'];?></td>
  <td><?= $row['Tingkatan'];?></td>
  <td><?= $row['Judul_Buku']; ?></td>
  <td><?= $row['Harga']; ?></td>
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