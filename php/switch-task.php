<?php
     //Mengecek apakah ada nilai yang dikirim dari form
    if (isset($_POST['test'])) {
        $task = $_POST['test'];
		echo "<br>";
        for ($i=0; $i < count($task) ; $i++){
            $sqlEditTask = "UPDATE tasks SET finished = 'yes' WHERE nama_tugas = '$task[$i]'";
            mysqli_query($conn, $sqlEditTask); 
            echo "<script> 
            document.location.href ='http://localhost/wazwez/index.php';
            </script>";
        }
    }

  ?>