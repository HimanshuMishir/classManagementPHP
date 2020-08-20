<?php
include "connection.php";
include "./components/header.php";
$selectquery = "SELECT * FROM students";
$selectquery1 = "SELECT * FROM students INNER JOIN subjects ON students.s_id=subjects.s_id";
include "./components/students.php";