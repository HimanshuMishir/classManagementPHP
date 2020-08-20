<?php

include "connection.php";

$id = $_GET['id'];

$deletequery = " delete from students where s_id={$id}";

$res = mysqli_query($conn,$deletequery);

if ($res) {
    header("Location: students.php");
}else{
echo "Some error occured while deleting the data!";
}

?>