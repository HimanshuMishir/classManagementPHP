<?php
include "connection.php";
include "./components/header.php";
$selectquery = " SELECT * FROM students ORDER BY name DESC";
$selectquery1 = "SELECT * FROM students INNER JOIN subjects ON students.s_id=subjects.s_id ORDER BY name DESC";
include "./components/students.php";
?>
