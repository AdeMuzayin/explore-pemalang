<?php
  $host ="localhost";
  $user ="id8531296_explorepemalang";
  $pass ="explorepemalang";
  $db ="id8531296_kerjaproyek";
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
  header("location:shopping.html");

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $komentar = $_POST['alamat'];
  $waktu = $_POST['komentar'];

 
  $mysqli = "INSERT INTO komentar_shopping VALUES ('$nama', '$email', 'alamat', '$komentar')";
  $result = mysqli_query($conn, $mysqli);
  echo "Input berhasil";
  mysqli_close($conn);
  ?>