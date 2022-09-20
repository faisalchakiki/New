<?php
require "connection.php";

function registerr($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username
    $cekUser = "SELECT username FROM users WHERE username = '$username';";;
    $result = mysqli_query($conn,$cekUser);
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('Username sudah terdaftar')
        </script>";
        return false;
    };
    
    //mengacak password
    $password = password_hash($password , PASSWORD_DEFAULT);

    // query
    $sqlInsertUsers= "INSERT INTO users ( username , password )
    VALUES ('$username','$password')";
    mysqli_query($conn, $sqlInsertUsers);

    return mysqli_affected_rows($conn); 
}
if(isset($_POST["register"])){
  if (registerr($_POST)> 0) {
        echo "<script>
        alert('Username terdaftar')
        document.location.href ='login.php';
      </script>";
    } else {
        echo mysqli_error($conn);
    }
};

?>