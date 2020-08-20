<?php
include "./connection.php";
include "./components/header.php";
if (isset($_GET['filter'])) {
    $std = $_GET['std'];
    $sub = $_GET['sub'];



    if ($std == '1') {
        $std = "s1";
    } elseif ($std == '2') {
        $std = "s2";
    } elseif ($std == '3') {
        $std = "s3";
    } elseif ($std == '4') {
        $std = "s4";
    } elseif ($std == '5') {
        $std = "s5";
    } elseif ($std == '6') {
        $std = "s6";
    } elseif ($std == '7') {
        $std = "s7";
    } elseif ($std == '8') {
        $std = "s8";
    } elseif ($std == '9') {
        $std = "s9";
    } elseif ($std == '10') {
        $std = "s10";
    } elseif ($std == '11') {
        $std = "s11";
    } elseif ($std == '12') {
        $std = "s12";
    }



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

    $selectquery = "SELECT t_name,phone,$sub,$std FROM teachers INNER JOIN subjects ON teachers.t_id=subjects.t_id INNER JOIN standards ON teachers.t_id=standards.t_id";
    $query = mysqli_query($conn, $selectquery);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
?>
        <div class="table table-striped table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Phone Number</th>
                        <th>Standard</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <?php
                while ($FilteredArr = mysqli_fetch_array($query)) {
                ?>
                    <tbody>
                        <td>
                            <?php echo $FilteredArr['t_name'] ?>
                        </td>
                        <td>
                            <?php echo $FilteredArr['phone'] ?>
                        </td>
                        <td>
                            <?php echo $FilteredArr[$std] ?>
                        </td>
                        <td>
                            <?php echo $FilteredArr[$sub] ?>
                        </td>
                    </tbody>
        <?php
                }
            } else {
                echo mysqli_error($query);
            }
        }
        ?>