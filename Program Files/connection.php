<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "classdb";

$conn = mysqli_connect($host, $username, $password, $database);

if($conn){
    
} else{?>
    <script>
        alert("Connection failed");
    </script>
    <?php
}
?>