<?php
include "./connection.php";
include "./components/header.php";
if (isset($_GET['search'])) {
    $sub = $_GET['sub'];
    $substring = $sub;

    if ($sub == 'Hindi') {
        $sub = "sub1";
    } elseif ($sub == 'English') {
        $sub = "sub2";
    } elseif ($sub == 'Marathi') {
        $sub = "sub3";
    } elseif ($sub == 'Math') {
        $sub = "sub4";
    } elseif ($sub == 'Science') {
        $sub = "sub5";
    } elseif ($sub == 'Social Studies') {
        $sub = "sub6";
    }

    $searchquery = "SELECT $sub,name FROM subjects INNER JOIN students ON subjects.s_id=students.s_id WHERE $sub='$substring'";
    $searchquery1 = "SELECT $sub,t_name FROM subjects INNER JOIN teachers ON subjects.t_id=teachers.t_id WHERE $sub='$substring'";
    $res = mysqli_query($conn, $searchquery);
    $res1 = mysqli_query($conn, $searchquery1);

    $num = mysqli_num_rows($res);
    $num1 = mysqli_num_rows($res1);
    if ($num > 0 and $num1 > 0) {
?>
        <div class="text-center">
            <table class="table-striped">
                <thead>
                    <tr>
                        <td>Teacher Name</td>
                        <td>Subject</td>
                        <td colspan="<?php echo $num?>">Student Name</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($Arr1 = mysqli_fetch_array($res1)) {
                    ?>
                        <tr>
                            <td rowspan=""><?php echo $Arr1['t_name'] ?></td>
                            <td><?php echo $substring ?></td>
                        <?php
                    }
                        ?>
                        <?php
                        while ($Arr = mysqli_fetch_array($res)) {
                        ?>
                            <td><?php echo $Arr['name'] ?></td>

                        <?php
                        }
                        ?>
                        </tr>
                </tbody>
                <p>These Teachers are teaching these students</p>
            </table>
        </div>


<?php
    } else {
        echo "<center><h2>Wrong Selection!</h2></center>";
    }
}
?>