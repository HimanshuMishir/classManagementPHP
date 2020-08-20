<?php
include "connection.php";
include "./components/header.php";
$selectquery = " SELECT * FROM teachers ORDER BY t_name";
$selectquery1 = "SELECT * FROM teachers INNER JOIN subjects ON teachers.t_id=subjects.t_id INNER JOIN standards ON teachers.t_id=standards.t_id ORDER BY t_name";
include "./components/teachers.php";?>