<?php
require "connection.php";

if (isset($_POST["submit"])) {
    $namaTugas = htmlspecialchars($_POST["nama_tugas"]);
    $deskripsi = htmlspecialchars( $_POST["deskripsi"]);
    $deadline = htmlspecialchars($_POST["deadline"]);
    $userId = 1;

    // Query Insert Tasks
    $sqlInsertTask = "INSERT INTO tasks ( user_id,nama_tugas, deskripsi, deadline)
    VALUES ( '$userId','$namaTugas','$deskripsi','$deadline')";
    mysqli_query($conn, $sqlInsertTask);

    // Cek Input
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> 
        alert('Query Success');
        document.location.href ='index.php';
    </script>";
    } else {
        echo "<script> 
        alert('Query Fail');
        document.location.href ='index.php';
    </script>";
        echo "mysqli_error($conn)";
    }
}
