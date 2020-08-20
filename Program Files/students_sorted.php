<?php
include "connection.php";
include "./components/header.php";
$selectquery = " SELECT * FROM students ORDER BY name";
$selectquery1 = "SELECT * FROM students INNER JOIN subjects ON students.s_id=subjects.s_id ORDER BY name";
include "./components/students.php";
?>