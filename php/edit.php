<?php
require "connection.php";

$id = $_GET["id"];
if (isset($id) > 0)
    //  Query Select Tasks
    $value = query("SELECT * FROM tasks WHERE id = $id")[0];
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};

if (isset($_POST["submit"])) {
    $namaTugas = htmlspecialchars($_POST["nama_tugas"]);
    $deskripsi = htmlspecialchars( $_POST["deskripsi"]);
    $deadline = htmlspecialchars($_POST["deadline"]);

    // Query Insert Tasks
    $sqlUpdateTask = "UPDATE tasks SET 
    nama_tugas ='$namaTugas', 
    deskripsi = '$deskripsi',
    deadline = '$deadline'
    WHERE id = $id";
    mysqli_query($conn, $sqlUpdateTask);

    // Cek Input
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        alert('Query Success');
        document.location.href ='http://localhost/wazwez/index.php';
    </script>";
    } else {
        echo "<script> 
        alert('Query Fail');
    </script>";
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <title>The Project</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        text-align: left;
        background: #f6fbf9;
        border: 1px solid #32403b;
        border-radius: 49px;
        text-align: center;
        padding: 50px 20px;
        position: absolute;
        left: 50%;
        top: 40%;
        transform: translate(-50%, -50%);
        box-shadow: 0px 16px 90px rgba(19, 7, 52, 0.3);
    }
    .form-edit {
        padding: 2% 9%;
    }
    input {
        width: 300px;
        height: 30px;
    }
    .btn-edit {
        width: 50%;
        height: 30px;
    }
</style>

<body>
    <div class="container border col-4">
        <h1>Edit Tasks</h1>
        <form class="form-edit" action="" method="post">
            <section class="tambah-tugas d-flex">
                <img src="../asset/menu.svg" />
                <h6 class="nama-tugas created mx-2 mt-2">
                    <input type="text" name="nama_tugas" placeholder="Masukan nama tugas" value="<?= $value["nama_tugas"] ?>">
                </h6>
            </section>
            <div class="add-desc-tugas d-flex my-1">
                <img class="mb-3" src="../asset/menu.svg" />
                <p class="ms-2">
                    <input type="text" name="deskripsi" placeholder="Deskripsi Tugas (Optional)" value="<?= $value["deskripsi"] ?>">
                </p>
            </div>
            <div class="add-time-tugas d-flex">
                <img class="mb-3" src="../asset/calendar.svg" />
                <p class="ms-2">
                    <input placeholder="Tanggal & Waktu" name="deadline" type="text" onfocus="(this.type='date')" id="date" value="<?= $value["deadline"] ?>">
                </p>
            </div>
            <button name="submit" class="btn-edit btn-primary">Edit</button>
    </div>
</body>

</html>