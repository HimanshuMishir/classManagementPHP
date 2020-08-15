<?php
include "./components/header.php";

if (isset($_POST['tSearch'])) {

    include "connection.php";

    $tName = $_POST['tName'];

    $searchquery = " select students.name, teachers.name, teachers.std, teachers.sub from students INNER JOIN teachers ON students.std=teachers.std ";

    $query = mysqli_query($conn, $searchquery);
    if ($query) {
        while ($res = mysqli_fetch_array($query)) {
            echo $res['sub'];
        }
        /*  $a = $res.'students'.'name';
                echo "$a";*/
    } else {
?>
        <script>
            alert("Error! Not found");
        </script>
<?php
    }
}
?>