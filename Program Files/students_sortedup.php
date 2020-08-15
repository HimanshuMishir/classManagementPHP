<?php
include "connection.php";
include "./components/header.php";
?>


<?php
$seletquery = " select * from students ORDER BY name DESC";
$query = mysqli_query($conn, $seletquery);
$num = mysqli_num_rows($query);
if ($num > 0) {
?>
    <div class="text-center" style="align-items: center; margin:auto;">
        <button class="btn btn-outline-success my-2 my-sm-0">Total Number of sudents are <?php echo $num; ?></button>
        <div class="table table-striped table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Roll Number</th>
                        <th>Name
                            <a href="./students_sorted.php"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <a href=""><i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                        </th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Standard</th>
                        <th colspan="2">Operations</th>

                    </tr>
                </thead>
                <?php
                while ($result = mysqli_fetch_array($query)) {
                ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $result['student_id'] ?>
                            </td>
                            <td>
                                <?php echo $result['name'] ?>
                            </td>
                            <td>
                                <?php echo $result['gender'] ?>
                            </td>
                            <td>
                                <?php echo $result['email'] ?>
                            </td>
                            <td>
                                <?php echo $result['phone'] ?>
                            </td>
                            <td>
                                <?php echo $result['std'] ?>
                            </td>
                            <td>
                                <a href="./student_update.php?id=<?php echo $result['student_id'] ?>" data-toggle="tooltip" title="Update!"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a href="./student_delete.php?id=<?php echo $result['student_id'] ?>" data-toggle="tooltip" title="Delete!">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                <?php
                }
            } else {
                echo "<center><h3>Register some students.</h3></center>";
            }
                ?>
                    </tbody>
            </table>
        </div>

    </div>

    <style>
        .center {
            text-align: center;
            margin: auto;
            margin-top: 20px;
        }
    </style>
    <div class="center">
        <a href="./student_registration.php"><button class="btn btn-primary">Register Student</button></a>
    </div>
    <?php
    include "./components/bootstrapjs.php";
    ?>