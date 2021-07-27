<!DOCTYPE html>
<html>
<head>
<title>Peminjaman</title>
</head>

<style>
  .Upper{
    font-weight: bold;
    font-size: 150%;
  }
  .SBAR{
    width: 15%;
  }
body{
background-color:rgb(175, 230, 173);
font-family: Arial, Helvetica, sans-serif;
padding: 0;
margin: 0;
background-attachment: fixed; 
}
header{
color: black;
margin: auto;
background-color:rgb(5, 119, 24, 0.637);
display: inline-block;
width: 100%;
}
a{
color: black;
display: inline-block;
margin: 0px 71px;
text-decoration: none;
font-size: 30px;
}
h1{
display: inline-block;
margin: auto;
color: black;
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
     margin: 10px 50px;
     
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
<h1 class="Upper">Peminjaman</h1>
<a class="Upper" href="Pemulangan.php">Pemulangan</a>
<a class="Upper" href="index.php">Home</a>
<a class="Upper" href="Jumlah_Buku.php">Jumlah Buku</a>


</header>


</div>
<?php
session_start();
include("funcations.php");
include("connection.php");
$ID = randomNum(20);
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `peminjaman` WHERE CONCAT(`ID`, `Nama`, `Kelas`, `Status`, `JudulBuku`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `peminjaman`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
   include("connection.php");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
if($_SERVER['REQUEST_METHOD'] == "POST" )
{
$NamaBuku = filter_input(INPUT_POST,'Nama');
  $Kelas = filter_input(INPUT_POST,'Kelas');
  $JudB = filter_input(INPUT_POST,'JudulBuku');
  $Stat = filter_input(INPUT_POST,'Status');
}
if (!empty($NamaBuku) && !empty($Kelas) )
{
header("Peminjaman.php");
  $sql = "INSERT INTO `peminjaman`(`ID`, `Nama`, `Kelas`, `Status`, `JudulBuku`) VALUES ('$ID','$NamaBuku','$Kelas','$JudB','$Stat')";
if ($con->query($sql)){



}else{

echo "Error:".$sql."<br>".$con->error;
}
}
?>

<form action ="Peminjaman.php" method="post">
 <input class = "SBAR" type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
 <input type="submit" name="search" value="Search"><br><br>
</form>
<button class = "But" id="Btn">BUKU BARU</button>


<div id="BookModal" class="modal">

  <div class="modal-content">

    <span class="close">&times;</span>

  
    <section class = "box">
    <h1>Nama Murid</h1>
    <form method="post">
    <input id="text" type="text" name="Nama"><br><br>
    <h1>Kelas</h1>
    <input id="text" type="text" name="Kelas"><br><br>
    Buku
    <input id="text" type="text" name="Status"><br><br>
    Status
    <input id="text" type="text" name="JudulBuku"><br><br>
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
<th>Buku</th>
<th>Status</th>
<th>Delete</th>
          </tr>
         </thead>
         <tbody>
<form action="delete,Pim.php" method="POST">
<?php

while($row = mysqli_fetch_array($search_result)):?>
<tr>
  <td><?= $row['Nama'];?></td>
  <td><?= $row['Kelas']; ?></td>
  <td><?= $row['Status']; ?></td>
  <td><?= $row['JudulBuku']; ?></td>
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