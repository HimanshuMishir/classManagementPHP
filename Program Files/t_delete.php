<?php

include "connection.php";

$id = $_GET['id'];

$deletequery = " delete from teachers where t_id={$id}";

$res = mysqli_query($conn,$deletequery);

if ($res) {
    header("Location: teachers.php");
}else{
echo "Some error occured while deleting the data!";
}

?>