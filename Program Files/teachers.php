<?php
include "connection.php";
include "./components/header.php";
$seletquery = " select * from teachers";
$query = mysqli_query($conn, $seletquery);
$num = mysqli_num_rows($query);

if ($num > 0) {
?>

    <div class="text-center">
    <button class="btn btn-outline-success my-2 my-sm-0"  >Total Number of Teachers are <?php echo $num;?></button>
        <div class="table table-striped table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Teacher Id</th>
                        <th>Name 
                        <a href="./t_sorted.php"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <a href="./t_sortedup.php"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </a>
                        </th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Qualification</th>
                        <th>Experience</th>
                        <th>Standards</th>
                        <th>Subjects</th>
                        <th colspan="2">Operations</th>

                    </tr>
                </thead>
                <?php
                $tData = [];
                
                while ($teacherArr = mysqli_fetch_array($query)) {

                ?>
                    <tbody id="unsorted">
                        <tr>
                            <td>
                                <?php echo $teacherArr['t_id'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['t_name'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['gender'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['email'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['phone'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['qualification'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['experience'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['std'] ?>
                            </td>
                            <td>
                                <?php echo $teacherArr['sub'] ?>
                            </td>
                            <td>
                                <a href="./t_update.php?id=<?php echo $teacherArr['t_id'] ?>" data-toggle="tooltip" title="Update!"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a href="./t_delete.php?id=<?php echo $teacherArr['t_id'] ?>" data-toggle="tooltip" title="Delete!">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>


                   <?php
                }
                ?>

            <?php
        } else {
            echo "<center><h3>Register Some Teachers.</h3></center>";
        }
            ?>
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
        <a href="t_registration.php">
            <button class="btn btn-primary">Register Teacher</button>
        </a>
    </div>


    <?php
    include "./components/bootstrapjs.php";
    ?>