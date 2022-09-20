<?php
require "connection.php";
require "sign-in.php";

// Select Nav Users
$sqlGetUsers = "SELECT u.avatar AS avatar , d.full_name AS name
FROM users u JOIN detail_users d 
ON(u.id = d.user_id) WHERE u.id = 1 ;";
$resultUser = $conn->query($sqlGetUsers);

// Select Tasks
$sqlTasksSuccess = "SELECT id, nama_tugas, deskripsi, deadline  
FROM tasks WHERE user_id = 1 AND finished = 'yes';";
$resultTasksSuccess = $conn->query($sqlTasksSuccess);

$sqlGetTasks = "SELECT id, nama_tugas, deskripsi, deadline  
FROM tasks WHERE user_id = 1 AND finished = 'no';";
$resultTasks = $conn->query($sqlGetTasks);

//Select Subtask
$sqlGetSubtasks = "SELECT t.id as id_task, s.id as id, s.nama_subtask as nama_subtask
FROM subtasks s JOIN tasks t
ON(s.id_tugas = t.id) WHERE t.user_id = 1 and t.id = 1";
$resultSubtasks = $conn->query($sqlGetSubtasks);
