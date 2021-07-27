<?php
include("connection.php");
$NamaBuku = filter_input(INPUT_POST,'Nama_Buku');
  $Tingkatan = filter_input(INPUT_POST,'Tingkatan');
  $JudulBuku = filter_input(INPUT_POST,'Judul_Buku');
  $Harga = filter_input(INPUT_POST,'Harga');
$sql = "INSERT INTO users2 (Nama_Buku,Tingkatan,Judul_Buku,Harga) values ('$NamaBuku','$Tingkatan','$JudulBuku','$Harga')";
if ($con->query($sql)){

echo"New Record";

}else{

echo "Error:".$sql."<br>".$con->error;

}
$con->close();
?>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.8.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.8.0/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
