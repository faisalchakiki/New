<?php
require "php/connection.php";
// Select Nav Users
$sqlGetUsers = "SELECT u.avatar AS avatar , d.full_name AS name
FROM users u JOIN detail_users d 
ON(u.id = d.user_id) WHERE u.id = 1;";
$resultUser = $conn->query($sqlGetUsers);

// Select Tasks
$sqlGetTasks = "SELECT id, nama_tugas, deskripsi, deadline  
FROM tasks WHERE user_id = 1;";
$resultTasks = $conn->query($sqlGetTasks);

?>