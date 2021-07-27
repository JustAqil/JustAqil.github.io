<!DOCTYPE html>
<html>
<head>
<title>1 Dinamik</title>
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
header{
color: white;
margin: auto;
background-color: darkblue;
display: inline-block;
width: 100%;
}
a{
color: white;
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
background-color:rgb(16, 192, 16);
color: white;
height: 80px;
width: 150px;
margin: 0px 5px;

}
th{
margin: auto;
color: white;
background-color: darkblue;

}
table{
color: white;

}
tr{
margin: 0px 200px;
text-align: center;

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
<h1 class="Upper">1Dinamik</h1>
<a href="index.php">Home</a>
<a href="Jumlah_Buku.php">Jumlah Buku</a>
<a href="Peminjaman.php">Peminjaman</a>
<a href="Pemulagan.php">Pemulangan</a>



</header>


</div>
<?php
?>
<?php
session_start();

$KelasQ = $_POST['SearchKelas'];
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
$NamaQ = $_POST['SearchNama'];

$KelasQ = $_POST['SearchKelas'];
$query = "SELECT * FROM $KelasQ WHERE CONCAT (`ID`, `Nama`, `Kelas`) LIKE''%".$NamaQ."%";
$S_Result = FliterTable($query);

}else{
  $query = "SELECT * FROM $KelasQ";
  $S_Result = FliterTable($query);
}
function FliterTable($query){
  include("connection.php");
  $F_Results = mysqli_query($con,$query);
  return $F_Results;

}

?>
    <form action = "Search.php" method="post">
      <H1>Search</H1>
    <section class = "box">
    <h1>Nama </h1>
    <input id="text" type="text" name="SearchNama" placeholder="Cari Nama"><br><br>
    <h1>Kelas</h1>
    <input id="text" type="text" name="SearchKelas" placeholder="Cari Kelas"><br><br>
    <input id="button" type="submit" value="Search"><br><br>
    </form>
    </section>
  </div>
</div>
<table>
<thead>
<tr>
<th>Nama Murid</th>
<th>Kelas</th>
<th>Buku</th>
<th>Status Buku</th>
<th>Status</th>
<th>Harga</th>
<?php while($row = mysqli_fetch_array($S_Result)): ?>
<tr>
<td><?php echo $row['Nama']; ?></td>
<td><?php echo $row['Kelas']; ?></td>
</tr>
<?php endwhile; ?>
</tr>
</thead>
</table>

</body>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

</html>