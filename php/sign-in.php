<?php
require "connection.php";

if(isset($_POST["login"])){
    global $IDuser;
//mengambil id
    $username = $_POST["username"];
    $password = $_POST["password"];

    //cek username
    $cekUser = "SELECT * FROM users WHERE username = '$username';";;
    $result = mysqli_query($conn,$cekUser);

    //mengambil data user
    $row = mysqli_fetch_assoc($result);
    $IDuser = $row["id"];

//validation
  if (login($_POST)> 0) {
        echo "<script>
        document.location.href ='http://localhost/wazwez/index.php';
      </script>";
    } else {
        echo mysqli_error($conn);
    }
};

function login($data){
    global $conn;
    global $username;
    global $password;

    //cek username
    $cekUser = "SELECT * FROM users WHERE username = '$username';";;
    $result = mysqli_query($conn,$cekUser);

    //mengambil data user
    $row = mysqli_fetch_assoc($result);
    if($row){
        //mengecek password
        if(password_verify( $password , $row["password"] )){
            echo "<script>
            alert('Selamat Datang $username');
            </script>";
            return mysqli_affected_rows($conn); 
        }else{
            echo "<script>
            alert('password yang anda masukkan salah');
            </script>";
            return false;
        }
    }else{
        echo "<script>
        alert('$username blum terdaftar');
        </script>";
        return false;
    };
}


?>