<?php
require "connection.php";

$id = $_GET["id"];

if(isset($id) > 0)
    //  Query Drop Tasks
     $sqlDropTask = "DELETE FROM tasks WHERE id = $id";
     mysqli_query($conn, $sqlDropTask);
 
     // Cek Input
     if (mysqli_affected_rows($conn) > 0) {
        echo "<script> 
        document.location.href ='http://localhost/wazwez/index.php';
     </script>";
     } else {
         echo "<script> 
         alert('Drop Fail');
         </script>";
         echo "mysqli_error($conn)";
     }

?>