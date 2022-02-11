<?php
  $host ="localhost";
  $user ="root";
  $pass ="";
  $db ="id8531296_kerjaproyek";
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
  header("location:home.html");

  $email = $_POST['email'];
  $pesan = $_POST['pesan'];
 
  $mysqli = "INSERT INTO buku_tamu VALUES ('$email', '$pesan')";
  $result = mysqli_query($conn, $mysqli);
  echo "Input berhasil";
  mysqli_close($conn);
  ?>