<?php
include "./components/header.php";
include "./connection.php";

if(isset($_GET['tSearch'])){
    $t_name = $_GET['t_name'];

    $searchquery = "SELECT t_id from teachers where t_name='$t_name' ";
    $res = mysqli_query($conn, $searchquery);
    $num = mysqli_num_rows($res);
    
    if($num==1){

        while($tid = mysqli_fetch_array($res)){

            $idd = $tid[0];
            $selectquery = "SELECT * from subjects where t_id=$idd";
            
            $res1 = mysqli_query($conn, $selectquery);
            
            while ($subs = mysqli_fetch_array($res1)) {
                echo $subs['sub1']. "<br>";
                echo $subs['sub2']. "<br>";
                echo $subs['sub3']. "<br>";
                echo $subs['sub4']. "<br>";
                echo $subs['sub5']. "<br>";
                echo $subs['sub6']. "<br>";

            }
        break;
        }

    }else {
        echo "You might have duplicate teacher name or not found!";
    }
}