<?php
require "../php/registrasi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- link style -->
    <link rel="stylesheet" href="register.css" />

    <title>Wazwez App</title>
  </head>

  <body>
    <div class="container col-4">
      <form action="" method="post">
        <h1>Create An Account</h1>
        <p class="col-10 m-auto">Create an account to enjoy all services on Wazwez Note!</p>
        <div class="input col-10 mx-auto mt-3">
            <input type="text" class="form-control" name="username" required placeholder="Username">
        </div>
        <div class="input col-10 mx-auto my-2">
            <input type="password" class="form-control" name="password" required placeholder="Password">
        </div>
        <div class="col-12 mb-1">
            <button class="btn btn-primary col-6" type="submit" name="register">Create Account</button>
        </div>
        <p>Already Have An Account?<a href="login.php">Sign In</a></p>
      </form>
    </div>
  </body>
</html>